@extends('layouts.master')
@section('content')

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
                <div class="col-xl-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-4">
                            <div class="checkout-progress-indicator h-100vh">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step completed" id="1">
                                        <span class="las la-check fs-18"></span>
                                    </div>
                                    <div class="step completed" id="2">
                                        <span class="las la-check fs-18"></span>
                                    </div>
                                    <div class="step completed" id="3">
                                        <span class="las la-check fs-18"></span>
                                    </div>
                                    <div class="step completed" id="4">
                                        <span class="las la-check fs-18"></span>
                                    </div>
                                </div><!-- End: .checkout-progress -->
                                <div class="card-header border-bottom-0 mt-50">
                                    <img class="svg" src="img/svg/progress5.svg" alt="">
                                </div>
                            </div><!-- checkout -->
                        </div>
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="checkout-shipping-form pt-50 mt-0 pr-0 h-100vh">
                                <div class="card payment-status bg-normal mt-0 p-sm-30 p-15">
                                    <div class="card-body bg-white bg-shadow radius-xl px-sm-30 pt-sm-25 m-0 p-0">
                                        <div class="payment-status__area  py-sm-25 py-20 text-center">
                                            <div class="content-center">
                                                        <span class="wh-34 bg-success rounded-circle content-center">
                                                            <span class="las la-check fs-16 color-white"></span></span>
                                            </div>
                                            <h4 class="fw-500 mt-20 mb-10">Payment Successful</h4>
                                            <span class="fs-15 color-gray">Thank you! We've received your payment.</span>
                                        </div>
                                    </div>
                                </div><!-- End: .card -->
                            </div>
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div><!-- End: .global-shadow-->
    </div>

@endsection

