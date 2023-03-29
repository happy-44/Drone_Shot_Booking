<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingsController extends Controller
{
    public function index(){
        $booking = new Bookings;
        $url = url('/booking');
        $title = "Drone Slot Booking"; 
        $data = compact('url','title','booking');
        return view('booking')->with($data);
    } 

    public function store(Request $request){
        $request->validate(
            [
                'Customer_Name' => 'required',
                'Location_id' => 'required',
                'Drone_Shot_Id' => 'required',
                // 'Number_of_Drones_Booked' => 'required',
                'Color_of_Drone' => 'required',
            ]);

        $booking = new Bookings;
        $booking->Location_id = $request['Location_id'];
        $booking->Customer_Name = $request['Customer_Name'];
        $booking->Drone_Shot_Id = $request['Drone_Shot_Id'];
        // $booking->Number_of_Drones_Booked = $request['Number_of_Drones_Booked'];
        $booking->Color_of_Drone = $request['Color_of_Drone'];
        $booking->save();
        return redirect('/booking/view');
    }

    public function view(){
        $bookings = Bookings::all();
        $data = compact('bookings');
        return view('booking-view')->with($data);
    }

    public function delete($id){
        $booking = Bookings::find($id);
        if(!is_null($booking)){
            $booking->delete();
        }
        return redirect('booking/view')->with('message','Data Deleted successfully');
    }

    public function edit($id){
        $booking = Bookings::find($id);
        if(is_null($booking)){
            return redirect('booking/view');
        }else{
            $url = url('/booking/update')."/".$id;
            $title = "Update Drone Booking";
            $data = compact('booking','url','title');
            return view('booking')->with($data);
        }
    }

    public function update($id, Request $request){
        $booking = Bookings::find($id);
        $booking->Location_id = $request['Location_id'];
        $booking->Drone_Shot_Id = $request['Drone_Shot_Id'];
        $booking->Number_of_Drones_Booked = $request['Number_of_Drones_Booked'];
        $booking->Color_of_Drone = $request['Color_of_Drone'];
        $booking->save();
        return redirect('/booking/view')->with('message','Data Updated successfully');;
    }
}
