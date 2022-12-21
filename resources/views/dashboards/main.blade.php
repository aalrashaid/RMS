<div class="container-fluid">
    <div class="row">
        @include('dashboards.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>
