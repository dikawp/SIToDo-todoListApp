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
        <div class="container py-5">
            <div class="row">
                <div class="project-content-pl col-12 col-lg-6 d-flex flex-column">
                    <h2 class="mb-4 mt-4 mt-lg-0 text-primary">
                        Tell Us About Your SiTodo Experience And How We Can Help</h2>
                    <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam fugit vitae laborum aliquam,
                        ducimus quod enim repellat accusantium mollitia? Ab facilis voluptate enim necessitatibus reiciendis
                        impedit alias sit voluptatibus velit?</h5>
                </div>

                <div class="col-12 col-lg-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label shadow-sm">
                                <strong class="fs-5">Full Name</strong>
                            </label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label shadow-sm">
                                <strong class="fs-5">Email Address</strong>
                            </label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="textarea" class="form-label shadow-sm">
                                <strong class="fs-5">Description</strong>
                            </label>
                            <textarea class="form-control" id="textarea" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center mt-5 ">
                            <button type="submit" class="btn btn-primary">
                                <strong class="fs-5">Submit</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <footer class="py-3 my-5 justify-content-center border-top">
                <div class="grid text-center text-primary">
                    <h1>SiToDo</h1>
                    <div class="g-col-4">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <p class="text-center text-muted">@2023 SiToDo, All rights Reserved by kelompok2</p>
            </footer>
        </div>
    @endsection

</body>
</html>
