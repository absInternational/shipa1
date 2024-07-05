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
                                <h1 class="h4 text-gray-900 mb-4">Edit Port to Port</h1>
                            </div>
                            <form action="{{ route('port-to-ports.update', $portToPort->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Port Detail ID</label>
                                    <input class="form-control" type="number" name="port_detail_id" placeholder="Port Detail ID" value="{{ old('port_detail_id', $portToPort->port_detail_id) }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Port Name</label>
                                    <input class="form-control" type="text" name="delivery_port_name" placeholder="Delivery Port Name" value="{{ old('delivery_port_name', $portToPort->delivery_port_name) }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Country</label>
                                    <input class="form-control" type="text" name="delivery_country" placeholder="Delivery Country" value="{{ old('delivery_country', $portToPort->delivery_country) }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Latitude</label>
                                    <input class="form-control" type="text" name="delivery_latitude" placeholder="Delivery Latitude" value="{{ old('delivery_latitude', $portToPort->delivery_latitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Longitude</label>
                                    <input class="form-control" type="text" name="delivery_longitude" placeholder="Delivery Longitude" value="{{ old('delivery_longitude', $portToPort->delivery_longitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" type="number" name="price" placeholder="Price" step="0.01" value="{{ old('price', $portToPort->price) }}" required />
                                </div>
                                <button type="submit" class="btn btn-primary">Update Port to Port</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
