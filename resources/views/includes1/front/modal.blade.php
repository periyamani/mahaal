
<style>
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
.modal-header .close {
  margin-top: -2.5rem;
}
.form-group{
  margin-bottom: 11px;
}
.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
  width: 100%; background: #8d7c52; padding: 11px; color: white; font-size: 17px; border: 1px solid #8d7c52;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
  font-size: 15px;
    text-align: center;
}
</style>

{{-- <div class="container">
  <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
    Login
  </button>  
</div> --}}

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h2 class="modal-title">Login {{session()->get('name')}}</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 32px !important;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
         
        </div>
        <div class="d-flex flex-column text-center">
          <form id="login">
            @csrf
            <div class="form-group">
              <input type="text" id="email1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Your Mobile No...">
            </div>
            <div class="form-group">
              <input id="password1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your password...">
            </div>
            <p style="text-align: end; margin: 0;cursor:pointer;font-size: 13px;">Forgot Password?</p>
            <button type="submit" class="btn btn-info btn-block btn-round" style="width: 100%;">Login</button>
          </form>
          <div class="signup-section">Not a member yet? <a onclick="register()" class="text-info" style="cursor: pointer"> Register</a>.</div>
          
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h2 class="modal-title">Registration {{Auth::user()}}</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 32px !important;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
           
          </div>
          <div class="d-flex flex-column text-center">
            {{-- <form>
              <div class="form-group">
                <input type="text" class="form-control" id="Name1"placeholder="Your Name...">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="mobile"placeholder="Your Mobile No...">
              </div> <div class="form-group">
                <input type="email" class="form-control" id="email1"placeholder="Your email address...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" placeholder="Your password...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="cpassword1" placeholder="Your Confirm password...">
              </div>
             
              <button type="button" class="btn btn-info btn-block btn-round" style="width: 100%;">Register</button>
            </form> --}}
            <form id="registration">
              @csrf

              <div class="row mb-3">
                 
                  <div class="col-md-12 form-group">
                      <input id="name" type="text" placeholder="Your Name..." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                  
                  <div class="col-md-12 form-group">
                      <input id="email" type="text" placeholder="Your Mobile No..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                  
                  <div class="col-md-12 form-group">
                      <input id="password" type="password" placeholder="Your Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                 
                  <div class="col-md-12 form-group">
                      <input id="password-confirm" type="password" placeholder="Your Confirm Password..." class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="row mb-0">
                  <div class="col-md-12 offset-md-4">
                      <button type="submit" class="btn btn-info btn-block btn-round" style="width: 100%;cursor: pointer;">{{ __('Register') }}</button>
                  </div>
              </div>
          </form>
            <div class="signup-section">Already member? <a onclick="login()" class="text-info" style="cursor: pointer"> Login</a>.</div>
            
          </div>
        </div>
      </div>
    </div>
  </div>




<script>

function login(){
    jQuery('#loginModal').modal('show');jQuery('#registerModal').modal('hide');
}
function register(){
    jQuery('#registerModal').modal('show');jQuery('#loginModal').modal('hide');
}

jQuery("#login").submit(function(e) {
        e.preventDefault();
        
        var formData = new FormData(jQuery("#login")[0]);

        // console.log(editor);
        jQuery.ajax({
            type: "POST",
            url: "/api/login1",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            enctype: "multipart/form-data",
            success: function(data) {
              if(data['statusCode'] == 401){
                toastr.error("Invalid Credentials");
              }else{
                toastr.success("Login Successfully");
                sessionStorage.setItem("name", data['loginDetail']['name']);
                sessionStorage.setItem("mobile", data['loginDetail']['email']);
                sessionStorage.setItem("mobile_verify", data['loginDetail']['mobile_verify']);
                sessionStorage.setItem("role", data['loginDetail']['role']);
                sessionStorage.setItem("id", data['loginDetail']['id']);
                window.location.reload();
              }
              
            },
        });
        return false;
    });

jQuery( document ).ready(function() {
    console.log( sessionStorage.getItem("id") );
    if(sessionStorage.getItem("id")){
      jQuery('.ui_Check_login').hide();
      jQuery('.ui_Check_name').show();
      jQuery('#uname').html(sessionStorage.getItem("name"));
    }else{
      jQuery('.ui_Check_name').hide();
      jQuery('.ui_Check_login').show();
    }
});

function loginForm(){
  if(sessionStorage.getItem("id")){
    window.location.href = '/booking';
    }else{
      jQuery('#loginModal').modal('show');
    }
}

function logout(){
  toastr.success("Logout Successfully");
                sessionStorage.setItem("name", "");
                sessionStorage.setItem("mobile", "");
                sessionStorage.setItem("mobile_verify", "");
                sessionStorage.setItem("role", "");
                sessionStorage.setItem("id", "");
                window.location.reload();
}

jQuery("#registration").submit(function(e) {
        e.preventDefault();
        var mobileNum = jQuery("#registration").find('#email').val();
        var validateMobNum= /^\d*(?:\.\d{1,2})?$/;
        if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {
           
        }
        else {
          toastr.error("Invalid Mobile Number");
          return false;
        }
        if(jQuery("#registration").find('#password-confirm').val() != jQuery("#registration").find('#password').val()){
          toastr.error('Password & Confirm password Mismatc');
          return false;
        }
        var formData = new FormData(jQuery("#registration")[0]);

        // console.log(editor);
        jQuery.ajax({
            type: "POST",
            url: "/api/registration1",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            enctype: "multipart/form-data",
            success: function(data) {
              toastr.success("Register Successfully");
                sessionStorage.setItem("name", data['loginDetail']['name']);
                sessionStorage.setItem("mobile", data['loginDetail']['email']);
                sessionStorage.setItem("mobile_verify", data['loginDetail']['mobile_verify']);
                sessionStorage.setItem("role", data['loginDetail']['role']);
                sessionStorage.setItem("id", data['loginDetail']['id']);
                window.location.reload();
            },
        });
        return false;
    });
</script>