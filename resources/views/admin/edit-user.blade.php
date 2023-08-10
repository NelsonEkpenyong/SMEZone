@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Edit User</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
      @endif
						<form  id="editUser" method="POST" action="{{ url('/update-user/' . $user->id) }}" enctype="multipart/form-data">
							@csrf

       <div class="row">
								<div class="col-md-6">
         <div class="form-group">
          <label>First Name</label>
          <input type="text" value="{{$user->first_name}}" name="first_name" class="form-control"  required>
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Last Name</label>
          <input type="text" value="{{$user->last_name}}" name="last_name" class="form-control"  required>
         </div>
        </div>
       </div>

       <div class="row">
								<div class="col-md-6">
         <div class="form-group">
          <label>Phone</label>
          <input type="text" value="{{$user->phone}}" name="phone" class="form-control"  required>
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Email</label>
          <input type="text" value="{{$user->email}}" name="email" class="form-control"  required>
         </div>
        </div>
       </div>

       <div class="row">
								<div class="col-md-6">
         <div class="form-group">
          <label>password</label>
          <input type="text" name="password" class="form-control">
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" value="{{$user->dob ? $user->dob : null}}" name="dob" class="form-control">
         </div>
        </div>
       </div>

       <div class="row">
								<div class="col-md-6">
         <div class="form-group">
          <label>Gender</label>
          <select class="form-control form-control-sm" name="gender_id">
           <option value="{{ $user->gender_id }}"  selected> {{ $user->gender->name}}</option>
           @foreach($genders as $gender)
            @if($user->gender_id != $gender->id)
             <option value="{{$gender->id }}"> {{ $gender->name}}</option>
            @endif
           @endforeach
          </select>
         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
             <label>Have Business</label>
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-check">
                         <input type="checkbox" {{ $user->have_business === 1 ? 'checked' : '' }} value="1" name="have_business[]" class="form-check-input ml-1">
                         <label class="form-check-label">Yes</label>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-check">
                         <input type="checkbox"  value="0" name="have_business[]" class="form-check-input">
                         <label class="form-check-label ml-1">No</label>
                     </div>
                 </div>
             </div>
         </div>
        </div>
     
       </div>


       <div class="row">
								<div class="col-md-6">
         <div class="form-group">
          <label>Industry</label>
          <select class="form-control form-control-sm" name="industry_id">
              @if ($user->industry)
                  <option value="{{ $user->industry_id }}" selected>{{ $user->industry->name }}</option>
              @else
                  <option value="" selected>Not set by user</option>
              @endif
      
              @foreach ($industries as $industry)
                  @if ($user->industry_id != $industry->id)
                      <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                  @endif
              @endforeach
          </select>
          </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Years in Business</label>
          <input type="text" value="{{$user->years_in_business}}" name="years_in_business" class="form-control">
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-md-6">
           <div class="form-group">
            <label>Have Acess Bank Account</label>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" {{ $user->have_access_bank_account === 1 ? 'checked' : '' }} value="1" name="have_access_bank_account[]" class="form-check-input ml-1">
                        <label class="form-check-label">Yes</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" value="0" name="have_access_bank_account[]" class="form-check-input">
                        <label class="form-check-label ml-1">No</label>
                    </div>
                </div>
            </div>
           </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Account</label>
          <input type="text" value="{{$user->account}}" name="account" class="form-control">
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label>Account Status</label>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-check">
                      <input type="checkbox" {{ $user->account_status === 1 ? 'checked' : '' }} value="1" name="account_status[]" class="form-check-input ml-1">
                      <label class="form-check-label">Active</label>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-check">
                      <input type="checkbox" value="0" name="account_status[]" class="form-check-input">
                      <label class="form-check-label ml-1">Dormant</label>
                  </div>
              </div>
          </div>
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label>Account Type</label>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-check">
                      <input type="checkbox" {{ $user->account_type === 1 ? 'checked' : '' }} value="1" name="account_type[]" class="form-check-input ml-1">
                      <label class="form-check-label">Corporate</label>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-check">
                      <input type="checkbox" value="0" name="account_type[]" class="form-check-input">
                      <label class="form-check-label ml-1">Individual</label>
                  </div>
              </div>
          </div>
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-md-4">
         <div class="form-group">
          <label>Address</label>
          <input type="text" value="{{$user->address}}" name="address" class="form-control" />
         </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
          <label>L.G.A</label>
          <select class="form-control form-control-sm" name="lga_id">
           @if ($user->lga_id)
               <option value="{{ $user->lga_id }}" selected>{{ $user->lga->name }}</option>
           @else
               <option value="" selected>Not set by user</option>
           @endif
   
           @foreach ($lgas as $lga)
               @if ($user->lga_id != $lga->id)
                   <option value="{{ $lga->id }}">{{ $lga->name }}</option>
               @endif
           @endforeach
          </select>
         </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
          <label>State</label>
          <select class="form-control form-control-sm" name="state_id">
           @if ($user->state_id)
               <option value="{{ $user->state_id }}" selected>{{ $user->state->name }}</option>
           @else
               <option value="" selected>Not set by user</option>
           @endif
   
           @foreach ($states as $state)
               @if ($user->state_id != $state->id)
                   <option value="{{ $state->id }}">{{ $state->name }}</option>
               @endif
           @endforeach
          </select>
         </div>
        </div>
       </div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		

