<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
pageHead();


if($_SESSION['idTaken']){
    echo '<div class="alert alert-danger" role="alert">
            That username has already been taken!
        </div>';
}
?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form id="userRegistration" action="registerUser.php" method="post" style=" max-width: 600px; margin: 5px;">
                <div class="form-row"><h3>User Registration</h3></div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input class="form-control" id="username" type="text" name="username" id="" required min="5" max="15">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-auto">
                    <style>input:invalid{border:1px solid red;}</style>
                        <label for="password">Password</label>
                        <input class="form-control" placeholder="Password" id="password" type="password" name="password" aria-describedby="passwordHelpBlock" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">Your password must be at least 8 characters long, and contain letters, numbers, and special characters.</small>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group"><input class="btn btn-primary" type="submit" name="submit" value="Sign up"></div>
                </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

