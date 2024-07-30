@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit NationWide Transport</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('nationwide-transports.index') }}" class="m-0 btn btn-primary">Back to List</a>
            </div>
            <div class="card-body">
                <form action="{{ route('nationwide-transports.update', $nationWideTransport->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $nationWideTransport->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status"
                            required>
                            <option value="1" {{ old('status', $nationWideTransport->status) == 1 ? 'selected' : '' }}>
                                Active</option>
                            <option value="0" {{ old('status', $nationWideTransport->status) == 0 ? 'selected' : '' }}>
                                Inactive</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Details</label>
                        <div id="details-container">
                            @foreach ($nationWideTransport->details as $index => $detail)
                                <div class="detail-container mb-3">
                                    <!-- Hidden input for ID -->
                                    <input type="hidden" name="details[{{ $index }}][id]"
                                        value="{{ $detail->id }}">

                                    <div class="form-group">
                                        <label for="details[{{ $index }}][heading]">Heading</label>
                                        <input type="text"
                                            class="form-control @error("details.{$index}.heading") is-invalid @enderror"
                                            id="details[{{ $index }}][heading]"
                                            name="details[{{ $index }}][heading]"
                                            value="{{ old("details.{$index}.heading", $detail->heading) }}" required>
                                        @error("details.{$index}.heading")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="details[{{ $index }}][description]">Description</label>
                                        <textarea class="form-control @error("details.{$index}.description") is-invalid @enderror"
                                            id="details[{{ $index }}][description]" name="details[{{ $index }}][description]" rows="3"
                                            required>{{ old("details.{$index}.description", $detail->description) }}</textarea>
                                        @error("details.{$index}.description")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="details[{{ $index }}][image]">Image</label>
                                        <input type="file"
                                            class="form-control image-input @error("details.{$index}.image") is-invalid @enderror"
                                            id="details[{{ $index }}][image]"
                                            name="details[{{ $index }}][image]">
                                        @if ($detail->image)
                                            <img src="{{ asset($detail->image) }}" alt="Image" class="img-preview mt-2"
                                                style="max-height: 100px; max-width: 100%; height: auto; display: block;">
                                        @endif
                                        @error("details[{{ $index }}][image]")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Display existing images on page load
            $('.img-preview').each(function() {
                if ($(this).attr('src')) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            // Image preview functionality for file inputs
            $(document).on('change', '.image-input', function() {
                var file = this.files[0];
                var reader = new FileReader();
                var preview = $(this).siblings('.img-preview');

                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                    preview.show();
                };

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.hide();
                }
            });
        });
    </script>
@endsection
