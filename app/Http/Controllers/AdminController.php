<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function dashboard(Request $request){
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('home');
     }
        return view('admin.base');
    }
    
    public function allorder(Request $request){
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('home');
     }
      $data['records'] = DB::table('orders')
                       ->join('users','users.id',"=",'orders.user_id')
                       ->join('products','products.p_id',"=",'orders.product_id')
                       ->select('p_id','p_name','p_price','name','id','user_address','user_pin','phone_number','order_id','isInOrder','payment','product_quantity')
                       ->get();
        return view('admin.allorder',$data);
    }

   
}
