  <a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal">
    Registeration
  </a>  

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center mb-5">
          <h4>Do you want to register yourself.</h4>
        </div>
        <p class="text-danger fs--1">
          
        </p>
        <div class="d-flex flex-column text-center mr-5 ml-5">
          <form action="../configuration/signup.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Your first and last name...">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Your password...">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-round ">Register</button>

            <div class="form-title text-center mt-5 ">
              <h5>Already have an account? <a href="login.php" class="text-primary">Sign-In</a></h5>
            </div>
          </form>
        </div>
      </div>
    </div>  
  </div>
</div>