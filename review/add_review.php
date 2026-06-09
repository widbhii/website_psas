<?php

include "../backend/session.php";
include "../backend/config.php";

/* =========================
   AMBIL DATA SPOTS
========================= */

$spots = [];

$query = mysqli_query(
    $conn,
    "SELECT title, category
     FROM spots
     ORDER BY category, title"
);

while($row = mysqli_fetch_assoc($query)){

    $spots[] = $row;

}

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
Write Review - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="add_review.css"
>

</head>

<body>

<div class="review-card">

<h2 class="review-title">
Write Your Review
</h2>

<p class="review-subtitle">
Share your experience with ChillZone places.
</p>

<form
action="../backend/add_review.php"
method="POST"
class="review-form"
>

<!-- NAME -->

<div class="form-group">

<label class="form-label">
Full Name
</label>

<input
type="text"
name="username"
class="form-input"
value="<?php echo $_SESSION['username']; ?>"
required
readonly
>

</div>

<!-- CATEGORY -->

<div class="form-group">

<label class="form-label">
Choose Category
</label>

<select
id="categorySelect"
name="category"
class="form-input"
required
>

<option value="">
Select Category
</option>

<?php

$categories = [];

foreach($spots as $spot){

    if(!in_array(
        $spot['category'],
        $categories
    )){

        $categories[] =
        $spot['category'];

        echo "

        <option value='".$spot['category']."'>
        ".$spot['category']."
        </option>

        ";

    }

}

?>

</select>

</div>

<!-- PLACE -->

<div class="form-group">

<label class="form-label">
Choose Place
</label>

<select
id="placeSelect"
name="place_name"
class="form-input"
required
>

<option value="">
Select Place
</option>

</select>

</div>

<!-- RATING -->

<div class="form-group">

<label class="form-label">
Rating
</label>

<div class="star-rating">

<button
type="button"
class="star-btn"
>
★
</button>

<button
type="button"
class="star-btn"
>
★
</button>

<button
type="button"
class="star-btn"
>
★
</button>

<button
type="button"
class="star-btn"
>
★
</button>

<button
type="button"
class="star-btn"
>
★
</button>

</div>

<input
type="hidden"
name="rating"
id="ratingValue"
value="0"
required
>

</div>

<!-- REVIEW -->

<div class="form-group">

<label class="form-label">
Review
</label>

<textarea
name="review_text"
class="form-input"
rows="5"
placeholder="Tell your experience..."
required
></textarea>

</div>

<button
type="submit"
class="submit-btn"
>
Submit Review
</button>

</form>

</div>

<script>

/* =========================
   DATA SPOTS DARI DATABASE
========================= */

const spots =
<?php echo json_encode($spots); ?>;

/* =========================
   SELECT
========================= */

const categorySelect =
document.getElementById(
"categorySelect"
);

const placeSelect =
document.getElementById(
"placeSelect"
);

/* =========================
   CHANGE CATEGORY
========================= */

categorySelect.addEventListener(
"change",
() => {

const selectedCategory =
categorySelect.value;

placeSelect.innerHTML =

'<option value="">Select Place</option>';

spots.forEach(spot => {

if(
spot.category ===
selectedCategory
){

const option =
document.createElement(
"option"
);

option.value =
spot.title;

option.textContent =
spot.title;

placeSelect.appendChild(
option
);

}

});

}
);

/* =========================
   STAR RATING
========================= */

const stars =
document.querySelectorAll(
".star-btn"
);

const ratingValue =
document.getElementById(
"ratingValue"
);

stars.forEach(
(star,index) => {

star.addEventListener(
"click",
() => {

const value =
index + 1;

ratingValue.value =
value;

stars.forEach(
(s,i) => {

if(i < value){

s.classList.add(
"active"
);

}
else{

s.classList.remove(
"active"
);

}

}
);

}
);

}
);

</script>

</body>
</html>