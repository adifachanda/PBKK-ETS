<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <img src="{{ asset('bootstrap-4-material-admin/img/avatar-1.jpg') }}" alt="..." class="avatar">
    </div>

    <div class="title">
        <h1 class="h4">Mark Stephen</h1>
    </div>

    {{-- <ul class="list-unstyled">
        <li class="active"><a href="index.html"></i>Home </a></li>
        <li><a href="tables.html"> Tables</a></li>
        <li><a href="charts.html"> Bookings</a></li>
        <li><a href="forms.html"> Payment</a></li>
    </ul> --}}
    <ul class="list-unstyled">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <li class="active">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="../logout"></i> {{ __('Log Out') }}</a>
                </form>
            </li>
    </ul>
</nav>
