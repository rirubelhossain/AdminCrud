<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
class AdminCrud extends Controller
{
    public function add_post(){
        return view('data_insert');
    }
    public function addpost(Request $request){
        DB:: table('posts')->insert([ /// DB query builder 
            'name' => $request->Name ,
            'phone' => $request->phone ,
            'quantity' => $request->quantity ,
            'price' => $request->price 
        ]);
        return back()->with('post_inserted','Data has been inserted successfully!');
    }
    public function getdata(){
        //return view('get-data');

        $posts = DB::table('posts')->get() ;
        return view('get-data',compact('posts'));

    }
    /// Just practice for home side 
    public function home(){
        //return view('home');
        $posts = DB::table('posts')->get() ;
        return view('home',compact('posts'));
    }
    /// Data View function
    public function dataview($id){
        $posts = DB :: table('posts')->where('id',$id)->first();
        return view('data-view', compact('posts'));
    }
    ///Auth Check 
    public function Auth(){
        
    }
    /// Edit Post
    public function editpost($id){
        $posts = DB :: table('posts')->where('id', $id )->first();
        return view('edit-post', compact('posts'));
    }
    ///Updated Post 
    public function updatepost(Request $request){

        DB::table('posts')->where('id', $request->id)->update([
            'name' =>$request->name ,
            'phone' =>$request->phone ,
            'quantity' =>$request->quantity ,
            'price' =>$request->price
        ]);
        return back()->with('post_updated','Post Has been updated successfully!');

    }
    /// Delete Post 

    public function deletepost($id){
        $posts = DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!'); 
    }
    ///Query builder Practice 

    public function db(){
        //$posts = DB::table('posts')->get();
        //$posts = DB::table('posts')->where('id', 1)->first();
        //$posts = DB::table('posts')->where('id', 1)->get();
        //$posts = DB::table('posts')->where('id', 1)->pluck('price','id','name','quantity'); ///pluck() function 
        //$posts = DB::table('posts')->where('id', 1)->lists('id' , 'name')->toArray(); ///pluck() function 
        ///works for a single row 
        //return view('db_query',compact('posts'))

        //$posts = DB::table('posts')->count() ; number of row returns this function 
        //$posts = DB::table('posts')->avg('price');
        //$posts = DB::table('posts')->sum('price');
        // DB::table('posts')->insert([
        //     'name' =>'Rakibul' , 'phone' => 0 , 'quantity' => '12' , 'price' => '12'
        // ]);
        $posts = DB::table('posts')->get();
        //$posts = DB::table('posts')->where('id', 13)->delete();
         return($posts);
    }
}
