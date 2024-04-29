@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New Service</h1>
                            </div>
                            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="banner_image">Banner Image</label>
                                    <input id="banner_image" class="form-control" type="file" name="banner_image"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="image2">Image 2</label>
                                    <input id="image2" class="form-control" type="file" name="image2" />
                                </div>
                                <div class="form-group">
                                    <label for="image3">Image 3</label>
                                    <input id="image3" class="form-control" type="file" name="image3" />
                                </div>
                                <div class="form-group">
                                    <label for="heading_one">Heading One</label>
                                    <input id="heading_one" class="form-control" type="text" name="heading_one"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="desc_one">Description One</label>
                                    <textarea id="desc_one" class="form-control" name="desc_one" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="heading_two">Heading Two</label>
                                    <input id="heading_two" class="form-control" type="text" name="heading_two"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="desc_two_one">Descriptions of Heading Two</label>
                                    <input id="desc_two_one" class="form-control" type="text" name="desc_two_one"
                                        required /><br>
                                    <input class="form-control" type="text" name="desc_two_two" required /><br>
                                    <input class="form-control" type="text" name="desc_two_three" required /><br>
                                    <input class="form-control" type="text" name="desc_two_four" required /><br>
                                    <input class="form-control" type="text" name="desc_two_five" required /><br>
                                    <input class="form-control" type="text" name="desc_two_six" required /><br>
                                </div>
                                <div class="form-group">
                                    <label for="extra">Extra</label>
                                    <textarea id="extra" class="form-control summernote" name="extra" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
