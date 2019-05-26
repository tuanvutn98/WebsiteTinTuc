<div class="clsLogin" id="dialogLogin" style="display: none;">
    <?php
    require('config.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($connect, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect, $password);
        //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username'

and pwd='$password'";

        $check_quyen = "SELECT * FROM login WHERE username='$username' and quyen='0'";
        $result_quyen = mysqli_query($connect, $check_quyen);
        $result = mysqli_query($connect, $query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        $rows_quyen = mysqli_num_rows($result_quyen);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect user to index.php
            if ($rows_quyen == 1) {
                header("Location: admincp/index.php");
            } else {
                header("Location:index.php");
            }
        } else {
            echo "<div class='form'>
                    <h3>Username/password is incorrect.</h3>
                    <br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } else {
        ?>
        <div class="dialogLogin">
            <div class="loginleft">
                <h1>Login</h1>
                <p><i>To your Account</i></p>
                <p class="or"><i>or</i></p>
                <form action="" method="post" name="login">
                    <input type="text" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <input name="submit" type="submit" value="Login"/>
                </form>
                <p>Not registered yet?
                    <button id="btnRegis" type="button" onclick="clickRegis()"
                    '>Register Here</button></p>
            </div>
            <div class="loginright">
                <h1>Sign In</h1>
                <p><i>with one of your social</i></p>
                <p><i>profiles</i></p>
                <div class="social">
                    <button class="twitter"><i class="fab fa-twitter"></i></button>
                    <button class="facebook"><i class="fab fa-facebook"></i></button>
                    <button class="google"><i class="fab fa-google-plus"></i></button>
                    <p class="dont"><i>Don't have an account?</i></p>
                    <p><u>Register</u></p>
                </div>
            </div>

        </div>
    <?php } ?>
</div>