@extends('layouts.admin.app')
    @section('content')
    <div class="row">
        <div class="col-lg-12 col-md -12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                {{-- <div class="card-body card-light-blue">
                                    <i class="ti-home"> Home</i>
                                </div> --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="ti-home" style="text-decoration: none; color: inherit; "> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Licenses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Licenses</h4>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Filter By Type</label>
                                <select class="form-control form-control-sm" id="filter" name="filter">
                                <option value="" selected disabled>Choose Type</option>
                                <option>Offline</option>
                                <option>Webinar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>First Activity</th>
                                <th>License Create Date</th>
                                <th>License Expiry</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($licenses as $key => $license)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$license->user->first_name . " " . $license->user->last_name}}</td>
                                    <td>{{$license->activity_type}}</td>
                                    <td>{{$license->expires_at}}</td>
                                    <td>{{$license->created_at}}</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td>No Licenses found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{$licenses->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    