@extends('Customer.base')
 @section('content')
 <div class="container">
     @foreach ($records as $r)
         
    
     <div class="row mx-auto border border-primary mb-4 mt-2">
          <div class="card-header">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{url('/')}}" class="text-primary">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{Auth::user()->name}}</li>
                  <li class="breadcrumb-item active" aria-current="page">My order</li>
                  <li class="breadcrumb-item active" aria-current="page"> Order Number -> {{$r->order_id}}</li>
                  <li class="breadcrumb-item active " aria-current="page">
                  
                  

                </ol>
                @if ($r->isInOrder === 1)
                <button type="button" class="btn btn-danger">
                  Status:
                  <span class="sr-only"> Item not Delivered</span>
                </button>
                @else
                <button type="button" class="btn btn-success">
                  Status: 
                  <span class="sr-only">Item Delivered</span>
                </button>
                @endif
              </li>
              </nav>
              <hr class="text-strong text-danger">
              <div class="clearfix">
                <a href="{{route('product',$r->p_id)}}"><img src="images_one/{{$r->p_imageone}}" class="col-md-6 float-md-end mb-3 ms-md-3" style="width: 150px"></a>
                 <h6 class="text-lead">Order Detail:-</h6>
                <p class="text-strong text-danger"> Order Id  :00{{$r->order_id}}</p>
                <p class="text-strong text-primary"> Order is Placed by Mr. {{$r->name}}</p>
                <p class="text-strong text-success"> Order will be delivered in : {{$r->user_address}}</p>
                <p class="text-strong text-success"> Pin code of the District: {{$r->user_pin}}</p>

          
              </div>
               

          </div>
     </div>
     @endforeach
 </div>
 @endsection