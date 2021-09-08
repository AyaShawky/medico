<?php

namespace App\Http\Controllers;

use App\Mail\Appointmented;
use App\Models\About;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Features;
use App\Models\Gallery;
use App\Models\Introduction;
use App\Models\Price;
use App\Models\Service;
use App\Models\Testmonils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth:admin');
    // }

    public function send(Request $request)
    {
       Mail::to("ayashoqe@hotmail.com")->send(new Appointmented($request->all()));

       return "OK";

    }

    public function index()
    {
        return view('home'
        ,[
            'doctorCount' => Doctor::count(),
            'departmentCount' => Department::count(),
            'serviceCount' => Service::count(),
            'testmonilsCount'=> Testmonils::count()
        ]
        )->with('doctor',Doctor::get())->with('department',Department::get())
        ->with('about',About::get()) ->with('service',Service::get())->with('testmonils',Testmonils::get())
        ->with('feature',Features::get()) ->with('gallery',Gallery::get())->with('price',Price::get())
        ->with('introduction',Introduction::get());
    }

    public function show()
    {
        // if(!Auth::user()->isAdmin){
        //     return redirect('/home');
        // }
        // else{

        return view('admin.dash',[
            'doctorCount' => Doctor::count(),
            'departmentCount' => Department::count(),
            'serviceCount' => Service::count(),
            'testmonilsCount'=> Testmonils::count()
        ]);
    }




}
