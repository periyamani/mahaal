<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) {
        
        //Log::info('UserController.login Called via '. $request->server('HTTP_USER_AGENT'));
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
           
            Session::put('name', Auth::user()->name);
            Session::put('id', Auth::user()->id);
            Session::put('mobile_verify', Auth::user()->mobile_verify);
            // dd(Session::put('name'));
            return response()->json(['loginDetail' => $user, 'statusCode'=>200]);
        }
        else {
            return response()->json(['loginDetail' => 'Unauthorised', 'statusCode'=>401]);
        }
    }

    public function loginReg($requestData) {
        if(Auth::attempt(['email' => $requestData['email'], 'password' => $requestData['password']])) {
            $user = Auth::user();
            return $user;
        }
        else {
            return response()->json(['loginDetail' => 'Unauthorised', 'statusCode'=>401]);
        }
    }
    
    /*
     * Register api
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        // $validator = Validator::make($request->user,[
        //     'mobile' => 'required',
        //     'password' => 'required'
        // ]);
        
        // if($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()],401);
        // }
        
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['name'] = $input['name'];
        $input['mobile'] = $input['email'];
        $user = User::create($input);
        $data = $this->loginReg($request->all());
        return response()->json(['loginDetail' => $data, 'statusCode'=>200]);
    }
    

   
    public function show(Request $request)
    {
        try {
            $input = $request->all();
            $category = Category::orderBy('id', 'DESC')->where('active','1')->get();
           
            return response()->json($category);
        }
         catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
    public function check(Request $request)
    {
        try {
            $input = $request->all();
            $category = Category::where('id', $input['id'])->where('active','1')->get();
           
            return response()->json($category);
        }
         catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
    public function update(Request $request)
    {
        try {

            $input = $request->all();
            $category =Category::find($input['id']);
            $category->title = $input['title'];
            $category->save();
            return response()->json($category);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       } 
    }

    public function destroy(Request $request)
    {
        try {
            $input = $request->all();
            $user = Category::find($input['user_id']);     
            $user->active = 0;
            // $user->role = 0;
            $user->save();
            return response()->json($user);
        }
         catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
  
    public function festival_view_page($id)
    {
        // $decode=base64_decode($id);
        $form = Category::where('id',$id)->first();
        return view("frontend_view.festivaldetail_page", ["form"=>$form]);
    }
}