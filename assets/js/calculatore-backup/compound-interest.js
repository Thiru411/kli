$(document).ready(function () {
    compountInterest();
});


$('.form-control').keypress(function (e) {    
    
    var charCode = (e.which) ? e.which : event.keyCode    

    if (String.fromCharCode(charCode).match(/[^0-9]/g))    

        return false;                        

});


function adComma() {
    $('.addCommaDefault').each(function() {
        var x = $(this).text();
        x = x.toString();
        var lastThree = x.substring(x.length-3);
        var otherNumbers = x.substring(0,x.length-3);
        if(otherNumbers != '')
            lastThree = ',' + lastThree;
        var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
        $(this).text(res);
    });
}

var compoundFrequency, amtInvest, yearsInvest, stayInvested, rateOfInterest, totalAmtIntvested, noInvestSlot,
    returnAmount, yearlyReturn, amtInvestNew;
var myChart;
var finalAmtMonthly;
var investedAmtMonthly;

var currentYear;
var years;

var investedAmt = new Array();

returnAmount = []


$(document).on('change', '#stayInvestedInput', function(){
    stayInvestedError();
})
$(document).on('change', '#yearsInvestInput, #yearsInvestRange', function(){
    stayInvestedError();
})

$(document).on('change', '#stayInvestedRange', function(){
    $('#stayInvestedInput').trigger('change');
})



function stayInvestedError(){
    yearsInvest = parseInt($('#yearsInvestInput').val());
    stayInvested = parseInt($('#stayInvestedInput').val());

    var amtMax = parseFloat($('#stayInvestedRange').parents('.range-wrap').find('.range-control').attr('max'));
    var trigVal = $('#stayInvestedInput').val()

    if (yearsInvest > stayInvested) {
        // alert('Years you want to Invest cannot be less than Stay Invested');
        $('#stayInvestedInput').parents('.input-wrap').addClass('error');
        
        $('.error-text').css('display', 'block');

    }else if(yearsInvest < stayInvested || trigVal !== ''){
        $('#stayInvestedInput').parents('.input-wrap').removeClass('error');
        $('.error-text').css('display', 'none');
    }

    if(yearsInvest < stayInvested && trigVal > amtMax){
        $('#stayInvestedInput').parents('.input-wrap').addClass('error');
        $('.error-text').css('display', 'none');
    }
}

$(document).on('click', '#calculate', function () {

    stayInvestedError();

    if($('.error').length == 0){
        compountInterest();
        $('html, body').animate({
            scrollTop: $(".col-lg-5").offset().top - 50
        }, 500);
    }
    else{
        $('html, body').animate({
            scrollTop: $(".error").offset().top - 50
        }, 500);
    }
    

    //console.log(currentYear)

    myChart.data.datasets[0].data = finalAmt;
    // myChart.data.datasets[1].data = finalAmt;
    if (compoundFrequency == 'monthly') {
        myChart.data.datasets[0].data = finalAmtMonthly;
        // myChart.data.datasets[1].data = finalAmtMonthly;
    }

    myChart.data.labels = years;


    myChart.update();

})

$(document).ready(function () {
    compountInterest();
    chartLine();
    if (compoundFrequency == 'monthly') {
        myChart.data.labels = years;
        myChart.data.datasets[0].data = finalAmtMonthly;
        // myChart.data.datasets[1].data = finalAmtMonthly;
    }
    myChart.update();
});

