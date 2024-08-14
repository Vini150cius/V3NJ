document.querySelectorAll(".btn-toggle").forEach(function (button) {
    button.addEventListener("click", function () {
      document.querySelectorAll(".btn-toggle").forEach(function (btn) {
        btn.classList.remove("active");
      });
      button.classList.add("active");
    });
  });