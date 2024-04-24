// Function to validate the add activity form
function validateAddActivityForm() {
  // Get form element
  var form = document.getElementById("addActivityForm");

  // Get all input fields in the form
  var inputs = form.querySelectorAll(
    "input[type=text], input[type=number], textarea"
  );

  // Flag to track if all fields are filled
  var allFieldsFilled = true;

  // Check if all required fields are filled
  inputs.forEach(function (input) {
    if (input.value.trim() === "") {
      allFieldsFilled = false;
      input.classList.add("error");
    } else {
      input.classList.remove("error");
    }
  });

  // If all fields are filled, submit the form
  if (allFieldsFilled) {
    form.submit();
  } else {
    alert("Veuillez remplir tous les champs obligatoires.");
  }
}

// Function to validate the delete activity form
function validateDeleteActivityForm() {
  // Get form element
  var form = document.getElementById("deleteActivityForm");

  // Get input field
  var input = form.querySelector("input[type=number]");

  // Check if the ID field is filled
  if (input.value.trim() === "") {
    alert("Veuillez entrer l'ID de l'activité à supprimer.");
  } else {
    form.submit();
  }
}

// Function to validate the update activity form
function validateUpdateActivityForm() {
  // Get form element
  var form = document.getElementById("updateActivityForm");

  // Get all input fields in the form
  var inputs = form.querySelectorAll(
    "input[type=text], input[type=number], textarea"
  );

  // Flag to track if all fields are filled
  var allFieldsFilled = true;

  // Check if all required fields are filled
  inputs.forEach(function (input) {
    if (input.value.trim() === "") {
      allFieldsFilled = false;
      input.classList.add("error");
    } else {
      input.classList.remove("error");
    }
  });

  // If all fields are filled, submit the form
  if (allFieldsFilled) {
    form.submit();
  } else {
    alert("Veuillez remplir tous les champs obligatoires.");
  }
}
