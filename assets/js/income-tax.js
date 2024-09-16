var incomeAge, incomeFY, incomeGender, salaryIncome, exemption, aggrSBInterest, profesionalTax, otherIncome, rentRecieved, deduction80C, deduction80CCD, npsContriEmployee, npsContriEmployer, deduction80D, deduction80TTA, npsContriEmployerNew, winWidth = $(window).width();

function modal() {
    var elements = $(".modal-overlay, .modal");
    $(".modal-toggle").click(function () {
        elements.addClass("active"), $("body").addClass("noScroll")
    }), $(".close-modal").click(function () {
        elements.removeClass("active"), $("body").removeClass("noScroll")
    })
}

function taxCalc() {
    var incomeUnderHead = salaryIncome - exemption - 5e4 - profesionalTax,
        homeLoanInterest = parseInt($("#homeLoanInterestInput").val().replace(/,/g, "")),
        housePropIncome = rentRecieved - homeLoanInterest,
        incomeUnderHead = incomeUnderHead + housePropIncome + otherIncome + aggrSBInterest,
        grossTotalIncomeNew = salaryIncome - profesionalTax + aggrSBInterest + otherIncome,
        deduction8c8cc = (console.log(), deduction80C + deduction80CCD + npsContriEmployer),
        homeLoanInterest = homeLoanInterest + (deduction8c8cc = 15e4 < deduction8c8cc ? 15e4 : deduction8c8cc) + (npsContriEmployee = 5e4 < npsContriEmployee ? 5e4 : npsContriEmployee) + (deduction80TTA = housePropIncome < deduction80TTA && 1 <= housePropIncome ? housePropIncome : deduction80TTA) + (deduction80D = 5e4 < deduction80D ? 5e4 : deduction80D),
        deduction8c8cc = npsContriEmployerNew,
        housePropIncome = incomeUnderHead - homeLoanInterest,
        totalTaxableIncomeNew = grossTotalIncomeNew - deduction8c8cc,
        taxSlab = 0,
        taxSlabNew = 0,
        netTaxPayable = 0,
        netTaxPayableNew = 0,
        eduCess = (25e4 < (housePropIncome = housePropIncome < 25e4 ? 0 : housePropIncome) && housePropIncome < 5e5 ? netTaxPayable = taxSlab = .05 * (housePropIncome - 25e4) : 5e5 < housePropIncome && (netTaxPayable = (taxSlab = .2 * (housePropIncome - 5e5)) + 12500), 5e5 < totalTaxableIncomeNew && totalTaxableIncomeNew < 75e4 ? netTaxPayableNew = taxSlabNew = .05 * (totalTaxableIncomeNew - 25e4) : 75e4 < totalTaxableIncomeNew && totalTaxableIncomeNew < 1e6 ? netTaxPayableNew = (taxSlabNew = .1 * (totalTaxableIncomeNew - 5e5)) + 12500 : 1e6 < totalTaxableIncomeNew && totalTaxableIncomeNew < 125e4 ? netTaxPayableNew = (taxSlabNew = .15 * (totalTaxableIncomeNew - 75e4)) + 12500 + 25e3 : 125e4 < totalTaxableIncomeNew && totalTaxableIncomeNew < 15e5 ? netTaxPayableNew = (taxSlabNew = .2 * (totalTaxableIncomeNew - 1e6)) + 12500 + 25e3 + 37500 : 15e5 < totalTaxableIncomeNew && (netTaxPayableNew = (taxSlabNew = .25 * (totalTaxableIncomeNew - 125e4)) + 12500 + 25e3 + 37500 + 5e4), .04 * netTaxPayable),
        eduCessNew = (console.log(netTaxPayableNew), .04 * netTaxPayableNew),
        eduCess = netTaxPayable + eduCess,
        netTaxPayableNew = netTaxPayableNew + eduCessNew,
        housePropIncome = ($("#totalTaxableIncome").text(housePropIncome.toLocaleString("en-IN")), $("#totalGrossIncome").text(incomeUnderHead.toLocaleString("en-IN")), $("#totalDeduction").text(homeLoanInterest.toLocaleString("en-IN")), $("#taxSlab").text(taxSlab.toLocaleString("en-IN")), $("#netTaxPayable").text(eduCess.toLocaleString("en-IN")), $("#totalPayableTax").text(eduCess.toLocaleString("en-IN")), $("#totalTaxableIncomeNew").text(totalTaxableIncomeNew.toLocaleString("en-IN")), $("#totalGrossIncomeNew").text(grossTotalIncomeNew.toLocaleString("en-IN")), $("#totalDeductionNew").text(deduction8c8cc.toLocaleString("en-IN")), $("#taxSlabNew").text(taxSlabNew.toLocaleString("en-IN")), $("#netTaxPayableNew").text(netTaxPayableNew.toLocaleString("en-IN")), $("#totalPayableTaxNew").text(netTaxPayableNew.toLocaleString("en-IN")), $("#incomeFromSalary").text(salaryIncome.toLocaleString("en-IN")), $("#incomeFromSalaryNew").text(salaryIncome.toLocaleString("en-IN")), $("#exemptions").text(exemption.toLocaleString("en-IN")), $("#exemptionsNew").text(exemption.toLocaleString("en-IN")), $("#incomeOther").text(otherIncome.toLocaleString("en-IN")), $("#incomeOtherNew").text(otherIncome.toLocaleString("en-IN")), salaryIncome - exemption + otherIncome);
    $("#grossTotalIncome").text(housePropIncome.toLocaleString("en-IN")), $("#profTax").text(profesionalTax.toLocaleString("en-IN")), $("#profTaxNew").text(profesionalTax.toLocaleString("en-IN")), $("#standardDeduction").text(5e4.toLocaleString("en-IN")), $("#totalDeductions").text(deduction8c8cc.toLocaleString("en-IN")), $("#netTaxableAmount").text(totalTaxableIncomeNew.toLocaleString("en-IN")), $("#taxTaxableAmount").text(netTaxPayable.toLocaleString("en-IN")), $("#surcharge").text(0), $("#educationCess").text(eduCessNew.toLocaleString("en-IN")), $("#totalTax").text(netTaxPayableNew.toLocaleString("en-IN"))
}
$(document).ready(function () {
    modal(), 767 < winWidth ? $(".tipso").tipso({
        background: "#FDFCFC",
        color: "#1B1C31",
        offsetX: 60,
        showArrow: !0,
        speed: 100
    }) : $(".tipso").tipso({
        background: "#FDFCFC",
        color: "#1B1C31",
        width: 150,
        showArrow: !0,
        offsetX: 0,
        speed: 200
    }), $(".form-control").keypress(function (e) {
        e = e.which || event.keyCode;
        if (String.fromCharCode(e).match(/[^0-9]/g)) return !1
    })
}), $(document).on("click", "#calculate", function () {
    taxCalc(), 0 == $(".error").length ? (compountInterest(), $("html, body").animate({
        scrollTop: $(".col-lg-5").offset().top - 50
    }, 500)) : $("html, body").animate({
        scrollTop: $(".error").offset().top - 50
    }, 500)
}), $(document).on("click", "#proceedIncome", function () {
    salaryIncome = parseInt($("#annualIncomeInput").val().replace(/,/g, "")), exemption = parseInt($("#allowancesInput").val().replace(/,/g, "")), aggrSBInterest = parseInt($("#bankInterestInput").val().replace(/,/g, "")), profesionalTax = parseInt($("#profTaxInput").val().replace(/,/g, "")), otherIncome = parseInt($("#incomeOtherInput").val().replace(/,/g, "")), rentRecieved = "letOut" == $('input[name = "houseProperty"]:checked').val() ? parseInt($("#annualRentalInput").val().replace(/,/g, "")) : 0, $(".step2").hide(), $(".step3").fadeIn(), $(".tax-li:first-child").removeClass("active").addClass("visited"), $(".tax-li:nth-child(2)").addClass("active")
}), $(document).on("click", "#proceedDeduction", function () {
    deduction80C = parseInt($("#deduction80CInput").val().replace(/,/g, "")), deduction80CCD = parseInt($("#deduction80CCDInput").val().replace(/,/g, "")), npsContriEmployee = parseInt($("#npsContriEmployeeInput").val().replace(/,/g, "")), npsContriEmployer = parseInt($("#npsContriEmployerInput").val().replace(/,/g, "")), deduction80D = parseInt($("#deduction80DInput").val().replace(/,/g, "")), deduction80TTA = 5e3, npsContriEmployerNew = parseInt($("#npsContriEmployerInput").val().replace(/,/g, "")), $(".step3").hide(), $(".step4").fadeIn(), $(".tax-li:nth-child(2)").removeClass("active").addClass("visited"), $(".tax-li:nth-child(3)").addClass("active"), taxCalc()
}), $(document).on("click", "#backDeduction", function () {
    $(".step3").hide(), $(".step2").fadeIn(), $(".tax-li:nth-child(2)").removeClass("active").removeClass("visited"), $(".tax-li:first-child").addClass("active").removeClass("visited")
}),$(document).on("click", "#backDeduction1", function () {
    $(".step4").hide(), $(".step2").fadeIn(), $(".tax-li:nth-child(3)").removeClass("active").removeClass("visited"),$(".tax-li:nth-child(2)").removeClass("active").removeClass("visited"), $(".tax-li:first-child").addClass("active").removeClass("visited")
}),  $(document).on("click", "#backSummary", function () {
    $(".step4").hide(), $(".step3").fadeIn(), $(".tax-li:nth-child(4)").removeClass("active").removeClass("visited"), $(".tax-li:nth-child(3)").addClass("active").removeClass("visited")
}), $(document).on("change", '[name = "houseProperty"]', function () {
    "letOut" == $(this).val() ? $("#annualRentalWrap").show() : $("#annualRentalWrap").hide()
});
