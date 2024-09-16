
// function calculateHRA() {
//   // Get input values
//   var basicSalary = parseFloat(document.getElementById("basicSalary").value);
//   var dearnessAllowance = parseFloat(document.getElementById("dearnessAllowance").value);
//   var hraReceived = parseFloat(document.getElementById("hraReceived").value);
//   var totalRentPaid = parseFloat(document.getElementById("totalRentPaid").value);
//   var isMetroCity = document.getElementById("isMetroCity").checked;
//   var resultBox = document.getElementById("result");


//   // Calculate HRA exemption based on the city type
//   var hraExemption;
//   if (isMetroCity) {
//     hraExemption = Math.min(hraReceived, 0.5 * (basicSalary + dearnessAllowance));
//   } else {
//     hraExemption = Math.min(hraReceived, 0.4 * (basicSalary + dearnessAllowance));
//   }

//   // Calculate actual rent paid minus 10% of salary
//   var tenPercent = 0.10 * (basicSalary + dearnessAllowance);
//   var actualRentPaid = totalRentPaid - tenPercent;

//   // Determine the lowest HRA exemption among the calculated values
//   hraExemption = Math.min(hraExemption, actualRentPaid);

//   // Calculate taxable HRA
//   var taxableHRA = hraReceived - hraExemption;

//   // Display the result
//   resultBox.style.display = "block";
//   document.getElementById("exemptedHRA").innerHTML = "₹" + hraExemption.toFixed(1);
//   document.getElementById("taxableHRA").innerHTML = "₹" + taxableHRA.toFixed(1);

//   // document.getElementById("exemptedHRA").innerHTML = "HRA exemption you can claim: ₹" + hraExemption.toFixed(1);
//   // document.getElementById("taxableHRA").innerHTML = "Taxable HRA: ₹" + taxableHRA.toFixed(1);
// }
 
// function readMoreHra() {
//   var dots = document.getElementById("dots");
//   var moreText = document.getElementById("more");
//   var btnText = document.getElementById("myBtn");

//   if (dots.style.display === "none") {
//     dots.style.display = "inline";
//     btnText.innerHTML = "Read more";
//     moreText.style.display = "none";
//          moreText.classList.remove("active");
//   } else {
//     dots.style.display = "none";
//     btnText.innerHTML = " Read less";
//     moreText.style.display = "inline";
//         moreText.classList.add("active");
//   }
// }


function readMoreHra() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " Read less";
    moreText.style.display = "inline";
  }
}

function removeCommas(value) {
  if (value === undefined || value === null) {
    return '';
  }
  return value.replace(/,/g, '');
}

function calculateHRA(basicSal, DAamt, hraReceived, rentPaid, isMetro) {
  const basicSalaryNum = parseFloat(basicSal);
  const DAamtNum = parseFloat(DAamt);
  const hraReceivedNum = parseFloat(hraReceived);
  const totalRentPaidNum = parseFloat(rentPaid);

  const salary = basicSalaryNum + DAamtNum;
  const exemption1 = totalRentPaidNum - 0.1 * salary;
  const exemption2 = (isMetro ? 0.5 : 0.4) * salary;
  const exemption3 = hraReceivedNum;

  const hraExemption = Math.max(Math.min(exemption1, exemption2, exemption3), 0);

  return hraExemption;
}

function calculateFun() {
  var basicSal = removeCommas($("#basicSalary").val());
  var DAamt = removeCommas($("#dearnessAllowance").val());
  var hraReceived = removeCommas($("#hraReceived").val());
  var rentPaid = removeCommas($("#totalRentPaid").val());
  var isMetro = $('input:radio[name=cityType]:checked').val();
  var resultBox = document.getElementById("result");

  // Validate inputs
  if (basicSal === "") {
    alert("Please enter your Basic Salary");
    $("#basicSal").focus();
    return false;
  } else if (DAamt === "") {
    alert("Please enter Dearness Allowance ");
    $("#DA").focus();
    return false;
  } else if (hraReceived === "") {
    alert("Please enter House Rent Allowance");
    $("#hraReceived").focus();
    return false;
  } else if (rentPaid === "") {
    alert("Please enter how much Actual Rent Paid ");
    $("#rentPaid").focus();
    return false;
  } else if (isMetro === undefined) {
    alert("Please choose do you live in metros");
    return false;
  }

  // Perform HRA calculation
  var hraExemption = calculateHRA(basicSal, DAamt, hraReceived, rentPaid, isMetro === 'yes');
  var hraReceivedNum = parseFloat(hraReceived);
  var hraExemptionNum = parseFloat(hraExemption);
  var taxableHRA = hraReceivedNum - hraExemptionNum;

  resultBox.style.display = "block";
  $("#exemptedHRA").text("₹" + hraExemptionNum.toFixed(1));
  $("#taxableHRA").text("₹" + taxableHRA.toFixed(1));
}