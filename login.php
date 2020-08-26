<?php 
    include_once 'header.php';

    session_start();
        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
?>

<h2>Log In</h2>
<form method="post" action="login.php">
    <div class="form_fields">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div class="form_fields">
        <label for="password">Password</label>
        <input type="password" name="password" id="username">
    </div>
    <div>
        <button type="submit" name="login">Submit</button>
    </div>
</form>
<p>Don't have an account? <a href="register.php">Register!</a></p>

<?php 
    include_once 'footer.php';
?>