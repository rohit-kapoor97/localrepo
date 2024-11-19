<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        .drop_main{
    width:300px;
    height:100%;
    background-color:white;
    box-shadow:0px 5px 10px rgba(0,0,0,0.4);
    position:absolute;
    left:0px;
    margin:auto;
    padding:50px;
}
.box{
width:200px;
    line-height:30px;
    background-color:white;
    box-shadow:0px 1px 2px rgba(0,0,0,0.4);
    border-radius:10px;
    border:none;
}
    </style>
</head>
<body>

    <div class="drop_main d-none d-lg-block">
        <h3>Dashboard</h3>
       <button class="mt-3 box"><a href="{{route('comp.view')}}">Add Company</a></button> 
       <button class="mt-3 box"><a href="{{route('view.coust')}}">Add Customer</a></button> 
        <button class="mt-3 box"><a href="{{route('cust.view')}}">View Customer</a></button>
        <button class="mt-3 box"><a href="{{route('show.amount')}}">Payment</a></button>
        <button class="mt-3 box"><a href="{{route('user.all')}}">Customer Details</a></button>
    </div>

    
</body>
</html>