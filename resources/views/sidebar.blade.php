<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>
    <style>
        .drop_main {
            width: 300px;
            height: 100%;
            background-color: white;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.4);
            position: absolute;
            left: 0px;
            margin: auto;
            padding: 50px;
        }

        .box {
            width: 200px;
            padding: 20px;
            font-size: 1rem;
            background-color: white;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            border: none;
        }

        .box a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="drop_main d-none d-lg-block">
        <h3>Dashboard</h3>
        <button class="mt-3 box"><a href="{{ route('comp.view') }}">Add Company</a></button>
        <button class="mt-3 box"><a href="{{ route('view.coust') }}">Add Customer</a></button>
        <button class="mt-3 box"><a href="{{ route('cust.view') }}">View Customer</a></button>
        <button class="mt-3 box"><a href="{{ route('show.amount') }}">Payment</a></button>
        <button class="mt-3 box"><a href="{{ route('user.all') }}">Customer Details</a></button>
    </div>


</body>

</html>
