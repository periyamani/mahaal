<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            $category = new Category;
            $category->title = $input['title'];
            
            $category->save();
            return response()->json($category);
        }
        catch (\Exception $exception) {
           return response()->json($exception);
       }



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