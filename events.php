```php
<?php

include "config.php";
include "includes/header.php";
?>

<div class="container py-5">

    <!-- Page Heading -->

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Institute Events
        </h1>

        <p class="text-muted">
            Workshops, seminars, placement drives and other activities
        </p>

    </div>


    <div class="row g-4">

        <?php

        $sql = "SELECT * FROM events
                WHERE status='Approved'
                ORDER BY event_date ASC";

        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="col-lg-4 col-md-6">

            <div class="card event-card h-100 shadow-sm">


                <!-- Event Image -->

                <?php if (!empty($row['image'])) { ?>

                    <img
                        src="uploads/events/<?php echo htmlspecialchars($row['image']); ?>"
                        class="event-image"
                        alt="<?php echo htmlspecialchars($row['title']); ?>"
                    >

                <?php } else { ?>

                    <div class="event-placeholder">

                        <i class="fa fa-calendar fa-4x"></i>

                    </div>

                <?php } ?>


                <div class="card-body">


                    <!-- Event Title -->

                    <h4 class="fw-bold">

                        <?php
                        echo htmlspecialchars(
                            $row['title']
                        );
                        ?>

                    </h4>


                    <!-- Date -->

                    <p class="text-primary">

                        <i class="fa fa-calendar"></i>

                        <?php
                        echo date(
                            "d M Y",
                            strtotime($row['event_date'])
                        );
                        ?>

                    </p>


                    <!-- Time -->

                    <?php if (!empty($row['event_time'])) { ?>

                        <p>

                            <strong>
                                <i class="fa fa-clock"></i>
                                Time:
                            </strong>

                            <?php
                            echo date(
                                "h:i A",
                                strtotime($row['event_time'])
                            );
                            ?>

                        </p>

                    <?php } ?>


                    <!-- Venue -->

                    <?php if (!empty($row['venue'])) { ?>

                        <p>

                            <strong>
                                <i class="fa fa-location-dot"></i>
                                Venue:
                            </strong>

                            <?php
                            echo htmlspecialchars(
                                $row['venue']
                            );
                            ?>

                        </p>

                    <?php } ?>


                    <!-- Description -->

                    <p class="text-muted">

                        <?php
                        echo nl2br(
                            htmlspecialchars(
                                $row['description']
                            )
                        );
                        ?>

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

                    No upcoming events available.

                </div>

            </div>

        <?php

        }

        ?>

    </div>

</div>


<style>

.event-card {

    border: none;

    border-radius: 15px;

    overflow: hidden;

    transition: 0.3s;

}

.event-card:hover {

    transform: translateY(-7px);

}

.event-image {

    width: 100%;

    height: 230px;

    object-fit: cover;

}

.event-placeholder {

    height: 230px;

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
```
