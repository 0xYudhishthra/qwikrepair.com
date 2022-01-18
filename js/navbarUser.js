userIcon = document.getElementById('userPic');
userName = document.getElementById('userName');

function setUserIcon(filename) {
    if (userIcon != null) {
        userIcon.src=filename;
    }
}

function setUserName(name) {
    if (userName != null) {
        userName.innerHTML=name;
    }
}