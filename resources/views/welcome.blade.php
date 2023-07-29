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

        <div class="container-fluid">
            <div class="grid text-center text-primary py-5">
                <div class="g-col-4">
                    <h1>Manage Your Task Just Got a Lot Easier</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-5">
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

        <div class="container py-5">
            <div class="row g-4">
                <h2 class="text-center mb-4 mb-md-5 fs-1 text-primary">
                    <strong>Why Choose Us?</strong>
                </h2>

                <div class="col-md-4">
                    <div class="card text-bg-primary text-light shadow p-4">
                        <div class="card-body">
                            <img src="{{ Vite::asset('resources/images/img2.jpg') }}" class="img-thumbnail" alt="">
                            <h5 class="card-title text-center mt-4 fs-4">
                                <strong>Master Erlang</strong>
                            </h5>
                            <p class="card-text my-4">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos dolorem nam nobis commodi magnam? "</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-primary text-light shadow p-4">
                        <div class="card-body">
                            <img src="{{ Vite::asset('resources/images/img2.jpg') }}" class="img-thumbnail" alt="">
                            <h5 class="card-title text-center mt-4 fs-4">
                                <strong>Master Erlang</strong>
                            </h5>
                            <p class="card-text my-4">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos dolorem nam nobis commodi magnam? "</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-primary text-light shadow p-4">
                        <div class="card-body">
                            <img src="{{ Vite::asset('resources/images/img2.jpg') }}" class="img-thumbnail" alt="">
                            <h5 class="card-title text-center mt-4 fs-4">
                                <strong>Master Erlang</strong>
                            </h5>
                            <p class="card-text my-4">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos dolorem nam nobis commodi magnam? "</p>
                        </div>
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
