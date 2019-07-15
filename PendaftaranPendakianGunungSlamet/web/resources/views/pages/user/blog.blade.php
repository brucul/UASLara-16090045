<div class="container">
  <div class="row">
    <h2 class="title text-center"><span class="deco">Blog</span></h2>
    <div class="test-sec">
      @foreach($blogs as $blog)
      <div class="col-sm-4">
        <blockquote>
          <img class="img-blog" width="50%" src="{{ asset('public/images/post') }}/{{$blog->image}}">
          <p>&nbsp;</p>
          <p>{{$blog->judul}}</p>
        </blockquote>
        <div class="carousel-info">
          <div class="pull-left"> 
            <span class="testimonials-name">{{$blog->judul}}</span>
            <a href="{{ url('post') }}/{{$blog->id}}"><button class="btn btn-info">Read More ..</button></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>