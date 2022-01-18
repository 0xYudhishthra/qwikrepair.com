// Get current page path
rawPath = window.location.pathname;
arrayPath = rawPath.split("/");
var path = arrayPath[arrayPath.length - 1].slice(0,-4);

// Navbar Navigation Page Highlight
element = document.getElementById(path);
if (element != null) {
    element.removeAttribute("href");
    element.classList.add("active-sidenav");
}