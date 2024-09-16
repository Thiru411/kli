// // const heightUnitRadioButtons = document.getElementsByName("height-unit");
// // const heightFtIn = document.getElementById("height-ft-in");
// // const heightCm = document.getElementById("height-cm");

// // heightUnitRadioButtons.forEach((radioButton) => {
// //   radioButton.addEventListener("change", function () {
// //     if (this.value === "ft-in") {
// //       heightFtIn.style.display = "block";
// //       heightCm.style.display = "none";
// //     } else if (this.value === "cm") {
// //       heightFtIn.style.display = "none";
// //       heightCm.style.display = "block";
// //     }
// //   });
// // });

// const calculateBtn = document.getElementById("calculate")

// calculateBtn.addEventListener("click", function () {
//   const imcBar = document.getElementById("IMCbar");
//   const weight = parseFloat(document.getElementById("weight").value);

//   // const imcData = document.getElementById("imcData");
//   // const selectedUnit = document.querySelector(
//   //   'input[name="height-unit"]:checked'
//   // ).value;

//   let height;
//   const feet = parseFloat(document.getElementById("feet").value);
//   const inches = parseFloat(document.getElementById("inches").value);
//   height = feet * 0.3048 + inches * 0.0254; // Convert to meters

//   const bmi = (weight / (height * height)).toFixed(1);

//   let category = "";
//   if (bmi < 18.5) {
//     category = "Underweight";
//     $("#category").css("color", "rgb(255, 255, 0)")
//   } else if (bmi < 24.9) {
//     category = "Normal Weight"
//     $("#category").css("color", "rgb(0, 128, 0)")
//   } else if (bmi < 29.9) {
//     category = "Overweight";
//     $("#category").css("color", "rgb(255, 0, 0)")
//   } else {
//     category = "Obese";
//     $("#category").css("color", "rgb(255, 0, 0)")
//   }

//   if (bmi <= 15) {
//     imcBar.style.left = "0%";
//   } else if (bmi >= 50) {
//     imcBar.style.left = "98%";
//   } else {
//     imcBar.style.left = ((bmi - 5) * 100) / 35 + "%"; // originally it was 15 and in style it was width
//   }
//   document.getElementById("category").textContent = category;
//   document.getElementById("bmi").textContent = bmi;
// });


// Above is working code without Validaion if suppose below code dosent work please use abpve code

const calculateBtn = document.getElementById("calculate");
const weightInput = document.getElementById("weight");
const feetInput = document.getElementById("feet");
const inchesInput = document.getElementById("inches");
const weightErrorMessage = document.getElementById("weightErrorMessage");
const feetErrorMessage = document.getElementById("feetErrorMessage");
const inchesErrorMessage = document.getElementById("inchesErrorMessage");


calculateBtn.addEventListener("click", calculateBMI);

// Add onkeypress event listeners
weightInput.addEventListener("keypress", validateWeight);
feetInput.addEventListener("keypress", validateFeet);
inchesInput.addEventListener("keypress", validateInches);

function calculateBMI() {
  const imcBar = document.getElementById("IMCbar");

  // Reset border colors
  weightInput.style.borderColor = "";
  weightErrorMessage.style.color = "transparent";
  feetInput.style.borderColor = "";
  feetErrorMessage.style.color = "transparent";
  inchesInput.style.borderColor = "";
  inchesErrorMessage.style.color = "transparent";

  // Validate that the weight, feet, and inches fields are not empty
  const weight = parseFloat(weightInput.value);
  const feet = parseFloat(feetInput.value);
  const inches = parseFloat(inchesInput.value);

  if (isNaN(weight) || isNaN(feet) || isNaN(inches) || weight < 10 || weight > 200) {
    // Set border color and error message for invalid weight
    if (isNaN(weight) || weight < 10 || weight > 200) {
      weightInput.style.borderColor = "red";
      weightErrorMessage.style.color = "red";
      weightErrorMessage.textContent = "Weight must be between 10 and 200";
    }
    if (isNaN(feet) || feet < 4 || feet > 8) {
      feetInput.style.borderColor = "red";
      feetErrorMessage.style.color = "red";
      feetErrorMessage.textContent = "Height(feet) must be between 0 and 10";
    }
    if (isNaN(inches) || inches < 0 || inches > 12) {
      inchesInput.style.borderColor = "red";
      inchesErrorMessage.style.color = "red";
      inchesErrorMessage.textContent = "Height(Inch) must be between 0 and 12";
    }

    return;
  }

  // Remove border color when input is filled
  weightInput.style.borderColor = "";
  weightErrorMessage.style.color = "transparent";
  feetInput.style.borderColor = "";
  feetErrorMessage.style.color = "transparent";
  inchesInput.style.borderColor = "";
  inchesErrorMessage.style.color = "transparent";

  let height = feet * 0.3048 + inches * 0.0254; // Convert to meters

  const bmi = (weight / (height * height)).toFixed(1);

  let category = "";
  if (bmi < 18.5) {
    category = "Underweight";
    $("#category").css("color", "rgb(255, 255, 0)");
  } else if (bmi < 24.9) {
    category = "Normal";
    $("#category").css("color", "rgb(0, 128, 0)");
  } else if (bmi < 29.9) {
    category = "Overweight";
    $("#category").css("color", "rgb(255, 0, 0)");
  } else {
    category = "Obese";
    $("#category").css("color", "rgb(255, 0, 0)");
  }

  if (bmi <= 15) {
    imcBar.style.left = "0%";
  } else if (bmi >= 50) {
    imcBar.style.left = "95%";
  } else {
    imcBar.style.left = ((bmi - 5) * 100) / 35 + "%"; // originally it was 15 and in style it was width
  }
  document.getElementById("category").textContent = category;
  document.getElementById("bmi").textContent = bmi;
}

function validateWeight(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(weightInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue > 200) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    weightInput.style.borderColor = "red";
    weightErrorMessage.style.color = "red";
    weightErrorMessage.textContent = "Weight must be between 10 and 200";
  } else {
    weightInput.style.borderColor = "";
    weightErrorMessage.style.color = "transparent";
  }
}

function validateFeet(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(feetInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue < 2 || inputValue > 8 || inputValue % 1 !== 0) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    feetInput.style.borderColor = "red";
    feetErrorMessage.style.color = "red";
    feetErrorMessage.textContent = "Height(feet) must be between 2 and 8";
  } else {
    feetInput.style.borderColor = "";
    feetErrorMessage.style.color = "transparent";
  }
}

function validateInches(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(inchesInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue < 0 || inputValue > 13) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    inchesInput.style.borderColor = "red";
    inchesErrorMessage.style.color = "red";
    inchesErrorMessage.textContent = "Weight must be between 10 and 200";
  } else {
    inchesInput.style.borderColor = "";
    inchesErrorMessage.style.color = "transparent";
  }
}


