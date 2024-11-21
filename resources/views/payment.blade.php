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
        body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
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

h3{
    margin:0px 35px;
}
 </style>
</head>
<body>
@include('layouts.header')

@include('sidebar')

<div class="container">
   
    <div class="main_box mt-5">
        <table class="table table-striped table-Light table-responsive">
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

</div>
    
</body>
</html>