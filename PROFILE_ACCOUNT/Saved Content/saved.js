```javascript
document.addEventListener("DOMContentLoaded", () => {

  const saveButtons =
    document.querySelectorAll(".save-btn");

  saveButtons.forEach(button => {

    const savedItems =
      JSON.parse(
        localStorage.getItem("savedSpots")
      ) || [];

    const placeName =
      button.dataset.name;

    const alreadySaved =
      savedItems.some(
        item => item.name === placeName
      );

    if(alreadySaved){
      button.classList.add("saved");
    }

    button.addEventListener("click", () => {

      let saved =
        JSON.parse(
          localStorage.getItem("savedSpots")
        ) || [];

      const data = {

        name:
          button.dataset.name,

        location:
          button.dataset.location,

        image:
          button.dataset.image

      };

      const exists =
        saved.some(
          item => item.name === data.name
        );

      if(exists){

        saved = saved.filter(
          item => item.name !== data.name
        );

        button.classList.remove("saved");

      } else {

        saved.push(data);

        button.classList.add("saved");

      }

      localStorage.setItem(
        "savedSpots",
        JSON.stringify(saved)
      );

    });

  });

});
```
