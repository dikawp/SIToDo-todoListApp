<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
    <div class="container-sm m-auto my-5 d-flex flex-row justify-content-between">
        <div class="left w-50 d-lg-flex flex-column justify-content-center">
            <h1 class="fw-medium text-primary mt-5">Organize Your <br> Task More Easily <br> With US</h1>
            <h5 class=" fw-normal text-secondary my-4">SiToDo helps you to get Task Completed.</h5>
            <div>
                <a class="btn btn-primary m-auto mt-4 fs-5">Get Started</a>
                <a class="btn btn-primary bg-transparent text-primary border-0 m-auto mt-4 fs-5">Register</a>
            </div>
        </div>
        <div class="right w-50 text-end">
            <img class="img-fluid w-75" src="{{ Vite::asset('resources/images/ilustLanding.jpg') }}" alt="">
        </div>
    </div>
    <div class="container-sm bg-light mt-5">
        <h1>p</h1>
    </div>
    @endsection

</body>
</html>
