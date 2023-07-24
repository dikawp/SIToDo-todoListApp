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

    <div class="container">
        <div class="row py-5">
            <div class="d-flex flex-column-reverse flex-lg-row py-5">
                <div class="project-content-pr col-12 col-lg-6 d-flex flex-column justify-content-center">
                    <h2 class="mb-4 mt-4 mt-lg-0 text-primary">
                        More Easy & More Efficient
                    </h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ Vite::asset('resources/images/img2.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="d-block d-lg-flex py-5">
                <div class="col-12 col-lg-6">
                    <img src="{{ Vite::asset('resources/images/img3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="project-content-pl col-12 col-lg-6 d-flex flex-column justify-content-center">
                    <h2 class="mb-4 mt-4 mt-lg-0 text-primary">
                        More Easy & More Efficient
                    </h2>
                    <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam fugit vitae laborum aliquam, ducimus quod enim repellat accusantium mollitia? Ab facilis voluptate enim necessitatibus reiciendis impedit alias sit voluptatibus velit?</h5>
                </div>
            </div>

            <div class="d-flex flex-column-reverse flex-lg-row py-5">
                <div class="project-content-pr col-12 col-lg-6 d-flex flex-column justify-content-center">
                    <h2 class="mb-4 mt-4 mt-lg-0 text-primary">
                        More Easy & More Efficient
                    </h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ Vite::asset('resources/images/img2.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="grid text-center text-primary py-5">
        <div class="g-col-5">
            <h1>Start Organizing Your Work</h1>
            <h1>With Us, Si ToDo</h1>
        </div>
    </div>

    <div class="grid text-center text-primary py-5">
        <button type="button" class="btn btn-primary btn-lg">Get Started</button>
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
