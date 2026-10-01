<?php

include "config.php";
include "includes/header.php";

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $sql = "INSERT INTO admissions
            (name,email,phone,course,address)
            VALUES
            ('$name','$email','$phone','$course','$address')";

    if (mysqli_query($conn, $sql)) {

        echo '<div class="alert alert-success text-center">
                Registration Successful
              </div>';

    } else {

        echo '<div class="alert alert-danger text-center">
                Registration Failed
              </div>';
    }
}

?>

<div class="container mt-5">

<h2 class="text-center">
    Online Admission
</h2>

<form method="POST">

<div class="mb-3">
<label>Name</label>
<input type="text"
       name="name"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email"
       name="email"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text"
       name="phone"
       class="form-control"
       required>
</div>

<div class="mb-3">
<label>Course</label>

<select name="course"
        class="form-control">

<option>PHP Full Stack</option>
<option>Python Full Stack</option>
<option>Java Full Stack</option>
<option>Data Science</option>
<option>Generative AI</option>

</select>

</div>

<div class="mb-3">

<label>Address</label>

<textarea name="address"
          class="form-control"></textarea>

</div>

<button name="register"
        class="btn btn-primary">

Submit Application

</button>

</form>

</div>

<?php include "includes/footer.php"; ?>