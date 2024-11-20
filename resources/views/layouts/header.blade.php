<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        .nav_custom {

            background-color: #301934;

        }

        .navbar-dark .navbar-toggler {
            box-shadow: none !important;
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
        .search {
            position: absolute;
            top: 15px;
            left: 800px;

        }

        .search_bt {
            width: 200px;
            max-width: 100%;
            /* line-height:30px; */
            background-color: black;
            padding: 5px 10px;
            outline: none;
            border: none;
            border-radius: 10px;

        }

        .search_bt:hover {
            outline: 3px solid blue;
            border: none;
            background-color: white;
        }

        .log-btn {
            position: absolute;
            top: 15px;
            left: 1200px;
        }

        .log-text {
            color: white;
        }

        .log-text:hover {
            text-decoration: none;
            color: black;
        }
        @media(max-width: 991px) {
            .m-search {
                width: 100%;
                justify-content: center;
            }
        }

        @media(max-width: 767px) {

            .search_bt {
                width: 170px;
            }
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



        <nav class="navbar navbar-expand-lg navbar-dark nav_custom p-4">
            <div class="container">
                <h4 class="text-white mt-2">Welcome</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div style="background-color:#301934"class="offcanvas offcanvas-start border-0  px-3" data-bs-scroll="true" tabindex="-1"
                    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header text-white">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Dashboard</h5>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-block d-sm-none">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('comp.view') }}">Add
                                    Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.coust') }}">Add Customer</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cust.view') }}">View Customer</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('show.amount') }}">Payment</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.all') }}">Customer Details</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex m-search gap-2 mt-md-0 mt-3">
                <form action="{{ route('search.view') }}" method="GET" class="d-flex">
                    <input type="text" class="search_bt " name="q" placeholder="Search">
                    @csrf
                    <button type="submit" class="btn btn-primary ms-2" value="submit">Search</button>
                </form>

                <button type="button" class="btn btn-danger"><a href="{{ route('delete.user') }}"
                        class="log-text">Logout</a></button>
            </div>


        </nav>

    </header>
</body>

</html>
