<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('BE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->email }}</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">Main Menu</li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users"></i> <span>Members</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Portal</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Loker Terbaru</span>
                </a>
            </li>
            <li class="header">Pengaturan </li>
            <li>
                <a href="#">
                    <i class="fa fa-phone"></i> <span>Pengaturan Perusahaan</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0; padding: 0;">
                    @csrf
                    <button type="submit" style="background: none; border: none; width: 100%; text-align: left; padding: 10px 15px; color: #b8c7ce;">
                        &nbsp; <i class="fa fa-sign-out"></i> <span>Log Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </section>
</aside>
