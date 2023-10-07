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
                                    <li class="breadcrumb-item active" aria-current="page">Landing page sliders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Sliders</h4>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Filter By position</label>
                                <select class="form-control form-control-sm" id="filter" name="filter">
                                <option value="" selected disabled>Choose Type</option>
                                <option>first</option>
                                <option>second</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Slider</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                              <tbody>

                                @forelse($sliders as $i => $slider)
                                 <td>{{$i + 1}}</td>
                                 <td>
                                  @php $sliderz =   json_decode($slider->slider); @endphp 
                                  @foreach ($sliderz as $item)
                                   <a href="/change-hero-slider/{{$slider->id}}">
                                    <img src="{{asset('/images/'. $item)}}" alt="" style="margin-bottom: 5px; width: 400px; height: 100px; border-radius: 0px"> <br>
                                   </a>
                                  @endforeach
                             
                                  </td>
                                  <td>{{$slider->created_at}}</td>
                                  <td>{{$slider->updated_at}}</td>
                                  <td>
                                   <div class="dropdown">
                                       <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-settings"></i>
                                       </button>
                                       <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                       <a class="dropdown-item" href="/change-hero-slider/{{$slider->id}}">change slider</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Delete Event</a>
                                       </div>
                                   </div>
                                  </td>
                                 @empty
                                     <tr>
                                         <td>No sliders found</td>
                                     </tr>
                                 @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{-- {{$events->links()}} --}}
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
    