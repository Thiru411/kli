if ($("#years-dd").change(function() {
        var a = $(this).val();
        window.location.href = base_url + "how-do-i/fund-update/" + a
    }), "pmpFAQ" == form_flag) var resRange = 5;
else if ("dafProposalForm" == form_flag) resRange = 5;

function bindRes(a, e, r) {
    var s = $("#payMyPremiumFaqs");
    s.empty();
    var o = "",
        n = "";
    if (r) switch (r.toLowerCase()) {
        case "pay my premium":
            n = "event pay premium faq";
            break;
        case "file a claim":
            n = "event claim faq";
            break;
        default:
            n = ""
    }
    for (var i = 0; i < a.length; i++) {
        if (i > resRange) o = " class='deactive_li'";
        var x1 = i + 1;
        s.append("<li " + o + "><h3 class='ga_track' data-event='" + n + "' data-action='" + r.toLowerCase() + "' data-label='faq|" + a[i].faqQuestion + "'><span class='pay-num'>" + x1 + "</span><span>" + a[i].faqQuestion + "</span></h3><div class='accordDesc'>" + a[i].faqAnswer + "</div></li>")
    }
    gridBox01()
}

function bindResApplicationData(a, e, r) {
    var s = $("#daf_proposalForm");
    s.empty();
    var o = "";
    if (0 == a.length) $("#no_plans").empty(""), $("#no_plans").append("No Plans Available");
    else {
        $("#no_plans").empty(""), $("#no_plans").append("Child Plans");
        for (var n = 0; n < a.length; n++) {
            if (n > resRange) o = " class='deactive_li'";
            var i = a[n].formPDF.replace("{filedir_17}", "assets/images/uploads/how_do_i/");
            s.append("<li " + o + "><div class='reportBox'><h3 class='ga_track' data-event='event download forms' data-action='" + r.toLowerCase() + "' data-label='download|" + a[n].formTitle.toLowerCase() + "'>" + a[n].formTitle + "</h3><a data-event='event download forms' data-action='" + r.toLowerCase() + "' data-label='download|" + a[n].formTitle.toLowerCase() + "'  target='_blank' href=" + base_url + i + " class='pdfIcon ga_track'>Download</a></div></li>")
        }
    }
    gridBox01()
}
bindRes(jsonDataFaqs, gaCat, formType), bindResApplicationData(jsonDataAppForm, gaCat, formType), $("#load_more").click(function() { $("li").hasClass("deactive_li") && $("li").removeClass("deactive_li"), $("#load_more").addClass("deactive_li"), gridBox01() }), $(".deactive_li").length <= 0 && $("#load_more").addClass("deactive_li");
var resArray1 = [],
    resArray2 = [],
    $yearDropDown1 = $("#fundupdateYear");

function updateRes(a) {
    var e = $("#annualFundRes");
    e.empty();
    for (var r = "", s = 0; s < a.length; s++) {
        if (s > resRange) r = " class='deactive_li'";
        var o = a[s].smallImage,
            n = a[s].downloadPDF.replace("{filedir_17}", "assets/images/uploads/how_do_i/"),
            i = o.replace("{filedir_17}", "assets/images/uploads/how_do_i/");
        e.append("<div class='headDesc ' " + r + "><h2>Fund performance " + a[s].fundPerformanceYear + "</h2></div><ul class='reportUL reportUL_img fund100'><li><div class='reportBox'><div class='img'><img src='" + base_url + i + "' /></div><div class='detail'><h3>Annual fund performance <span>" + a[s].fundPerformanceYear + "</span></h3><p>" + a[s].fundDescription + "</p><a href='" + base_url + n + "' target='_blank' class='pdfIcon'>Download</a></div></div></li></ul>")
    }
    gridBox01()
}

function updateMonthlyRes(a) {
    var e = $("#fundPerformanceMonthly");
    e.empty();
    for (var r = 0; r < a.length; r++) {
        if (r > resRange);
        var s = a[r].smallImage,
            o = a[r].downloadPDF.replace("{filedir_17}", "assets/images/uploads/how_do_i/"),
            n = s.replace("{filedir_17}", "assets/images/uploads/how_do_i/");
        e.append("<li><div class='reportBox'><img src='" + base_url + n + "'><div class='detail'><div class='vCenterWrap'><h3>" + a[r].fundMonthYear + "</h3><a href='" + base_url + o + "'class='pdfIcon'>Download</a></div></div></div></li>")
    }
    gridBox01()
}

function gridBox01() {
    $("ul.reportUL > li").removeAttr("style");
    for (var a, e = $("ul.reportUL").length, r = 0, s = 0; s < e; s++) {
        maxDivWid = parseInt($("ul.reportUL").eq(s).css("width")), divWid = parseInt($("ul.reportUL").eq(s).find("li").css("width"));
        var o = $("ul.reportUL").eq(s).find("li").length,
            n = Math.round(maxDivWid / divWid);
        Math.ceil(o / n);
        for (h = 0; h < o; h++) {
            for (var i = h; i < n + h; i++) r < (a = parseInt($("ul.reportUL").eq(s).find(" > li").eq(i).css("height"))) && (r = a);
            for (var l = h; l < n + h; l++) $("ul.reportUL").eq(s).find(" > li").eq(l).css("height", r);
            h += n - 1, r = 0
        }
    }
}
updateRes(annualFundPer), $yearDropDown1.change(function() { var a = this.value; "" != a ? (resArray1 = jQuery.grep(annualFundPer, function(e, r) { return e.fundPerformanceYear == a }), resArray2 = jQuery.grep(fundPerformance, function(e, r) { return e.fundPerformanceYear == a }), updateRes(resArray1), updateMonthlyRes(resArray2)) : (updateRes(annualFundPer), updateMonthlyRes(fundPerformance)) }), updateMonthlyRes(fundPerformance);