function compountInterest() {
    compoundFrequency = $('#compoundFrequency').val();
    amtInvest = parseInt($('#amtInvestInput').val().replace(/,/g, ''));
    yearsInvest = parseInt($('#yearsInvestInput').val());
    stayInvested = parseInt($('#stayInvestedInput').val());
    rateOfInterest = $('#rateOfInterestInput').val() / 100;

    currentYear = new Date();
    currentYear = currentYear.getFullYear();
    years = [currentYear];

    investedAmt = [];

    var amtEndYearArr = [];
    var amtAtEndYear = amtInvest;

    // var amtAtEndYearFinal = new Array()

   


    if (compoundFrequency == 'yearly') {
        document.getElementById('totalInvested').innerHTML = amtInvest;
        $('.perMonth').css('display', 'none');
        $('.perAnnum').css('display', 'inline-block');

        for(var i = 1; i <= yearsInvest; i++) {
            amtAtEndYear = (amtAtEndYear * rateOfInterest) + amtAtEndYear;
            //amtAtEndYearNew = amtAtEndYear + amtAtEndYear
            amtEndYearArr.push(amtAtEndYear)
            finalAmt = amtAtEndYear + amtInvest;

            finalAmt = amtEndYearArr.map((elem, index) => amtEndYearArr.slice(0, index + 1).reduce((a, b) => a + b));
            investedAmt.push(amtInvest * i)
        }

        for (var i = 1; i < stayInvested; i++) {
            currentYear++;
            years.push(currentYear)
        }
        // console.log(investedAmtMonthly)
        //returnAmount = (amtInvest * stayInvested) 

        
            noInvestSlot = stayInvested - yearsInvest
            var amtAtEndYearSlot = finalAmt.slice(-1)[0]


            for (var i = 1; i <= noInvestSlot; i++) {
                amtAtEndYearSlot = (amtAtEndYearSlot * rateOfInterest) + amtAtEndYearSlot;

                finalAmt.push(amtAtEndYearSlot)

            }

            $('#stayInvestedInput').parents('.input-wrap').removeClass('error')
       



    }
    else if (compoundFrequency == 'monthly') {
        document.getElementById('totalInvested').innerHTML = amtInvest;
       $('.perMonth').css('display', 'inline-block');
       $('.perAnnum').css('display', 'none');

        yearsInvest = yearsInvest * 12;

        investedAmt = [];
        investedAmtMonthly = [];

        for (var i = 1; i <= yearsInvest; i++) {
            amtAtEndYear = (amtAtEndYear * rateOfInterest / 12) + amtAtEndYear;
            //amtAtEndYearNew = amtAtEndYear + amtAtEndYear
            amtEndYearArr.push(amtAtEndYear)
            finalAmt = amtAtEndYear + amtInvest;

            finalAmt = amtEndYearArr.map((elem, index) => amtEndYearArr.slice(0, index + 1).reduce((a, b) => a + b));


        }

        stayInvested = stayInvested * 12

        if (yearsInvest <= stayInvested) {
            noInvestSlot = (stayInvested - yearsInvest)
            var amtAtEndYearSlot = finalAmt.slice(-1)[0]



            for (var i = 1; i <= noInvestSlot; i++) {
                amtAtEndYearSlot = (amtAtEndYearSlot * rateOfInterest / 12) + amtAtEndYearSlot;

                finalAmt.push(amtAtEndYearSlot)
            }

            for (var i = 1; i <= yearsInvest; i++) {
                investedAmt.push(amtInvest * i)
            }

            for (var i = 11; i < investedAmt.length; i += 12) {
                investedAmtMonthly.push(investedAmt[i])
            }

            // console.log(investedAmtMonthly)

            for (i = 2; i <= stayInvested / 12; i++) {
                currentYear++;
                years.push(currentYear)
            }

        }

        else {
            //alert('No. of years you want to stay invested for cannot be less than No. of years you want to invest')
        }

        finalAmtMonthly = [];

        for (var i = 11; i < finalAmt.length; i += 12) {
            finalAmtMonthly.push(finalAmt[i]);
        }

        var stayInvestedYears = stayInvested / 12
        //returnAmount = (amtInvest * stayInvested) 

        console.log(finalAmtMonthly)


    }
    document.getElementById('compoundReturn').innerHTML = Math.round(finalAmt.slice(-1));
    document.querySelector('.years_val').innerHTML = parseInt($('#yearsInvestInput').val());

    
    document.querySelector('.percent_val').innerHTML = rateOfInterest * 100;


    adComma()

}

