@extends('layouts.master')

@section('content')


    <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title">Form Employer</h4>
        <div class="breadcrumb-action justify-content-center flex-wrap">
            <div class="action-btn">

                <div class="form-group mb-0">
                    <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left">
                                                <span data-feather="calendar"></span>
                                            </span>
                        <input type="text" class="form-control form-control-default date-ranger"
                               name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                        <span class="input-icon icon-right">
                                                <span data-feather="chevron-down"></span>
                                            </span>
                    </div>
                </div>
            </div>
            <div class="dropdown action-btn">
                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                        id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
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
                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                        id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
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


    <div class="col-lg-12">
        <div class="card card-Vertical card-default card-md mb-4">
            <div class="card-header">
                <h6>Employer </h6>
            </div>
            <div class="card-body py-md-30">
                <form method="post" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <input type="text" name="name" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                   placeholder="name">
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="text" name="prenom" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                   placeholder="prenom">
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="text" name="email" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                   placeholder="Email">
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="text" name="cin" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                   placeholder="cin">
                        </div>

                        <!--<div class="form-group col-md-6 mb-25">
                            <select class="form-control px-15" id="exampleFormControlSelect1">
                                <option>Employer</option>
                                <option>Manager</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-25">
                            <select class="form-control select @error('role') is-invalid @enderror" name="role" id="role">
                                <option selected disabled>Role Type</option>
                                @foreach ($role as $name)
                                    <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>-->
                        <div class="form-group col-md-6 mb-25">
                            <select class="form-control select @error('contrat') is-invalid @enderror" name="contrat" id="contrat">
                                <option selected disabled>contrat Type</option>
                                @foreach ($contrat as $name)
                                    <option value="{{ $name->contrat_type }}">{{ $name->contrat_type }}</option>
                                @endforeach
                            </select>
                            @error('contrat')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <select class="form-control select " name="department_id">
                                <option selected disabled>Select profession:</option>
                                @foreach($professions as $profession)
                                    <option value="{{ $profession->id }}">{{ $profession->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-25">
                            <div class="with-icon">
                                <span class="las la-credit-card color-light"></span>
                                <input type="text"
                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                       id="inputNameIcon" placeholder="     {{__('SalaireNet')}}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-25">
                            <div class="with-icon">
                                <span class="la-phone las color-light"></span>
                                <input type="text"
                                       class="form-control  ih-medium ip-lightradius-xs b-light"
                                       id="inputNameIcon" placeholder="    {{__('SalaireBrut')}}">
                            </div>
                        </div>

                        <div class="col-md-6 mb-25">
                            <div class="with-icon">
                                <span class="las la-map-marker color-light"></span>
                                <div class="form-group form-group-calender">
                                    <div id="pageWrapper">
                                        <div id="pageMasthead" class="pageSection"></div>
                                        <div id="pageContentArea" class="pageSection">
                                            <form>
                                                <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" placeholder="       PeriodeDeStage      Y/W/MMMM - Y/W/MMMM" data-from-field="txtDateFrom" data-to-field="txtDateTo" />
                                                <input type="hidden" id="txtDateFrom" value="" />
                                                <input type="hidden" id="txtDateTo" value="" />
                                            </form>
                                        </div>
                                        <div id="pageFooter" class="pageSection"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-25">
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <button type="button"
                                        class="btn btn-default btn-squared border-normal bg-normal px-20 ">
                                    cancel
                                </button>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">
                                    save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
