<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style>
        /* header{
            width:1600px;
            margin:auto;
            padding:10px 20px;
            display:flex;
            justify-content:space-around;
            background-color:#301934;
           
        } */
             .nav_custom{
        
            background-color:#301934;
           
        }
        /* @media (max-width:768px){
            header{
            width:100%;
            margin:auto;
            padding:10px 20px;
            display:flex;
            justify-content:space-around;
            background-color:#301934;
           
        }

        } */
        .search{
          position:absolute;
          top:15px;
          left:800px;
       
        }
        .search_bt{
            width:200px;
            /* line-height:30px; */
            background-color:black;
            padding:5px 10px;
            outline:none;
            border:none;
            border-radius:10px;
           
         }
    
         .search_bt:hover{
            outline:3px solid blue;
            border:none;
            background-color:white;
         }
         .log-btn{
            position:absolute;
          top:15px;
          left:1200px;
          }

          .log-text{
               color:white;
          }
          .log-text:hover{
            text-decoration:none;
            color:black;
          }


    </style>
</head>
<body>
    <header>

{{-- <div class="container">
    <h2 class="text-white mt-2">Welcome</h2>

<div class="search">
    <form action="{{route('search.view')}}" method="GET">
<input type="text" class="search_bt" name="q" placeholder="Search">
@csrf

<button type="submit" class="btn btn-primary" value="submit">Search</button>
</form>
</div>

    
    <button type="button" class="btn btn-danger log-btn"><a href="{{route('delete.user')}}" class="log-text">Logout</a></button>
</div> --}}



<nav class="navbar navbar-expand-lg navbar-dark nav_custom">
    <div class="container-fluid">
     <h4 class="text-white mt-2">Welcome</h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-block d-sm-none">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('comp.view')}}">Add Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.coust')}}">Add Customer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('cust.view')}}">View Customer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('show.amount')}}">Payment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user.all')}}">Customer Details</a>
          </li>
          
          <li class="nav-item dropdown">
            {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a> --}}
            {{-- <div class="drop_main">
                <h3>Dashboard</h3>
               <button class="mt-3 box"><a href="{{route('comp.view')}}">Add Company</a></button> 
               <button class="mt-3 box"><a href="{{route('view.coust')}}">Add Customer</a></button> 
                <button class="mt-3 box"><a href="{{route('cust.view')}}">View Customer</a></button>
                <button class="mt-3 box"><a href="{{route('show.amount')}}">Payment</a></button>
                <button class="mt-3 box"><a href="{{route('user.all')}}">Customer Details</a></button>
            </div> --}}
        
         
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('comp.view')}}">Action</a></li>
              <li><a class="dropdown-item" href="{{route('view.coust')}}">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
    </div>
</div>
        <form action="{{route('search.view')}}" method="GET" class="d-flex">
          {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> --}}
          <input type="text" class="search_bt " name="q" placeholder="Search">
           @csrf
    <button type="submit" class="btn btn-primary ms-2" value="submit">Search</button>
        </form>
        
    <button type="button" class="btn btn-danger ms-4"><a href="{{route('delete.user')}}" class="log-text">Logout</a></button>
     
    
  </nav>

</header>
</body>
</html>