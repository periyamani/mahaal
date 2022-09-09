
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

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}
</style>

{{-- <div class="container">
  <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
    Login
  </button>  
</div> --}}

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h2 class="modal-title">Login</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 32px !important;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
         
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="mobile"placeholder="Your Mobile No...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Your password...">
            </div>
            <p style="text-align: end; margin: 0;" style="cursor: pointer">Forgot Password?</p>
            <button type="button" class="btn btn-info btn-block btn-round" style="width: 100%;">Login</button>
          </form>
          <div class="signup-section">Not a member yet? <a onclick="register()" class="text-info" style="cursor: pointer"> Register</a>.</div>
          
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h2 class="modal-title">Registration</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 32px !important;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
           
          </div>
          <div class="d-flex flex-column text-center">
            <form>
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
              {{-- <p style="text-align: end; margin: 0;">Forgot Password?</p> --}}
              <button type="button" class="btn btn-info btn-block btn-round" style="width: 100%;">Register</button>
            </form>
            <div class="signup-section">Already member? <a onclick="login()" class="text-info" style="cursor: pointer"> Login</a>.</div>
            
          </div>
        </div>
      </div>
    </div>
  </div>




<script>
$(document).ready(function() {             
    
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
$(document).ready(function() {             
    ('#registerModal').modal('show');$('#loginModal').modal('hide');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
function login(){
    jQuery('#loginModal').modal('show');jQuery('#registerModal').modal('hide');
}
function register(){
    jQuery('#registerModal').modal('show');jQuery('#loginModal').modal('hide');
}
</script>