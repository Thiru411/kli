let myPpfDoughnutChart = null;

function updatePpfSliderValue(inputId) {
  const slider = document.getElementById(inputId);
  const inputBox = document.getElementById(inputId.replace('Range', ''));

  inputBox.value = slider.value;

  calculateMaturity();
}

function updatePpfInputValue(inputRangeId, inputId) {
  const inputBox = document.getElementById(inputId);
  const inputRange = document.getElementById(inputRangeId);

  inputRange.value = inputBox.value;

  calculateMaturity();
}


// Function to attach event listeners to range inputs and input boxes
function attachEventListeners() {
  const rangeInputs = document.querySelectorAll('input[type="range"]');
  const numberInputs = document.querySelectorAll('input[type="number"]');

  rangeInputs.forEach((rangeInput) => {
    const inputId = rangeInput.id.replace('Range', '');

    rangeInput.addEventListener('input', () => {
      updatePpfSliderValue(inputId);
    });

    rangeInput.addEventListener('change', () => {
      updatePpfInputValue(`${inputId}Range`, inputId);
    });
  });

  numberInputs.forEach((numberInput) => {
    const rangeInputId = `${numberInput.id}Range`;

    numberInput.addEventListener('input', () => {
      numberInput.value = numberInput.value.replace(/[^0-9]/g, '');

      const maxRange = parseFloat(document.getElementById(rangeInputId).max);
      if (parseFloat(numberInput.value) > maxRange) {
        numberInput.value = maxRange;
      }

      updatePpfInputValue(rangeInputId, numberInput.id);
    });

    numberInput.addEventListener('change', () => {
      updatePpfSliderValue(rangeInputId);
    });
  });
}

function calculateMaturity() {
  const investment = parseFloat(document.getElementById('yearlyInvestment').value);
  const years = parseFloat(document.getElementById('ppfTimeDuration').value);
  const rate = parseFloat(document.getElementById('ppfRate').value);


  let total = 0;
  for (let i = 1; i <= years; i++) {
    total += investment * Math.pow(1 + rate / 100, i);
  }
  const maturityAmount = total.toFixed(2);

  const interestEarned = maturityAmount - investment * years;
  const totalInvest = investment * years;

  updateDoughnutChart(totalInvest, interestEarned);
  updatePpfTextDisplay(interestEarned);
}


function updateDoughnutChart(principal, interestEarned) {
  const ctx = document.getElementById('ppfChart').getContext('2d');

  if (myPpfDoughnutChart) {
    myPpfDoughnutChart.destroy();
  }

  const data = {
    labels: ['Invested Amount', 'Interest'],
    datasets: [{
      data: [principal, interestEarned],
      backgroundColor: ['rgb(255, 190, 190)', 'rgb(237, 28, 36)'],
    }],
  };

  const options = {
    plugins: {
      legend: {
        display: true,
        position: "bottom",
        align: 'start',
        labels: {
          boxWidth: 20,
        }
      },
    }
  };
  myPpfDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options,
  });
}

function updatePpfTextDisplay(interestEarned) {
  const totalInvestment = parseFloat(document.getElementById('yearlyInvestment').value);
  const timeDuration = parseFloat(document.getElementById('ppfTimeDuration').value);
  const interestRate = parseFloat(document.getElementById('ppfRate').value);

  const totalValues = (totalInvestment * timeDuration) + interestEarned;
  const textDisplayElement = document.getElementById('ppfMaturityAmount');


  textDisplayElement.innerHTML = `
    <div class="investAmtFd">
      <div class="investeAmounttxtFd"> If you invest <b>${totalInvestment.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })} </b> <br> for ${timeDuration} Years at ${interestRate} % p.a</div>
    </div>
    <div class="totalReturnsFd">
      <div class="totalValuetxtFd">Est. returns</div>
      <div class="totalInvestReturnsFd">${interestEarned.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
    </div>
    <div class="totalAmt">
      <div class="totalValuetxtFd">Maturity value</div>
      <div class="totalValueFd">${totalValues.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
    </div>
  `
}


document.addEventListener('DOMContentLoaded', () => {
  attachEventListeners();
  calculateMaturity(); // Initial calculation and chart display
});


function readMorePPF() {
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