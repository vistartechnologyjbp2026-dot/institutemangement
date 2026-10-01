<?php

include "config.php";
include "includes/header.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM questions ORDER BY id ASC"
);

$questions = [];

while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

?>

<div class="container mt-5">

<h2 class="text-center">
Online Test
</h2>

<form method="POST">

<?php foreach ($questions as $index => $q) { ?>

<div class="card mb-4">

<div class="card-body">

<h5>
<?php echo ($index + 1) . ". " . $q['question']; ?>
</h5>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="answer[<?php echo $q['id']; ?>]"
value="A">

<label class="form-check-label">
<?php echo $q['option_a']; ?>
</label>

</div>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="answer[<?php echo $q['id']; ?>]"
value="B">

<label class="form-check-label">
<?php echo $q['option_b']; ?>
</label>

</div>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="answer[<?php echo $q['id']; ?>]"
value="C">

<label class="form-check-label">
<?php echo $q['option_c']; ?>
</label>

</div>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="answer[<?php echo $q['id']; ?>]"
value="D">

<label class="form-check-label">
<?php echo $q['option_d']; ?>
</label>

</div>

</div>

</div>

<?php } ?>

<button class="btn btn-success"
name="submit_test">

Submit Test

</button>

</form>

</div>

<?php include "includes/footer.php"; ?>