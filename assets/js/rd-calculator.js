let myRdDoughnutChart = null;

function updateRdSliderValue(inputId) {
  const slider = document.getElementById(inputId);
  const inputBox = document.getElementById(inputId.replace('Range', ''));
  inputBox.value = slider.value;
  calculateRD();
}

function updateRdInputValue(inputRangeId, inputId) {
  const inputBox = document.getElementById(inputId);
  const inputRange = document.getElementById(inputRangeId);
  inputRange.value = inputBox.value;
  calculateRD();
}

function attachEventListeners() {
  const rangeInputs = document.querySelectorAll('input[type="range"]');
  const numberInputs = document.querySelectorAll('input[type="number"]');

  rangeInputs.forEach((rangeInput) => {
    const inputId = rangeInput.id.replace('Range', '');

    rangeInput.addEventListener('input', () => {
      updateSliderValue(inputId);
    });

    rangeInput.addEventListener('change', () => {
      updateInputValue(`${inputId}Range`, inputId);
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

      updateInputValue(rangeInputId, numberInput.id);
    });

    numberInput.addEventListener('change', () => {
      updateSliderValue(rangeInputId);
    });
  });
}

function calculateRD() {
  const monthlyInvestment = parseFloat(document.getElementById('monthlyInvestment').value);
  const interestRate = parseFloat(document.getElementById('rdinterestRate').value);
  const duration = parseFloat(document.getElementById('rdduration').value);

  const monthDuration = duration * 12;
  const n = 4;
  const i = interestRate / (n * 100);

  const maturityAmount = monthlyInvestment * ((Math.pow(1 + i, n * duration) - 1) / (1 - Math.pow(1 + i, -1 / 3)));
  const interestEarned = maturityAmount - monthlyInvestment * monthDuration;

  updateRdDoughnutChart(monthlyInvestment * n * duration, interestEarned);
  updateRdTextDisplay(maturityAmount, interestEarned, monthlyInvestment * monthDuration);

}

function updateRdDoughnutChart(principal, interestEarned) {
  const ctx = document.getElementById('rdChart').getContext('2d');

  if (myRdDoughnutChart) {
    myRdDoughnutChart.destroy();
  }
  const data = {
    labels: ['Invested Amount', 'Interest'],
    datasets: [{
      data: [principal, interestEarned],
      backgroundColor: ['rgb(255, 190, 190)', 'rgb(237, 28, 36)'],
    }],
  };

  // const options = {
  //   responsive: true,
  // };

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

  myRdDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options,
  });
}
function updateRdTextDisplay(maturityAmount, interestEarned, monthlyInvestment) {
  const textDisplayElement = document.getElementById('rdMaturityAmount');
  const monthInvest = (document.getElementById('monthlyInvestment').value);
  const rdinterestRate = (document.getElementById('rdinterestRate').value);
  const rdTimeDuration = (document.getElementById('rdduration').value);



  textDisplayElement.innerHTML = `
    <div class="investAmtFd">
      <div class="investeAmounttxtFd"> If you invest <b>₹${monthInvest.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 })} </b> per month <br> for ${rdTimeDuration} Years at ${rdinterestRate} % p.a</div>
    </div>
    <div class="totalReturnsFd">
      <div class="totalValuetxtFd">Est. returns</div>
      <div class="totalValueFd">${interestEarned.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
      </div>
      <div class="totalAmt">
      <div class="totalValuetxtFd">Total Value</div>
      <div class="totalInvestReturnsFd">${maturityAmount.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
    </div>
  `;
}

document.addEventListener('DOMContentLoaded', () => {
  attachEventListeners();
  calculateRD();
});

function readMoreRD() {
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