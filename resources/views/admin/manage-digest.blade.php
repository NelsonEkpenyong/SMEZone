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
                                    <li class="breadcrumb-item active" aria-current="page">Radio Digests</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Manage Digests</h4>
                            <a href="/add-digest" class="btn btn-success btn-icon-text">
                                Add Digest
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Filter By Type</label>
                                <select class="form-control form-control-sm" id="filter" name="filter">
                                <option value="" selected disabled>Choose Type</option>
                                <option>Offline</option>
                                <option>Radio Digest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Digest Name</th>
                                <th>Digest Link</th>
                                <th>Digest Thumbnail</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($digests as $key => $digest)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$digest->digest_name}}</td>
                                    <td>{{ substr($digest->digest_link, 0, 25)}}...</td>
                                    <td>{{$digest->digest_thumbnail}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                             <a class="dropdown-item" href="/edit-digest/{{$digest->id}}">Edit</a>
                                             <a class="dropdown-item" href="/delete-digest/{{$digest->id}}">Delete</a>
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
                            {{$digests->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .dropdown {
            position:absolute;
            display: inline-block;
        }

        .dropbtn {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #2980b9;
        }

    </style> 

    @endsection
    