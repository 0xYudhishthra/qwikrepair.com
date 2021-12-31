// Get current page path
rawPath = window.location.pathname;
arrayPath = rawPath.split("/");
var path = arrayPath[arrayPath.length - 1].slice(0,-4);

// Navbar Navigation Page Highlight
element = document.getElementById(path);
if (element != null) {
    element.removeAttribute("href");
    element.style.fontWeight = "bold";
    element.style.color = "#94D1EA";
    element.style.borderBottom = "1.5px solid #94D1EA";
}

// Navbar Hide When On Login OR Signup Page
if ((path == "login") || (path == "signup")) {
    document.getElementById("btnNavigation").style.display = "none";
    document.getElementById("btnAccess").style.display = "none";
}