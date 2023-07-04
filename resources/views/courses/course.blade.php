@extends('layouts.app')
@section('content')
    <main class="finance">
        <div class="second-orange d-lg-none d-block"></div>
        <div class="sub-nav-wrapper">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-0">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="#">Courses Categories</a>

                        <div class="d-block d-lg-none dropdown px-0">
                            <a style="height: 100%; color: #000000"
                                class="nav-link dropdown-toggle active d-flex align-items-center justify-content-between ps-1"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Financial Manigement
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 100%">
                                @forelse ($categories as $category)
                                    <li>
                                        <a class="dropdown-item" href="/category-courses/{{$category->id}}">{{$category->title}}</a>
                                    </li>
                                @empty
                                    <li>
                                        <a class="dropdown-item" href="#">No Course Category</a>
                                    </li>
                                @endforelse
                                
                            </ul>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                            <ul class="navbar-nav mb-lg-0 me-auto mt-2" style="overflow: auto; white-space: nowrap;">
                                @forelse ($categories as $cat)
                                
                                    <li class="nav-item">
                                        <a class="nav-link {{$cat->title == $course->courseCategory->title ? 'active' : ''}}" aria-current="{{$cat->title == $category->title ? 'page' : ''}}" href="/category-courses/{{$cat->id}}">{{$cat->title}}</a>
                                    </li>
                                @empty
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">No Course Category</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- breadcrums -->
        <div style="border-bottom: 0.4px solid rgba(0, 0, 0, 0.3)">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/category-courses/{{$course->course_category_id}}">{{$course->courseCategory->title}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{$course->name}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- main course -->
        <div class="container finance-details py-5 pb-0 pb-md-5">
            <div class="row justify-content-between mb-md-4">
                <div class="col-md-auto order-md-1 order-2">
                    <h3> {{$course->name}}</h3>
                </div>
                <div class="mb-3 mb-md-0 col-md-auto order-md-2 order-1 d-flex justify-content-between align-items-start">
                    <div>
                        <a href="#" class="d-inline-block pe-2 me-3">
                            <img src="{{ asset('icons/liove-icon.svg') }}" alt="like icon" />
                        </a>

                        <a href="#" class="d-inline-block"><img src="{{ asset('icons/share-icon.svg') }}"
                                alt="share" /></a>
                    </div>
                </div>
            </div>
            <div class="row speaker-details">
                <h6>Speakers:</h6>
                <p>
                    Taiwo Oyedele (Fiscal Policy Partner and West Africa Tax Leader at
                    PwC)
                </p>
                <p>
                    Ayodele Olojede (Group Head, Emerging Businesses at Access Bank)
                </p>
            </div>
            <div class="row finance-pics">
                <div class="position-relative">
                    <img src="{{ asset('images/'. $course->image) }}" class="image" />
            
                    @if ($course->embed_link)
                        <a href="{{ $course->embed_link }}" target="_blank">
                            <img src="{{ asset('icons/play-img.svg') }}" alt="play" class="play" id="play"/>
                        </a>
                    @else
                        <img src="{{ asset('icons/play-img.svg') }}" alt="play" class="play" id="play"/>
                    @endif
                </div>
            
                <div class="actions">
                    <button class="btn" style="background: #ceee0a; border-radius: 4px">Free</button>

                     @if ($user_has_course > 0)
                        <button class="btn" style="border: 1px solid #000000; border-radius: 4px" disabled>Enrolled </button>
                    @else
                        <a href="/enrollment/{{$course->id}}" class="btn" style="border: 1px solid #000000; border-radius: 4px">Enroll</a>
                    @endif

                </div>
            </div>
            <div class="row speaker-details mb-0">
                    <h6>Brief Description</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum
                        amet commodo ultricies lacinia ipsum tempus et. Eu, id pellentesque
                        sit ultricies cras adipiscing. Platea adipiscing tempus dui dui ac
                        venenatis ut odio. Suspendisse nisi viverra senectus amet, eu
                        aliquet a velit faucibus. Sed ultrices neque, eget tincidunt sit.
                        Aenean tincidunt nulla praesent ullamcorper. Justo, diam ultrices
                        tellus dictumst. Non, pulvinar eu, imperdiet bibendum lectus rutrum
                        tincidunt diam, velit. Accumsan tortor faucibus eu lobortis id
                        rhoncus. Feugiat felis, urna, lacus ut bibendum nibh. Amet arcu,
                        orci, malesuada lacus volutpat pulvinar quis pretium. Praesent in
                        convallis at cras malesuada. Nam dapibus augue vitae pellentesque
                        urna velit. Diam mi id posuere velit tristique mi.
                    </p>
            </div>
        </div>

        <!-- related course -->
        <div class="container finance-details">
            <div class="row mt-5">
                <div class="col-12">
                    <h4>Related Courses</h4>
                </div>
            </div>
            <div class="row courses-list py-4">
                @forelse ($relatedCourses as $item)
                <div class="col-auto">
                    <div class="card" style="max-width: 282px">
                        <img class="card-img-top" src="{{ asset('images/' . $item->image) }}" alt="course pics" style="width: 100%" />
                            <div class="card-body">
                                <a href="#" class="btn" style="width: 15rem">{{$item->courseCategory->title}}</a>
                                <a href="/acourse/{{$item->id}}" style="background: white !important"> 
                                    <h5 class="card-title">Course Title</h5>
                                    <h6 class="card-text">{{ $item->name}}</h6>
                                </a>
                            </div>
                    </div>
                </div>
                @empty
                    <p>No related course</p>
                @endforelse
                
            </div>
            <div class="row justify-content-center mb-5 d-none">
                <div class="col-auto mb-0 mb-sm-3">
                    <span class="inline-block pagination-p me-2">Next Page</span>
                    <img src="{{ asset('icons/next.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </main>
@endsection
