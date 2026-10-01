<?php
include "config.php";
include "includes/header.php";
?>

<div class="container py-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Our Placements</h1>
        <p class="text-muted">
            Our students placed in reputed companies
        </p>
    </div>

    <div class="row g-4">

        <?php

        $sql = "SELECT * FROM placements
                WHERE status='Approved'
                ORDER BY id DESC";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="col-lg-4 col-md-6">

            <div class="card placement-card h-100 shadow-sm">

                <!-- Student Photo -->
                <?php if (!empty($row['student_photo'])) { ?>

                    <img
                        src="uploads/placements/<?php echo htmlspecialchars($row['student_photo']); ?>"
                        class="placement-photo"
                        alt="Student Photo"
                    >

                <?php } else { ?>

                    <div class="placement-photo-placeholder">
                        <i class="fa fa-user fa-4x"></i>
                    </div>

                <?php } ?>


                <div class="card-body">

                    <h4 class="fw-bold">
                        <?php echo htmlspecialchars($row['student_name']); ?>
                    </h4>

                    <p class="text-primary fw-bold mb-2">
                        <?php echo htmlspecialchars($row['course']); ?>
                    </p>


                    <hr>


                    <p>
                        <strong>
                            <i class="fa fa-building"></i>
                            Company:
                        </strong>

                        <?php echo htmlspecialchars($row['company']); ?>
                    </p>


                    <p>
                        <strong>
                            <i class="fa fa-briefcase"></i>
                            Job Role:
                        </strong>

                        <?php echo htmlspecialchars($row['job_role']); ?>
                    </p>


                    <p>
                        <strong>
                            <i class="fa fa-money-bill"></i>
                            Salary:
                        </strong>

                        <?php echo htmlspecialchars($row['salary']); ?>
                    </p>


                    <p>
                        <strong>
                            <i class="fa fa-calendar"></i>
                            Placement Year:
                        </strong>

                        <?php echo htmlspecialchars($row['placement_year']); ?>
                    </p>

                </div>

            </div>

        </div>

        <?php

            }

        } else {

        ?>

            <div class="col-12">

                <div class="alert alert-info text-center">
                    No placement records available.
                </div>

            </div>

        <?php } ?>

    </div>

</div>


<style>

.placement-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    transition: 0.3s;
}

.placement-card:hover {
    transform: translateY(-8px);
}

.placement-photo {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

.placement-photo-placeholder {
    height: 260px;
    background: #f1f3f5;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #777;
}

</style>


<?php
include "includes/footer.php";
?>

