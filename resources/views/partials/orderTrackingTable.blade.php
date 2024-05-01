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
                            {{ $row['created_at'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
