<<<<<<< HEAD
function validateForm() {
    var firstName = document.forms["myForm"]["fname"].value;
    var lastName = document.forms["myForm"]["lname"].value;
    var number = document.forms["myForm"]["number"].value;
    if (firstName == "") {
        alert("Name must be filled out");
        return false;

    } else if (lastName == ""){
      alert("Name must be filled out");
        return false;

    } else if (number == ""){
      alert("Number must be greater than Zero");
        return false;

    }else if (number < 1){
      alert("Number must be greater than Zero");
        return false;
    } else if (email == ""){
      alert("You must enter an email");
        return false;
}


function calculator() {
    if (validateForm() !== false) {
      var usernamePlaceholder = document.getElementById('name-placeholder');
      var username = document.getElementById('name-value');
      var hotelPlaceholder = document.getElementById('hotel-placeholder');
      var hotelValue = document.getElementById('hotel-value');         
      var pricePlaceholder = document.getElementById('price-placeholder');
      var priceValue = document.getElementById('price-value');
      var days = parseInt(document.getElementById('days').value);
      var hotel3 = parseInt(document.getElementById('hotel3').value);
      var firstName = document.forms["myForm"]["fname"].value;
      var lastName = document.forms["myForm"]["lname"].value;
      
      usernamePlaceholder.innerHTML = '<b>Username</b>';
      username.innerHTML = firstName + ' ' + lastName;

      hotelPlaceholder.innerHTML = '<b>Hotel name</b>';
      hotelValue.innerHTML = document.getElementById('hotel3').selectedOptions[0].text;

      pricePlaceholder.innerHTML = '<b>Hotel price</b>';
      priceValue.innerHTML = (hotel3 * days);

      // result.innerHTML = (hotel3 * days);
    }
  }


  var form = document.getElementById('form');
  form.addEventListener('hidden', function(event) {
    event.preventDefault();
    calculator();
  });

  var daysElement = document.getElementById('days');
  daysElement.addEventListener('keyup', function() {
    calculator();
=======
function validateForm() {
    var firstName = document.forms["myForm"]["fname"].value;
    var lastName = document.forms["myForm"]["lname"].value;
    var number = document.forms["myForm"]["number"].value;
    if (firstName == "") {
        alert("Name must be filled out");
        return false;

    } else if (lastName == ""){
      alert("Name must be filled out");
        return false;

    } else if (number == ""){
      alert("Number must be greater than Zero");
        return false;

    }else if (number < 1){
      alert("Number must be greater than Zero");
        return false;
    }
}


function calculator() {
    if (validateForm() !== false) {
      var usernamePlaceholder = document.getElementById('name-placeholder');
      var username = document.getElementById('name-value');
      var hotelPlaceholder = document.getElementById('hotel-placeholder');
      var hotelValue = document.getElementById('hotel-value');         
      var pricePlaceholder = document.getElementById('price-placeholder');
      var priceValue = document.getElementById('price-value');
      var days = parseInt(document.getElementById('days').value);
      var hotel3 = parseInt(document.getElementById('hotel3').value);
      var firstName = document.forms["myForm"]["fname"].value;
      var lastName = document.forms["myForm"]["lname"].value;
      
      usernamePlaceholder.innerHTML = '<b>Username</b>';
      username.innerHTML = firstName + ' ' + lastName;

      hotelPlaceholder.innerHTML = '<b>Hotel name</b>';
      hotelValue.innerHTML = document.getElementById('hotel3').selectedOptions[0].text;

      pricePlaceholder.innerHTML = '<b>Hotel price</b>';
      priceValue.innerHTML = (hotel3 * days);

      // result.innerHTML = (hotel3 * days);
    }
  }


  var form = document.getElementById('form');
  form.addEventListener('hidden', function(event) {
    event.preventDefault();
    calculator();
  });

  var daysElement = document.getElementById('days');
  daysElement.addEventListener('keyup', function() {
    calculator();
>>>>>>> b6c0080b9634b3fa6aa78201568eaed768bcd04d
  });