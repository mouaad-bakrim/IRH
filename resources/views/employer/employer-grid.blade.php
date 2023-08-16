
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">employers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('employer/list') }}">employer</a></li>
                                <li class="breadcrumb-item active">All employers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body pb-0">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">employers</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('employer/list') }}" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                        <a href="{{ route('employer/grid') }}" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="employer-pro-list">
                                <div class="row">
                                    @foreach ($employerList as $key=>$list )
                                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="employer-box flex-fill">
                                                    <div class="employer-img">
                                                        <a href="{{ url('employer/profile/'.$list->id) }}">
                                                            <img class="img-fluid" alt="employers Info" src="{{ Storage::url('/employer-photos/'.$list->upload) }}" width="20%" height="20%">
                                                        </a>
                                                    </div>
                                                    <div class="employer-content pb-0">
                                                        <h5><a href="{{ url('employer/profile/'.$list->id) }}">{{ $list->Nom }} {{ $list->Prenom }}</a></h5>
                                                        <h6>employer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
