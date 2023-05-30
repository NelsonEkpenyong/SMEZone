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
                                    <li class="breadcrumb-item"><a href="/posts" style="text-decoration: none; color: inherit">Post Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Comments</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Manage Post Comments</h4>
                            <button type="button" class="btn btn-success mb-2 btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
               
                        </div>
                    </div>
                     <div class="row mt-3">
                       <div class="col-md-4">
                        <div class="card">
                         <div class="card-header card-title">
                           {{$post->title}}
                         </div>
                         {{-- <div class="card-body">
                           <p class="card-text">{{$post->body}}</p>
                         </div> --}}
                         <div class="card p-3">
                          <blockquote class="blockquote mb-0 card-body">
                            <p>{{$post->body}}</p>
                            <footer class="blockquote-footer">
                              <small class="text-muted">
                                {{$post->user->first_name . " " .$post->user->last_name}} <cite title="Source Title">Something here</cite>
                              </small>
                            </footer>
                          </blockquote>
                        </div>
                       </div>
                       </div>
                       <div class="col-md-8">
                        <ul class="list-group">
                         @forelse($post->comments as $comment)
                           <li class="list-group-item">
                            {{$comment->body}}
                            <a href="#">delete</a>
                           </li>
                         @empty
                          <li class="list-group-item">This post has no comments</li>
                         @endforelse
                       </ul>
                       </div>
                     </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
    