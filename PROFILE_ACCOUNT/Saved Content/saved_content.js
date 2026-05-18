// =========================
// GET ELEMENT
// =========================

const savedGrid =
  document.getElementById("savedGrid");

// =========================
// GET DATA
// =========================

const savedSpots =
  JSON.parse(
    localStorage.getItem("savedSpots")
  ) || [];

// =========================
// EMPTY STATE
// =========================

if(savedSpots.length === 0){

  savedGrid.innerHTML = `
  
    <p class="empty-text">
      No saved places yet.
    </p>
  
  `;

}

// =========================
// SHOW SAVED CARD
// =========================

else{

  savedSpots.forEach((spot) => {

    savedGrid.innerHTML += `

      <div class="saved-card">

        <img 
          src="${spot.image}" 
          alt="${spot.name}"
        >

        <div class="saved-info">

          <div class="tag">
            Spots
          </div>

          <h3>
            ${spot.name}
          </h3>

          <p>
            ${spot.location}
          </p>

          <button class="detail-btn">
            Details
          </button>

        </div>

      </div>

    `;

  });

}