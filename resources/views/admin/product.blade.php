@extends('admin.base')
@section('content')
 <div class="conatiner">
     <div class="row mt-3">
         <div class="col-lg-3">
               <div class="card mx-3 py-3 shadow">
                   <div class="card-header">Insert Product</div>
                 <div class="card-body ">
                    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                         <label for=""> <b>Product_Name: </b></label>
                         <input type="text" class="form-control w-10 mb-2 mt-1" name="p_name">
                       </div>
                         @error('p_name')
                            <small class="text-danger">Required field!</small> 
                         @enderror

                        <div class="form-group">
                         <label for=""> <b>Product_Brand: </b></label>
                         <input type="text" class="form-control w-10 mb-2 mt-1" name="p_brand">
                       </div>
                         @error('p_brand')
                            <small class="text-danger">Required field!</small> 
                         @enderror
 

                        <div class="form-group">
                         <label for=""> <b>Product_Image: </b></label>
                         <input type="file" class="form-control w-10 mb-2 mt-1" name="p_imageone">
                       </div>
                       
                        <div class="form-group">
                         <label for=""> <b>Product_Image: </b></label>
                         <input type="file" class="form-control w-10 mb-2 mt-1" name="p_imagetwo">
                       </div>
                    

                        <div class="form-group">
                         <label for=""> <b>Product_Image: </b></label>
                         <input type="file" class="form-control w-10 mb-2 mt-1" name="p_imagethree">
                       </div>
                        
 
                        <div class="form-group">
                         <label for=""> <b>Product_Desc: </b></label>
                         <input type="text" class="form-control w-10 mb-2 mt-1" name="p_description">
                       </div>
                         @error('p_description')
                            <small class="text-danger">Required field!</small> 
                         @enderror
                          
                        <div class="form-group">
                         <label for=""> <b>Product_Type: </b></label>
                         <select name = "p_type" class="form-control w-10 mb-2 mt-1">
                            <option value = "1" selected>Others</option>
                            <option value = "2">Books</option>
                            <option value = "3">Sports</option>
                            <option value = "4">Fitness</option>
                            <option value = "5">lagguage</option>
                            <option value = "6">footwear</option>
                            <option value = "7">Wardrobe</option>
                            <option value = "8">Electrical</option>
                            <option value = "9">Mobiles</option>
                            <option value = "10">Laptops</option>
                            <option value = "11">Gadgets</option>
                            <option value = "12">Tech</option>
                            <option value = "13">Decoration</option>
                        
                         </select>
                       </div>
                       @error('p_type')
                       <small class="text-danger">Required field!</small> 
                      @enderror
                     
                          
                        <div class="form-group">
                         <label for=""> <b>Product_Price: </b></label>
                         <input type="text" class="form-control w-10 mb-2 mt-1" name="p_price">
                       </div>
                       @error('p_price')
                            <small class="text-danger">Required field!</small> 
                         @enderror
                          
                        
                        <div class="form-group">
                         <label for=""> <b>Product_Quantity: </b></label>
                         <input type="text" class="form-control w-10 mb-2 mt-1" name="p_quantity">
                       </div>
                         @error('p_quantity')
                            <small class="text-danger">Required field!</small> 
                         @enderror
                          
                         <div class="form-group mt-4">
           
                            <input type="submit" class="form-control btn btn-success" value="Upload">
                        </div>
                    
 
                       </form>
                 </div>
               </div>
         </div>
         <div class="col-lg-9">
            <div class="card-header text-center text-danger"> Total no. of items {{count($records)}}</div>
               <div class="card-body">
                    
                <table class="table table-striped  table-hover table-responsive ">
                  <tr>
                    <th>Product Id</th>
                     <th>Product Name</th>
                     <th>Product Brand</th>
                     <th>Product Descrition</th>
                     <th>Product Type</th>
                     <th>Product Price</th>
                     <th>Product Quantity</th>
                     <th>Action</th>
          
                  </tr>
                  @foreach ($records as $r)
                  <tr class="text-dark">
                     
                     <td>{{$r->p_id}}</td>
                     <td>{{$r->p_name}}</td>
                     <td>{{$r->p_brand}}</td>
                     <td>{{$r->p_description}}</td>
                     <td>{{$r->p_type}}</td>
                     <td>{{$r->p_price}}</td>
                     <td> <b>{{$r->p_quantity}}</b></td>
                     <td class="text-danger"> <b>
                       <form action="" method="post">
                         <input type="submit" value="X" class="btn btn-danger">
                       </form>
                      </b></td>
          
          
          
                  </tr>
                  @endforeach
                  
                  
                  
                
             
                </table>
                        
                       

               </div>
         </div>
     </div>
 </div>   


@endsection