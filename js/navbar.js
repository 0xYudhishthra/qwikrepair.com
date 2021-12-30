rawPath = window.location.pathname;
arrayPath = rawPath.split("/");
var path = arrayPath[arrayPath.length - 1].slice(0,-4);

element = document.getElementById(path);
element.removeAttribute("href");
element.style.fontWeight = "bold";
element.style.color = "#94D1EA";
element.style.borderBottom = "1.5px solid #94D1EA"
