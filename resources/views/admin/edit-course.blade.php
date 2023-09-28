@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Edit Course</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
      @endif
						<form  method="POST" action="/admin/update-course/{{$course->id}}" enctype="multipart/form-data">
							@csrf
       <div class="form-group">
								<label>Course Type</label>
								<select class="form-control form-control-sm" name="type_id">
         <option value="{{ $course->type_id }}"  selected> {{ $course->courseType->name}}</option>
									@foreach($courseTypes as $courseType)
          @if($course->type_id != $courseType->id)
           <option value="{{$courseType->id }}"> {{ $courseType->name}}</option>
          @endif
         @endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Course Name</label>
								<input type="text" value="{{$course->name}}" name="name" class="form-control"  placeholder="e.g Business" required>
							</div>
       <div class="form-group">
								<label>Embeded Link</label>
								<textarea class="form-control editor" name="embed_link" rows="15">{{$course->embed_link}}</textarea>
							</div>
       <div class="form-group">
								<label>Certificate</label>
								<select class="form-control form-control-sm" name="certificate_id">
         <option value="{{ $course->certificate_id }}"  selected> {{ $course->certificates->name}}</option>
									@foreach($certificates as $certificate)
          @if($course->certificate_id != $certificate->id)
           <option value="{{$certificate->id }}"> {{ $certificate->name}}</option>
          @endif
         @endforeach
								</select>
							</div>
       <div class="form-group">
								<label>Course Category</label>
								<select class="form-control form-control-sm" name="course_category_id">
         <option value="{{ $course->course_category_id }}"  selected> {{ $course->courseCategory->title}}</option>
									@foreach($categories as $category)
          @if($course->course_category_id != $category->id)
           <option value="{{$category->id }}"> {{ $category->title}}</option>
          @endif
         @endforeach
								</select>
							</div>
       <div class="form-group">
								<label>Price</label>
								<select class="form-control form-control-sm" name="payment_type_id">
									<option value="{{ $course->payment_type_id }}"  selected> {{ $course->cost->name}}</option>
									@foreach($paymentType as $price)
          @if($course->payment_type_id != $price->id)
           <option value="{{$price->id }}"> {{ $price->name}}</option>
          @endif
         @endforeach
								</select>
							</div>
       <div class="form-group">
								<label for="editor">Synopsis</label>
								<textarea class="form-control editor" name="synopsis" rows="15">{{$course->synopsis}}</textarea>
							</div>
       <div class="form-group">
								<label for="editor">description</label>
								<textarea class="form-control editor"  id="editor" name="description">{{$course->description}}</textarea>
							</div>
						
							<div class="form-group">
								<label> Image
									<small class="form-text text-muted">Required Dimension: 1200px X 500px</small>
								</label>								
								<input type="file" name="image" class="form-control">
        <img class="" src="{{asset('/images/'. $course->image) }} "width="193" height="130"/>
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		

		<style>
			.ck-editor__editable_inline{
				height: 15rem;
			}
		</style>
@endsection
    