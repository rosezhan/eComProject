<?php
    include_once 'header.php';
?>

<main>
    <h2>Contact Us</h2>
    <form method="post" action="">
        <div class="form_fields">
            <label for="form_name">Name</label>
            <input type="text" name="form_name" id="form_name">
        </div>
        <div class="form_fields">
            <label for="form_email">Email</label>
            <input type="text" name="form_email" id="form_email">
        </div>
        <div class="form_fields">
            <label for="form_subject">Subject</label>
            <input type="text" name="form_subject" id="form_subject">
        </div>
        <div class="form_fields">
            <label for="form_message">Message</label>
            <textarea name="form_message" id="form_message"></textarea>
        </div>  
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</main>

<?php  
    include_once 'footer.php';
?>