<!DOCTYPE html>
<html lang="en">
@include('includes\head')

<body>
    <div class="wrapper">
        @include('includes\sidebar')
        <div class="main">
            @include('includes\navbar')
            <main class="content">
                <div class="p-0 container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">
                                @yield('main-content')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('\includes\footer')
        </div>
    </div>

    <script src=" {{ asset('web/js/app.js') }} "></script>

</body>

</html>
