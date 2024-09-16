const monthlySalaryRange = document.getElementById('monthlySalaryRange');
const monthlySalaryInput = document.getElementById('monthlySalary');
const yearsOfServiceRange = document.getElementById('yearsOfServiceRange');
const yearsOfServiceInput = document.getElementById('yearsOfService');
const gratuityAmountInput = document.getElementById('gratuityAmount');

function calculateGratuity() {
  const monthlySalary = parseFloat(monthlySalaryInput.value);
  const yearsOfService = parseFloat(yearsOfServiceInput.value);

  const gratuityAmount = (yearsOfService * monthlySalary * 15) / 26;
  const roundedGratuity = Math.min(gratuityAmount, 1000000);

  gratuityAmountInput.value = roundedGratuity.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 });
}

monthlySalaryRange.addEventListener('input', () => {
  monthlySalaryInput.value = monthlySalaryRange.value;
  calculateGratuity();
});

monthlySalaryInput.addEventListener('input', () => {
  if (parseFloat(monthlySalaryInput.value) > parseFloat(monthlySalaryRange.max)) {
    monthlySalaryInput.value = monthlySalaryRange.max;
  }
  monthlySalaryRange.value = monthlySalaryInput.value;
  calculateGratuity();
});

yearsOfServiceRange.addEventListener('input', () => {
  yearsOfServiceInput.value = yearsOfServiceRange.value;
  calculateGratuity();
});

yearsOfServiceInput.addEventListener('input', () => {
  if (parseFloat(yearsOfServiceInput.value) > parseFloat(yearsOfServiceRange.max)) {
    yearsOfServiceInput.value = yearsOfServiceRange.max;
  }
  yearsOfServiceRange.value = yearsOfServiceInput.value;
  calculateGratuity();
});

calculateGratuity();



function readMoreFD() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
      moreText.classList.remove("active");
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " Read less";
    moreText.style.display = "inline";
      moreText.classList.add("active");
  }
}