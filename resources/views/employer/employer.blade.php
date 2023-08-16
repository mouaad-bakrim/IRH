
            @extends('layouts.master')
            @section('content')
                <div class="row justify-content-end mb-3">
                    <div class="col-lg">
                        <!-- Datatable Info -->
                        <div id="datatableCounterInfo" style="display: none;">
                            <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
              <span class="d-block d-sm-inline-block fs-5 me-3 mb-2 mb-sm-0">
                <span id="datatableCounter">0</span>
                Selected
              </span>
                                <a class="btn btn-outline-danger btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                                    <i class="bi-trash"></i> Delete
                                </a>
                                <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                                    <i class="bi-archive"></i> Archive
                                </a>
                                <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                                    <i class="bi-upload"></i> Publish
                                </a>
                                <a class="btn btn-white btn-sm mb-2 mb-sm-0" href="javascript:;">
                                    <i class="bi-x-lg"></i> Unpublish
                                </a>
                            </div>
                        </div>
                        <!-- End Datatable Info -->
                    </div>
                </div>
                <!-- End Row -->

                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header card-header-content-md-between">
                        <div class="mb-2 mb-md-0">
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>
                                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                                </div>
                                <!-- End Search -->
                            </form>
                        </div>

                        <div class="d-grid d-sm-flex gap-2">
                            <button class="btn btn-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceProductFilter" aria-controls="offcanvasEcommerceProductFilter">
                                <i class="bi-filter me-1"></i> Filters
                            </button>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="bi-table me-1"></i> Columns <span class="badge bg-soft-dark text-dark rounded-circle ms-1">6</span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown" style="width: 15rem;">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-grid gap-3">
                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="toggleColumn_product">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Product</span>
                        </span>
                                                    <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_product" checked>
                        </span>
                                                </label>
                                                <!-- End Form Switch -->

                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="toggleColumn_type">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Type</span>
                        </span>
                                                    <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_type" checked>
                        </span>
                                                </label>
                                                <!-- End Form Switch -->

                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="toggleColumn_vendor">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Vendor</span>
                        </span>
                                                    <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_vendor">
                        </span>
                                                </label>
                                                <!-- End Form Switch -->

                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="toggleColumn_stocks">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Stocks</span>
                        </span>
                                                    <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_stocks" checked>
                        </span>
                                                </label>
                                                <!-- End Form Switch -->

                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="toggleColumn_sku">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">SKU</span>
                        </span>
                                                    <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_sku" checked>
                        </span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Dropdown -->
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <div class="table-responsive datatable-custom">
                        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 4, 9],
                      "width": "5%",
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 12,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>

                            <thead class="employer-thread">
                            <tr>

                                <th>ID</th>
                                <th>nome</th>
                                <th>Address</th>
                                <th>Téléphone</th>
                                <th>E-mail personnel</th>
                                <th>Type de contrat</th>
                                <th>cin</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employer as $list )
                                <tr>

                                    <td>{{$list->id}}</td>
                                    <td hidden class="avatar">{{ $list->upload }}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="employer-details.html" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('employer-photos/'.$list->upload) }}" alt="User Image">
                                            </a>

                                            <a href="employer-details.html">{{ $list->Nom }} {{ $list->Prenom }}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $list->Adresse }}</td>
                                    <td>{{ $list->Telephone }}</td>
                                    <td>{{ $list->EmailPersonnel }}</td>
                                    <td>{{ $list->TypeDeContrat }}</td>
                                    <td>{{ $list->Cin }}</td>

                                    <td class="text-end">
                                        <form action="" method="Post">
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-white btn-sm" href="">
                                                    <i class="bi-pencil-fill me-1"></i> Edit
                                                </a>

                                            </div>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete
                                                <i class="bi-pencil-fill me-1"></i>
                                            </button>


                                        </form>
                                </tr>
                            @endforeach
                            </tbody>




                        </table>

                    </div>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="card-footer">
                        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                            <div class="col-sm mb-2 mb-sm-0">
                                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="me-2">Showing:</span>

                                    <!-- Select -->
                                    <div class="tom-select-custom">
                                        <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                                            <option value="12">12</option>
                                            <option value="14" selected>14</option>
                                            <option value="16">16</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->

                                    <span class="text-secondary me-2">of</span>

                                    <!-- Pagination Quantity -->
                                    <span id="datatableWithPaginationInfoTotalQty"></span>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-auto">
                                <div class="d-flex justify-content-center justify-content-sm-end">
                                    <!-- Pagination -->
                                    <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->
        </div>
        <!-- End Content -->






@endsection







