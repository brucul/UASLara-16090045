<div class="container">
    <h2 class="title text-center"><span class="deco">Galeri</span></h2>
    <div class="row el-element-overlay">
        @foreach($galleries as $galeri)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="{{ URL::to('/public/images/galeri') }}/{{ $galeri->image }}"/>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ URL::to('/public/images/galeri') }}/{{ $galeri->image }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>