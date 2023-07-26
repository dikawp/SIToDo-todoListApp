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

    <div class="container-fluid">
        <div class="grid text-center text-primary py-5">
            <div class="g-col-4">
                <h1>Content Help</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-5 justify-content-center border-top">
            <div class="grid text-center text-primary">
                <h1>SiToDo</h1>
                <div class="g-col-4">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <p class="text-center text-muted">@2023 SiToDo, All rights Reserved by kelompok2</p>
        </footer>
    </div>
    @endsection

</body>
</html>