function chartLine() {
    const getOrCreateLegendList = (chart, id) => {
        const legendContainer = document.getElementById(id);
        var listContainer = legendContainer.querySelector('ul');

        if (!listContainer) {
            listContainer = document.createElement('ul');
            listContainer.style.display = 'flex';
            listContainer.style.flexDirection = 'row';
            listContainer.style.margin = 0;
            listContainer.style.padding = 0;

            legendContainer.appendChild(listContainer);
        }

        return listContainer;
    };

    var htmlLegendPlugin = {
        id: 'htmlLegend',
        afterUpdate(chart, args, options) {
            const ul = getOrCreateLegendList(chart, options.containerID);

            // Remove old legend items
            while (ul.firstChild) {
                ul.firstChild.remove();
            }

            // Reuse the built-in legendItems generator
            const items = chart.options.plugins.legend.labels.generateLabels(chart);

            items.forEach(item => {
                const li = document.createElement('li');
                li.classList = 'legends_li'

                li.onclick = () => {
                    const { type } = chart.config;
                    if (type === 'pie' || type === 'doughnut') {
                        // Pie and doughnut charts only have a single dataset and visibility is per item
                        chart.toggleDataVisibility(item.index);
                    } else {
                        chart.setDatasetVisibility(item.datasetIndex, !chart.isDatasetVisible(item.datasetIndex));
                    }
                    chart.update();
                };

                // Color box
                const boxSpan = document.createElement('span');
                boxSpan.style.background = item.fillStyle;
                boxSpan.classList = 'legend_box';

                // Text
                const textContainer = document.createElement('p');
                textContainer.style.color = item.fontColor;
                textContainer.classList = 'legend_text'
                textContainer.style.textDecoration = item.hidden ? 'line-through' : '';

                const text = document.createTextNode(item.text);
                textContainer.appendChild(text);

                li.appendChild(boxSpan);
                li.appendChild(textContainer);
                ul.appendChild(li);
            });
        }
    };

    const ctx = document.getElementById('compound_interest_chart');
    myChart = new Chart(ctx, {
        type: 'line',
        data: {
            label: 'Years of Growth',
            labels: years,
            datasets: [
            {
                label: 'Your Returns',
                data: finalAmt,
                pointBorderColor: '#004A8F',
                backgroundColor:'#004A8F',
                borderColor: '#CCDBE9',
                borderWidth: 5
            },
            
            ],

        },
        options: {
            scales: {
                y: {
                    beginAtZero: false,
                    display: true,
                    title: {
                        display: true,
                        color: '#ED1C24',
                        text: 'Amount Invested',
                    },
                    ticks: {
                        color:  '#004A8F',
                        // forces step size to be 50 units
                        callback: function(value, index, values) {
                            var val = value;
                            if (val >= 10000000) val = (val / 10000000).toFixed(0) + ' Cr';
                            else if (val >= 100000) val = (val / 100000).toFixed(0) + ' Lac';
                            else if (val >= 1000) val = (val / 1000).toFixed(0) + ' K';
                            return val;
                        },

                        //stepSize: 10000
                      }
                },

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Years of Growth',
                        color: '#004A8F',
                    },
                    ticks:{
                        color:  '#004A8F',
                    }
                }
            },
            plugins:{
                legend: {
                    display: false,
                },
                htmlLegend: {
                    containerID: 'legend',
                },

                tooltip: {
                    displayColors: false,
                    backgroundColor: colorItems,
                    callbacks: {
                        label: function(tooltipItems, data) { 
                           var multistringText =  ['Your returns: ' + parseFloat(tooltipItems.parsed.y).toFixed(0)];

                        //    for(i= 0; i < investedAmt.length; i++){
                        //     multistringText.push('Amount Invested: ' + parseFloat(investedAmt.splice(i, 1)).toFixed(0));
                        //    }
                               
                            return multistringText;
                        }
                    },
                },
            },

            
        },

        layout: {
            padding: {
                left: 50
            }
        },
        plugins: [htmlLegendPlugin]
    });

    function colorItems(tooltipItem) {

        const tooltipBackgriundColor = tooltipItem.tooltip.labelColors[0].borderColor

        return tooltipBackgriundColor;

    }
}
