<div class="card">
    <div class="card-header">
        <h4>Order Details</h4>
    </div>
    <div class="card-body">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <p>Order #:</p>
                </div>
                <div class="col-md-3">
                    <p>{{ $responseData['data']['id'] }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Pickup:</p>
                </div>
                <div class="col-md-3">
                    <p>{{ $responseData['data']['originzsc'] }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Delivery:</p>
                </div>
                <div class="col-md-3">
                    <p>{{ $responseData['data']['destinationzsc'] }}</p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($responseData['order'] as $row)
                            <tr>
                                <td>
                                    @if ($row['pstatus'] == 13)
                                        Completed
                                    @elseif ($row['pstatus'] == 10)
                                        Scheduled
                                    @elseif ($row['pstatus'] == 11)
                                        Pickup
                                    @endif
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($row['created_at'])->format('M d, Y D') }}
                                    <i class="far fa-check-circle mr-2 text-success"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
