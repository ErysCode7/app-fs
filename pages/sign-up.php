<?php  
    session_start();
    require "../includes/view/header.php";
?>

<style>
.login {
  min-height: 100vh;
}

.bg-image {
  background-image: url('../assets/images/rtu-favicon.png');
  background-size: cover;
  background-position: center;
  background-color: #e8e8e8;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}
</style>
   

<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">

            <!-- alerts in login -->
            <?php
                if(isset($_SESSION["status"])) {
            ?>
            <div class="alert alert-warning">
                <h4 class="text-center"><?= $_SESSION["status"]; ?></h4>
            </div>               
            <?php unset($_SESSION["status"]); } ?>
            <?php
                if(isset($_SESSION["success-status"])) {
            ?>
            <div class="alert alert-success">
                <h4 class="text-center"><?= $_SESSION["success-status"]; ?></h4>
            </div>
            <?php unset($_SESSION["success-status"]); } ?>


            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>

              <!-- LOGIN Form -->
              <form action="../includes/controller/sign-up.inc.php" method="post">
              <?php if(isset($_GET["name"])) { $name = $_GET["name"]; ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name" value="<?= $name ?>">
                    <label for="name">Name</label>
                </div>
                <?php } else { ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <?php } ?>  
                <?php if(isset($_GET["username"])) { $username = $_GET["username"];?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" maxlength="20" id="floatingInput" placeholder="Username" value="<?= $username ?>">
                        <label for="username">Username</label>
                    </div>
                <?php } else { ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" maxlength="20" id="floatingInput" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                <?php } ?>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password...">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="confirm_password" maxlength="50" id="confirm_password" placeholder="Confirm Password">
                  <label for="floatingPassword">Confirm Password</label>
                </div>

            
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="submit">Login</button>
                      

                  <!-- features if i have time -->

                  <!-- <div class="text-center">
                    <a class="small" href="#">Forgot password?</a>
                  </div> -->

                </div>

                <p>Already have an account? <a class="text-uppercase fw-bold mb-2 mt-4" href="../index.php">Login</a></p>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
