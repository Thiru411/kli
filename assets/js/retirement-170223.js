function switchYearMonthly() {
    $("#monthlySavings").is(":checked")
        ? ($("#savingsPerYearOutput").hide(), $("#savingsPerMonthlyOutput").show(), $("#monthYear").text("Monthly"))
        : ($("#savingsPerYearOutput").show(), $("#savingsPerMonthlyOutput").hide(), $("#monthYear").text("Yearly"));
}
function adComma() {
    $(".addComma").keyup(function () {
        var newvalue = $(this).val().replace(/,/g, ""),
            newvalue = Number(newvalue).toLocaleString("en-IN");
        $(this).val(newvalue);
    }),
        $(".addCommaDefault").each(function () {
            var x = $(this).text(),
                lastThree = (x = x.toString()).substring(x.length - 3),
                x = x.substring(0, x.length - 3),
                x = ("" != x && (lastThree = "," + lastThree), x.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree);
            $(this).text(x);
        });
}
function retirementAgeErrorr() {
    var age = parseInt($("#currentAge").val()),
        desiredRetireAge = parseInt($("#retirementAge").val()),
        lifeExpectancy = parseInt($("#lifeExpectancy").val());
    lifeExpectancy < desiredRetireAge ? $("#retirementAge").parents(".form_group").addClass("error") : $("#retirementAge").parents(".form_group").removeClass("error"),
        ("" != age && desiredRetireAge < age) || lifeExpectancy < age || age == desiredRetireAge || age <= 18
            ? $("#currentAge").parents(".form_group").addClass("error")
            : (console.log("abc"), $("#currentAge").parents(".form_group").removeClass("error"));
}
function retirementCalculator() {
    var age = $("#currentAge").val(),
        currentAnnualExpenses = $("#monthlyExpensesInput").val().replace(/,/g, ""),
        desiredRetireAge = (console.log(currentAnnualExpenses), $("#retirementAge").val()),
        lifeExpectancy = $("#lifeExpectancy").val(),
        expectedInflationRate = $("#inflationRateInput").val() / 100,
        expectedReturns = $("#expectadeReturnInput").val() / 100,
        expectedExpenses = $("#retirementExpensesInput").val() / 100,
        lifeExpectancy = lifeExpectancy - desiredRetireAge,
        desiredRetireAge = desiredRetireAge - age,
        age = -formulajs.FV(expectedInflationRate, desiredRetireAge, 0, 12 * currentAnnualExpenses),
        currentAnnualExpenses = age * expectedExpenses;
    console.log(age);
    expectedExpenses = -formulajs.PV((1 + expectedReturns) / (1 + expectedInflationRate) - 1, lifeExpectancy, currentAnnualExpenses);
    $("#requiredRetirementFundOutput").text(Math.round(expectedExpenses));
    (requireSavingsPerYear = -Math.round(formulajs.PMT(expectedReturns, desiredRetireAge, 0, expectedExpenses))),
        $("#savingsPerYearOutput").text(requireSavingsPerYear),
        (requireSavingsPerMonth = -Math.round(formulajs.PMT(expectedReturns / 12, 12 * desiredRetireAge, 0, expectedExpenses))),
        $("#savingsPerMonthlyOutput").text(requireSavingsPerMonth),
        $(".interestRateOutput").text($("#expectedInflationRate").val()),
        adComma();
}
$(document).ready(function () {
    retirementCalculator();
}),
    $(".form-control").keypress(function (e) {
        e = e.which || event.keyCode;
        if (String.fromCharCode(e).match(/[^((1\d)|(\d))(\.(\d\d)|\d){01}$]/g)) return !1;
    }),
    $(document).on("click", "#calculate", function () {
        retirementAgeErrorr(),
            $(this).parent().find("input").trigger("blur"),
            (errorDiv = $(".error")).length ? $("html, body").animate({ scrollTop: $(".error").offset().top - 50 }, 500) : (retirementCalculator(), $("html, body").animate({ scrollTop: $(".col-lg-5").offset().top - 50 }, 500));
    }),
    $('[name="required-savings"]').change(function () {
        switchYearMonthly();
    }),
    $(document).on("blur", "#retirementAge, #lifeExpectancy, #currentAge", function () {
        retirementAgeErrorr();
    });
