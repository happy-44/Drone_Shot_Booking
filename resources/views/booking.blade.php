<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
    <form action="{{$url}}" method="post">
    @csrf
    <!-- <pre>
    @php
        print_r($errors->all());
    @endphp
    </pre> -->
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        <div class="form-group">
            <label for="Customer_Name">Customer Name</label>
            <input type="Customer_Name" class="form-control" name="Customer_Name" id="" aria-describedby="helpId" placeholder="" value="{{$booking->Customer_Name}}"/>
            <span class="text-danger">
                @error('Customer_Name')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class=" form-group">
            <label for="Location_id">Location Id</label>
            <input type="Location_id" class="form-control" name="Location_id" id="" aria-describedby="helpId" placeholder="" value="{{$booking->Location_id}}"/>
            <span class="text-danger">
                @error('Location_id')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="Drone_Shot_Id">Drone Shot Id</label>
            <input type="Drone_Shot_Id" class="form-control" name="Drone_Shot_Id" id="" aria-describedby="helpId" placeholder="" value="{{$booking->Drone_Shot_Id}}"/>
            <span class="text-danger">
                @error('Drone_Shot_Id')
                    {{$message}}
                @enderror
            </span>
        </div>
        <!-- <div class="form-group">
            <label for="Number_of_Drones_Booked">Number of Drones Booked</label>
            <input type="Number_of_Drones_Booked" class="form-control" name="Number_of_Drones_Booked" id="" aria-describedby="helpId" placeholder="" value="{{$booking->Number_of_Drones_Booked}}"/>
            <span class="text-danger">
                @error('Number_of_Drones_Booked')
                    {{$message}}
                @enderror
            </span>
        </div> -->
        <div class="form-group">
            <label for="Color_of_Drone">Color of Drone</label>
            <input type="Color_of_Drone" class="form-control" name="Color_of_Drone" id="" aria-describedby="helpId" placeholder="" value="{{$booking->Color_of_Drone}}"/>
            <span class="text-danger">
                @error('Color_of_Drone')
                    {{$message}}
                @enderror
            </span>
        </div>
        <button class="btn btn-primary">
            submit
        </button>
    </div>
    </form>
  </body>
</html>