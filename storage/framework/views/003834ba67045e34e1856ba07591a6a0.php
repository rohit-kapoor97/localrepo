<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Document</title>
    <style>
        header{
            width:1600px;
            margin:auto;
            padding:10px 20px;
            display:flex;
            justify-content:space-between;
            background-color:#301934;
           
        }
        .search{
          position:absolute;
          top:15px;
          left:1000px;
       
        }
        .search_bt{
            width:200px;
            /* line-height:30px; */
            background-color:black;
            padding:5px 10px;
            outline:none;
            border:none;
            border-radius:10px;
           
         }
    
         .search_bt:hover{
            outline:3px solid blue;
            border:none;
            background-color:white;
         }


    </style>
</head>
<body>
    <header>

<div class="container">
    <h2 class="text-white mt-2">Welcome</h2>

<div class="search">
    <form action="" method="Post">
<input type="text" class="search_bt" name="q" placeholder="Search">
<?php echo csrf_field(); ?>

<button type="submit" class="btn btn-primary">Search</button>
    </form>
    </div>
    
    <button type="button" class="btn btn-danger"><a href="<?php echo e(route('delete.user')); ?>">Logout</a></button>
   

</div>

    </header>


    
</body>
</html><?php /**PATH E:\xampp\htdocs\companyproject\resources\views/layouts/header.blade.php ENDPATH**/ ?>