
@extends('layouts.master')
@section('content')
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">

                    <div class="page-sub-header">
                        <h3 class="page-title">Add Department</h3>
                        <ul class="breadcrumb" style="float:right">
                            <li class="breadcrumb-item active">Add Department</li>
                            <li class="breadcrumb-item"><a href="">Department</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Department Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms" style="margin-bottom:13px">
                                    <label>nom  <span class="text-danger">*</span></label>
                                    <input type="text" name="nom" class="form-control" placeholder="nom">
                                    @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <input type="description" name="description" class="form-control" placeholder="Description">
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Type  <span class="text-danger">*</span></label>
                                    <input type="type" name="type" class="form-control" placeholder="type">
                                    @error('type')pour quo
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>la plase Department <span class="text-danger">*</span></label>
                                    <input class="form-control datetimepicker" name="plase" type="plase" placeholder="plase">
                                    @error('plase')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                          <!--  <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Manager <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>-->
                            <div class="col-12">
                                <div class="student-submit" style="margin-top:26px">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
