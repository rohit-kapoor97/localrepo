<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        /* .main {
            width: 400px;
            max-width: 100%;
            margin: 100px auto;
            padding: 10px 50px;
            background-color: white;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            justify-content: center;
        }
        @media (min-width: 768px) {
   body {
      flex-direction: row;
      gap: 2rem;
    }
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
            width: 200px;
            max-width: 100%;
            margin: auto;
            padding: 5px 8px;
            display: flex;
            gap: 20px;
        }

  

        h3 {
            margin: 0px 35px;
        }

        select {
            width: 100%;
            /* line-height:60px; */
            padding: 15px;
            border-radius: 10px;
            border: 2px solid black;
        }

        select:hover {
            outline: 2px solid blue;
        }
    </style>
</head>

<body>
    @include('layouts.header')
    @include('sidebar')


<div class="container">
    <div class="main">
        <h2 class="text-success text-center">Customer Detali!</h2>
        <form action="{{ route('add.user') }}" Method="Post">
            @csrf

            <select class="mt-3 form-select form-select-lg" aria-label=".form-select-lg example" name="compname">
                <option selected>Select Company</option>
                @foreach ($user as $comp)
                    <option>{{ $comp->companyname }}</option>
                @endforeach

            </select>
            <input type="text" class="mt-3" name="coustname" placeholder="Name">
            <input type="text" class="mt-3" name="coustnum" placeholder="Mobile No.">
            <input type="hidden" value="{{ Auth::id() }}" name="userid">
            <div class="bt text-center">
                <button type="submit" class="btn btn-primary mt-3" value="submit">Save</button>
                <button type="button" class="btn btn-primary mt-3"> <a href="{{route('user.all')}}" class="text-white text-decoration-none">Cancel</a></button>

            </div>
        </form>
    </div>

</div>

</body>

</html>
