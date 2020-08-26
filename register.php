<?php 
    include_once 'header.php';
?>

<h2>Register</h2>
<form method="post" action="">
    <div class="form_fields">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div class="form_fields">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="form_fields">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div class="form_fields">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" name="password-confirm" id="password-confirm">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

<?php 
    include_once 'footer.php';
?>