<?php

define('TITLE', "Verify Email");
include '../assets/layouts/header.php';
check_logged_in_butnot_verified(); 

?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-3">

            <?php include('../assets/layouts/profile-card.php'); ?>

        </div>
        <div class="shadow-lg box-shadow col-sm-7 px-5 m-5 bg-light rounded align-self-center verify-message">

            <!--form action="includes/sendverificationemail.inc.php" method="post">

                <?php //insert_csrf_token(); ?>
            
                <h5 class="text-center mb-5 text-primary">Verify Your Email Address</h5>

                <p>
                    Before proceeding, please check your email for a verification link. If you did not receive the email,
                    <button type="submit" name="verifysubmit">click here to send another</button>.
                </p>
                <br>
                <div class="text-center mt-5">
                    <h6 class="text-success">
                        <?php
                            if (isset($_SESSION['STATUS']['verify']))
                                echo $_SESSION['STATUS']['verify'];

                        ?>
                    </h6>
                </div>

            </form-->
            <form>
            <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6"
          >
            <h1 class="mb-6 text-center">Edit Profile</h1>
            <form class="mb-6">
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@example.com"
                  id="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="age">Age:</label>
                <input
                  type="text"
                  class="form-control"
                  id="age"
                  required
                />
              </div>
              <div class="form-group">
                <label for="DOB">DOB:</label>
                <input
                  type="text"
                  class="form-control"
                  id="DOB"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary btn-block mb-3">
                Edit Account
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
            </form>

        </div>
    </div>
</main>


<?php

include '../assets/layouts/footer.php'

?>