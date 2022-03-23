<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;

class FrontController extends Controller
{
    
    //
    public function index(Request $request)
    {
        $countVisitor = DB::table('shetabit_visits')->count();
        $ip = $request->ip();
        if($ip){
            $exist = DB::table('shetabit_visits')->where('ip',$ip)->first();
            if(empty($exist)){
                $request->visitor()->visit(); 
            }
        }
       
        return view('front.index',compact('countVisitor'));
    
      /*   $countVisitor = 0; 
        $countVisitor = visitor()->visitLogs()->distinct('ip')->count('ip'); */
      /*   if(!empty(Auth::user())){
            visitor()->visit($user);
            $countVisitor = visitor()->visit(Auth::user()); 
        }
             */
    
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
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
