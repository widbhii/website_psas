<?php

include "../../backend/session.php";
include "../../backend/config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../../LOGIN_SIGNUP/Login/login.php");
    exit;
}

if(!isset($_GET['id'])){
    header("Location: ../Coffee_Spot/spot_coffee.php");
    exit;
}

$spot_id = (int)$_GET['id'];
$user_id = $_SESSION['user_id'];

$query = mysqli_query(

    $conn,

    "SELECT *
    FROM spots
    WHERE id='$spot_id'
    AND created_by='$user_id'"

);

if(mysqli_num_rows($query) == 0){

    die("Spot not found or access denied.");

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
Edit Spot - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="edit_spot.css"
>

</head>

<body>

<div class="spot-card">

    <h2 class="spot-title">
        Edit Spot
    </h2>

    <p class="spot-subtitle">
        Update your spot information.
    </p>

    <form

    action="../../backend/update_spot.php"

    method="POST"

    enctype="multipart/form-data"

    >

        <input
        type="hidden"
        name="spot_id"
        value="<?php echo $spot['id']; ?>"
        >

        <!-- TITLE -->

        <div class="form-group">

            <label class="form-label">
                Spot Name
            </label>

            <input
            type="text"
            name="title"
            class="form-input"
            value="<?php echo htmlspecialchars($spot['title']); ?>"
            required
            >

        </div>

        <!-- CATEGORY -->

        <div class="form-group">

            <label class="form-label">
                Category
            </label>

            <select
            name="category"
            class="form-input"
            required
            >

                <option
                value="Nature"
                <?php if($spot['category']=="Nature") echo "selected"; ?>
                >
                    Nature
                </option>

                <option
                value="Coffee"
                <?php if($spot['category']=="Coffee") echo "selected"; ?>
                >
                    Coffee
                </option>

                <option
                value="Places"
                <?php if($spot['category']=="Places") echo "selected"; ?>
                >
                    Places
                </option>

            </select>

        </div>

        <!-- LOCATION -->

        <div class="form-group">

            <label class="form-label">
                Location
            </label>

            <input
            type="text"
            name="location"
            class="form-input"
            value="<?php echo htmlspecialchars($spot['location']); ?>"
            required
            >

        </div>

        <!-- DESCRIPTION -->

        <div class="form-group">

            <label class="form-label">
                Description
            </label>

            <textarea

            name="description"

            class="form-input"

            rows="5"

            required

            ><?php echo htmlspecialchars($spot['description']); ?></textarea>

        </div>

        <!-- OPENING HOURS -->

<div class="form-group">

    <label class="form-label">
        Opening Hours
    </label>

    <input
    type="text"
    name="opening_hours"
    class="form-input"
    value="<?php echo htmlspecialchars($spot['opening_hours']); ?>"
    >

</div>

<!-- PRICE RANGE -->

<div class="form-group">

    <label class="form-label">
        Price Range
    </label>

    <input
    type="text"
    name="price_range"
    class="form-input"
    value="<?php echo htmlspecialchars($spot['price_range']); ?>"
    >

</div>

<!-- CONTACT -->

<div class="form-group">

    <label class="form-label">
        Contact
    </label>

    <input
    type="text"
    name="contact"
    class="form-input"
    value="<?php echo htmlspecialchars($spot['contact']); ?>"
    >

</div>

        <!-- CURRENT IMAGE -->

        <div class="form-group">

            <label class="form-label">
                Current Image
            </label>

            <img

            src="../../uploads/<?php echo $spot['image']; ?>"

            id="previewImage"

            class="preview-image"

            style="display:block;"

            >

        </div>

        <!-- CURRENT VIBES IMAGE -->

<div class="form-group">

    <label class="form-label">
        Current Vibes Image
    </label>

    <?php if(!empty($spot['vibes_image'])){ ?>

        <img
        src="../../uploads/<?php echo $spot['vibes_image']; ?>"
        id="previewVibes"
        class="preview-image"
        style="display:block;"
        >

    <?php }else{ ?>

        <img
        id="previewVibes"
        class="preview-image"
        style="display:none;"
        >

    <?php } ?>

</div>

        <!-- NEW IMAGE -->

        <div class="form-group">

            <label class="form-label">
                Change Image
            </label>

            <input
            type="file"
            name="image"
            id="imageInput"
            class="form-input"
            accept="image/*"
            >

        </div>

        <!-- CHANGE VIBES IMAGE -->

<div class="form-group">

    <label class="form-label">
        Change Vibes Image
    </label>

    <input
    type="file"
    name="vibes_image"
    id="vibesInput"
    class="form-input"
    accept="image/*"
    >

</div>

        <button
        type="submit"
        class="submit-btn"
        >
            Update Spot
        </button>

    </form>

</div>

<script>

const imageInput =
document.getElementById(
    "imageInput"
);

const previewImage =
document.getElementById(
    "previewImage"
);

imageInput.addEventListener(

    "change",

    function(){

        const file =
        this.files[0];

        if(file){

            previewImage.src =
            URL.createObjectURL(file);

        }

    }

);

const vibesInput =
document.getElementById(
    "vibesInput"
);

const previewVibes =
document.getElementById(
    "previewVibes"
);

if(vibesInput){

    vibesInput.addEventListener(

        "change",

        function(){

            const file =
            this.files[0];

            if(file){

                previewVibes.src =
                URL.createObjectURL(file);

                previewVibes.style.display =
                "block";

            }

        }

    );

}

</script>

</body>
</html>