@extends('layouts.master')
@section('content')

    <div class="breadcrumb-main user-member justify-content-sm-between ">
        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                <h4 class="text-capitalize fw-500 breadcrumb-title">list department</h4>
                <span class="sub-title ml-sm-25 pl-sm-25">{{ $departmentCount }} Department</span>

            </div>

            <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                <span data-feather="search"></span>
                <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name"
                       aria-label="Search">
            </form>

        </div>
        <!------------------ajoute department --------------->

        <div class="action-btn">
            <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                <i class="las la-plus fs-16"></i>Add New Department</a>

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
                                <form action="{{ route('department.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mb-20">
                                        <input type="text" name="nom" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                               placeholder="nom">
                                    </div>

                                    <div class="form-group mb-20">
                                        <textarea class="form-control" name="description"
                                                  id="exampleFormControlTextarea1" rows="3"
                                                  placeholder=" description"></textarea>
                                    </div>
                                    <div class="form-group mb-20">
                                        <input type="text" name="type" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                               placeholder="type">
                                    </div>
                                    <div class="form-group mb-20">
                                        <input type="text" name="plase" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                               placeholder="plase">
                                    </div>
                                    <div class="form-group mb-20">
                                        <select class="form-control select " name="user_id">
                                            <option selected disabled>Select Employer:</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="button-group d-flex pt-25">


                                        <button type="submit"
                                                class="btn btn-primary btn-default btn-squared text-capitalize">add new
                                            Department
                                        </button>


                                        <button
                                            class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">
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
    <!-------------------        Liste department         -------->
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
                                <span class="userDatatable-title">nom</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Description</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">type</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">plase</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">employer</span>
                            </th>
                            <th>
                                <span class="userDatatable-title ">action</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($departments as $department)

                            <tr>


                                <td>
                                    <div class="userDatatable-content">
                                        {{ $department->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $department->nom }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $department->description }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $department->type }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $department->plase }}
                                    </div>
                                </td> <td>
                                    <div class="userDatatable-content">
                                        {{ $department->user->name }}
                                    </div>
                                </td>



                                <td>
                                    <div class="userDatatable-content">
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <form action="{{ route('department.destroy',$department->id) }}"
                                                  method="Post" style="display: inline-flex;">
                                                <li>
                                                    <a href="#" class="view">
                                                        <span data-feather="eye"></span></a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('department.edit',$department->id) }}"
                                                       class="edit">
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




