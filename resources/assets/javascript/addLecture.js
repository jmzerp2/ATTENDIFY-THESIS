const adddepthead = document.getElementById("adddepthead");
const adddeptheadForm = document.getElementById("adddeptheadForm");
adddepthead.addEventListener("click", function () {
  adddeptheadForm.style.display = "block";
  overlay.style.display = "block";
  document.body.style.overflow = "hidden";
});
var closeButtons = document.querySelectorAll(" #adddeptheadForm .close");

closeButtons.forEach(function (closeButton) {
  closeButton.addEventListener("click", function () {
    adddeptheadForm.style.display = "none";
    overlay.style.display = "none";
    document.body.style.overflow = "auto";
  });
});
