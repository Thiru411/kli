if ($("#base_url_hdn").length) var base_url = $("#base_url_hdn").val();
var resArray = [];
if (cg_json) {
    var firstvalue = $("#publicDisDD option:eq(1)").val();
    cg_updateTable("" != firstvalue ? resArray = jQuery.grep(cg_json, function (e, a) {
        return e.financial_year == firstvalue
    }) : cg_json, 1, gaCat)
}
$("#publicDisDD").on("change", function () {
    var e = this.value;
    cg_updateTable("" != e ? resArray = jQuery.grep(cg_json, function (a, r) {
        return a.financial_year == e
    }) : cg_json, 1, gaCat), gridBox01()
});
var resArray1 = [];
cg_json1 && cg_updateTable(cg_json1, 2, gaCat), $("#publicDisAnnualReportDD").on("change", function () {
    var e = this.value;
    cg_updateTable("" != e ? resArray1 = jQuery.grep(cg_json1, function (a, r) {
        return a.annual_report_year == e
    }) : cg_json1, 2, gaCat)
});
var resArray3 = [];
cg_json3 && cg_updateTable(cg_json3, 5, gaCat), $("#publicDisAnnualReturnDD").on("change", function () {
    var e = this.value;
    cg_updateTable("" != e ? resArray3 = jQuery.grep(cg_json3, function (a, r) {
        return a.annual_return_year == e
    }) : cg_json3, 5, gaCat)
});
var resArray2 = [];

function cg_updateTable(e, a, r) {
    if (1 == a)
        if ((p = $("#publicDisData")).empty(), e.length > 0)
            for (var n = 0; n < e.length && !(n >= e.length); n++) {
                var t = (g = e[n].public_disclosure_pdf).replace("{filedir_9}", "assets/images/uploads/why_kotak/"),
                    l = e[n].public_disclosure_title;
                l.length > 30 ? pubDisTtl = l.substring(0, 30) + "..." : pubDisTtl = l;
                var s = g.replace("{filedir_9}", "");
                p.append("<li><div class='reportBox'><h3>" + pubDisTtl + "</h3><a data-event='event downloads' data-action='corporate governance' data-label='download|" + s + "' target='_blank' href=" + base_url + t + " class='pdfIcon ga_track'>Download</a></div></li>")
            } else p.append("<span class='noRecordDiv'>Sorry.</br>Currently, we do not have any reports for your selection.<br/> Kindly change the year and try again.</span>");
        else if (2 == a) {
        if ((p = $("#publicDisAnnualReport")).empty(), e.length > 0)
            for (n = 0; n < e.length && !(n >= e.length); n++) {
                t = (g = e[n].annual_report_pdfurl).replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                var o = e[n].annual_report_img.replace("{filedir_9}", "assets/images/uploads/why_kotak/"),
                    i = g.replace("{filedir_9}", "");
                return p.append("<div class='lftCnt'><img src=" + base_url + o + "></div><div class='rgtCnt'><h3>" + e[n].annual_report_year + "</h3><br/><a data-event='event downloads' data-action='corporate governance' data-label='download|" + i + "' target='_blank' href=" + base_url + t + " class='pdfIcon ga_track'>Download</a></div>"), !1
            } else p.append("<span class='noRecordDiv'>Sorry.</br>Currently, we do not have Annual Reports for the year selected by you.<br/> Kindly change the year and try again.</span>")
    } else if (5 == a) {
        if ((p = $("#publicDisAnnualReturn")).empty(), e.length > 0)
            for (n = 0; n < e.length && !(n >= e.length); n++) {
                t = (g = e[n].annual_return_pdfurl).replace("{filedir_9}", "assets/images/uploads/why_kotak/"), o = e[n].annual_return_img.replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                var d = g.replace("{filedir_9}", "");
                p.append("<div class='col-md-4'><div class='lftCnt newreturn'><img src=" + base_url + o + " ></div><div class='rgtCnt'><h3>" + e[n].annual_return_year + "</h3><a data-event='event downloads' data-action='corporate governance' data-label='download|" + d + "' target='_blank' href=" + base_url + t + " class='pdfIcon ga_track nopdf'>Download</a></div>"), !1
            } else p.append("<span class='noRecordDiv'>Sorry.</br>Currently, we do not have Annual Returns for the year selected by you.<br/> Kindly change the year and try again.</span>")
    } else if (3 == a) {
        if ((p = $("#publicDisNewsEvents")).empty(), e.length > 0)
            for (n = 0; n < e.length && !(n >= e.length); n++) {
                t = (g = e[n].ne_file_url).replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                var c = g.replace("{filedir_9}", "");
                p.append("<li><div class='reportBox'><h3>" + e[n].ne_title + "</h3><div class='dateNotice'>" + e[n].ne_date + "</div><a data-event='event downloads' data-action='corporate governance' data-label='download|news and events|" + c + "' target='_blank' href=" + base_url + t + " class='ga_track'>Download</a></div></li>")
            } else p.append("<span class='noRecordDiv'>Sorry.</br>Currently, we do not have any records relevant to your selection.<br/> Kindly change the selection and try again.</span>")
    } else if (4 == a) {
        var p;
        if ((p = $("#customerBulltinRes")).empty(), e.length > 0)
            for (n = 0; n < e.length && !(n >= e.length); n++) {
                if (n > 5) var u = " class='deactive_li'";
                t = (g = e[n].pdfURL).replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                var g, _ = moment.unix(e[n].pdfDate).format("DD/MM/YYYY");
                p.append("<li " + u + "><div class='reportBox'><h3>" + e[n].pdfTitle + "</h3><p>" + _ + "</p><a target='_blank' href=" + base_url + t + " class='pdfIcon'>Download</a></div></li>")
            } else p.append("<span style='color:red;font-size:22px;float:left;width:100%;text-align:center;'>No Records Found</span>")
    }
    gridBox01()
}
cg_json2 && cg_updateTable(cg_json2, 3, gaCat), $("#publicDisNewsEventsDD").on("change", function () {
    var e = this.value;
    cg_updateTable("" != e ? resArray2 = jQuery.grep(cg_json2, function (a, r) {
        return a.newsEventsyear == e
    }) : cg_json2, 3, gaCat)
});
var resArr = [];

