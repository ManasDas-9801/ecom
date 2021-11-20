@extends('Customer.base')
@section('content')
        <div class="container mx-auto">
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto shadow">
                   <div class="card py-2 px-2" style="border-bottom: 3px solid black; margin-bottom:15px;">
                       <div class="card-header text-center"> <h5 class="card-title">{{$r->p_name}}</h5></div>
                       <div class="row">
                           <div class="col-sm-4">
                             
                               <div class="card-image ml-5 mt-4 mb-3">
                                   <img src="{{asset('images_one/'.$r->p_imageone)}}" alt="" style="max-width:100%;max-height:200px;margin-left:10%;" >
                                   
                             </div>
                           </div>
                           <div class="col-sm-8 mt-4">
                                      <p class="text-lead">{{$r->p_description}}</p>
                                      <p class="text-lead">{{$r->p_brand}}</p>
                                      
                                       
                                       <a href="#" class="btn btn-primary mt-1 mb-2 ml-5 " style="background-color:#20bf6b;">Price : {{$r->p_price}} /-</a>
                                 <hr>    
                                      
                             </div>
                           </div>
                           <hr>
                            <div class="card-header text-danger text-center"><h3>Insert your detail</h3></div>
                        <form action="{{route('orderstore')}}" method="post">
                            @csrf
                               <div class="row mx-4 mt-3">
                                   <div class="col-lg-5 m">
                                       
                                        <div class="form-group">
                                            <label for=""> <b>Address: </b></label>
                                            <textarea type="text" class="form-control w-10 mb-2 mt-1" rows="7" name="address">
                                            </textarea>
                                          </div>
                                          @error('address')
                                               <small class="text-danger">Required field!</small> 
                                            @enderror
                                            <input type="hidden" name="product_id" value="{{$r->p_id}}">
                                            <input type="hidden" name="product_price" value="{{$r->p_price}}">
                                     
                                       
                                   </div>
                                   <div class="col-lg-5">
                                       
                                        <div class="form-group">
                                            <label for=""> <b>Pin Code: </b></label>
                                            <input type="text" class="form-control w-10 mb-2 mt-1" name="pin">
                                          </div>
                                          @error('pin')
                                               <small class="text-danger">Required field!</small> 
                                            @enderror

                                            <div class="form-group">
                                                <label for=""> <b>Number of pieces: </b></label>
                                                <input type="number" class="form-control w-10 mb-2 mt-1" name="quantity">
                                              </div>
                                              @error('quantity')
                                                   <small class="text-danger">Required field!</small> 
                                                @enderror
                                                <div class="form-group">
                                                    <label for=""> <b>Phone Number: </b></label>
                                                    <input type="text" class="form-control w-10 mb-2 mt-1" name="phone">
                                                  </div>
                                                  @error('phone')
                                                       <small class="text-danger">Required field!</small> 
                                                    @enderror
                                          
                                       
                                   </div>
                                   <strong><hr class="text-danger"></strong>
                                   <table class="table">
                                    <tr>
                                    <th>Online Payment</th>
                                    <th>Cash on Delivery</th>
                                    <th>UPI Transction</th>
                                    </tr>
                                    <tr>
                                       <td><input type="radio" name="pay" value="online" ><small>(currently not available)</small></td>
                                       <td><input type="radio" name="pay" value="cod"><small>(Only Cod is available)</td>
                                       <td><input type="radio" name="pay" value="upi"><small>(currently not available)</td>
                                    </tr>
                                </table>
                                <strong><hr class="text-danger"></strong>
                                <input type="submit" value="Place Order" class="btn btn-warning link-stretched" onclick="yes()">
                            </form>
                               </div>
                         </div>
   
                       
                </div>
                
            </div>
        </div>
@endsection

<script>
    function yes(){
        alert("your order had been placed");
    }
</script>