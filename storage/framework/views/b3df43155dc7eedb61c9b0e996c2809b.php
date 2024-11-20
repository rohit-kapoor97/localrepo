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

        /* .main {
            width: 400px;
            margin: 100px auto;
            padding: 10px 50px;
            background-color: white;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            justify-content: center;
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
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        h3 {
            margin: 0px 35px;
        }

        .can_btn {
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
            <h1 class="text-success text-center">Canteen Name</h1>
            <form action="<?php echo e(route('comp.add')); ?>" Method="Post">
                <?php echo csrf_field(); ?>
    
                <input type="text" class="mt-3" name="namecompany" placeholder="Company Name">
                <input type="hidden" value="<?php echo e(Auth::id()); ?>" name="compid">
    
    
                <div class="bt text-center mb-2">
                    <button type="submit" class="btn btn-primary mt-3 w-25" value="submit">Save</button>
                    <button type="button" class="btn btn-primary mt-3"><a href="<?php echo e(route('user.all')); ?>"
                            class="can_btn">Cancel</a> </button>
                </div>
            </form>
            <div class="text-center">
                <button class= "btn btn-success text-white" id="viewbt">View Company</button>
            </div>
    
            <div id="showbt"></div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#viewbt").click(function() {
                $.ajax({
                    url: "<?php echo e(route('view.comp')); ?>",
                    success: function(result) {
                        $("#showbt").html(result);
                    }
                });
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\companyproject\resources\views/addcomp.blade.php ENDPATH**/ ?>