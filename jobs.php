<?php

include "config.php";
include "includes/header.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM jobs
     ORDER BY id DESC"
);

?>

<div class="container mt-5">

<h2 class="text-center mb-4">
Latest Job Opportunities
</h2>

<div class="row">

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<div class="col-md-6 mb-4">

<div class="card shadow h-100">

<div class="card-body">

<h4>
<?php echo $row['job_title']; ?>
</h4>

<h6>
<?php echo $row['company_name']; ?>
</h6>

<p>
<strong>Qualification:</strong>
<?php echo $row['qualification']; ?>
</p>

<p>
<strong>Location:</strong>
<?php echo $row['location']; ?>
</p>

<p>
<strong>Salary:</strong>
<?php echo $row['salary']; ?>
</p>

<p>
<?php echo $row['description']; ?>
</p>

<p>
<strong>Last Date:</strong>
<?php echo $row['last_date']; ?>
</p>

<a href="registration.php"
class="btn btn-primary">
Apply
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

<?php include "includes/footer.php"; ?>