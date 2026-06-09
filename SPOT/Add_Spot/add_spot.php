<?php

include "../../backend/session.php";

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
Add Spot - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="add_spot.css"
>

</head>

<body>

<div class="spot-card">

    <h2 class="spot-title">
        Add New Spot
    </h2>

    <p class="spot-subtitle">
        Share your favorite place with ChillZone.
    </p>

    <form
    action="../../backend/add_spot.php"
    method="POST"
    enctype="multipart/form-data"
    >

        <!-- SPOT NAME -->
        <div class="form-group">

            <label class="form-label">
                Spot Name
            </label>

            <input
            type="text"
            name="title"
            class="form-input"
            placeholder="Enter spot name..."
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

                <option value="">
                    Select Category
                </option>

                <option value="Nature">
                    Nature
                </option>

                <option value="Coffee">
                    Coffee
                </option>

                <option value="Places">
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
            placeholder="Enter location..."
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
            placeholder="Describe this spot..."
            required
            ></textarea>

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
            placeholder="08:00 - 22:00"
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
            placeholder="Rp20.000 - Rp100.000"
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
            placeholder="08123456789 / Instagram"
            >

        </div>

        <!-- MAIN IMAGE -->
        <div class="form-group">

            <label class="form-label">
                Main Image
            </label>

            <input
            type="file"
            name="image"
            id="imageInput"
            class="form-input"
            accept="image/*"
            required
            >

            <img
            id="previewImage"
            class="preview-image"
            >

        </div>

        <!-- VIBES IMAGE -->
        <div class="form-group">

            <label class="form-label">
                Vibes Image
            </label>

            <input
            type="file"
            name="vibes_image"
            id="vibesInput"
            class="form-input"
            accept="image/*"
            >

            <img
            id="previewVibes"
            class="preview-image"
            >

        </div>

        <button
        type="submit"
        class="submit-btn"
        >
            Add Spot
        </button>

    </form>

</div>

<script>

/* MAIN IMAGE */

const imageInput =
document.getElementById("imageInput");

const previewImage =
document.getElementById("previewImage");

imageInput.addEventListener(

    "change",

    function(){

        const file =
        this.files[0];

        if(file){

            previewImage.src =
            URL.createObjectURL(file);

            previewImage.style.display =
            "block";

        }

    }

);

/* VIBES IMAGE */

const vibesInput =
document.getElementById("vibesInput");

const previewVibes =
document.getElementById("previewVibes");

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

</script>

</body>
</html>