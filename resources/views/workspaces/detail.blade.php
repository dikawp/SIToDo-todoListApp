<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Workspace</title>
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="container-sm">
        <h3 class="mt-3">Detail Workspace</h3>
        <div class="border p-3 rounded-2 mb-2">
            <p class="fw-bolder">Workspace: <br>
                <span>{{ $workspace->namaWorkspace }}</span>
            </p>
            <p class="fw-bolder">Description: <br>
                <span>{{ $workspace->deskWorkspace }}</span>
            </p>
            <div class="card-footer">
                <p>Member Lists</p>
                {{-- {{ $usersName }} --}}
                <div style="height: 100px" class="card-footer overflow-scroll">
                    <table class="table table-striped table-hover">
                        @foreach ( $usersName as $name )
                        <tr>
                            <td>{{ $name->name }}</td>
                            <td>{{ $name->email }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="border p-3 rounded-2 mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mt-3">Tasks</h6>
                {{-- <div class="">
                    <a href="" class="btn btn-outline-primary px-5">Create</a>
                </div> --}}
            </div>
            <div class="table-responsive border p-3 rounded-3 mb-3">
                {{-- @if ()

                @else

                @endif --}}
                <a href="{{ route ('tasks.show',['task' => $workspace->id])}}" class="btn btn-outline-primary">Create new Task</a>
                {{ $member }}
                <table class="table table-hover table-striped bg-white " id="workspaceTable">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Start-Date</th>
                            <th>Due-Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach ($task as $tasks )
                    <tbody>
                        <td>{{ $tasks->namaTask }}</td>
                        <td>{{ $tasks->startDate }}</td>
                        <td>{{ $tasks->dueDate }}</td>
                        <td>{{ $tasks->status }}</td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>