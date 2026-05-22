const wrap =
document.querySelector(".saved-card-wrap");

fetch("../../backend/get_saved.php")

.then(response => response.json())

.then(data => {

    if(data.length === 0){

        wrap.innerHTML = `
        
        <div class="empty-text">
            Belum ada wishlist disimpan
        </div>

        `;

        return;
    }

    data.forEach(item => {

        wrap.innerHTML += `

        <div class="saved-card">

            <img 
                src="${item.image}" 
                class="saved-img"
            >

            <div class="saved-info">

                <div class="saved-tag">
                    ${item.category}
                </div>

                <h3>
                    ${item.title}
                </h3>

                <p>
                    ${item.location}
                </p>

                <button class="detail-btn">
                    Detail
                </button>

            </div>

        </div>

        `;

    });

});