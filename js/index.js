// Get references to the DOM elements
var login = document.getElementById('login');
var signup = document.getElementById('signup');

//Redirect button 'click' event listeners
if (login != null) {
  login.addEventListener('click', () => {
    location.href = './api/login.php';
  })
}

if (signup != null) {
  signup.addEventListener('click', () => {
    location.href = './api/signup.php';
  })
}