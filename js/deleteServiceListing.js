

// document.addEventListener("DOMContentLoaded", function() {
var deleteBtn = document.getElementById('deleteBtn');
    if (deleteBtn != null) {
        deleteBtn.addEventListener('click', () => {
            alert("Hi");
            var formData = new FormData();
            formData.append("request-type", "deleteServiceListing");
            
            fetch('api/crudHandler.php', {
                method: 'POST',
                body: formData
            })
            .then(res => {
                return res.status();
            })
            .then(data => {
                if (data == 1) {
                    window.alert("You have successfully deleted your service listing!");
                    window.location.href = "seniorHomepage.php";
                } else {
                    alert("Failed to delete your service listing.");
                }
            })
            .catch(err => {
                console.log(err);
            });
        });
    }
// }, {once: true});