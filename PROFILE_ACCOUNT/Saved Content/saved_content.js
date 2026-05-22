const menuButtons = document.querySelectorAll(".menu-btn");

menuButtons.forEach(button => {

  button.addEventListener("click", () => {

    menuButtons.forEach(btn => {
      btn.classList.remove("active");
    });

    button.classList.add("active");

  });

});