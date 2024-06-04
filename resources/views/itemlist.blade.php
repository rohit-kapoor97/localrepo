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
 </style>
</head>
<body>
@include('layouts.header')
    <div class="drop_main">
       <button class="mt-3 box"><a href="">Add Company</a></button> 
       <button class="mt-3 box"><a href="">Add Coustmer</a></button> 
        <button class="mt-3 box"><a href="">View Coustmer</a></button>
        <button class="mt-3 box"><a href="">Payment</a></button>
        <button class="mt-3 box"><a href="">Coustmer Details</a></button>
    </div>
    
   
    <div class="main mt-5">
        <table class="table table-striped table-Light">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Item</th>
                <th>Amount</th>
                <th>Payment Status</th>
               </tr>
               </thead>
               @php $count=1; @endphp
             @foreach($users as $user)
               <tr>
               
                <td>{{$count}}</td>
                <td>{{$user -> item}}</td>
                <td>{{$user -> amount}}</td>
                <td>{{$user -> type}}</td>
            
               
            
                
               </tr>
               @php $count++ @endphp
               
               <a href="{{route('amount.view', $user->cust_id)}}">

              @endforeach
              Payment</a>
        </tbody>
    </table>
        
    </div>


    
</body>
</html>