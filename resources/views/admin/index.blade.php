@extends('layouts.admin')

@section('content')
    <div class="main-content">







        <!-- CARDS -->

        <div class="row">
            <div style="height: 18px;" class="row"></div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-body-secondary mb-2">
                                    Agents
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                                    11
                                </span>



                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-user text-body-secondary mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-body-secondary mb-2">
                                    Customers
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                                    763
                                </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-user text-body-secondary mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">



            </div>
            <div class="col-12 col-lg-6 col-xl">


            </div>

        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-4">



            </div>
            <div class="col-12 col-xl-8x">

                <!-- Products -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                        <!-- Title -->
                        <h4 class="card-header-title mb-2 mb-md-0">
                            User lists
                        </h4>

                        <!-- Search + Filter -->
                        <div class="d-flex gap-2">
                            <!-- Search box -->
                            <input type="text" id="userSearch" class="form-control form-control-sm"
                                placeholder="Search users...">

                            <!-- Filter dropdown -->
                            <select id="userFilter" class="form-select form-select-sm">
                                <option value="">filter by</option>
                                <option value="Agent">Time created asc</option>
                                <option value="Admin">Time created desc</option>

                            </select>
                        </div>
                    </div>

                    <div class="table-responsive mb-0"
                        data-list='{"valueNames": ["products-product", "products-stock", "products-price", "products-sales"]}'
                        id="productsList">
                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap table-hover card-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>User type</th>
                                        <th>Created by</th>
                                        <th>Joined at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="products-product">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <!-- Heading -->
                                                    <h4 class="fw-normal mb-1">Stuart SMG</h4>
                                                    <!-- Text -->
                                                    <small class="text-body-secondary">Malafyale</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="products-stock">0761968232</td>
                                        <td class="products-price">stuartsmg7@gmail.com</td>
                                        <td class="products-sales">Agent</td>
                                        <td class="malafyale1">aubert</td>
                                        <td class="malafyale1">2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection