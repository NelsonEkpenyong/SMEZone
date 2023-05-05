@extends('layouts.community.app')
@section('content')
    <main class="community">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg community-main">
                    <div class="middle mx-0 px-0">
                        <div class="row align-items-center top-button">
                            <div class="col-md-auto d-flex justify-content-between px-0">
                                <div class="col-md-auto col-sm-4">
                                    <button type="button" class="btn post active me-md-5 me-4" data-bs-toggle="modal"
                                        data-bs-target="#postModal">
                                        <img src="{{ asset('icons/edit-icon.svg') }}" alt="" /> Make a post
                                    </button>
                                </div>

                                <div>
                                    <a class="active" href="#"><img src="{{ asset('icons/notification.svg') }}"
                                            alt="" /></a>
                                    <a class="active" href="#"><img src="{{ asset('icons/inbox.svg') }}"
                                            alt="" /></a>
                                    <a class="active" href="#"><img src="{{ asset('icons/options.svg') }}"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div> {{-- Make a post --}}
                        @forelse ($posts as $post)
                            <div class="com-cardwrapper mx-0">
                                <div class="com-card">
                                    <div class="d-flex top-card">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/member1.png') }}" alt="" />
                                        </div>
                                        <div class="col">
                                            <p>{{ $post->user->first_name . ' ' . $post->user->last_name }}</p>
                                            <small>Posted {{ $post->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                    <div class="com-body">
                                        <h5>{{ $post->title }}</h5>
                                        <p>{{ $post->body }}</p>
                                    </div>
                                    <div class="d-flex lower-card">
                                        <div class="col-auto">
                                            <span class="likes">
                                                <img src="{{ asset('icons/likes.svg') }}" class="heart-shape" alt="heart"
                                                    data-post-id="{{ $post->id }}"
                                                    data-user-id="{{ Auth::user()->id }}"
                                                    data-likes="{{ $post->likes }}" />
                                                <span class="num-likes">{{ $post->likes }}</span>
                                            </span>
                                            <span>
                                                <img src="{{ asset('icons/share.svg') }}" alt="" />
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 2rem; margin-top: -3rem">
                                <button type="button" class="collapsible">Comments</button>
                                <div class="content">
                                    <form action="/store-comment/{{ $post->id }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <textarea name="comment" class="form-control mt-2" id="exampleFormControlTextarea1" rows="2"
                                            placeholder="Type a comment" style="border-radius: 5px"></textarea>

                                            <button type="submit" class="btn submit-reg" style="margin-top: 0.5rem; margin-bottom: 100px " >Comment</button>
                                    </form>

                                    <div class="cardm">
                                        <div class="cardm-body">
                                            <div class="card-header">
                                                Comments
                                            </div>
                                            @forelse ($post->comments as $comment)
                                                <div class="alert alert-secondary mt-2" style="margin-left: 2rem">
                                                        <div class="d-flex justify-content-start" >
                                                          <p class="fw-bold mb-0">
                                                            {{ $comment->user->first_name . ' ' . $comment->user->last_name }}
                                                        </p>
                                                        <i class="mt-1"  style="font-size: 12px; padding-left: 5px " > ({{date('D j M Y h:i A', strtotime($comment->created_at))}}) </i>
                                                        </div>

                                                    <p>{{ $comment->body }}</p>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @empty
                            <div class="com-cardwrapper mx-0">
                                <div class="com-card">
                                    <div class="d-flex top-card">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/member1.png') }}" alt="" />
                                        </div>
                                        <div class="col">
                                            <p>Tobi Obasa</p>
                                            <small>Posted by 5:30am, 13-02-22</small>
                                        </div>
                                    </div>
                                    <div class="com-body">
                                        <h5>
                                            Why small Businesses have the initial struggle in the
                                            market space
                                        </h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nunc ut phasellus aliquam, arcu nibh habitasse sit. Eget
                                            duis lacus, amet tincidunt eu. Sed viverra fringilla
                                            egestas in lobortis. Ut consectetur mattis hendrerit
                                            lectus integer. Nunc at quisque sit mollis. Consectetur
                                            nulla elit suspendisse volutpat feugiat viverra id
                                            ridiculus non.
                                        </p>
                                    </div>
                                    <div class="d-flex lower-card">
                                        <div class="col-auto">
                                            <span class="likes">
                                                <img src="{{ asset('icons/likes.svg') }}" alt="" />
                                                223
                                            </span>
                                            <span>
                                                <img src="{{ asset('icons/share.svg') }}" alt="" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Type a comment"></textarea>
                            </div>
                        @endforelse


                        <div class="row justify-content-center">
                            <div class="col-auto mb-0 mb-sm-3">
                                <span class="inline-block pagination-p me-2">Next Page</span>
                                <img src="{{ asset('icons/next.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.community.rightSide')
            </div>
        </div>

    </main>


    <!-- modal  -->
    <div class="modal fade" style="display: none" id="postModal" tabindex="-1" aria-labelledby="postModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModalLabel">My Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/store-post" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" required />
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Post Title" required />
                        </div>

                        <div class="form-group">
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"
                                placeholder="Enter Post"></textarea>
                        </div>

                        <button type="submit" class="btn submit-reg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cardm {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            margin-top: -5rem;
            margin-bottom: 3rem;
            margin-left: 5rem;
        }

        .cardm>hr {
            margin-right: 0;
            margin-left: 0
        }

        .cardm>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .cardm-body {
            flex: 1 1 auto;
            padding: 1rem 1rem
        }

        .card-title {
            margin-bottom: .5rem
        }

        .card-subtitle {
            margin-top: -.25rem;
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1rem
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-footer {
            padding: .5rem 1rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-right: -.5rem;
            margin-bottom: -.5rem;
            margin-left: -.5rem;
            border-bottom: 0
        }

        .card-header-pills {
            margin-right: -.5rem;
            margin-left: -.5rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            border-radius: calc(.25rem - 1px)
        }

        /* Style the button that is used to open and close the collapsible content */
        .collapsible {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        /* .active, .collapsible:hover {
              background-color: #ccc;
            } */

        /* Style the collapsible content. Note: hidden by default */
        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #ffffff;
        }
    </style>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

@endsection
