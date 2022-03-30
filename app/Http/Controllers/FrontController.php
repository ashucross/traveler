<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Admin\Packages;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\Texi;
use App\Models\Hotel;
use DB;
use Auth;

class FrontController extends Controller
{

    //
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

        return view('front.index', compact('countVisitor', 'packages', 'texis', 'hotels'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function package()
    {
        return view('front.package');
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
        return view('front.texiservice');
    }


    public function hotels()
    {
        return view('front.hotelfront');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
