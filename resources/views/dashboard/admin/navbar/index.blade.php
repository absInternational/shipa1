@extends('dashboard.admin.layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Navbar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6> --}}
            <a href="{{ route('navbar.create') }}" class="m-0 btn btn-primary">Add Menu</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Navbar Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->menu_name }}</td>
                            <td>
                                @if ($menu->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td nowrap >
                                <a href="{{ route('navbar.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('navbar.destroy', $menu->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Navbar?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
