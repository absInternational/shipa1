@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('POST')
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
                                </div>
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email', $user->email) }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control @error('role') is-invalid @enderror" name="role"
                                            required>
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                            </option>
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>
                                                Manager</option>
                                            <option value="blog" {{ $user->role == 'blog' ? 'selected' : '' }}>Blog
                                                Posting</option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <h1 class="h4 text-gray-900 mb-4">Permissions</h1>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="checkbox" id="emp_access_ship_all6"
                                                    class="emp_access_ship_all"><label class="ml-2"
                                                    for="emp_access_ship_all6">All Options</label>
                                            </div>
                                            <br>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action1" value="1"><label class="ml-2"
                                                    for="emp_access_action1">Users Management</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action2" value="2"><label class="ml-2"
                                                    for="emp_access_action2">Blogs</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action3" value="3"><label class="ml-2"
                                                    for="emp_access_action3">Edit Frontend NavBar</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action4" value="4"><label class="ml-2"
                                                    for="emp_access_action4">Services</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action5" value="5"><label class="ml-2"
                                                    for="emp_access_action5">Service Categories</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action6" value="6"><label class="ml-2"
                                                    for="emp_access_action6">Reviews</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action7" value="7"><label class="ml-2"
                                                    for="emp_access_action7">Add Site Reviews</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action8" value="8"><label class="ml-2"
                                                    for="emp_access_action8">FAQs</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action9" value="9"><label class="ml-2"
                                                    for="emp_access_action9">Contact Messages</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="emp_access_action[]"
                                                    id="emp_access_action10" value="10"><label class="ml-2"
                                                    for="emp_access_action10">Newsletter Emails</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('extraScript')
<script>
    $(".emp_access_ship_all").on('change', function () {
        if ($(this).is(":checked")) {
            $(this).parent('div').siblings('.col-sm-6').each(function () {
                $(this).children('input').attr('checked', true);
            })
        }
        else {
            $(this).parent('div').siblings('.col-sm-6').each(function () {
                $(this).children('input').attr('checked', false);
            })
        }
    })
</script>
@endsection