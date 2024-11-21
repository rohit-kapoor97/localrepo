<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Document</title>
    <style>
        body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
        .main{
    width:100%;
    max-width:900px;
    margin:auto;
    padding:0px 40px;
    
    /* justify-content:center; */
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
    width:200px;
    margin:auto;
    padding:5px 8px;
    display:flex;
    gap:20px;
}

h3{
    margin:0px 35px;
}
.bt_marg{
    text-decoration:underline;
}
 </style>
</head>
<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main mt-5">
        <table class="table table-striped table-Light table-responsive">
            <tbody >
                <thead class="table-dark">
                <tr>
                <th>Sr.No</th>
                <th>Item</th>
                <th>Amount</th>
                <th>Payment Status</th>
                <th>Date</th>
               </tr>
               </thead>
               <?php $count=1; ?>
             <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
           
                <td><?php echo e($count); ?></td>
                <td><?php echo e($user -> item); ?></td>
                <td><?php echo e($user -> amount); ?></td>
                <td><?php echo e($user -> type); ?></td>
                <td><?php echo e($user -> created_at->format('D-m-y')); ?></td>
               
            </tr>
               <?php $count++ ?>
               <h4 class="mb-3">
               <a href="<?php echo e(route('amount.view', $user->cust_id)); ?>" class="bt-marg">

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              Payment</a></h4>
        </tbody>
    </table>
        
    </div>


    
</body>
</html><?php /**PATH C:\xampp\htdocs\companyproject\resources\views/itemlist.blade.php ENDPATH**/ ?>