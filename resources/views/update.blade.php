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
    width:400px;
    margin: 100px auto;
    padding:10px 50px;
    background-color:white;
    box-shadow:0px 5px 10px rgba(0,0,0,0.5); 
    justify-content:center;
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
    width:245px;
    margin:auto;
    padding:5px 8px;
    display:flex;
    gap:10px;
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
.viewbt{
   
    position:absolute;
    top:392px;
    left:800px;
 
}
.btview{
    color:white;
   
}
.btview:hover{
    text-decoration:none;
    color:white;
}
 </style>
</head>
<body>
@include('layouts.header')
@include('sidebar')
    <div class="main">
    <h1 class="text-success">Edit Details</h1>
    <form action="{{route('edit.coust',$users->id)}}" Method="Post">
        @csrf

        <input type="hidden" value="{{$users->id}}">

    <input type="text"  class="mt-3" value="{{$users-> name}}" name="coustname" placeholder="Name">
    <input type="text" class="mt-3" value="{{$users-> contact}}"  name="coustnum" placeholder="Mobile No.">

    <div class="bt">
    <button type="submit" class="btn btn-primary mt-3" value="submit">Save</button>
    <button type="button" class="btn btn-primary mt-3"> <a href="{{route('user.all')}}" class="text-white text-decoration-none">Cancel</a></button>
   
    </div>
    </form>
    <button class="btn btn-primary mt-3 viewbt" id="btn">
        <a href="{{route('user.delete', $users->id )}}" class="btview">Delete</a>
    </button>

 </div>

<script>
    var button= document.getElementById('btn');
</script>
    
</body>
</html>