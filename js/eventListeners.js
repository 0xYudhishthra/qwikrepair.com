// This file stores all event listeners used for the entire website.

// Get references to the DOM elements
const login = document.querySelector('.login');
const logout = document.querySelector('.logout');
const signup = document.querySelector('.signup');

//Redirect button 'click' event listeners
login.addEventListener('click', () => {
  location.href = 'login.php';
})

// logout.addEventListener('click', () => {
//     location.href = 'logout.php';
// })

signup.addEventListener('click', () => {
    location.href = 'signup.php';
})

