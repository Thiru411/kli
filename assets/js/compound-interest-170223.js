function adComma() {
    $(".addCommaDefault").each(function () {
        var x = $(this).text(),
            lastThree = (x = x.toString()).substring(x.length - 3),
            x = x.substring(0, x.length - 3),
            x = ("" != x && (lastThree = "," + lastThree), x.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree);
        $(this).text(x);
    });
}
$(document).ready(function () {
    compountInterest();
}),
    $(".form-control").keypress(function (e) {
        e = e.which || event.keyCode;
        if (String.fromCharCode(e).match(/[^((1\d)|(\d))(\.(\d\d)|\d){01}$]/g)) return !1;
    });
var compoundFrequency,
    amtInvest,
    yearsInvest,
    stayInvested,
    rateOfInterest,
    totalAmtIntvested,
    noInvestSlot,
    returnAmount,
    yearlyReturn,
    amtInvestNew,
    myChart,
    finalAmtMonthly,
    investedAmtMonthly,
    currentYear,
    years,
    investedAmt = new Array();
function stayInvestedError() {
    (yearsInvest = parseInt($("#yearsInvestInput").val())), (stayInvested = parseInt($("#stayInvestedInput").val()));
    var amtMax = parseFloat($("#stayInvestedRange").parents(".range-wrap").find(".range-control").attr("max")),
        trigVal = $("#stayInvestedInput").val();
    stayInvested < yearsInvest
        ? ($("#stayInvestedInput").parents(".input-wrap").addClass("error"), $(".error-text").css("display", "block"))
        : (yearsInvest < stayInvested || "" !== trigVal) && ($("#stayInvestedInput").parents(".input-wrap").removeClass("error"), $(".error-text").css("display", "none")),
        yearsInvest < stayInvested && amtMax < trigVal && ($("#stayInvestedInput").parents(".input-wrap").addClass("error"), $(".error-text").css("display", "none"));
}
function compountInterest() {
    (compoundFrequency = $("#compoundFrequency").val()),
        (amtInvest = parseInt($("#amtInvestInput").val().replace(/,/g, ""))),
        (yearsInvest = parseInt($("#yearsInvestInput").val())),
        (stayInvested = parseInt($("#stayInvestedInput").val())),
        (rateOfInterest = $("#rateOfInterestInput").val() / 100),
        (currentYear = (currentYear = new Date()).getFullYear()),
        (years = [currentYear]),
        (investedAmt = []);
    var amtEndYearArr = [],
        amtAtEndYear = amtInvest;
    if ("yearly" == compoundFrequency) {
        (document.getElementById("totalInvested").innerHTML = amtInvest), $(".perMonth").css("display", "none"), $(".perAnnum").css("display", "inline-block");
        for (var i = 1; i <= yearsInvest; i++)
            (amtAtEndYear = amtAtEndYear * rateOfInterest + amtAtEndYear),
                amtEndYearArr.push(amtAtEndYear),
                (finalAmt = amtAtEndYear + amtInvest),
                (finalAmt = amtEndYearArr.map((elem, index) => amtEndYearArr.slice(0, index + 1).reduce((a, b) => a + b))),
                investedAmt.push(amtInvest * i);
        for (i = 1; i < stayInvested; i++) currentYear++, years.push(currentYear);
        noInvestSlot = stayInvested - yearsInvest;
        for (var amtAtEndYearSlot = finalAmt.slice(-1)[0], i = 1; i <= noInvestSlot; i++) (amtAtEndYearSlot = amtAtEndYearSlot * rateOfInterest + amtAtEndYearSlot), finalAmt.push(amtAtEndYearSlot);
        $("#stayInvestedInput").parents(".input-wrap").removeClass("error");
    } else if ("monthly" == compoundFrequency) {
        (document.getElementById("totalInvested").innerHTML = amtInvest), $(".perMonth").css("display", "inline-block"), $(".perAnnum").css("display", "none"), (yearsInvest *= 12), (investedAmt = []), (investedAmtMonthly = []);
        for (i = 1; i <= yearsInvest; i++)
            (amtAtEndYear = (amtAtEndYear * rateOfInterest) / 12 + amtAtEndYear),
                amtEndYearArr.push(amtAtEndYear),
                (finalAmt = amtAtEndYear + amtInvest),
                (finalAmt = amtEndYearArr.map((elem, index) => amtEndYearArr.slice(0, index + 1).reduce((a, b) => a + b)));
        if (yearsInvest <= (stayInvested *= 12)) {
            noInvestSlot = stayInvested - yearsInvest;
            for (amtAtEndYearSlot = finalAmt.slice(-1)[0], i = 1; i <= noInvestSlot; i++) (amtAtEndYearSlot = (amtAtEndYearSlot * rateOfInterest) / 12 + amtAtEndYearSlot), finalAmt.push(amtAtEndYearSlot);
            for (i = 1; i <= yearsInvest; i++) investedAmt.push(amtInvest * i);
            for (i = 11; i < investedAmt.length; i += 12) investedAmtMonthly.push(investedAmt[i]);
            for (i = 2; i <= stayInvested / 12; i++) currentYear++, years.push(currentYear);
        }
        finalAmtMonthly = [];
        for (i = 11; i < finalAmt.length; i += 12) finalAmtMonthly.push(finalAmt[i]);
        console.log(finalAmtMonthly);
    }
    (document.getElementById("compoundReturn").innerHTML = Math.round(finalAmt.slice(-1))),
        (document.querySelector(".years_val").innerHTML = parseInt($("#yearsInvestInput").val())),
        (document.querySelector(".percent_val").innerHTML = $("#rateOfInterestInput").val()),
        adComma();
}
function chartLine() {
    var htmlLegendPlugin = {
            id: "htmlLegend",
            afterUpdate(chart, args, options) {
                const ul = ((id) => {
                    const legendContainer = document.getElementById(id);
                    id = legendContainer.querySelector("ul");
                    return id || (((id = document.createElement("ul")).style.display = "flex"), (id.style.flexDirection = "row"), (id.style.margin = 0), (id.style.padding = 0), legendContainer.appendChild(id)), id;
                })(options.containerID);
                for (; ul.firstChild; ) ul.firstChild.remove();
                const items = chart.options.plugins.legend.labels.generateLabels(chart);
                items.forEach((item) => {
                    const li = document.createElement("li"),
                        boxSpan =
                            ((li.classList = "legends_li"),
                            (li.onclick = () => {
                                var type = chart.config["type"];
                                "pie" === type || "doughnut" === type ? chart.toggleDataVisibility(item.index) : chart.setDatasetVisibility(item.datasetIndex, !chart.isDatasetVisible(item.datasetIndex)), chart.update();
                            }),
                            document.createElement("span")),
                        textContainer = ((boxSpan.style.background = item.fillStyle), (boxSpan.classList = "legend_box"), document.createElement("p"));
                    (textContainer.style.color = item.fontColor), (textContainer.classList = "legend_text"), (textContainer.style.textDecoration = item.hidden ? "line-through" : "");
                    var text = document.createTextNode(item.text);
                    textContainer.appendChild(text), li.appendChild(boxSpan), li.appendChild(textContainer), ul.appendChild(li);
                });
            },
        },
        ctx = document.getElementById("compound_interest_chart");
    myChart = new Chart(ctx, {
        type: "line",
        data: { label: "Years of Growth", labels: years, datasets: [{ label: "Your Returns", data: finalAmt, pointBorderColor: "#004A8F", backgroundColor: "#004A8F", borderColor: "#CCDBE9", borderWidth: 5 }] },
        options: {
            scales: {
                y: {
                    beginAtZero: !1,
                    display: !0,
                    title: { display: !0, color: "#ED1C24", text: "Amount Invested" },
                    ticks: {
                        color: "#004A8F",
                        callback: function (value, index, values) {
                            return 1e7 <= value ? (value = (value / 1e7).toFixed(2) + " Cr") : 1e5 <= value ? (value = (value / 1e5).toFixed(2) + " Lac") : 1e3 <= value && (value = (value / 1e3).toFixed(2) + " K"), value;
                        },
                    },
                },
                x: { display: !0, title: { display: !0, text: "Years of Growth", color: "#004A8F" }, ticks: { color: "#004A8F" } },
            },
            plugins: {
                legend: { display: !1 },
                htmlLegend: { containerID: "legend" },
                tooltip: {
                    displayColors: !1,
                    backgroundColor: function (tooltipItem) {
                        tooltipItem = tooltipItem.tooltip.labelColors[0].borderColor;
                        return tooltipItem;
                    },
                    callbacks: {
                        label: function (tooltipItems, data) {
                            return ["Your returns: " + parseFloat(tooltipItems.parsed.y).toFixed(0)];
                        },
                    },
                },
            },
        },
        layout: { padding: { left: 50 } },
        plugins: [htmlLegendPlugin],
    });
}
(returnAmount = []),
    $(document).on("change", "#stayInvestedInput", function () {
        stayInvestedError();
    }),
    $(document).on("change", "#yearsInvestInput, #yearsInvestRange", function () {
        stayInvestedError();
    }),
    $(document).on("change", "#stayInvestedRange", function () {
        $("#stayInvestedInput").trigger("change");
    }),
    $(document).on("click", "#calculate", function () {
        stayInvestedError(),
            0 == $(".error").length ? (compountInterest(), $("html, body").animate({ scrollTop: $(".col-lg-5").offset().top - 50 }, 500)) : $("html, body").animate({ scrollTop: $(".error").offset().top - 50 }, 500),
            (myChart.data.datasets[0].data = finalAmt),
            "monthly" == compoundFrequency && (myChart.data.datasets[0].data = finalAmtMonthly),
            (myChart.data.labels = years),
            myChart.update();
    }),
    $(document).ready(function () {
        compountInterest(), chartLine(), "monthly" == compoundFrequency && ((myChart.data.labels = years), (myChart.data.datasets[0].data = finalAmtMonthly)), myChart.update();
    });