{{-- <script>
 document.getElementById("editUser").addEventListener("submit", function(event) {
  validateHaveBankAccount();
  // validateHaveBusiness();
 });


 const validateHaveBankAccount = () => {
  var HaveBankAccountcheckboxes = document.getElementsByName("have_access_bank_account[]");
     var HaveBankAccountChecked = false;
 
     for (var i = 0; i < HaveBankAccountcheckboxes.length; i++) {
         if (HaveBankAccountcheckboxes[i].checked) {
             checked = true;
             break;
         }
     }
 
     if (!HaveBankAccountChecked) {
         alert("Does does user have an account or not. Please choose one.");
         event.preventDefault(); // Prevent form submission
     }
 }

 const validateHaveBusiness = () => {
  var HaveBusinesscheckboxes = document.getElementsByName("have_business[]");
     var HaveBusinessChecked = false;
 
     for (var i = 0; i < HaveBusinesscheckboxes.length; i++) {
         if (HaveBusinesscheckboxes[i].checked) {
             checked = true;
             break;
         }
     }
 
     if (!HaveBusinessChecked) {
         alert("Does does user have a business or not. Please choose one.");
         event.preventDefault(); // Prevent form submission
     }
 }
 </script> --}}

 <script>
  document.addEventListener("DOMContentLoaded", function() {
      var accountStatusCheckBoxes = document.getElementsByName("account_status[]");
      validateAccountStatus(accountStatusCheckBoxes);

      var haveAccessBankAccountCheckBoxes = document.getElementsByName("have_access_bank_account[]");
      validateHaveAccessBankAccount(haveAccessBankAccountCheckBoxes);

      var accountTypeCheckBoxes = document.getElementsByName("account_type[]");
      validateAccountType(accountTypeCheckBoxes);
    
  });

  function validateAccountStatus(accountStatusCheckBoxes){
   for (var i = 0; i < accountStatusCheckBoxes.length; i++) {
          accountStatusCheckBoxes[i].addEventListener("change", function() {
              for (var j = 0; j < accountStatusCheckBoxes.length; j++) {
                  accountStatusCheckBoxes[j].checked = false;
              }
              this.checked = true;
          });
      }
  
      document.getElementById("editUser").addEventListener("submit", function(event) {
          var checkedCount = 0;
          
          for (var i = 0; i < accountStatusCheckBoxes.length; i++) {
              if (accountStatusCheckBoxes[i].checked) {
                  checkedCount++;
              }
          }
  
          if (checkedCount !== 1) {
              alert("Please select exactly one option in 'Have Access Bank Account'.");
              event.preventDefault();
          }
      });

  }

  function validateHaveAccessBankAccount(haveAccessBankAccountCheckBoxes){
   for (var i = 0; i < haveAccessBankAccountCheckBoxes.length; i++) {
    haveAccessBankAccountCheckBoxes[i].addEventListener("change", function() {
              for (var j = 0; j < haveAccessBankAccountCheckBoxes.length; j++) {
               haveAccessBankAccountCheckBoxes[j].checked = false;
              }
              this.checked = true;
          });
      }
  
      document.getElementById("editUser").addEventListener("submit", function(event) {
          var checkedCount = 0;
          
          for (var i = 0; i < haveAccessBankAccountCheckBoxes.length; i++) {
              if (haveAccessBankAccountCheckBoxes[i].checked) {
                  checkedCount++;
              }
          }
  
          if (checkedCount !== 1) {
              alert("Please select exactly one option in 'Have Access Bank Account'.");
              event.preventDefault();
          }
      });

  }

  function validateAccountType(accountTypeCheckBoxes){
   for (var i = 0; i < accountTypeCheckBoxes.length; i++) {
    accountTypeCheckBoxes[i].addEventListener("change", function() {
              for (var j = 0; j < accountTypeCheckBoxes.length; j++) {
                accountTypeCheckBoxes[j].checked = false;
              }
              this.checked = true;
          });
      }
  
      document.getElementById("editUser").addEventListener("submit", function(event) {
          var checkedCount = 0;
          
          for (var i = 0; i < accountTypeCheckBoxes.length; i++) {
              if (accountTypeCheckBoxes[i].checked) {
                  checkedCount++;
              }
          }
  
          if (checkedCount !== 1) {
              alert("Please select exactly one option in 'Have Access Bank Account'.");
              event.preventDefault();
          }
      });

  }
  </script>
  
  
 
@endsection
    