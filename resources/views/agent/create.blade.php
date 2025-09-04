@extends('layouts.agent');

@section('content')



    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <!-- Title -->
            <h4 class="card-header-title mb-2 mb-md-0">
                Create customer
            </h4>
        </div>

        <div class="card-body">
            <form action="#" method="POST" class="row g-3">
                @csrf
                <!-- Name -->
                <div class="col-12 col-md-6">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Softmart Admin" required>
                </div>

                <!-- Email -->
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="admin@softmartt.com"
                        required>
                </div>

                <!-- Mobile -->
                <div class="col-12 col-md-6">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="255687181497" required>
                </div>


                <input type="hidden" name="user_type" id="user_type" value="customer">


                <!-- Date of Birth -->
                <div class="col-12 col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="1997-01-01" required>
                </div>

                <!-- Sex -->
                <div class="col-12 col-md-6">
                    <label for="sex" class="form-label">Sex</label>
                    <select name="sex" id="sex" class="form-select" required>
                        <option value="">Select sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>


                <!-- Referral Code -->
                <div class="col-12 col-md-6">
                    <label for="referral_code" class="form-label">Referral Code</label>
                    <input type="text" name="referral_code" id="referral_code" class="form-control" placeholder="Optional">
                </div>

                <!-- Profile Picture -->
                <div class="col-12 col-md-6">
                    <label for="profile_pic" class="form-label">Profile Picture</label>
                    <input type="file" name="profile_pic" id="profile_pic" class="form-control">
                </div>

                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100">Create User</button>
                </div>
            </form>
        </div>
    </div>


@endsection