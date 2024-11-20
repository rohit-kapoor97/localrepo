<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
               <?php $count=1; ?>
             <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
              
                <td><?php echo e($count); ?></td>
                <td><?php echo e($user-> name); ?></td>
                <td><?php echo e($user -> comp_name); ?></td>
                <td><?php echo e($user -> contact); ?></td>
                <td><a href="<?php echo e(route('view.edit', $user->id)); ?>">Edit</a></td>

               </tr>
               <?php $count++ ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php if($users): ?>
    <?php echo e($users->appends(Request::except('page'))->links()); ?>

    <?php endif; ?>

</div>




    
</body>
</html><?php /**PATH C:\xampp\htdocs\companyproject\resources\views/search.blade.php ENDPATH**/ ?>