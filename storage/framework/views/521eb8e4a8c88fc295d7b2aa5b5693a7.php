<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        /* .main{
    width:400px;
    margin: 100px auto;
    padding:10px 50px;
    background-color:white;
    box-shadow:0px 5px 10px rgba(0,0,0,0.5);
    justify-content:center;
} */

        input {
            width: 100%;
            /* line-height:60px; */
            padding: 15px;
            border-radius: 10px;
            outline: none;
        }

        input:hover {
            outline: 2px solid blue;
        }

        input::placeholder {
            padding: 5px 8px;

        }

        .bt {
            width: 245px;
            margin: auto;
            padding: 5px 8px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        h3 {
            margin: 0px 35px;
        }

        .viewbt {
            width:100px;
            max-width: 100%;
            position: relative;
          
          

        }

        .btview {
            color: white;

        }

        .btview:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="main">
            <h1 class="text-success">Edit Details</h1>
            <form action="<?php echo e(route('edit.coust', $users->id)); ?>" Method="Post">
                <?php echo csrf_field(); ?>

                <input type="hidden" value="<?php echo e($users->id); ?>">

                <input type="text" class="mt-3" value="<?php echo e($users->name); ?>" name="coustname" placeholder="Name">
                <input type="text" class="mt-3" value="<?php echo e($users->contact); ?>" name="coustnum"
                    placeholder="Mobile No.">

                <div class="bt">
                    <button type="submit" class="btn btn-primary mt-3" value="submit">Save</button>
                    <button type="button" class="btn btn-primary mt-3"> <a href="<?php echo e(route('user.all')); ?>"
                            class="text-white text-decoration-none">Cancel</a></button>
                </div>
            </form>
            <div class="text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" 
            data-bs-whatever="@getbootstrap" class="btn btn-primary mt-3 viewbt " id="btn"> Delete </button>
        </div>
        </div>
    </div>



  


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">alert message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
         <p class="form-control  text-danger text-center fs-4" >Are you sure you want to delete user</p>
          </div>
   
      </div>
      <div class="modal-footer justify-content-center">
        
        <button type="button" class="btn btn-primary"> <a href="<?php echo e(route('user.delete', $users->id)); ?>" class="btview">yes</a></button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
    <script>
        var button = document.getElementById('btn');
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\companyproject\resources\views/update.blade.php ENDPATH**/ ?>