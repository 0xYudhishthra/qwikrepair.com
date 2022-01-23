// Hide the profile-edit class when the page loads
profileTable = document.getElementById("profile-table");
profileTable.style.display = "flex";

profileEdit = document.getElementById("profile-edit");
profileEdit.style.display = "none";

//Get personal info from database
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