<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function list(){
        $data= Laptop::all();
        return view('list',['data'=>$data]);
    }
    public function add(Request $req){
        //return $req->input();
        $lap=new Laptop;
        $lap->name=$req->input('name');
        $lap->serial_no=$req->input('serial_no');
        $lap->organization=$req->input('organization');
        $lap->save();
        $req->session()->flash('status','Device added successfully');
        return redirect('list');

    }
    public function delete($id){
        //echo $id;
        Laptop::find($id)->delete();
        Session::flash('status','Device has been deleted successfully');
        return redirect('list');
    }
    public function edit($id){
        //echo $id;
        $info= Laptop::find($id);
        return view('edit');
        //return view('edit',['data'=>$data]);
    }
    /**public function update(Request $req){
        $lap=new Laptop;
        $lap->name=$req->input('name');
        $lap->serial_no=$req->input('serial_no');
        $lap->organization=$req->input('organization');
        $lap->save();
        $req->session()->flash('status','Device updated successfully');
        return redirect('list');
    }*/
    public function test(){
        
        return view('test');
       
    }
}
