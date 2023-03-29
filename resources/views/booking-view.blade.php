<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <div>
        @if(session()->has('message'))
        <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>    
        @endif
    </div>
    <div class="container">
        <a href="{{route('booking.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right"> Add </button>
        </a>    
        <table class="table">
            <!-- <pre>
                {{print_r($bookings)}}
            </pre> -->
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Location_id</th>
                    <th>Drone_Shot_Id</th>
                    <!-- <th>Number_of_Drones_Booked</th> -->
                    <th>Color_of_Drone</th>
                    <th>Created_at</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td scope="row">{{$booking->Customer_Name}}</td>
                    <td scope="row">{{$booking->Location_id}}</td>
                    <td>{{$booking->Drone_Shot_Id}}</td>
                    <!-- <td>{{$booking->Number_of_Drones_Booked}}</td> -->
                    <td>{{$booking->Color_of_Drone}}</td>
                    <!--  <td>{{$booking->address}}</td> -->
                    <!-- <td>{{$booking->gender}}</td>
                    <td>{{$booking->dob}}</td>-->
                    <td>{{$booking->created_at}}</td>
                    <td>
                        @if($booking->status == "1")
                        <a href=""><span class="badge badge-success">Active</span></a>
                        @else
                        <a href=""><span class="badge badge-danger">Inactive</span></a>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/booking/delete/')}}/{{$booking->booking_id}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('booking.edit',['id' => $booking->booking_id])}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("document").ready(function(){
            setTimeout(() => {
                $("div.alert").remove();
            }, 3000);
        });
    </script>
  </body>
</html>