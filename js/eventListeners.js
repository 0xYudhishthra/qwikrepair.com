// Get references to the DOM elements
var login = document.getElementById('login');
var logout = document.getElementById('logout');
var signup = document.getElementById('signup');

//Redirect button 'click' event listeners
if (login != null) {
  login.addEventListener('click', () => {
    location.href = './login.php';
  })
}

if (signup != null) {
  signup.addEventListener('click', () => {
    location.href = './signup.php';
  })
}

if (logout != null) {
  logout.addEventListener('click', () => {
    fetch('api/crudHandler.php', {
      credentials: 'include',
      method: 'POST'
    }) //fetch
    .then(res => res.text())
    .then(data => {
      alert(data);
      location.href = "index.php";
    }) //then(data)
    .catch(err => {alert(err)})
  }) //eventListener
} //if not null
