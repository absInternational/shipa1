<div class="card">
    <div class="card-header">
        <h4>Order Details</h4>
    </div>
    <div class="card-body">
        <div class="container mt-4">

            <span>Vehicle Name: {{ $responseData['data']['ymk'] }}</span>
            <div class="d-flex justify-content-center">
                @isset($condition[0])
                    <span class="badge badge-warning mx-2">{{ $condition[0] == 1 ? 'Open' : 'Enclosed' }}</span>
                @else
                    <span class="badge badge-warning mx-2">Enclosed</span>
                @endisset

                @isset($transport[0])
                    <span class="badge badge-primary mx-2">{{ $transport[0] == 1 ? 'Running' : 'Non-running' }}</span>
                @else
                    <span class="badge badge-primary mx-2">Non-running</span>
                @endisset
            </div>

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
            <br><br>
            {{-- {{ dd($responseData) }} --}}
            <?php
            if ($responseData['price'] > 0) {
                if ($responseData['price'] > 0 && $responseData['price'] <= 300) {
                    $price1 = $responseData['price'] + 150;
                    $price2 = $responseData['price'] + 100;
                    $price3 = $responseData['price'];
                } elseif ($responseData['price'] > 300 && $responseData['price'] <= 700) {
                    $price1 = $responseData['price'] + 200;
                    $price2 = $responseData['price'] + 150;
                    $price3 = $responseData['price'] + 50;
                } elseif ($responseData['price'] > 700 && $responseData['price'] <= 1000) {
                    $price1 = $responseData['price'] + 250;
                    $price2 = $responseData['price'] + 200;
                    $price3 = $responseData['price'] + 100;
                } elseif ($responseData['price'] > 1000 && $responseData['price'] <= 1500) {
                    $price1 = $responseData['price'] + 300;
                    $price2 = $responseData['price'] + 250;
                    $price3 = $responseData['price'] + 150;
                } elseif ($responseData['price'] > 1500 && $responseData['price'] <= 2000) {
                    $price1 = $responseData['price'] + 400;
                    $price2 = $responseData['price'] + 350;
                    $price3 = $responseData['price'] + 250;
                } else {
                    $price1 = $responseData['price'] + 500;
                    $price2 = $responseData['price'] + 450;
                    $price3 = $responseData['price'] + 350;
                }
            }
            // dd($price1, $price2, $price3);
            ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>City To City</th>
                            <th>Prices</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $responseData['data']['originzsc'] }} - {{ $responseData['data']['destinationzsc'] }}
                            </td>
                            <td>{{ $price1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</td>
                            <td>{{ $price2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</td>
                            <td>{{ $price3 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
