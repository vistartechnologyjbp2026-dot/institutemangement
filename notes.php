<?php

include "config.php";
include "includes/header.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM notes
     ORDER BY id DESC"
);

?>

<div class="container mt-5">

<h2 class="text-center mb-4">
Study Notes
</h2>

<table class="table table-bordered table-striped">

<tr class="table-dark">

<th>Title</th>
<th>Subject</th>
<th>Download</th>

</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['title']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td>

<a href="uploads/<?php echo $row['file_name']; ?>"
target="_blank"
class="btn btn-primary">
Download
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include "includes/footer.php"; ?>