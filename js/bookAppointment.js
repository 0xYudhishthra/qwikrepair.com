var bookAppointment = document.getElementById('submitReviewBtn');

if (submitReview != null) {
    submitReview.addEventListener('click', () => {
        var formData = new FormData();
        formData.append("request-type", "submitReview");
        formData.append("reviewFeedback", document.getElementById("reviewFeedback").value);
        formData.append("reviewRating", starValue);
        fetch('api/crudHandler.php', {
            method: 'POST',
            body: formData
        })
        .then(res => {
            return res.status();
        })
        .then(data => {
            if (data == 1) {
                window.alert("You have successfully submitted your review!");
                window.location.href = "seniorHomepage.php";
            } else {
                alert("Failed to submit your review.");
            }
        })
        .catch(err => {
            console.log(err);
        });
    });
}

