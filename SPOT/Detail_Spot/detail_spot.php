<?php

include "../../backend/session.php";
include "../../backend/koneksi.php";

if(!isset($_GET['id'])){
    die("Spot tidak ditemukan");
}

$spot_id = (int)$_GET['id'];

$query = mysqli_query(

    $conn,

    "SELECT *
     FROM spots
     WHERE id='$spot_id'"

);

if(mysqli_num_rows($query) == 0){

    die("Spot tidak ditemukan");

}

$spot = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
<?php echo htmlspecialchars($spot['title']); ?>
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="detail_spot.css"
>

</head>

<body>

<div class="detail-card">

    <!-- MAIN IMAGE -->

    <img
    src="../../uploads/<?php echo $spot['image']; ?>"
    class="detail-image"
    alt="<?php echo htmlspecialchars($spot['title']); ?>"
    >

    <!-- CONTENT -->

    <div class="detail-content">

        <span class="category">
            <?php echo htmlspecialchars($spot['category']); ?>
        </span>

        <h1>
            <?php echo htmlspecialchars($spot['title']); ?>
        </h1>

        <div class="location">
            📍 <?php echo htmlspecialchars($spot['location']); ?>
        </div>

        <!-- DESCRIPTION -->

        <div class="description">

            <?php

            echo nl2br(

                htmlspecialchars(
                    $spot['description']
                )

            );

            ?>

        </div>

        <!-- INFO -->

        <div class="spot-info">

            <div class="info-box">

                <h3>
                    Opening Hours
                </h3>

                <p>

                    <?php

                    echo !empty(
                        $spot['opening_hours']
                    )

                    ?

                    htmlspecialchars(
                        $spot['opening_hours']
                    )

                    :

                    "-";

                    ?>

                </p>

            </div>

            <div class="info-box">

                <h3>
                    Price Range
                </h3>

                <p>

                    <?php

                    echo !empty(
                        $spot['price_range']
                    )

                    ?

                    htmlspecialchars(
                        $spot['price_range']
                    )

                    :

                    "-";

                    ?>

                </p>

            </div>

            <div class="info-box">

                <h3>
                    Contact
                </h3>

                <p>

                    <?php

                    echo !empty(
                        $spot['contact']
                    )

                    ?

                    htmlspecialchars(
                        $spot['contact']
                    )

                    :

                    "-";

                    ?>

                </p>

            </div>

        </div>

        <!-- VIBES IMAGE -->

        <?php
        if(!empty($spot['vibes_image'])){
        ?>

        <div class="vibes-section">

            <h2>
                The Vibes
            </h2>

            <img
            src="../../uploads/<?php echo $spot['vibes_image']; ?>"
            class="vibes-image"
            >

        </div>

        <?php
        }
        ?>

        <!-- BACK -->

        <a
        href="javascript:history.back()"
        class="back-btn"
        >
            ← Back
        </a>

    </div>

</div>

</body>
</html>