<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
     a{
        color:white;
        text-decoration:none;
      }
      a:hover{
        color:white;
        text-decoration:none;
      }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light container-fluid sticky-top shadow text-light "style="background-color:#34495e">
        <div class="container nabb"> Flipakart 
            <button class="navbar-toggler bg-light" data-toggle ="collapse" data-target= "#nab">
                
                  <span class="navbar-toggler-icon bg-light"></span>
            </button>
              <div class="collapse navbar-collapse mx-auto tex-light" id="nab"> 
                
                <div class="dropdown">
                    <button class="btn dropdown-toggle bg-light text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:30%;border:1px solid red">
                  <span style="color:#F05538"> All Cateogries</span>  </button>
                    <div class="dropdown-menu jumbotron" aria-labelledby="dropdownMenuButton" style="color:#F05538;width:100%;height:400px;">
                    <ul class="list-group">
                                   <li class="list-group-item">Power Tools</li>
                                   <li class="list-group-item">Automatic Mainatnece and accesories</li>
                                   <li class="list-group-item">Solar</li>
                                   <li class="list-group-item">Office</li>
                                   <li class="list-group-item">Office supply</li>
                                   <li class="list-group-item">Material handling & pcakig</li>
                                   <li class="list-group-item">Pumps</li>
                                   <li class="list-group-item">Hand Tools</li>
                                   <li class="list-group-item">Medical supplies & equipment</li>
                                   <li class="list-group-item">Testing & measuring</li>
                               
                              </ul>
                         
                    </div>
                  </div>
                  <form class="d-flex">
                    <input class="form-control me-2  " type="search" placeholder="Search" aria-label="Search" style="width:450px;margin-left:20%">
                    <button class="btn btn-outline-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg></button>
                  </form>
               <button class="btn text-light mx-auto" style="background-color: #009432"> 
                      <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                            My Cart
                        </span>
                </button>

               <button class="btn text-light mx-auto" style="background-color:#d35400">
                   <span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                       </svg> <a href="{{route('wishlist')}}">Wishlist</a>
                    </span>
                </button>

                <button class="btn text-light mx-auto" style="background-color:#e74c3c">
                    <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                         <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                         <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                       </svg> Track Order
                     </span>
                 </button>

               <button class="btn text-light mr-auto" style="background-color: #f1c40f">
                   <span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                         <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                       </svg> {{Auth::user()->name }}
                    </span>
                </button>

               <form  action="{{route('logout')}}" method="POST" class="mx-auto">
                 @csrf
                 <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                      <path d="M7.5 1v7h1V1h-1z"/>
                     <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                    </svg>
                
                 <input type="submit" class="btn text-light " style="background-color: #485460" value="logout">
                </span> 
                </form>
            </div> 
        </div>
       
   </nav>
         <div class="row">
           
             <div class="col-lg-10 mt-4 mx-auto" style="height:650px">
               
                <div class="container-fluid">
                    <div class="row">
                           
                        <div class="col-lg-8 container-fluid" >
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card shadow" style="height:650px">
                                     
                                        <div class="card-body shadow ">
                                            <div class="card-image">
                                                <img src="{{asset('images_one/'.$r->p_imageone)}}" onclick="manas(1)" class="w-100">
                                      
                                            <hr>
                  
                                                <img  src="{{asset('images_two/'.$r->p_imagetwo)}}" alt="" onclick="manas(0)" class="w-100 mt-4">
                                            <hr>
                                                <img  src="{{asset('images_three/'.$r->p_imagethree)}}"  alt="" onclick="manas(3)" class="w-100 mt-4">
                                            <hr>
                                                
                                            
                                                
                                                
                                            </div> 
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card shadow" style="height:650px">
                                      <div class="card-header text-center">{{$r->p_name}}</div>
                                        <div class="card-body   ">
                                    <div class="card-image" id="some">
                                      <img  src="{{asset('images_one/'.$r->p_imageone)}}" alt="" onclick="manas(2)" class="w-100 mt-1">
                  
                                    </div>
                                      
             
                                        </div>
                                    </div>
                           
                                     
                                </div>
                            </div>
                  
                        </div>
                        <div class="col-lg-4 py-1 px-2" id="hid" >
                            <div class="card px-4 py-3 shadow" style="height:650px">
                              <div class="card-header text-center">Product Detail</div>
                              <table class="table bordered px-5">
                                                                   
                                          <tr>
                                            <th>Product Id</th>
                                            <td>{{$r->p_id}}</td>
                                         </tr>
                                          <tr>
                                            <th>Product Name</th>
                                            <td>{{$r->p_name}}</td>
                                         </tr>
                                         <tr>
                                           <th>Items:</th>
                                           <td>{{$r->p_type}}</td>               
                                          <tr>
                                            <tr>
                                              <th>Price</th>
                                              <td>{{$r->p_price}}</td>
                
                                            </tr>
                                            
                                            
                                             
                                       
                              </table>
                               <input type="submit" value="Description:-" class="btn btn-success  mt-2 mb-3 ">
                                <p class="text-lead text-center">{{$r->p_description}}</p>
                            <hr>
                            <form action="{{route('wishlistitem')}}" method="post">
                              @csrf
                              <input type="hidden" name="p_id" value="{{$r->p_id}}">
                              <input type="submit" class="btn btn-outline-primary text-dark mt-4 form-control" id="send" onclick="wish()"  value="Add to Wish list">
                          </form>
                          <a href="{{route('order',$r->p_id)}}" class="btn btn-outline-primary mb-5 mt-2">Buy Now</a>
                            </div>
                           </div>
                  
                    </div>
                  </div>
                  
                  <script>
                  
                  
                  
                  function manas(m){
                  
                  
                  if( m == 1){
                  document.getElementById('some').innerHTML = '<img src="{{asset('images_one/'.$r->p_imageone)}}" class="w-100" style="max-height:500px;max-width:70%;margin-left:15%;">'; 
                  }
                  else if(m == 2){
                       document.getElementById('some').innerHTML ='<img  src="{{asset('images_one/'.$r->p_imageone)}}" alt=""  class="w-100" style="max-height:500px;max-width:100%;">'; 
                  }  
                  else if(m == 0){
                       document.getElementById('some').innerHTML ='<img  src="{{asset('images_two/'.$r->p_imagetwo)}}" alt=""  class="w-100" style="max-height:500px;max-width:100%;">' 
                  }
                  else{
                    document.getElementById('some').innerHTML ='<img  src="{{asset('images_three/'.$r->p_imagethree)}}" alt=""  class="w-100" style="max-height:500px;max-width:100%;">' 
                  
                  }
                  
                  
                  
                  
                  }
                  
                 function wish(){
                   alert("added to wish list");
                 }
                  
                  
                  </script>
                  

             </div>
         </div>
  
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          
</body>
</html>