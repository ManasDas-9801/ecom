<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Wishlist;
use Auth;
use DB;

class ProductController extends Controller
{
   public function product()
   {
          if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
          return redirect()->route('home');
          }
          $data['records'] = DB::table('products')->orderby('p_id','desc')->get();
          
          return view('admin.product',$data);
   }
    public function store(Request $request)
    {
        $request->validate([
            'p_name'=>'required',
            'p_description'=>'required',
            'p_brand'=>'required',
            'p_type'=>'required',
            'p_quantity'=>'required',
            'p_imageone'=>'required|mimes:jpg,png', 
             'p_imagetwo'=>'mimes:png,jpg',
            'p-imagethree'=>'mimes:png,jpg',
     ]);
    
       
        $filename_one = time()."." .$request->p_imagetwo->extension();
        $request->p_imagetwo->move(public_path('images_two'),$filename_one);

        $filename_two = time().".".$request->p_imageone->extension();
        $request->p_imageone->move(public_path('images_one'),$filename_two);

        
       $filename_three =time().".".$request->p_imagethree->extension();
       $request->p_imagethree->move(public_path('images_three'),$filename_three);

       product::create([
        'p_name'=>$request->p_name,
        'p_brand'=>$request->p_brand,
        'p_price'=>$request->p_price,
        'p_description'=>$request->p_description,
        'p_type'=>$request->p_type,
        'p_quantity'=>$request->p_quantity,
        'p_imageone'=>$filename_one,
        'p_imagetwo'=>$filename_two,
        'p_imagethree'=>$filename_three,
        
        
       ]);

        return redirect()->back();
    }

    public function showproduct($p_id)
    {
        
        $s['r'] = DB::table('products')->where('p_id',$p_id)->first();
        return view('Customer.detail',$s);
    }
    public function wishlistitem(Request $req)
    {
        wishlist::create([
           'product_id' => $req->p_id,
           'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }

    public function order($id)
    {
      
        $s['r'] = DB::table('products')->where('p_id',$id)->first();
        return view('Customer.order',$s);   
    }

    public function orderstore(Request $request)
    {
        $request->validate([
            'address'=>'required',
            'pin'=>'required',
            'quantity'=>'required',
            'phone'=>'required',
          
     ]);
      $product_id = $request->product_id;
      $price = $request->product_price;
      $address = $request->address;
      $pin = $request->pin;
      $quantity = $request->quantity;
      $phone = $request->phone;
      $product_price = $price * $quantity;
      $del_date = date("yy-m-d",strtotime('+7 days'));
      $pay = $request->pay;
      if($pay == 'online' | $pay == 'upi'){
        $pay_success = 1;
 
    }
    else{
     $pay_success = 0;
 
    }
     
      order::create([
            'product_id'=>$product_id,  
            'user_id'=>Auth::id(),
            'user_address'=>$address,
            'phone_number'=>$phone,  
            'user_pin'=>$pin, 
            'product_quantity'=>$quantity,
            'product_price'=>$product_price,
            'payment'=>$pay_success,
            'deleivery_date'=>$del_date,

      ]);
            
             $stock =  DB::table('products')
                  ->where('p_id',$product_id)
                   ->decrement('p_quantity',$quantity);
         
          return redirect()->back();
    
    }
}
