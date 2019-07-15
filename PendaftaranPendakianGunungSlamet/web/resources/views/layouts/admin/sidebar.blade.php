<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Jadwal </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/jadwal') }}" class="sidebar-link"><i class="fa fa-calendar-alt"></i><span class="hide-menu"> Jadwal Pendakian </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/kuota') }}" class="sidebar-link"><i class="fa fa-chart-pie"></i><span class="hide-menu"> Kuota Pendakian </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blogger"></i><span class="hide-menu">Blog </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/add-post') }}" class="sidebar-link"><i class="fa fa-plus-circle"></i><span class="hide-menu"> Tambah Post </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/post') }}" class="sidebar-link"><i class="fa fa-check-circle"></i><span class="hide-menu"> Post </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/galeri') }}" aria-expanded="false"><i class="fa fa-images"></i><span class="hide-menu">Galeri</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/aturan') }}" aria-expanded="false"><i class="fa fa-exclamation-triangle"></i><span class="hide-menu">Peraturan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/sejarah') }}" aria-expanded="false"><i class="fa fa-align-justify"></i><span class="hide-menu">Sejarah</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>