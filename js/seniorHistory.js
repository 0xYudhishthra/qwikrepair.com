window.addEventListener("DOMContentLoaded", function() {
    const requestType = new FormData(document.querySelector('form'));
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: requestType
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        // Find a table element with id="appointmentHistoryTable"
        var table = document.getElementById("appointmentHistoryTable");

        //Get number of tr elements to add and update the changes.
        for (var trNumber = 0; trNumber < data.length; trNumber++) {
            var row = table.insertRow(-1);
            var appointmentDateCell = row.insertCell(0);
            var appointmentTimeCell = row.insertCell(1);
            var serviceNameCell = row.insertCell(2);
            var technicianCell = row.insertCell(3);
            var reviewCell = row.insertCell(4);
            appointmentDateCell.innerHTML = data[trNumber].appointmentDate;
            appointmentTimeCell.innerHTML = data[trNumber].appointmentTime;
            serviceNameCell.innerHTML = data[trNumber].serviceName;
            technicianCell.innerHTML = data[trNumber].fullName;
            if (data[trNumber].reviewRating == 1) {
                reviewCell.innerHTML = "Very Bad";
            } else if (data[trNumber].reviewRating == 2) {
                reviewCell.innerHTML = "Bad";
            } else if (data[trNumber].reviewRating == 3) {
                reviewCell.innerHTML= "Average";
            } else if (data[trNumber].reviewRating == 4) {
                reviewCell.innerHTML = "Good";
            } else if (data[trNumber].reviewRating == 5) {
                reviewCell.innerHTML = "Very good";
            } else {
                reviewCell.innerHTML = "No review yet";
            }
        }
    })
    .catch(err => {
        console.log(err);
    }
);
});



