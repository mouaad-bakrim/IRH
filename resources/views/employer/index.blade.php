@extends('layouts.master')
@section('content')

    <div class="breadcrumb-main user-member justify-content-sm-between ">
        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                <h4 class="text-capitalize fw-500 breadcrumb-title">list employer</h4>
                <span class="sub-title ml-sm-25 pl-sm-25">274 employer</span>
            </div>

            <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                <span data-feather="search"></span>
                <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name"
                       aria-label="Search">
            </form>

        </div>
        <div class="action-btn">
            <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                <i class="las la-plus fs-16"></i>Add New employer</a>

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
                                <form>
                                    <div class="form-group mb-20">
                                        <input type="text" class="form-control" placeholder="Duran Clayton">
                                    </div>
                                    <div class="form-group mb-20">
                                        <div class="category-member">
                                            <select class="js-example-basic-single js-states form-control"
                                                    id="category-member">
                                                <option value="JAN">1</option>
                                                <option value="FBR">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-20">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                  placeholder="Project description"></textarea>
                                    </div>
                                    <div class="form-group textarea-group">
                                        <label class="mb-15">status</label>
                                        <div class="d-flex">
                                            <div class="project-task-list__left d-flex align-items-center">
                                                <div class="checkbox-group d-flex mr-50 pr-10">
                                                    <div
                                                        class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-1"
                                                               checked>
                                                        <label for="check-grp-1"
                                                               class="fs-14 color-light strikethrough">
                                                            status
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group d-flex mr-50 pr-10">
                                                    <div
                                                        class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-2">
                                                        <label for="check-grp-2"
                                                               class="fs-14 color-light strikethrough">
                                                            Deactivated
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group d-flex">
                                                    <div
                                                        class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-3">
                                                        <label for="check-grp-3"
                                                               class="fs-14 color-light strikethrough">
                                                            bloked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-25">
                                        <div class="form-group mb-10">
                                            <label for="name47">project member</label>
                                            <input type="text" class="form-control" id="name47"
                                                   placeholder="Search members">
                                        </div>
                                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                                            <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png"
                                                                 alt="author"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png"
                                                                 alt="author"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png"
                                                                 alt="author"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png"
                                                                 alt="author"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm5.png"
                                                                 alt="author"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex new-member-calendar">
                                        <div class="form-group w-100 mr-sm-15 form-group-calender">
                                            <label for="datepicker">start Date</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="datepicker"
                                                       placeholder="mm/dd/yyyy">
                                                <a href="#">
                                                    <span data-feather="calendar"></span></a>
                                            </div>
                                        </div>
                                        <div class="form-group w-100 form-group-calender">
                                            <label for="datepicker2">End Date</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="datepicker2"
                                                       placeholder="mm/dd/yyyy">
                                                <a href="#">
                                                    <span data-feather="calendar"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group d-flex pt-25">


                                        <button class="btn btn-primary btn-default btn-squared text-capitalize">add new
                                            project
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

    </div>
    </div>
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
                                <span class="userDatatable-title">Address</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Téléphone</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">E-mail personnel</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Type de contrat</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">CIN</span>
                            </th>
                            <th>
                                <span class="userDatatable-title ">action</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($employer as $list)

                        <tr>


        <td>
            <div class="userDatatable-content">
                {{ $list->id }}
        </div>
           </td>
           <td>
            <div class="userDatatable-content">
                {{ $list->upload }}
        </div>
           </td>
           <td>
           <h2 class="table-avatar">
            <a href="employer-details.html" class="avatar avatar-sm me-2">
                <img class="avatar-img rounded-circle" src="{{ asset('employer-photos/'.$list->upload) }}" alt="User Image">
            </a>

            <a href="employer-details.html">{{ $list->Nom }} {{ $list->Prenom }}</a>
        </h2>
           </td>
        <td>
            <div class="userDatatable-content">
                {{ $list->Telephone }}
            </div>
            </td>
            <td>
                <div class="userDatatable-content">
                    {{ $list->Adresse }}
                </div>
                </td>
        <td>
            <div class="userDatatable-content">
                {{ $list->Telephone }}
            </div>
            </td>
        <td>
            <div class="userDatatable-content">
                {{ $list->EmailPersonnel }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content">
            {{ $list->TypeDeContrat }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content">
            {{ $list->cin }}
            </div>
        </td>



                            <td>
                                <div class="userDatatable-content">
                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                    <form action="{{ route('employer.destroy',$list->id) }}" method="Post" style="display: inline-flex;">
                                    <li>
                                        <a href="#" class="view">
                                            <span data-feather="eye"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('employer.edit',$list->id) }}" class="edit">
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
                    {!! $employer->links() !!}
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




