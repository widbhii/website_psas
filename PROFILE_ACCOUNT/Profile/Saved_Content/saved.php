<?php

include "../../../backend/session.php";

$menu = "saved";

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
Saved Content - ChillZone
</title>

<!-- GOOGLE FONT -->
<link
rel="preconnect"
href="https://fonts.googleapis.com"
>

<link
rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin
>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Boogaloo&family=Alatsi&display=swap"
rel="stylesheet"
>

<!-- CSS -->
<link
rel="stylesheet"
href="saved.css"
>

</head>

<body>

<div class="saved-container">

<!-- SIDEBAR -->
<?php

include "../../../sidebar.php";

?>

<!-- CONTENT -->
<div class="saved-content">

<h1>
Saved Content
</h1>

<h2>
Wishlist Places
</h2>

<div
class="saved-card-wrap"
id="wishlist-container"
>

</div>

</div>

</div>

<script>

const wishlistContainer =
document.getElementById(
"wishlist-container"
);

/* FETCH SAVED */

fetch("/website_psas/backend/fetch_saved.php")

.then(response => response.json())

.then(data => {

if(data.length === 0){

wishlistContainer.innerHTML = `

<p class="empty-text">
No saved spots yet.
</p>

`;

return;

}

/* LOOP DATA */

data.forEach(item => {

wishlistContainer.innerHTML += `

<div class="spot-card">

<img
src="${item.spot_image}"
class="card-img"
alt="${item.spot_name}"
>

<div class="card-content">

<div class="tag">
${item.category}
</div>

<h3>
${item.spot_name}
</h3>

<div class="location">
${item.location}
</div>

<div class="btn-wrap">

<a
href="../../SPOT/Detail Spot/detail_spot.php?id=${item.spot_id}"
>

<button
type="button"
class="detail-btn"
>
Details
</button>

</a>

</div>

</div>

</div>

`;

});

})

.catch(error => {

    console.error(error);

});

</script>

</body>
</html>