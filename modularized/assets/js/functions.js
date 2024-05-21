function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.querySelector(".menu-icon");
  const dropdown = document.querySelector(".dropdown");

  menuIcon.addEventListener("click", function () {
    const isOpen = dropdown.style.display === "block";
    dropdown.style.display = isOpen ? "none" : "block";
    dropdown.setAttribute("aria-hidden", !isOpen);
  });
});

function validateForm() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (firstName === "" || lastName === "" || email === "" || comment === "") {
    alert("All fields must be filled out");
    return false;
  }

  if (!emailRegex.test(email)) {
    alert("Invalid email format");
    return false;
  }

  var rating = document.getElementById("rating");
  if (rating && (rating.value < 1 || rating.value > 5)) {
    alert("Rating must be between 1 and 5");
    return false;
  }

  return true;
}

document.querySelector("form").onsubmit = function () {
  return validateForm();
};
