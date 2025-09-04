@extends('layouts.agent');

@section('content')
    <!-- Products -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <!-- Title -->
            <h4 class="card-header-title mb-2 mb-md-0">
                All Customers
            </h4>

            <!-- Search + Filter -->
            <div class="d-flex gap-2">
                <!-- Search box -->
                <input type="text" id="userSearch" class="form-control form-control-sm" placeholder="Search users...">

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
                            <td class="malafyale1">yosia</td>
                            <td class="malafyale1">2012</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection