@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container">
    <h2>Marketing Posts</h2>
    <a href="{{ route('marketing.create') }}" class="btn btn-primary mb-3">Add New Marketing Post</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Heading</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marketings as $marketing)
                <tr>
                    <td>{{ $marketing->id }}</td>
                    <td>{{ $marketing->slug }}</td>
                    <td><img src="{{ asset('storage/' . $marketing->img_one) }}" width="50"></td>
                    <td>{{ $marketing->heading_one }}</td>
                    <td>{{ $marketing->category }}</td>
                    <td>{{ $marketing->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('marketing.edit', $marketing->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('marketing.destroy', $marketing->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $marketings->links() }}
</div>
@endsection
