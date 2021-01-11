<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
<div class="sidebar-header">
</div>
<div class="sidebar-menu">
<ul class="menu">
    
    
        <li class='sidebar-title'><a href="{{route("welcome")}}"><h3>E-Vacancy Bpp</h3></a></li>


        <li class='sidebar-title'>Lowongan Pekerjaan</li>
        <li class="sidebar-item  ">
            <a href="{{url("list_lowongan")}}" class='sidebar-link'>
                <i data-feather="layout" width="20"></i> 
                <span>Daftar Lowongan</span>
            </a>
            
        </li>

        <li class='sidebar-title'>Profil Pencari Kerja</li>
        <li class="sidebar-item  has-sub">
            <a href="{{url("biodata")}}" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Pencari Kerja</span>
            </a>
            
            <ul class="submenu ">
                
                <li>
                    <a href="component-alert.html">Login</a>
                </li>
                <li>
                    <a href="component-alert.html">Data Diri</a>
                </li>
            </ul>
            
        </li>

        <li class='sidebar-title'>Pasang Lowongan</li>
    
    
        <li class="sidebar-item">
            <a href="{{route("loker.create")}}" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Tambah Loker</span>
            </a>
            
        </li>

        <li class='sidebar-title'>Info</li>
        <li class="sidebar-item  ">
            <a href="{{url("info")}}" class='sidebar-link'>
                <i data-feather="layout" width="20"></i> 
                <span>Berita Informasi Terkini</span>
            </a>
            
        </li>

</div>
</div>