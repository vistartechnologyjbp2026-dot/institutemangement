<?php

include "config.php";
include "includes/header.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $message = $_POST['message'];

    $sql = "INSERT INTO enquiries
            (name,phone,email,course,message)
            VALUES
            ('$name','$phone','$email','$course','$message')";

    mysqli_query($conn, $sql);

    echo '<div class="alert alert-success">
            Enquiry Submitted Successfully
          </div>';
}

?>

<div class="container mt-5">

<h2>Course Enquiry</h2>

<form method="POST">

<input type="text"
       name="name"
       placeholder="Name"
       class="form-control mb-3"
       required>

<input type="text"
       name="phone"
       placeholder="Phone"
       class="form-control mb-3"
       required>

<input type="email"
       name="email"
       placeholder="Email"
       class="form-control mb-3">

<input type="text"
       name="course"
       placeholder="Course"
       class="form-control mb-3">

<textarea name="message"
          placeholder="Message"
          class="form-control mb-3"></textarea>

<button name="submit"
        class="btn btn-primary">
    Submit Enquiry
</button>

</form>

</div>

<?php include "includes/footer.php"; ?>