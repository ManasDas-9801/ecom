@extends('Customer.base')
@section('content')
<div class="col-lg-9 mx-auto">
    <div class="card  shadow">
        <div class = "card-body">
            @foreach ($records as $r) 
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
                                <a href="{{route('product',$r->p_id)}}" class="btn btn-outline-success">View More</a>
                               
                      </div>
                    </div>
                  </div>
             

                  @endforeach
        </div>
    </div>

</div>
@endsection