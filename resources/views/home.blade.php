@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- 
<a href="
https://docs.google.com/document/d/1d_D6ShdbMkuyRmyb67CZ2R89fy30jA5kwFBqebAqkd0/edit?tab=t.0 
https://docs.google.com/document/d/1xPdD7-3LqvHZd9yIINjYS38EbaiHTm_NzQ1z6_2_9lM/edit?tab=t.0
"></a> 
--}}