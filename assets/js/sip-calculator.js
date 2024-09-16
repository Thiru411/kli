let currentWatt,
  catchWatt = document.getElementById("investment"), // This is Amount
  catchTooltipMaxSlide = catchWatt.offsetWidth - 15,
  catchTooltip = document.getElementById("showValue"),
  catchTextValue = document.getElementById("textValue"),

  catchVolt = document.getElementById("rateofInterest"), // This is % value
  catchTooltip2MaxSlide = catchVolt.offsetWidth - 7,
  catchTooltip2 = document.getElementById("showValue2"),
  currentVolt,
  catchTextValue2 = document.getElementById("textValue2"),
  catchAmps = document.getElementById("showAmps"),
  catchReturn = document.getElementById("showReturn"),
  catchInvested = document.getElementById("showInvested"),

  currentYear,
  catchYear = document.getElementById("years"), // This is Tenure
  catchTooltip3MaxSlide = catchYear.offsetWidth - 7,
  catchTooltip3 = document.getElementById("showValue3"),
  catchTextValue3 = document.getElementById("textValue3"),
  futureValue,
  invested,
  returnedValue;

catchWatt.oninput = function () {
  tooltipSliding("watt");
  calculateAmps();
};
catchVolt.oninput = function () {
  tooltipSliding("volt");
  calculateAmps();
};
catchYear.oninput = function () {
  tooltipSliding("year");
  calculateAmps();
};

function tooltipSliding(slider, textInput = "") {
  if (slider == "watt") {
    currentWatt = textInput == "" ? catchWatt.value : textInput;
    catchTooltip.innerHTML = currentWatt < 500 ? 500 : currentWatt;
    catchTextValue.value = parseInt(currentWatt);
    let tooltipCanSlide = catchTooltipMaxSlide;
    catchTooltip.style.left = `${parseInt(
      (tooltipCanSlide / 100000) * currentWatt
    )}px`;
  } else if (slider == "volt") {
    currentVolt = textInput == "" ? catchVolt.value : textInput;
    catchTooltip2.innerHTML = currentVolt;
    catchTextValue2.value = parseInt(currentVolt);
    let tooltipCanSlide = catchTooltip2MaxSlide;
    catchTooltip2.style.left = `${parseInt(
      (tooltipCanSlide / 30) * currentVolt - 9
    )}px`;
  } else if (slider == "year") {
    currentYear = textInput == "" ? catchYear.value : textInput;
    catchTooltip3.innerHTML = currentYear;
    catchTextValue3.value = parseInt(currentYear);
    let tooltipCanSlide = catchTooltip3MaxSlide;
    catchTooltip3.style.left = `${parseInt(
      (tooltipCanSlide / 30) * currentYear - 9
    )}px`;
  }
}

function setInvestmentValue(e) {
  let pattern = /^[0-9]*$/,
    v = catchTextValue.value;
  if ((pattern.test(v) && v != "" && v <= 100000 && v >= 1000) || v == 50) {
    originalValue = parseInt(catchTextValue.value);
    catchTextValue.value = originalValue;
    catchWatt.value = originalValue;
    tooltipSliding("watt", originalValue);
  }
  // else {
  //   catchTextValue.value = 1000;
  //   catchWatt.value = 1000;
  //   tooltipSliding("watt", 1000);
  // }
  if (parseInt(e.value) > 100000) { e.value = 100000; return false; }
  if (v != '' && v <= 100000 && v >= 1000) calculateAmps();
}

function setVoltValue() {
  let pattern = /^[0-9]*$/,
    v = catchTextValue2.value;
  if (pattern.test(v) && v > 0 && v <= 30) {
    originalValue = isNaN(parseInt(catchTextValue2.value)) ? 1 : parseInt(catchTextValue2.value);
    catchTextValue2.value = originalValue;
    catchVolt.value = originalValue;
    tooltipSliding("volt", originalValue);
  } else if (v != '') {
    catchTextValue2.value = 1;
    catchVolt.value = 1;
    tooltipSliding("volt", 1);
  }
  calculateAmps();
}

function setYearValue() {
  let pattern = /^[0-9]*$/,
    v = catchTextValue3.value;
   if (pattern.test(v) && v > -0 && v <= 30) {
    originalValue = isNaN(parseInt(catchTextValue3.value)) ? 1 : parseInt(catchTextValue3.value);
    catchTextValue3.value = originalValue;
    catchYear.value = originalValue;
    tooltipSliding("year", originalValue);
  } else {
    catchTextValue3.value = 0;
    catchYear.value = 0;
    tooltipSliding("year", 0);
  }
  calculateAmps();
}

window.addEventListener(
  "resize",
  function (event) {
    catchTooltipMaxSlide = catchWatt.offsetWidth - 20;
    catchTooltip2MaxSlide = catchVolt.offsetWidth - 20;
  },
  true
);

let myChart;
function calculateAmps() {
  currentWatt = isNaN(currentWatt) ? 25000 : currentWatt;
  currentVolt = isNaN(currentVolt) ? 12 : currentVolt;
  currentYear = isNaN(currentYear) ? 10 : currentYear;

  futureValue = futureValue == undefined ? 5808477 : currentWatt * (((Math.pow((1 + (currentVolt / 100) / 12), (currentYear * 12))) - 1) / ((currentVolt / 100) / 12)) * (1 + (currentVolt / 100) / 12);
  invested = invested == undefined ? 3000000 : currentWatt * currentYear * 12;
  returnedValue = futureValue - invested;

  if (Number.isNaN(futureValue) == false) {
    // catchAmps.innerHTML = `₹${futureValue.toFixed(0)}`;
    // catchReturn.innerHTML = `₹${returnedValue.toLocaleString('en-IN')}`;

    catchAmps.innerHTML = futureValue.toLocaleString('en-IN', {
      maximumFractionDigits: 0,
      style: 'currency',
      currency: 'INR'
    });
    catchReturn.innerHTML = returnedValue.toLocaleString('en-IN', {
      maximumFractionDigits: 0,
      style: 'currency',
      currency: 'INR'
    });
    catchInvested.innerHTML = invested.toLocaleString('en-IN', {
      maximumFractionDigits: 0,
      style: 'currency',
      currency: 'INR'
    });
  } else {
    catchAmps.innerHTML = "";
  }
  generateChart(parseInt(returnedValue), parseInt(invested))
}

calculateAmps();

function generateChart(a, b) {
  if (!(isNaN(futureValue), isNaN(invested))) {
    if (myChart !== undefined) {
      myChart.destroy();
    }
    const data = {
      labels: [
        'Expected Returns',
        'Invested Amount'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [a, b],
        backgroundColor: [
          'rgb(237, 28, 36)',
          'rgb(255, 190, 190)'
        ],
        hoverOffset: 4
      }],
    };
    const config = {
      type: 'doughnut',
      data: data,
      options: {
        plugins: {
          legend: {
            display: false,
            position: "bottom",
            align: 'start',
            labels: {
              boxWidth: 20,
            }
          },
        }
      }
    };
    myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  }
};

function readMore() {
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