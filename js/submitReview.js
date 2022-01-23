function submitReview(){
    var submitReview = document.querySelector('input[type="submit"]');
    var appointmentID = data.appointmentID;
    if (submitReview != null) {
        submitReview.addEventListener('click', () => {
            const formData = new FormData();
            formData.append("request-type", "submitReview");
            formData.append("appointmentID", appointmentID);
            formData.append("reviewFeedback", document.getElementById("reviewFeedback").value);
            formData.append("reviewRating", document.getElementById("reviewStar").value);


            fetch('api/crudHandler.php', {
                method: 'POST',
                body: formData,
                credentials:'include'
            })
            .then (res => {
                return res.status;
            })
            .then(data => {
                if (data == 200) {
                    alert("Review submitted!");
                    window.location.href = "seniorHomepage.php";
                } else {
                    alert("Something went wrong!");
                }
            })
            .catch(err => {
                console.log(err);
            }
            );
        });
}}