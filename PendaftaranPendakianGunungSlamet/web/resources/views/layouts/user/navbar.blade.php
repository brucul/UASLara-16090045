<header id="main-header">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>
      <div class="nb borderXwidth pull-right" style="margin-top: 10px">
        <div class="collapse navbar-collapse" id="lauraMenu">
          <ul class="nav navbar-nav navbar-right navbar-border">
            <li class="active"><a href="#main-header">Home</a></li>
            <li><a href="#daftar">Daftar</a></li>
            <li><a href="#aturan">Peraturan</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#sejarah">Sejarah</a></li>
            <li>
              <form action="{{route('search-kode')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="kode" placeholder=" Cari kode pendakian" style="background-color: transparent; height: 35px; border-radius: 5px; border: solid 3px; border-color: white;">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
