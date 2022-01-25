// Hide the profile-edit class when the page loads
profileTable = document.getElementById("profile-table");
profileTable.style.display = "flex";

profileEdit = document.getElementById("profile-edit");
profileEdit.style.display = "none";

//Get personal info from database to be displayed in the main profile table
formData = new FormData();
formData.append("request-type", "getProfileDetails");
fetch('api/crudHandler.php', {
    method: 'POST',
    body: formData
})
.then(res => {
    return res.json();
})
.then(data => {
    document.getElementById("profilePicture").src = "src/profilePictures/" + data.profilePicture + ".jpg";
    document.getElementById("fullName").innerHTML = data.firstName + " " + data.lastName;
    document.getElementById("emailAddress").innerHTML = data.email;
    document.getElementById("phoneNumber").innerHTML = data.phoneNumber;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("phoneNumber").innerHTML = data.phoneNumber;
    document.getElementById("homeAddress").innerHTML = data.street + ", " + data.city + ", " + data.state + ", " + data.postcode;

    //End
})
.catch(err => {
    console.log(err);
}
);

//if edit button is clicked on, show edit form
editBtn = document.getElementById("editBtn");
editBtn.addEventListener('click', () => {
    profileTable.style.display = "none";
    profileEdit.style.display = "flex";
});

//if cancel button is clicked on, hide edit form
cancelBtn = document.getElementById("cancelBtn");
cancelBtn.addEventListener('click', () => {
    profileTable.style.display = "flex";
    profileEdit.style.display = "none";
});


//Prefill the edit form with the current profile details
formData = new FormData();
formData.append("request-type", "getProfileDetails");
fetch('api/crudHandler.php', {
    method: 'POST',
    body: formData
})
.then(res => {
    return res.json();
}
)
.then(data => {
    document.getElementById("fname").value = data.firstName;
    document.getElementById("lname").value = data.lastName;
    document.getElementById("email").value = data.email;
    document.getElementById("number").value = data.phoneNumber;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("street").value = data.street;
    document.getElementById("city").value = data.city;
    document.getElementById("state").value = data.state;
    document.getElementById("postal").value = data.postcode;
    document.getElementById("profilePicture").src = "src/profilePictures/" + data.profilePicture + ".jpg";
})
.catch(err => {
    console.log(err);
}
);
