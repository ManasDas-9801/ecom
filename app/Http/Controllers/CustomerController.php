<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
       
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
               return redirect()->route('admin.dashboard');
        }
        $data['records'] = DB::table('products')->orderby('p_id','desc')->get();
        return view('Customer.home',$data);
    }

    public function wishlist(){
       
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
               return redirect()->route('admin.dashboard');
        }
        $data['records'] = DB::table('wishlists')
                           ->join('users','users.id','=','wishlists.user_id')
                           ->join('products','products.p_id','=','wishlists.product_id')
                           ->where('user_id','=',Auth::id())
                           ->select('p_id','p_brand','p_description','p_name','p_price','p_imageone')
                           ->orderby('w_id','desc')
                           ->get();
        return view('Customer.wishlist',$data);
    }
    public function myorder(){
       
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
               return redirect()->route('admin.dashboard');
        }
        $data['records'] = DB::table('orders')
                           ->join('users','users.id','=','orders.user_id')
                           ->join('products','products.p_id','=','orders.product_id')
                           ->where('user_id','=',Auth::id())
                           ->select('p_id','p_name','p_price','p_imageone','name','id','user_address','user_pin','phone_number','order_id','isInOrder','payment','product_quantity')
                           ->orderby('order_id','desc')
                           ->get();
        return view('Customer.myorder',$data);
    }
}
