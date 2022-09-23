<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {

            $input = $request->all();
            // dd($input);
            $booking = new Booking;
            $booking->booking_date = $input['date'];
            $booking->booking_time = $input['timeslot'];
            $booking->vendor = json_encode($input['vendor']);
            $booking->user_id = $input['user_id'];
            $booking->save();
            return response()->json($booking);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }



    }

    public function getUserBasedList(Request $request)
    {
        try {
            $booking = Booking::where('user_id',$request->user_id)->get();

            return response()->json($booking);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }

    }
    public function getList(Request $request)
    {
        try {
            $booking = Booking::get();

            return response()->json($booking);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }

    }
    public function bookingDetails(Request $request)
    {
        try {
            $booking = Booking::where('id',$request->booking_id)->first();
            $vendor = Gallery::whereIn('gallery.id',json_decode($booking->vendor))->join('category','category.id','=','gallery.category_id')->select('gallery.*','category.title as cname')->get();

            return response()->json(["booking"=>$booking,'vendor'=>$vendor]);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }

    } 

    public function whatsapp(Request $request)
    {
        try {
            $messge = 'Booking Date : 2022-09-19 <br> Booking Time : 00:00 99:99 <br> Thank you for booking. <br> Admin contact soon.';
            // $client = new \GuzzleHttp\Client();
            // $response = Http::acceptJson()->get('https://api.publicapis.org/entries');
            // $response = $client->get(' http://api4ws.com/sendMessage.php?AUTH_KEY=TAMILZOROUS&message='.$messge.'&phone=919677498497'); 
            // dd($response);

            $client = new \GuzzleHttp\Client();
            $res = $client->get('https://api.sampleapis.com/cartoons/cartoons2D');
        
           
            // return $output;


            return response()->json($res);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }

    }
}