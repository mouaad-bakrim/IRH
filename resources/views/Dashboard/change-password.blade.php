@extends('layouts.master')
@section('content')

    <head>
        <title>Change Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body>
    <div class="shop-breadcrumb">

        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">checkout</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <div class="action-btn">


                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="checkout-progress-indicator ">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step current" id="1">
                                        <span>1</span>

                                    </div>
                                    <div class="step" id="2">
                                        <span>2</span>

                                    </div>
                                    <div class="step" id="3">
                                        <span>3</span>

                                    </div>
                                    <div class="step" id="4">
                                        <span>4</span>

                                    </div>
                                </div>
                                <div class="card-header border-bottom-0">
                                    <h4>Changer Password</h4>
                                    <div class="div">
                                        <img class="svg w-100" src="img/svg/progress1.svg" alt="img">
                                    </div>
                                </div>
                            </div><!-- checkout -->
                        </div>
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form h-100vh">
                                <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">1. Please changer password</h4>
                                    @if($errors->any())
                                        {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                                    @endif
                                    @if(Session::get('error') && Session::get('error') != null)
                                        <div style="color:red">{{ Session::get('error') }}</div>
                                        @php
                                            Session::put('error', null)
                                        @endphp
                                    @endif
                                    @if(Session::get('success') && Session::get('success') != null)
                                        <div style="color:green">{{ Session::get('success') }}</div>
                                        @php
                                            Session::put('success', null)
                                        @endphp
                                    @endif
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form class="form" action="{{ route('postChangePassword') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" class="form-control" name="current_password"
                                                       id="current_password"
                                                       placeholder="Old Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password">New password</label>
                                                <input type="password" class="form-control" name="new_password"
                                                       id="new_password"
                                                       placeholder="New Password">
                                            </div>
                                            <div class="form-group create-passord">
                                                <label for="new_password_confirmation">Confirm New Password</label>
                                                <input type="password" class="form-control"
                                                       name="new_password_confirmation" id="new_password_confirmation"
                                                       placeholder="Password">
                                                <span class="create-passord-warn">Enter a valid password. Min 8 characters
                                                            long</span>
                                            </div>
                                            <button type="submit" class="btn btn-primary text-center">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div><!-- ends: card -->
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
@endsection

