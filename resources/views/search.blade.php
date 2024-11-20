<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Document</title>
    <style>
                body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
.main{
    width:100%;
    max-width:600px;
    margin:auto;
    padding:0px 40px;
    
    /* justify-content:center; */
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
@include('sidebar')

    <div class="main mt-5">
       <table class="table table-striped table-Light mt-3 table-responsive">
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
    @if($users)
    {{ $users->appends(Request::except('page'))->links() }}
    @endif

</div>




    
</body>
</html>