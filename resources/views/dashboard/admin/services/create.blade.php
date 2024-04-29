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
                            <form action="{{ route('services.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="form-control" type="file" name="banner_image" placeholder="Banner Image" required />
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input class="form-control" type="file" name="image2" placeholder="Image 2" />
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input class="form-control" type="file" name="image3" placeholder="Image 3" />
                                </div>
                                <div class="form-group">
                                    <label>Heading One</label>
                                    <input class="form-control" type="text" name="heading_one" placeholder="Heading One" required />
                                </div>
                                <div class="form-group">
                                    <label>Description One</label>
                                    <textarea class="form-control" name="desc_one" rows="4" placeholder="Description One" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading Two</label>
                                    <input class="form-control" type="text" name="heading_two" placeholder="Heading Two" required />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading Two</label>
                                    <input class="form-control" type="text" name="desc_two_one" placeholder="Desc Two One" required /><br>
                                    <input class="form-control" type="text" name="desc_two_two" placeholder="Desc Two Two" required /><br>
                                    <input class="form-control" type="text" name="desc_two_three" placeholder="Desc Two Three" required /><br>
                                    <input class="form-control" type="text" name="desc_two_four" placeholder="Desc Two Four" required /><br>
                                    <input class="form-control" type="text" name="desc_two_five" placeholder="Desc Two Five" required /><br>
                                    <input class="form-control" type="text" name="desc_two_six" placeholder="Desc Two Six" required /><br>
                                </div>
                                <div class="form-group">
                                    <label>Extra</label>
                                    <textarea class="form-control summernote" name="extra" rows="4" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
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
