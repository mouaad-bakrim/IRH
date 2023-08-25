@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">

                <div class="page-sub-header">
                    <h3 class="page-title">Edit Department</h3>
                    <ul class="breadcrumb" style="float:right">
                        <li class="breadcrumb-item active">Edit Department</li>
                        <li class="breadcrumb-item"><a href="">Department</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="margin-top:-60px;">
            <div class="card">
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('department.update',$department->id) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms" style="margin-bottom:13px">
                                    <label>nom <span class="text-danger">*</span></label>
                                    <input type="text" name="nom" value="{{ $department->nom }}" class="form-control"
                                           placeholder="nom">
                                    @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <input type="description" name="description" value="{{ $department->description }}"
                                           class="form-control" placeholder="Description">
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Type <span class="text-danger">*</span></label>
                                    <input type="type" name="type" value="{{ $department->type }}" class="form-control"
                                           placeholder="type">
                                    @error('type')pour quo
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>la plase Department <span class="text-danger">*</span></label>
                                    <input class="form-control datetimepicker" value="{{ $department->plase }}"
                                           name="plase" type="plase" placeholder="plase">
                                    @error('plase')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="student-submit" style="margin-top:26px">
                            <button type="submit" class="btn btn-primary ml-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
