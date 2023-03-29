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
        <div class=" form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{$customer->name}}"/>
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{$customer->email}}"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder=""/>
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" id="" aria-describedby="helpId" placeholder=""/>
            <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="" class="form-control" name="country" id="" aria-describedby="helpId" placeholder="" value="{{$customer->country}}"/>
            <span class="text-danger">
                @error('country')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="state" class="form-control" name="state" id="" aria-describedby="helpId" placeholder="" value="{{$customer->state}}"/>
            <span class="text-danger">
                @error('state')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="address" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="" value="{{$customer->address}}"/>
            <span class="text-danger">
                @error('address')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <label class="form-check-label">Gender<br><br>
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="3" {{$customer->gender == "Male" ? "checked" : ""}}
                    />Male
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="4"{{$customer->gender == "Female" ? "checked" : ""}}
                    />Female
                    <input class="form-check-input" type="radio" name="gender" value="Others" id="5"{{$customer->gender == "Others" ? "checked" : ""}}
                    />Others
                </label>
            </div>    
        </div>
        <div class="form-group">
          <label for="data">Date of Birth</label>
          <input type="date" class="form-control form-control-sm" name="dob" id="" aria-describedby="helpId" placeholder="" value="{{$customer->dob}}">
        </div>
        <button class="btn btn-primary">
            submit
        </button>
    </div>
    </form>
  </body>
</html>