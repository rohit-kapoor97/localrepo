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
.main_box{
    
         width:100%;
         max-width:600px;
         margin:auto;
         padding:0px 40px;
    
      /* justify-content:center; */
}


    </style>
</head>
<body>
<div class="main_box mt-5">
        <table class="table table-striped table-Light">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Delete</th>
             
               </tr>
               </thead>
               @php $count=1; @endphp
             @foreach($user as $user)
            <tr>
               
                <td>{{$count}}</td>
                <td>{{$user-> companyname}}</td>
            
                
            </tr>
               @php $count++ @endphp
              @endforeach
        </tbody>
    </table>
        
    </div>
    
</body>
</html>