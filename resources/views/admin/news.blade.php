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
                                    <li class="breadcrumb-item active" aria-current="page">News Management</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Manage News</h4>
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
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Audience</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($news as $key => $article)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{Str::limit($article->news_title, 20, '...')}}</td>
                                    <td>{{ strip_tags(Str::limit($article->excerpt, 20, '...'))}}</td>
                                    <td>{{ strip_tags(Str::limit($article->description, 50, '...') ) }}</td>
                                    <td>{{ $article->image ? $article->image : 'No Image'}}</td>
                                    <td>{{$article->role->guard_name}}</td>
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
                                        <td>No News found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{$news->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    