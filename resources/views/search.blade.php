<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style>
                body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
.main{
    width:100%;
    max-width:900px;
    margin:auto;
    padding:0px 40px;
    
    /* justify-content:center; */
}
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
h1{
    margin:0px 150px;
}
h3{
    margin:0px 35px;
}
    </style>
</head>
<body>
@include('layouts.header')
<div class="drop_main">
        <h3>dashboard</h3>
       <button class="mt-3 box"><a href="{{route('comp.view')}}">Add Company</a></button> 
       <button class="mt-3 box"><a href="{{route('view.coust')}}">Add Coustmer</a></button> 
        <button class="mt-3 box"><a href="{{route('cust.view')}}">View Coustmer</a></button>
        <button class="mt-3 box"><a href="{{route('show.amount')}}">Payment</a></button>
        <button class="mt-3 box"><a href="{{route('user.all')}}">Coustmer Details</a></button>
    </div>
    <div class="main mt-5">

  
        <table class="table table-striped table-Light mt-3">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Company</th>
                <th>Contact</th>
                <th>Edit</th>
               </tr>
               </thead>
               @php $count=1; @endphp
             @foreach($users as $user)
               <tr>
              
                <td>{{$count}}</td>
                <td>{{$user-> name}}</td>
                <td>{{$user -> comp_name}}</td>
                <td>{{$user -> contact}}</td>
                <td><a href="{{route('view.edit', $user->id)}}">Edit</a></td>

               </tr>
               @php $count++ @endphp
              @endforeach
        </tbody>
    </table>
        
    </div>
    
</body>
</html>