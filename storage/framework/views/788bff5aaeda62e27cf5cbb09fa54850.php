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
               <?php $count=1; ?>
             <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               
                <td><?php echo e($count); ?></td>
                <td><?php echo e($user-> companyname); ?></td>
                <td><a href="<?php echo e(route('comp.delete', $user->id)); ?>">Delete</a></td>
            
                
            </tr>
               <?php $count++ ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        
    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\companyproject\resources\views/viewcomp.blade.php ENDPATH**/ ?>