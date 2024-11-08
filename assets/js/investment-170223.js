var rateVal, nperVal, pvVal, pvValinminus, fvval, totalInterest, existInv, chartInvested, chartFvval, chartPvVal;
function RegularCalculate() {
    (rateVal = parseInt(document.getElementById("interestrateInput").value) / 100),
        (nperVal = 12 * parseInt(document.getElementById("yearsInvestInput").value)),
        (pvVal = parseInt(document.getElementById("amtInvestInput").value.replace(/,/g, ""))),
        (existInv = parseInt(-Math.abs(document.getElementById("periodicInput").value.replace(/,/g, "")))),
        (pvValinminus = -Math.abs(pvVal)),
        (fvval = formulajs.FV(rateVal / 12, nperVal, pvValinminus, existInv).toFixed(0)),
        console.log(existInv),
        (totalInterest = interrest(fvval, pvVal)),
        (document.getElementById("yourReturn").textContent = Number(fvval).toLocaleString("en-IN")),
        (document.querySelector("#totalInvested").textContent = Number(Math.abs(pvVal)).toLocaleString("en-IN")),
        (document.getElementById("percent_val").textContent = document.getElementById("interestrateInput").value),
        (document.querySelector(".years_val").textContent = nperVal / 12),
        (chartInvested = [pvVal * nperVal]),
        console.log(chartInvested),
        (chartFvval = [parseInt(fvval)]);
}
function onetimeCalculate() {
    (rateVal = parseInt(document.getElementById("interestrateInput").value) / 100),
        (nperVal = parseInt(document.getElementById("yearsInvestInput").value)),
        (pvVal = parseInt(document.getElementById("amtInvestInput").value.replace(/,/g, ""))),
        (existInv = parseInt(-Math.abs(document.getElementById("extistingInvestmentInput").value.replace(/,/g, "")))),
        (pvValinminus = -Math.abs(pvVal)),
        (fvval = formulajs.FV(rateVal, nperVal, existInv, pvValinminus, 0).toFixed(0)),
        (totalInterest = interrest(fvval, pvVal)),
        console.log(Number(fvval).toLocaleString("en-IN")),
        (document.getElementById("yourReturn").textContent = Number(fvval).toLocaleString("en-IN")),
        (document.querySelector("#totalInvested").textContent = Number(Math.abs(pvVal)).toLocaleString("en-IN")),
        (chartInvested = [pvVal]),
        (chartFvval = [parseInt(fvval)]);
}
function interrest(fvval, invest) {
    return (fvval - invest).toFixed(2);
}
function chartLine() {
    var years = [new Date().getFullYear()];
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
        ctx = document.getElementById("investment_chart");
    myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: years,
            datasets: [
                { label: "Invested Amount", data: chartInvested, pointBorderColor: "#ED1C24", backgroundColor: "#ED1C24", borderColor: "#ED1C24", borderWidth: 0, maxBarThickness: 50, minBarLength: 50 },
                { label: "Your Returns", data: chartFvval, pointBorderColor: "#004A8F", backgroundColor: "#004A8F", borderColor: "#004A8F", borderWidth: 0, maxBarThickness: 50, minBarLength: 50 },
            ],
        },
        options: {
            scales: {
                y: {
                    display: !0,
                    ticks: {
                        color: "#004A8F",
                        callback: function (value, index, values) {
                            return 1e7 <= value ? (value = (value / 1e7).toFixed(1) + " Cr") : 1e5 <= value ? (value = (value / 1e5).toFixed(1) + " Lac") : 1e3 <= value && (value = (value / 1e3).toFixed(1) + " K"), value;
                        },
                    },
                },
                x: { display: !1 },
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
                        title: function (context, data) {
                            return "";
                        },
                        displayTitle: !1,
                        label: function (context) {
                            var tooltipLabel;
                            return (tooltipLabel = null !== context.parsed.y ? new Intl.NumberFormat("en-IN", { style: "currency", currency: "INR" }).format(context.parsed.y) : tooltipLabel);
                        },
                    },
                },
            },
        },
        layout: { padding: { left: 50 } },
        plugins: [htmlLegendPlugin],
    });
}
$(document).ready(function () {
    RegularCalculate(), chartLine();
}),
    $(".form-control").keypress(function (e) {
        e = e.which || event.keyCode;
        if (String.fromCharCode(e).match(/[^((1\d)|(\d))(\.(\d\d)|\d){01}$]/g)) return !1;
    }),
    $(document).on("change", '[name="investmentTabs"]', function () {
        "regularInvestment" == $(this).val()
            ? ($("#existing_investment").hide(), $("#periodic_investment").show(), $(".oneTimeResult").css("opacity", "1"), $(".sublableMonthly").show())
            : "oneTimeInvestment" == $(this).val() && ($("#periodic_investment").hide(), $("#existing_investment").show(), $(".oneTimeResult").css("opacity", "0"), $(".sublableMonthly").hide());
    }),
    $(document).on("click", "#calculate", function () {
        0 == $(".error").length && "regularInvestment" == $('[name="investmentTabs"]:checked').val()
            ? (RegularCalculate(), $("html, body").animate({ scrollTop: $(".col-lg-5").offset().top - 50 }, 500))
            : 0 == $(".error").length && "oneTimeInvestment" == $('[name="investmentTabs"]:checked').val() && (onetimeCalculate(), $("html, body").animate({ scrollTop: $(".col-lg-5").offset().top - 50 }, 500)),
            0 !== $(".error").length && $("html, body").animate({ scrollTop: $(".error").offset().top - 50 }, 500),
            (myChart.data.datasets[0].data = chartInvested),
            (myChart.data.datasets[1].data = chartFvval),
            myChart.update();
    });
