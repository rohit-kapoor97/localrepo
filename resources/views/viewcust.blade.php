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
.main{
    width:100%;
    max-width:700px;
    margin:20px auto;
    padding:0px 40px;
    
    /* justify-content:center; */
}

h3{
    margin:0px 35px;
}
    </style>
</head>
<body>
@include('layouts.header')
@include('sidebar')
    <div class="main mt-5 table-responsive">
        <table class="table table-striped table-Light">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Company Name</th>
                <th>Item</th>
             
               </tr>
               </thead>
               @php $count=1; @endphp
             @foreach($users as $user)
            <tr>
               
                <td>{{$count}}</td>
                <td>{{$user-> name}}</td>
                <td>{{$user-> comp_name}}</td>
                <td><a href="{{route('item.view', $user->id)}}" class="text-success">View-Items</a></td>
                
            </tr>
               @php $count++ @endphp
              @endforeach
        </tbody>
    </table>
        
    </div>

    
</body>
</html>