@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container">
    <h2>Marketing Posts</h2>
    <a href="{{ route('marketing.create') }}" class="btn btn-primary mb-3">Add New Marketing Post</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Image One</th>
                <th>Heading One</th>
                <th>Description One</th>
                <th>Heading Two</th>
                <th>Description Two</th>
                <th>Image Two</th>
                <th>Heading Three</th>
                <th>Description Three</th>
                <th>Image Three</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($marketings as $marketing)
                <tr>
                    <td>{{ $marketing->id }}</td>
                    <td>{{ $marketing->slug }}</td>
                    
                    <td>
                        @if($marketing->img_one)
                            <img src="{{ asset($marketing->img_one) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    <td>{{ $marketing->heading_one }}</td>
                    <td>{{ $marketing->desc_one }}</td>
                    <td>{{ $marketing->heading_two }}</td>
                    <td>{{ $marketing->desc_two }}</td>

                    <td>
                        @if($marketing->img_two)
                            <img src="{{ asset($marketing->img_two) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    <td>{{ $marketing->heading_three }}</td>
                    <td>{{ $marketing->desc_three }}</td>

                    <td>
                        @if($marketing->img_three)
                            <img src="{{ asset($marketing->img_three) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    <td>{{ $marketing->category }}</td>
                    <td>
                        <span class="badge {{ $marketing->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $marketing->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('marketing.edit', $marketing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('marketing.destroy', $marketing->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="14" class="text-center">No Marketing Posts Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $marketings->links() }}
    </div>
</div>
@endsection
