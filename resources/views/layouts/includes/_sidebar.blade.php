<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll" style="overflow: hidden; width: auto; height: 95%;">
        <nav>
            <ul class="nav" >
                @if (auth()->user()->role == 'admin')
                <li><a href="/dashboard" class="{{ Request::segment(1)=='dashboard'?'active':'' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/pembeli" class="{{ Request::segment(1)=='pembeli'?'active':'' }}"><i class="lnr lnr-user"></i> <span>Pembeli</span></a></li>    
                <li><a href="/control" class="{{ Request::segment(1)=='control'?'active':'' }}"><i class="lnr lnr-user"></i> <span>Admin</span></a></li> 
                <li><a href="/postsBarang" class="{{ Request::segment(1)=='postsBarang'?'active':'' }}"><i class="lnr lnr-pencil"></i> <span>Posting Barang</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>