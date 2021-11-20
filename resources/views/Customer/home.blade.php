@extends('Customer.base')

@section('content')
     <div class="container">
         <div class="row">
            @foreach ($records as $r)

             <div class="col-lg-3">
                  <div class="card">

                      <div class="card-body">
                      
                        <a href="" class="text-dark" style="text-decoration:none;">
                            <div class="card shadow">
                              <div class="card-body shadow px-5 py-3 mt-2" style="height:460px;" >
                               <img src="images_one/{{$r->p_imageone}}" alt="" style="max-width:70%;margin-left:20%">
                                <hr> 
                               <h5 class="text-danger text-center">{{$r->p_name}}</h5>
                                <p class="text-lead">{{Str::limit($r->p_description,30, '...')}}</p>
                                <h5> <strong>{{$r->p_price}}/-</strong></h5>
                                <a href="{{route('product',$r->p_id)}}" class="btn btn-outline-success mb-5">Detail</a>
                              </div>
                            </div>
                            </a>
                        </div>
                      
                      </div>
                  </div>
                  @endforeach      
                </div>
         </div>
     </div>
@endsection