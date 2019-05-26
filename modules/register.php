<div class="clsRegis" id="dialogRegis" style="display: none;">
    <?php
    require('config.php');

    // initializing variables
    $username = "";
    $email    = "";
    $errors = array();
    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);
        print ($username);
        print ($password_1);
        print ($email);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($connect, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            print ($username);
            print ($password);
            print ($email);
            $query = "INSERT INTO login (username, pwd, quyen, email) 
  			  VALUES('$username','$password_1', '1', '$email' )";
            mysqli_query($connect, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }?>
    <div class="dialogRegis">
        <h1>Register</h1>
        <p><i>To your Account</i></p>

    <form action="" method="post" name="register" >
        <?php  if (count($errors) > 0) : ?>
            <div class="error">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error ?></p>
                <?php endforeach ?>
            </div>
        <?php  endif ?>
        <div class="input-group">
            <input type="text" name="username" placeholder="UserName" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <input type="password" placeholder="PassWord" name="password_1">
        </div>
        <div class="input-group">
            <input type="password" name="password_2" placeholder="Confirm password">
        </div>
        <div class="input-group">
            <button type="submit" class="btnRegis" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <button id="btnUser" type="button" onclick="clickUser()">Sign in</button>
        </p>
    </form>
        </div>
</div>