function gridBox01() {
    $("ul.reportUL > li").removeAttr("style");
    for (var e, a = $("ul.reportUL").length, r = 0, n = 0; n < a; n++) {
        maxDivWid = parseInt($("ul.reportUL").eq(n).css("width")), divWid = parseInt($("ul.reportUL").eq(n).find("li").css("width"));
        var t = $("ul.reportUL").eq(n).find("li").length,
            l = Math.round(maxDivWid / divWid);
        Math.ceil(t / l);
        for (h = 0; h < t; h++) {
            for (var s = h; s < l + h; s++) r < (e = parseInt($("ul.reportUL").eq(n).find(" > li").eq(s).css("height"))) && (r = e);
            for (var o = h; o < l + h; o++) $("ul.reportUL").eq(n).find(" > li").eq(o).css("height", r);
            h += l - 1, r = 0
        }
    }
}

function goBack() {
    window.history.back()
}

function irdaiResData(e) {
    var a = $("#handbookRes");
    a.empty();
    for (var r = "", n = 0; n < e.length && !(n >= e.length); n++) {
        if (n > 5) r = " class='deactive_li'";
        var t = e[n].pdfURL.replace("{filedir_9}", "assets/images/uploads/why_kotak/"),
            l = "dataLayer.push({'event':'event grievance download', 'category':'" + gaCat + "', 'action':'grievance redressal','label':'" + e[n].pdfTitle + "'});";
        a.append("<li " + r + "><div class='reportBox'><h3>" + e[n].pdfTitle + "</h3><a onClick='" + l + "' target='_blank' href=" + base_url + t + " class='pdfIcon'>Download</a></div></div></li>")
    }
    gridBox01()
}
cb_json && cg_updateTable(cb_json, 4, gaCat), $("#customerBulletinYearDD").on("change", function () {
    var e = this.value;
    cg_updateTable("" != e ? resArr = jQuery.grep(cb_json, function (a, r) {
        return a.pdfyear == e
    }) : cb_json, 4, gaCat), gridBox01()
}), $("#load_more_handbookRes, #load_more_cb").click(function () {
    $("li").hasClass("deactive_li") && $("li").removeClass("deactive_li"), $("#load_more_handbookRes, #load_more_cb").addClass("deactive_li"), gridBox01()
}), irdaiResData(irdai_json);
