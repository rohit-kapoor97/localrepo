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
    width:400px;
    margin: 100px auto;
    padding:10px 50px;
    background-color:white;
    box-shadow:0px 5px 10px rgba(0,0,0,0.5); 
    justify-content:center;
}

input{
    width:100%;
    line-height:40px;
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
    
    
    
    <div class="main">
    <h1 class="text-success">hello</h1>
    <input type="text"  class="mt-3"  name="compname" placeholder="Company Name">
    <input type="text"  class="mt-3" name="coustname" placeholder="Name">
    <input type="text" class="mt-3"  name="coustnum" placeholder="Mobile No.">
    <div class="bt">
    <button type="submit" class="btn btn-primary mt-3" value="submit">Save</button>
    <button type="button" class="btn btn-primary mt-3">Cancel</button>
    </div>
    </div>


    
</body>
</html>