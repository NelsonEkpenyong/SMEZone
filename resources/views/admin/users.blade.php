@extends('layouts.admin.app')
    @section('content')
    <div class="row">
        <div class="col-lg-12 col-md -12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="ti-home" style="text-decoration: none; color: inherit; "> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Manage Users</h4>
                            <button type="button" class="btn btn-success mb-2 btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
               
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Have Business</th>
                                <th>Has Access Account</th>
                                <th>Account Number</th>
                                <th>Account Type</th>
                                <th>Account Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $key => $user)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$user->first_name.' '.$user->last_name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{ ($user->have_business == 1) ? "Yes" : "No" }}</td>
                                    <td>{{ ($user->have_access_bank_account == 1) ? "Yes" : "No" }}</td>
                                    <td>{{$user->account}}</td>
                                    <td>{{ ($user->account_status == 1) ? "Active" : "Dormant" }}</td>
                                    <td>{{ ($user->account_type == 0) ? "Individual" : "Corporate" }}</td>
                                    <td>{{$user->created_at->toFormattedDateString()}}  </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                            <a class="dropdown-item" href="#">action 1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">action 2</a>
                                            </div>
                                        </div>
                                    </td>
                              
                                </tr>
                                @empty
                                    <tr>
                                        <td>No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    