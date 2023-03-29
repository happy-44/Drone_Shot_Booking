<div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#">Happy Mittal</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}" style="color:white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer')}}" style="color:white">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer/view')}}" style="color:white">CustomerDetails</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/booking')}}" style="color:white">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/booking/view')}}" style="color:white">BookingsDetails</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div> 
@include('layouts.header')
<div class="container">
    @yield('main-section')
</div>
@include('layouts.footer')
