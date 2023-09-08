@extends('layouts.master')
@section('content')

    <div class="d-flex align-items-center user-member__title mb-20 mt-20">
        <h4 class="text-capitalize">add user</h4>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                <div class="ap-tab-wrapper border-bottom ">
                    <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <li class="nav-item">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true"><span
                                    data-feather="briefcase"></span>changer password </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                href="#v-pills-profile"
                                                role="tab" aria-controls="v-pills-profile" aria-selected="false"><span
                                    data-feather="user"></span> personal info</a>

                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-sm-6 col-10">
                                <div class="mt-10 mb-10">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                @include('profile.partials.update-profile-information-form')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title">checkout</h4>
        <div class="breadcrumb-action justify-content-center flex-wrap">
            <div class="action-btn">

                <div class="form-group mb-0">
                    <div class="input-container icon-left position-relative">
                                                <span class="input-icon icon-left">
                                                    <span data-feather="calendar"></span>
                                                </span>
                        <input type="text" class="form-control form-control-default date-ranger" name="date-ranger"
                               placeholder="Oct 30, 2019 - Nov 30, 2019">
                        <span class="input-icon icon-right">
                                                    <span data-feather="chevron-down"></span>
                                                </span>
                    </div>
                </div>
            </div>
            <div class="dropdown action-btn">
                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-download"></i> Export
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <span class="dropdown-item">Export With</span>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">
                        <i class="la la-print"></i> Printer</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-file-pdf"></i> PDF</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-file-text"></i> Google Sheets</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-file-csv"></i> CSV</a>
                </div>
            </div>
            <div class="dropdown action-btn">
                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-share"></i> Share
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                    <span class="dropdown-item">Share Link</span>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">
                        <i class="la la-facebook"></i> Facebook</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-twitter"></i> Twitter</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-google"></i> Google</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-feed"></i> Feed</a>
                    <a href="" class="dropdown-item">
                        <i class="la la-instagram"></i> Instagram</a>
                </div>
            </div>
            <div class="action-btn">
                <a href="" class="btn btn-sm btn-primary btn-add">
                    <i class="la la-plus"></i> Add New</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="checkout-progress-indicator">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step completed" id="1">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step current" id="2">
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
                                    <h4>Please fill</h4>
                                    <p>Lorem Ipsum is simply dummy text of the
                                        dummy typesetting industry.</p>
                                    <img class="svg" src="{{asset('img/svg/progress3.svg')}}" alt="">
                                </div>
                            </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-sm-10">
                <div class="card checkout-shipping-form">
                    <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                        <h4 class="fw-500">Please fill in your </h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="edit-profile__body">
                            <form>
                                <div class="account-profile d-flex align-items-center mb-4 ">
                                    <div class="ap-img pro_img_wrapper">
                                        <input id="file-upload" type="file" name="fileUpload"
                                               class="d-none">

                                        <label for="file-upload">
                                            <img
                                                class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                                src="{{asset('img/author/profile.png')}}" alt="profile">
                                            <span class="cross" id="remove_pro_pic">
                                                                <span data-feather="camera"></span>
                                                            </span>
                                        </label>
                                    </div>
                                    <div class="account-profile__title">
                                        <h6 class="fs-15 ml-20 fw-500 text-capitalize">profile photo</h6>
                                    </div>
                                </div>


                                <form action="#">
                                    <div class="form-group row mb-n50">
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-envelope color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon"
                                                       placeholder="    {{__('EmailProfessionnel')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="atbd-select ">
                                                <select name="select-alerts2" id="select-alerts2" class="form-control">
                                                    <option>{{__('Nationalite')}}</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-60">
                                            <div class="with-icon">
                                                <span class="la-user lar color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="   {{__('Vile')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-60">
                                            <div class="with-icon">
                                                <span class="la-user lar color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="   {{__('Adresse')}}">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-map-marker color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="   {{__('Telephone')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-gray radius-xs b-light"
                                                       id="datepicker8" placeholder="       {{__('DateDeNaissance')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-gray radius-xs b-light"
                                                       id="datepicker6" placeholder="       {{__('DateDexpiration')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-gray radius-xs b-light"
                                                       id="datepicker7" placeholder="       {{__('DateDembauche')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-gray radius-xs b-light"
                                                       id="datepicker"
                                                       placeholder="       {{__('dateDeConfirmation')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-credit-card color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon"
                                                       placeholder="     {{__('SituationFamiliale')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-envelope color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="    {{__('CarteDeSejour')}}">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-credit-card color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="     {{__('NombreDenfants')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-phone las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="    {{__('NDenfantsACharge')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-60">
                                            <div class="with-icon">
                                                <span class="la-user lar color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="  {{__('NumeroDePasseport')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text"
                                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                                       id="inputNameIcon" placeholder="   {{__('Profession')}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div
                                        class="button-group d-flex pt-3 mb-20 justify-content-between flex-wrap"
                                        style="margin-top:20px;">
                                        <a href="checkout-wizard8.html"
                                           class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i
                                                class="las la-arrow-left mr-10"></i>Previous</a>
                                        <a href="checkout-payment-wizard8.html"
                                           class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">
                                            Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>-->

@endsection

