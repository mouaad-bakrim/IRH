@extends('layouts.master')
@section('content')

    <div class="breadcrumb-main user-member justify-content-sm-between ">
        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                <h4 class="text-capitalize fw-500 breadcrumb-title">list absence</h4>
                <span class="sub-title ml-sm-25 pl-sm-25">274 absence</span>
            </div>

            <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                <span data-feather="search"></span>
                <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name"
                       aria-label="Search">
            </form>

        </div>
        <!------------------ajoute absence --------------->

        <div class="action-btn">
            <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                <i class="las la-plus fs-16"></i>Add New absence</a>

            <!-- Modal -->
            <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content  radius-xl">
                        <div class="modal-header">
                            <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span data-feather="x"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="new-member-modal">
                                @if(session('status'))
                                    <div class="alert alert-success mb-1 mt-1">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('absence.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-20">
                                        <select class="form-control select " name="user_id">
                                            <option selected disabled>Select Employer:</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-20">
                                        <select class="form-control select " name="user_id">
                                            <option selected disabled>Select AbsenceTypes:</option>
                                            @foreach($absenceTypes as $absenceType)
                                                <option value="{{ $absenceType->id }}">{{ $absenceType->AbsenceReason }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group mb-20">
                                        <input type="text" name="StartDate" class="form-control" placeholder="StartDate">
                                        @error('StartDate')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-20">
                                        <input type="text" name="EndDate" class="form-control" placeholder="EndDate">
                                        @error('EndDate')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-20">
                                        <input type="text" name="AbsenceStatus" class="form-control" placeholder="AbsenceStatus">
                                        @error('AbsenceStatus')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="button-group d-flex pt-25">


                                        <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">add new
                                            absence
                                        </button>


                                        <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">
                                            cancel
                                        </button>


                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->


        </div>


    </div>
    <!-------------------        Liste absence         -------->
    <div class="row">
        <div class="col-lg-12">
            <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                        <tr class="userDatatable-header">

                            <th>
                                <span class="userDatatable-title">ID</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">emloyer</span>
                            </th>  <th>
                                <span class="userDatatable-title">AbsenceTypes</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">StartDate</span>
                            </th>
                           <th>
                                <span class="userDatatable-title">EndDate</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">AbsenceStatus</span>
                            </th>
                            <th>
                                <span class="userDatatable-title ">action</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($absence as $company)

                            <tr>


                                <td>
                                    <div class="userDatatable-content">
                                        {{ $company->Absence_id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $company->user->name }}
                                    </div>
                                </td><td>
                                    <div class="userDatatable-content">
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $company->StartDate }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $company->EndDate }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $company->AbsenceStatus }}
                                    </div>
                                </td>




                                <td>
                                    <div class="userDatatable-content">
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <form action=""
                                                  method="Post" style="display: inline-flex;">
                                                <li>
                                                    <a href="#" class="view">
                                                        <span data-feather="eye"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="edit">
                                                        <span data-feather="edit"></span></a>
                                                </li>
                                                <li>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" class="remove">
                                                        <span data-feather="trash-2"></span></a>
                                                </li>
                                            </form>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="d-flex justify-content-end pt-30">

                    <nav class="atbd-page ">
                        <ul class="atbd-pagination d-flex">
                            <li class="atbd-pagination__item">
                                <a href="#" class="atbd-pagination__link pagination-control"><span
                                        class="la la-angle-left"></span></a>
                                <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                <a href="#" class="atbd-pagination__link pagination-control"><span
                                        class="la la-angle-right"></span></a>
                                <a href="#" class="atbd-pagination__option">
                                </a>
                            </li>
                            <li class="atbd-pagination__item">
                                <div class="paging-option">
                                    <select name="page-number" class="page-selection">
                                        <option value="20">20/page</option>
                                        <option value="40">40/page</option>
                                        <option value="60">60/page</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection




