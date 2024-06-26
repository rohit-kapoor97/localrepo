<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="drop_main">
        <h3>dashboard</h3>
       <button class="mt-3 box"><a href="<?php echo e(route('comp.view')); ?>">Add Company</a></button> 
       <button class="mt-3 box"><a href="<?php echo e(route('view.coust')); ?>">Add Coustmer</a></button> 
        <button class="mt-3 box"><a href="<?php echo e(route('cust.view')); ?>">View Coustmer</a></button>
        <button class="mt-3 box"><a href="<?php echo e(route('show.amount')); ?>">Payment</a></button>
        <button class="mt-3 box"><a href="<?php echo e(route('user.all')); ?>">Coustmer Details</a></button>
    </div>
    <div class="main">
    <h1 class="text-success">hello</h1>
    <form action="<?php echo e(route('edit.coust',$users->id)); ?>" Method="Post">
        <?php echo csrf_field(); ?>

        <input type="hidden" value="<?php echo e($users->id); ?>">

    <input type="text"  class="mt-3" value="<?php echo e($users-> name); ?>" name="coustname" placeholder="Name">
    <input type="text" class="mt-3" value="<?php echo e($users-> contact); ?>"  name="coustnum" placeholder="Mobile No.">

    <div class="bt">
    <button type="submit" class="btn btn-primary mt-3" value="submit">Save</button>
    <button type="button" class="btn btn-primary mt-3">Cancel</button>
   
    </div>
    </form>
    <button class="btn btn-primary mt-3 viewbt"><a href="<?php echo e(route('user.delete', $users->id )); ?>" class="btview">Delete</a></button>
   
    </div>


    
</body>
</html><?php /**PATH E:\xampp\htdocs\companyproject\resources\views/update.blade.php ENDPATH**/ ?>