Element.prototype.appendAfter = function (element) {
    element.parentNode.insertBefore(this, element.nextSibling);
}, false;

function instantiateElement(data, elementID){
    var element = document.createElement('div');
    element.innerHTML = data;
    element.id = elementID;
    return element;
}
document.addEventListener("DOMContentLoaded", function() {
    const requestType = new FormData(document.querySelector('form'));
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: requestType
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        instantiateElement(data['firstName'] + ' ' + data['lastName'], 'fullNameData').appendAfter(document.getElementById('fullName'));
        instantiateElement(data['email'], 'emailData').appendAfter(document.getElementById('emailAddress'));
        instantiateElement(data['role'], 'roleData').appendAfter(document.getElementById('role'));
        instantiateElement(data['dob'], 'dobData').appendAfter(document.getElementById('dob'));
        instantiateElement(data['phoneNumber'], 'phoneNumberData').appendAfter(document.getElementById('phoneNumber'));
        instantiateElement(data['street'], 'streetData').appendAfter(document.getElementById('street'));
        instantiateElement(data['city'], 'cityData').appendAfter(document.getElementById('city'));
        instantiateElement(data['state'], 'stateData').appendAfter(document.getElementById('state'));
        instantiateElement(data['postcode'], 'postcodeData').appendAfter(document.getElementById('postcode'));
    })
    .catch(err => {
        console.log(err);
    }
    );
});
