<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Admin\Packages;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\Texi;
use App\Models\Hotel;
use App\Models\Enquiry;
use DB;
use Auth;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $packages = Package::with('Destination', 'Category')->get();
        $texis = Texi::all();
        $hotels = Hotel::all();

        $countVisitor = DB::table('shetabit_visits')->count();

        $ip = $request->ip();

        if ($ip) {
            $exist = DB::table('shetabit_visits')->where('ip', $ip)->first();
            if (empty($exist)) {
                $request->visitor()->visit();
            }
        }

        $alltexis = [];
        $alltexis1 = [];

        $singleArr = [];
        if ($texis) {
            foreach ($texis as $key => $texi) {
                if ($key >= 0 && $key <= 2) {
                    $alltexis[] = $texi;
                }
            }
            foreach ($texis as $key => $texi) {
                if ($key >= 3 && $key <= 6) {
                    $alltexis1[] = $texi;
                }
            }
         
            $singleArr[] = $alltexis;
            $singleArr[] = $alltexis1;
         
        } 
        $allpackages = [];
        $allpackages1 = [];
      
        $singleArr3 = [];
        if ($packages) {
            foreach ($packages as $key => $package) {
                if ($key >= 0 && $key <= 2) {
                    $allpackages[] = $package;
                }
            }
            foreach ($packages as $key => $package) {
                if ($key >= 3 && $key <= 6) {
                    $allpackages1[] = $package;
                }
            }
         
            $singleArr3[] = $allpackages;
            $singleArr3[] = $allpackages1;
        } 

        $allhotels = [];
        $allhotels1 = [];
        $allhotels3 = [];
        $singleArr2 = [];
        if ($hotels) {
            foreach ($hotels as $key => $hotel) {
                if ($key >= 0 && $key <= 2) {
                    $allhotels[] = $hotel;
                }
            }
            foreach ($hotels as $key => $hotel) {
                if ($key >= 3 && $key <= 6) {
                    $allhotels1[] = $hotel;
                }
            }
        
            $singleArr2[] = $allhotels;
            $singleArr2[] = $allhotels1;
         
        } 
        return view('front.index', compact('countVisitor', 'singleArr2', 'singleArr', 'singleArr3'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function package()
    {
        $packages = Package::with('Destination', 'Category')->get();
        return view('front.package', compact('packages'));
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function testimonial()
    {
        return view('front.testimonial');
    }
    public function contact()
    {
        return view('front.contact');
    }

    public function texiservices()
    {
       
        $texis = Texi::all();

        return view('front.texiservice', compact('texis'));
    }


    public function hotels()
    {
        $hotels = Hotel::all();
        return view('front.hotelfront', compact('hotels'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }


    public function booking($id,$texi){
        dd($id);
    }

    public function storeEnquiry(Request $req){
       
        Enquiry::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address,
            'product_id' => $req->product_id,
            'product_type' => $req->product_type,
          ]);
          
          return response()->json(['success'=>'Form is successfully submitted!']);
    
    }
    
}
