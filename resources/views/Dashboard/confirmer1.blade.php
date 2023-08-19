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
                                    <img class="svg" src="img/svg/progress3.svg" alt="">
                                </div>
                            </div><!-- checkout -->
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
                                                    <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                                    <!-- Profile picture image-->
                                                    <label for="file-upload">
                                                        <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="img/author/profile.png" alt="profile">
                                                        <span class="cross" id="remove_pro_pic">
                                                                <span data-feather="camera"></span>
                                                            </span>
                                                    </label>
                                                </div>
                                                <div class="account-profile__title">
                                                    <h6 class="fs-15 ml-20 fw-500 text-capitalize">profile photo</h6>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name31">Telephone</label>
                                                <input type="text" class="form-control" id="name31" placeholder="Ibn adam">
                                            </div>
                                            <div class="form-group">
                                                <label for="name62">EmailPersonnel </label>
                                                <input type="text" class="form-control" id="name62" placeholder="adam">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">Adresse</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">Ville</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">DateDeNaissance</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">CarteDeSejour</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">NombreDenfants</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group ">
                                                <label for="phoneNumber">NombreDenfantsACharge</label>
                                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+440">
                                            </div>
                                            <div class="form-group">
                                                <div class="countryOption">
                                                    <label for="countryOption">
                                                        Nationalite
                                                    </label>
                                                    <select class="js-example-basic-single js-states form-control" id="countryOption">
                                                        <option value="JAN">Ma</option>
                                                        <option value="FBR">Venues</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="button-group d-flex pt-3 mb-20 justify-content-between flex-wrap">
                                                <a href="checkout-wizard8.html" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i class="las la-arrow-left mr-10"></i>Previous</a>
                                                <a href="checkout-payment-wizard8.html" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">
                                                     Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- ends: .card -->
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div><!-- End: .global-shadow-->
    </div>
@endsection

