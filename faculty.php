<?php
include "config.php";
include "includes/header.php";
?>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Our Faculty</h1>
        <p class="text-muted">
            Meet our experienced and dedicated faculty members
        </p>
    </div>

    <div class="row g-4">

        <?php

        $sql = "SELECT * FROM faculty ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="card faculty-card h-100 shadow">

                <!-- Faculty Photo -->
                <img
                    src="uploads/faculty/<?php echo htmlspecialchars($row['photo']); ?>"
                    class="card-img-top faculty-photo"
                    alt="<?php echo htmlspecialchars($row['name']); ?>"
                >

                <div class="card-body text-center">

                    <h4 class="fw-bold">
                        <?php echo htmlspecialchars($row['name']); ?>
                    </h4>

                    <p class="text-primary fw-bold">
                        <?php echo htmlspecialchars($row['designation']); ?>
                    </p>

                    <p>
                        <strong>Qualification:</strong><br>
                        <?php echo htmlspecialchars($row['qualification']); ?>
                    </p>

                    <p>
                        <strong>Experience:</strong>
                        <?php echo htmlspecialchars($row['experience']); ?>
                    </p>

                    <?php if (!empty($row['specialization'])) { ?>

                        <p class="text-muted">
                            <strong>Specialization:</strong><br>
                            <?php echo htmlspecialchars($row['specialization']); ?>
                        </p>

                    <?php } ?>

                    <!-- Social Links -->

                    <div class="mt-3">

                        <?php if (!empty($row['facebook'])) { ?>

                            <a
                                href="<?php echo htmlspecialchars($row['facebook']); ?>"
                                target="_blank"
                                class="btn btn-sm btn-primary me-1"
                            >
                                <i class="fab fa-facebook-f"></i>
                            </a>

                        <?php } ?>

                        <?php if (!empty($row['linkedin'])) { ?>

                            <a
                                href="<?php echo htmlspecialchars($row['linkedin']); ?>"
                                target="_blank"
                                class="btn btn-sm btn-info me-1"
                            >
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        <?php } ?>

                        <?php if (!empty($row['email'])) { ?>

                            <a
                                href="mailto:<?php echo htmlspecialchars($row['email']); ?>"
                                class="btn btn-sm btn-dark"
                            >
                                <i class="fas fa-envelope"></i>
                            </a>

                        <?php } ?>

                    </div>

                    <a
                        href="faculty-profile.php?id=<?php echo $row['id']; ?>"
                        class="btn btn-outline-primary mt-3"
                    >
                        View Profile
                    </a>

                </div>

            </div>

        </div>

        <?php

            }

        } else {

        ?>

        <div class="col-12">

            <div class="alert alert-info text-center">
                No Faculty Found
            </div>

        </div>

        <?php } ?>

    </div>

</div>

<?php
include "includes/footer.php";
?>

