<?php

include "config.php";
include "includes/header.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM courses ORDER BY id DESC"
);

?>

<div class="container mt-5">

<h2 class="text-center mb-4">
Our Courses
</h2>

<div class="row g-4">

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<div class="col-md-4">

<div class="card h-100 shadow">

<div class="card-body">

<h4>
<?php echo $row['course_name']; ?>
</h4>

<p>
<strong>Duration:</strong>
<?php echo $row['duration']; ?>
</p>

<p>
<strong>Fees:</strong>
₹<?php echo $row['fees']; ?>
</p>

<p>
<?php echo $row['description']; ?>
</p>

<a href="registration.php"
class="btn btn-primary">
Apply Now
</a>

<a href="enquiry.php"
class="btn btn-outline-primary">
Enquiry
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

<?php include "includes/footer.php"; ?>