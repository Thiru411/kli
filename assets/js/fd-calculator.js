let myDoughnutChart = null;

function updateSliderValue(inputId) {
  const slider = document.getElementById(inputId);
  const inputBox = document.getElementById(inputId.replace('Range', ''));

  inputBox.value = slider.value;

  calculateFD();
}

function updateInputValue(inputRangeId, inputId) {
  const inputBox = document.getElementById(inputId);
  const inputRange = document.getElementById(inputRangeId);

  inputRange.value = inputBox.value;

  calculateFD();
}

// function attachEventListeners() {
//   const rangeInputs = document.querySelectorAll('input[type="range"]');
//   const numberInputs = document.querySelectorAll('input[type="number"]');

//   rangeInputs.forEach((rangeInput) => {
//     const inputId = rangeInput.id.replace('Range', '');

//     rangeInput.addEventListener('input', () => {
//       updateSliderValue(inputId);
//     });

//     rangeInput.addEventListener('change', () => {
//       updateInputValue(`${inputId}Range`, inputId);
//     });
//   });

//   numberInputs.forEach((numberInput) => {
//     const rangeInputId = `${numberInput.id}Range`;

//     numberInput.addEventListener('input', () => {
//       updateInputValue(rangeInputId, numberInput.id);
//     });

//     numberInput.addEventListener('change', () => {
//       updateSliderValue(rangeInputId);
//     });
//   });
// }

// Function to attach event listeners to range inputs and input boxes
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


function calculateFD() {
  const totalInvestment = parseFloat(document.getElementById('totalInvestment').value);
  const interestRate = parseFloat(document.getElementById('interestRate').value);
  const timeDuration = parseFloat(document.getElementById('timeDuration').value);

  const n = 4; // Compounded quarterly
  const r = interestRate / (n * 100); // Convert annual rate to quarterly

  const maturityAmount = totalInvestment * Math.pow((1 + r), n * timeDuration);

  const interestEarned = maturityAmount - totalInvestment;

  updateDoughnutChart(totalInvestment, interestEarned);

  updateTextDisplay(interestEarned);
}

function updateDoughnutChart(principal, interestEarned) {
  const ctx = document.getElementById('fdChart').getContext('2d');

  if (myDoughnutChart) {
    myDoughnutChart.destroy();
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
          padding: 20, // Adjust padding as needed
          generateLabels: function(chart) {
            const labels = chart.data.labels.map((label, index) => ({
              text: label,
              fillStyle: chart.data.datasets[0].backgroundColor[index],
              hidden: false,
              lineCap: 'butt', // Prevent rounded corners
              lineWidth: 0, // Remove border
              padding: 5, // Adjust padding as needed
              margin: 5, // Adjust margin as needed
            }));
            return labels;
          }
        }
      },
    }
  };
  
  myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options,
  });
}

function updateTextDisplay(interestEarned) {
  const totalInvestment = parseFloat(document.getElementById('totalInvestment').value);
  const interestRate = parseFloat(document.getElementById('interestRate').value);
  const timeDuration = parseFloat(document.getElementById('timeDuration').value);

  const totalValues = totalInvestment + interestEarned;
  const textDisplayElement = document.getElementById('fdMaturityAmount');

  // textDisplayElement.innerHTML = `
  // <p class='totalValuetxtFd'>Invested Amount: ₹${totalInvestment.toFixed(2)}</p>
  // <p>Interest Amount: ₹${interestEarned.toFixed(2)}</p>
  // <p>Total Value ₹${totalValues.toFixed(2)}</p>
  // `;

  textDisplayElement.innerHTML = `
    <div class="investAmtFd">
      <div class="investeAmounttxtFd"> If you invest <b>${totalInvestment.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })} </b> <br> for ${timeDuration} Years at ${interestRate} % p.a</div>
    </div>
    <div class="totalReturnsFd">
      <div class="totalValuetxtFd">Est. returns</div>
      <div class="totalInvestReturnsFd">${interestEarned.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
    </div>
    <div class="totalAmt">
      <div class="totalValuetxtFd">Total Value</div>
      <div class="totalValueFd">${totalValues.toLocaleString('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 1 })}</div>
    </div>
  `
}


document.addEventListener('DOMContentLoaded', () => {
  attachEventListeners();
  calculateFD(); // Initial calculation and chart display
});


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

