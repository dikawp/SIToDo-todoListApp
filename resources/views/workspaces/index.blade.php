<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workspaces</title>
</head>
<body>

    @extends('layouts.sidebar')

    @section('content')
    @vite('resources/js/datatable.js')
    <div class="container-sm">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mt-3">List Workspace</h3>
            <div class="">
                <a href="{{ route ('workspaces.create') }}" class="btn btn-outline-primary px-5">Create</a>
            </div>
        </div>
        <div class="table-responsive border p-3 rounded-3 mb-3">
            {{ $available }}
            @if (count($available) == 0)
                <a href="{{ route ('workspaces.create') }}" class="btn btn-outline-primary">Create new Workspace</a>
            @else
                <table class="table table-hover table-striped bg-white " id="workspaceTable">
                    <thead>
                        <tr>
                            <th>Workspace</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            @endif
        </div>
    </div>
    @endsection
    @push('scripts')
        <script type="module">
            $(document).ready(function() {
                $("#workspaceTable").DataTable({
                    serverSide: true,
                    processing: true,
                    ajax: "/getWorkspaces",
                    columns: [
                        { data: "namaWorkspace", name: "namaWorkspace" },
                        { data: "deskWorkspace", name: "deskWorkspace" },
                        { data: "actions", name: "actions", orderable: false, searchable: false }
                    ],
                    order: [[0, "desc"]],
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"],
                    ],
                });
            });
        </script>

        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
    @endpush
</body>
</html>
