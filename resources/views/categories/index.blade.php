<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>

    @extends('layouts.sidebar')

    @section('content')
    <div class="container-sm">
        <h3 class="mt-3">Category</h3>

        <div class="table-responsive border p-3 rounded-3 mb-3 mt-3">
            <div class="text-end">
                {{-- {{ $category }} --}}
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="" class="form-control" id="category" name="category" value="">
                    <button type="submit" class="btn btn-primary my-2">Add New Category</button>
                </form>
            </div>
            <table class="table table-hover table-striped bg-white " id="workspaceTable">
                <thead class="text-center">
                    <tr>
                        <th>Category</th>
                        <th>#</th>
                    </tr>
                </thead>
                @foreach ( $category as $categories)
                <tbody class="text-center">
                    <tr>
                        <td>{{ $categories->categoryName }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', ['category' => $categories->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{-- @if (count($available) == 0)
            @else
            @endif --}}
        </div>
    </div>
    @endsection
</body>
</html>
