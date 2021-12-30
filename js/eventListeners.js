// This file stores all event listeners used for the entire website.

// Get references to the DOM elements
const login = document.getElementById('login');
const logout = document.getElementById('logout');
const signup = document.getElementById('signup');

//Redirect button 'click' event listeners
if (login != null) {
  login.addEventListener('click', () => {
    location.href = './login.php';
  })
}

if (logout != null) {
  logout.addEventListener('click', () => {
    location.href = './logout.php';
})
}

if (signup != null) {
  signup.addEventListener('click', () => {
    location.href = './signup.php';
  })
}
