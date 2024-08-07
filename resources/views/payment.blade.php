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

input{
    width:100%;
    /* line-height:60px; */
    padding:15px;
    border-radius:10px;
    outline:none;
}
input:hover{
    outline:2px solid blue;
}
input::placeholder{
    padding:5px 8px ;

}
.bt{
    width:200px;
    margin:auto;
    padding:5px 8px;
    display:flex;
    gap:20px;
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
       <button class="mt-3 box"><a href="{{route('view.coust')}}">Add Customer</a></button> 
        <button class="mt-3 box"><a href="{{route('cust.view')}}">View Customer</a></button>
        <button class="mt-3 box"><a href="{{route('show.amount')}}">Payment</a></button>
        <button class="mt-3 box"><a href="{{route('user.all')}}">Customer Details</a></button>
    </div>
   
    <div class="main mt-5">
        <table class="table table-striped table-Light">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Item</th>
                <th>Total</th>
                <th>Payment</th>
               </tr>
               </thead>
               @php $count=1; @endphp
             @foreach($users as $user)
               <tr>
               
                <td>{{$count}}</td>
                <td>{{$user->name}}</td>
                <td><a href="{{route('item.view', $user->id)}}" class="text-success">View-Items</a></td>
                <td>{{$user ->getAccountDetail->where('type', 'Plus')->sum('amount') - $user->getAccountDetail->where('type', 'Minus')->sum('amount')}}</td>
            
                <td><a href="{{route('amount.view', $user->id)}}">Payment</a></td>

               </tr>
               @php $count++ @endphp
              @endforeach
        </tbody>
    </table>
        
    </div>


    
</body>
</html>