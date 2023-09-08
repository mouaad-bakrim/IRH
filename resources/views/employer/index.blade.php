@extends('layouts.master')
@section('content')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <div class="breadcrumb-main user-member justify-content-sm-between ">
        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                <h4 class="text-capitalize fw-500 breadcrumb-title">list employer</h4>
                <span class="sub-title ml-sm-25 pl-sm-25"> Employer</span>            </div>

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
                        <div class="card-body py-md-30">
                            <form method="post" action="{{ route('department.store') }}">
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
            </div>
            <!-- Modal -->


        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr class="userDatatable-header">

                            <th>
                                <span class="userDatatable-title">ID</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">nom</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Email</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Cin</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Role</span>
                            </th><th>
                                <span class="userDatatable-title">Status</span>
                            </th>
                            <th>
                                <span class="userDatatable-title ">action</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($user as $list)

                            <tr>


                                <td>
                                    <div class="userDatatable-content">
                                        {{ $list->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $list->name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $list->email }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $list->cin }}
                                    </div>
                                </td>
                                <td>
                                    @if ($list->role === 'Employer')
                                        <div class="userDatatable-content d-inline-block">
                                        <span
                                            class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">{{ $list->role }}</span>
                                        </div>
                                    @elseif ($list->role === 'Manager')
                                        <div class="userDatatable-content d-inline-block">
                                        <span
                                            class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active"> {{ $list->role }}</span>
                                        </div>
                                    @else
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">Admin</span>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                    <input data-id="{{$list->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $list->status ? 'checked' : '' }}>

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
                </div>
            </div>
        </div>
    </div>


@endsection
