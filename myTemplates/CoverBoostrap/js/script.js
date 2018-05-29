//================To make an active Element================//

// Get the container element
var linkContainer = document.getElementById("menu");

// Get all buttons with class="btn" inside the container
var links = linkContainer.getElementsByClassName("nav-link");

// Loop through the links and add the active class to the current/clicked link
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
