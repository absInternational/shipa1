<div class="card">
    <div class="card-header">
        <h4>Order Details</h4>
    </div>
    <div class="card-body">
        <div class="container mt-4">

            <h2>Tracking Id of {{ $responseData['data']['id'] }}</h2>
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="text-left text-center">Vehicle Info</h2>
                    @php
                        $ymk = explode('*^-', $responseData['data']['ymk']);
                        $transport = explode('*^-', $responseData['data']['transport']);
                        $condition = explode('*^-', $responseData['data']['condition']);
                    @endphp
                    @if (isset($ymk[0]))
                        @if (count($ymk) > 1)
                            <div class="position-relative">
                                <span style="cursor:pointer;" id="moreVeh">{{ count($ymk) }} vehicles for
                                    Transport</span>
                                <div id="showVeh">
                                    @foreach ($ymk as $key => $val)
                                        <span style="font-size:14px;">{{ $val }}</span><br>
                                        <div class="d-flex justify-content-center">
                                            <span
                                                class="badge bg-info mx-2">{{ isset($condition[$key]) ? ($condition[$key] == 1 ? 'Open' : 'Enclosed') : 'Enclosed' }}</span>
                                            <span
                                                class="badge bg-primary mx-2">{{ isset($transport[$key]) ? ($transport[$key] == 1 ? 'Running' : 'Non-running') : 'Non-running' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <span>Vehicle Name : </span><br>
                            <div class="d-flex justify-content-center">
                                <span
                                    class="badge bg-warning mx-2">{{ isset($condition[0]) ? ($condition[0] == 1 ? 'Open' : 'Enclosed') : 'Enclosed' }}</span>
                                <span
                                    class="badge bg-primary mx-2">{{ isset($transport[0]) ? ($transport[0] == 1 ? 'Running' : 'Non-running') : 'Non-running' }}</span>
                            </div>
                        @endif
                    @endif
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
                        <tr>
                            <th>Booked On</th>
                            <td>
                                @php
                                    if (isset($responseData['data']['date_of_booked'])) {
                                        if (
                                            date('Y-m-d', strtotime($responseData['data']['created_at'])) <=
                                            date('Y-m-d', strtotime($responseData['data']['date_of_booked']))
                                        ) {
                                            $booked = $responseData['data']['date_of_booked'];
                                            echo date('M, d Y D', strtotime($responseData['data']['date_of_booked']));
                                        } else {
                                            $booked = $responseData['data']['created_at'];
                                            echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                        }
                                    } else {
                                        // dd($responseData);
                                        echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                    }
                                    if (
                                        $responseData['data']['pstatus'] > 8 &&
                                        $responseData['data']['pstatus'] <= 14
                                    ) {
                                        echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                    }
                                @endphp
                            </td>
                        </tr>
                        @foreach ($responseData['order'] as $row)
                            <tr>
                                <th>
                                    @if ($row['pstatus'] == 9)
                                        Schedulling
                                    @elseif ($row['pstatus'] == 10)
                                        Scheduled
                                    @elseif ($row['pstatus'] == 11)
                                        Pickup
                                    @elseif ($row['pstatus'] == 12)
                                        Delivered
                                    @elseif ($row['pstatus'] == 13)
                                        Completed
                                    @elseif ($row['pstatus'] == 14)
                                        Cancelled
                                    @endif
                                </th>
                                <td>
                                    @php
                                        $listed = $row['created_at'];
                                        if ($row['pstatus'] == 9) {
                                            if (
                                                date('Y-m-d', strtotime($booked)) <=
                                                date('Y-m-d', strtotime($row['created_at']))
                                            ) {
                                                $listed = $listed;
                                                echo date('M, d Y D', strtotime($row['created_at']));
                                            } else {
                                                $listed = $booked;
                                                echo date('M, d Y D', strtotime($booked));
                                            }
                                            if (
                                                $responseData['data']['pstatus'] > 9 &&
                                                $responseData['data']['pstatus'] <= 14
                                            ) {
                                                echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                            }
                                        } elseif ($row['pstatus'] == 10) {
                                            // dd($row, $booked);
                                            // dd($listed);
                                            if (
                                                date('Y-m-d', strtotime($listed)) <=
                                                date('Y-m-d', strtotime($row['created_at']))
                                            ) {
                                                $dispatch = $row['created_at'];
                                                echo date('M, d Y D', strtotime($row['created_at']));
                                            } else {
                                                $dispatch = $listed;
                                                echo date('M, d Y D', strtotime($listed));
                                            }
                                            if (
                                                $responseData['data']['pstatus'] > 10 &&
                                                $responseData['data']['pstatus'] <= 14
                                            ) {
                                                echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                            }
                                        } elseif ($row['pstatus'] == 11) {
                                            if (
                                                date('Y-m-d', strtotime($dispatch)) <=
                                                date('Y-m-d', strtotime($responseData['data']['pickup_date']))
                                            ) {
                                                if (
                                                    date('Y-m-d', strtotime($row['created_at'])) <=
                                                    date('Y-m-d', strtotime($responseData['data']['pickup_date']))
                                                ) {
                                                    $pickup = $responseData['data']['pickup_date'];
                                                    echo date(
                                                        'M, d Y D',
                                                        strtotime($responseData['data']['pickup_date']),
                                                    );
                                                } else {
                                                    $pickup = $row['created_at'];
                                                    echo date('M, d Y D', strtotime($row['created_at']));
                                                }
                                            } else {
                                                $pickup = $dispatch;
                                                echo date('M, d Y D', strtotime($dispatch));
                                            }
                                            if (
                                                $responseData['data']['pstatus'] > 11 &&
                                                $responseData['data']['pstatus'] <= 14
                                            ) {
                                                echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                            }
                                        } elseif ($row['pstatus'] == 12) {
                                            if (
                                                date('Y-m-d', strtotime($pickup)) <=
                                                date('Y-m-d', strtotime($responseData['data']['delivery_date']))
                                            ) {
                                                if (
                                                    date('Y-m-d', strtotime($row['created_at'])) <=
                                                    date('Y-m-d', strtotime($responseData['data']['delivery_date']))
                                                ) {
                                                    echo date(
                                                        'M, d Y D',
                                                        strtotime($responseData['data']['delivery_date']),
                                                    );
                                                } else {
                                                    echo date('M, d Y D', strtotime($row['created_at']));
                                                }
                                            } else {
                                                echo date('M, d Y D', strtotime($pickup));
                                            }
                                            if (
                                                $responseData['data']['pstatus'] > 12 &&
                                                $responseData['data']['pstatus'] <= 14
                                            ) {
                                                echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                            }
                                        } elseif ($responseData['data']['pstatus'] == 13) {
                                            echo date('M, d Y D', strtotime($row['created_at']));
                                            echo ' <i class="far fa-check-circle mr-2 text-success"></i>';
                                        } elseif ($responseData['data']['pstatus'] == 14) {
                                            echo date('M, d Y D', strtotime($row['created_at']));
                                            echo ' <i class="fa fa-times-circle-o mr-2 text-danger" aria-hidden="true"></i>';
                                        }
                                    @endphp
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
                            <th>Pick up with in</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}
                            </th>
                            <td>{{ $price1 }}</td>
                            <td>pickup 1 day <a class="badge bg-danger mx-2" href="">guaranteed</a></td>
                        </tr>
                        <tr>
                            <th>{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</th>
                            <td>{{ $price2 }}</td>
                            <td>pickup 2 days <a class="badge bg-warning mx-2" href="">urgent</a></td>
                        </tr>
                        <tr>
                            <th>{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</th>
                            <td>{{ $price3 }}</td>
                            <td>pickup 3 days <a class="badge bg-primary mx-2" href="">regular</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
