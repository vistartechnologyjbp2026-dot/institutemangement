<?php

$page_title = "Home";

include "config.php";
include "includes/header.php";

?>

<div class="hero">

    <div class="container text-center">

        <h1>Welcome to Apna Academy</h1>

        <p>
            Learn • Practice • Get Certified • Get Placed
        </p>

        <a href="registration.php"
           class="btn btn-warning btn-lg">
            Apply Now
        </a>

        <a href="courses.php"
           class="btn btn-light btn-lg">
            View Courses
        </a>

    </div>

</div>

<div class="container mt-5">

    <div class="row g-4">

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div class="card-body text-center">
                    <h3>Courses</h3>
                    <p>Professional IT Courses</p>
                    <a href="courses.php"
                       class="btn btn-primary">
                        View
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div class="card-body text-center">
                    <h3>Placement</h3>
                    <p>Placement Assistance</p>
                    <a href="placement.php"
                       class="btn btn-primary">
                        View
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div class="card-body text-center">
                    <h3>Jobs</h3>
                    <p>Latest Job Opportunities</p>
                    <a href="jobs.php"
                       class="btn btn-primary">
                        View
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div class="card-body text-center">
                    <h3>Online Test</h3>
                    <p>Practice Online</p>
                    <a href="online_test.php"
                       class="btn btn-primary">
                        Start
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include "includes/footer.php"; ?>