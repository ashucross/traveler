<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Enquiry;
use App\Models\Package;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Texi;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $destinationcount = Destination::count();
      
        $packagecount = Package::count();
        $enquirycount = Enquiry::count();
        $categorycount = Category::count();
        $texicount = Texi::count();
        $hotelcount = Hotel::count();
        $visitorcount = DB::table('shetabit_visits')->count();
        return view('admin.dashboard',compact('destinationcount','packagecount','visitorcount','enquirycount','categorycount','texicount','hotelcount'));
    }
    public function packages(Request $request)
    { 
       
        return view('admin.packages');
    }
}
