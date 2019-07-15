<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.add-post');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        if (Blog::all()->count() < 1) {
            return view('pages.admin.add-post');
        } else {
            $blog = Blog::all();
            return view('pages.admin.post', ['blogs' => $blog]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'konten'    => 'required|min:10',
            'judul'     => 'required|min:5',
            'image'     => 'required|image|max:2048',
        );

        //validasi
        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        //image post
        $thumbnail = $request->file('image');
        $new_name = rand() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('images/post'), $new_name);

        //konten
        $konten=$request->input('konten');

        $dom = new \domdocument();
        $dom->loadHtml($konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
 
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path('/images/post/') . $image_name;
            $path2 = 'web/post/public/images/post/'. $image_name;
 
            file_put_contents($path, $data);
            file_put_contents($path2, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', '../public/images/post/'.$image_name);
        }

        $form_data = array(
            'judul' =>  $request->judul,
            'image' =>  $new_name,
            'konten' =>  $dom->saveHTML()
        );

        Blog::create($form_data);

        return redirect()->route('post-list')->with('success','Posted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('pages.user.post', ['blogs' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.edit-post', ['blogs' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $rules = array(
                'konten'    => 'required',
                'judul'     => 'required',
                'image'     => 'image|max:2048'
            );

            $error = Validator::make($request->all(), $rules);
            if($error->fails()){
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/galeri'), $image_name);

            $konten=$request->input('konten');

            $dom = new \domdocument();
            $dom->loadHtml($konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getelementsbytagname('img');
     
            //loop over img elements, decode their base64 src and save them to public folder,
            //and then replace base64 src with stored image URL.
            foreach($images as $k => $img){
                $data = $img->getattribute('src');
     
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
     
                $data = base64_decode($data);
                $image_name= time().$k.'.png';
                $path = public_path('/images/post/') . $image_name;
                $path2 = 'web/post/public/images/post/'. $image_name;
     
                file_put_contents($path, $data);
                file_put_contents($path2, $data);

                $img->removeattribute('src');
                $img->setattribute('src', '../public/images/post/'.$image_name);
            }

            $form_data = array(
                'judul' => $request->judul,
                'konten' => $dom->saveHTML(),
                'image' => $image_name

            );

            Blog::whereId($request->hidden_id)->update($form_data);

            return redirect()->route('post-list')->with('success','Updated successfully!');
        } else if ($image == ''){
            $rules = array(
                'konten'    => 'required',
                'judul'     => 'required',
            );

            $error = Validator::make($request->all(), $rules);
            if($error->fails()){
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $konten=$request->input('konten');

            $dom = new \domdocument();
            $dom->loadHtml($konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getelementsbytagname('img');
     
            //loop over img elements, decode their base64 src and save them to public folder,
            //and then replace base64 src with stored image URL.
            foreach($images as $k => $img){
                $data = $img->getattribute('src');
     
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
     
                $data = base64_decode($data);
                $image_name= time().$k.'.png';
                $path = public_path('/images/post/') . $image_name;
                $path2 = 'web/post/public/images/post/'. $image_name;
     
                file_put_contents($path, $data);
                file_put_contents($path2, $data);

                $img->removeattribute('src');
                $img->setattribute('src', '../public/images/post/'.$image_name);
            }

            $form_data = array(
                'judul' => $request->judul,
                'konten' => $dom->saveHTML(),
                'image' => $request->hidden_image

            );

            Blog::whereId($request->hidden_id)->update($form_data);

            return redirect()->route('post-list')->with('success','Updated successfully!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();
        return redirect()->route('post-list')->with('success','Deleted successfully!');
    }
}
