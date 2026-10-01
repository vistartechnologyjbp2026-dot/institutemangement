<?php

include "config.php";
include "includes/header.php";

?>

<div class="container mt-5">

<h2>Contact Us</h2>

<div class="row">

<div class="col-md-6">

<h4>Institute Address</h4>

<p>
Jabalpur, Madhya Pradesh, India
</p>

<p>
<strong>Phone:</strong>
+91 XXXXXXXXXX
</p>

<p>
<strong>Email:</strong>
info@example.com
</p>

</div>

<div class="col-md-6">

<form>

<input type="text"
placeholder="Name"
class="form-control mb-3">

<input type="email"
placeholder="Email"
class="form-control mb-3">

<input type="text"
placeholder="Phone"
class="form-control mb-3">

<textarea
placeholder="Message"
class="form-control mb-3"></textarea>

<button class="btn btn-primary">
Send Message
</button>

</form>

</div>

</div>

</div>

<?php include "includes/footer.php"; ?>