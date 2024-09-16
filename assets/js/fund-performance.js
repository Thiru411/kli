var customer_type = $(".customer-type").attr("data-customer-type"),
    categoryGA = "";
categoryGA = "existing_customer" == customer_type ? "existing customers" : "new_customer" == customer_type ? "new customers" : "life_advisor" == customer_type ? "life advisor" : "new customers";
var GraphChart, gridBox01 = function() {
        $("ul.reportUL > li").removeAttr("style");
        for (var e, t = $("ul.reportUL").length, a = 0, r = 0; r < t; r++) {
            maxDivWid = parseInt($("ul.reportUL").eq(r).css("width")), divWid = parseInt($("ul.reportUL").eq(r).find("li").css("width"));
            var n = $("ul.reportUL").eq(r).find("li").length,
                i = Math.round(maxDivWid / divWid);
            Math.ceil(n / i);
            for (h = 0; h < n; h++) {
                for (var s = h; s < i + h; s++) a < (e = parseInt($("ul.reportUL").eq(r).find(" > li").eq(s).css("height"))) && (a = e);
                for (var o = h; o < i + h; o++) $("ul.reportUL").eq(r).find(" > li").eq(o).css("height", a);
                h += i - 1, a = 0
            }
        }
    },
    loadFaqsData = function() {
        var e = $("#pageNo").val(),
            t = $("#searchQues").val(),
            a = $("#pageLimit").val(),
            r = $("base").attr("href") + "fund-performance/investment-fund-faqs/load-more",
            n = { page: e, keyword: t };
        $(".noRecord").text("").css("display", "none"), $("#load-more-faqs").css("display", "none"), $(".innerLoader").css("display", "block"), 0 == parseInt(e) && $('script[type="application/ld+json"]').length >= 1 && $('script[type="application/ld+json"]').remove(), $.ajax({
            url: r,
            type: "post",
            contentType: "application/json; charset=UTF-8",
            data: JSON.stringify(n),
            dataType: "json",
            success: function(r) {
                var n = r,
                    s = new RegExp(t, "gi"),
                    o = "",
                    l = "",
                    c = n.nextDataCount;
                if (n.success) {
                    var d = n.data,
                        p = "",
                        h = "";
                    if (d.length) {
                        for ($("#pageNo").val(parseInt(e) + 1), i = 0; i < d.length; i++) o = d[i].title, l = t.length >= 1 ? d[i].description.replace(s, "<b>" + t + "</b>") : d[i].description, p = "faq|" + d[i].title.toLowerCase(), h += "<li onclick=\"dataLayer.push({'event': 'event invest fund faq', 'category': '" + categoryGA + "', 'action': 'investment fund faqs', 'label': '" + p + "'});\"><h3><span>" + o + '</span></h3><div class="accordDesc">' + l + "</div></li>", generateIndexingScripts("faqs", d[i]);
                        $("#faqs-div").append(h)
                    }
                    d.length < a || 0 == c ? (0 == e && 0 == d.length && $(".noRecord").text("").text(n.message).css("display", "block"), $("#load-more-faqs").css("display", "none")) : $("#load-more-faqs").css("display", "table"), $(".innerLoader").css("display", "none"), gridBox01()
                } else 0 == e && $(".noRecord").text("").text(n.message)
            }
        })
    },
    generateIndexingScripts = function(e, t) {
        if ("faqs" == e) {
            var a = t,
                r = document.createElement("script");
            r.type = "application/ld+json", r.id = a.entry_id;
            var n = "";
            n = a.schemadescription ? a.schemadescription : a.description, r.text = '{"@context": "http://schema.org","@type": "Question","text": "' + a.title + '","author": [{"@type": "Organization","name": "' + a.org_name + '","logo": [{"@type": "ImageObject","Url": "' + a.org_img_url + '","contentUrl": "' + a.org_content_url + '","name": "' + a.org_img_alt + '"}]}],"acceptedAnswer": {"text": "' + n + '","author": [{"@type": "Organization","name": "' + a.org_name + '","logo": [{"@type": "ImageObject","Url": "' + a.org_img_url + '","contentUrl": "' + a.org_content_url + '","name": "' + a.org_img_alt + '"}]}]}}', document.getElementsByTagName("head")[0].appendChild(r)
        }
    };

function load_latest_nav_data() {
    var e = $("base").attr("href") + "fund-performance/load-latest-nav",
        t = { tab: $("ul.fundTabUL li a.selected").attr("data-value") };
    $.ajax({
        url: e,
        type: "post",
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(t),
        dataType: "json",
        success: function(e) {
            var t = e,
                a = "";
            if (t.success) {
                var r = t.data;
                console.log(r);
                var n = r.fLastDate,
                    i = r.fNextDate,
                    s = r.fundRecords,
                    o = r.sLastDate,
                    l = r.sNextDate,
                    c = r.schemeRecords;
                if ($("#latest-nav-values").val(r), a += "<h2> Unit Values as on " + o + "</h2>", a += '<div class="navDetailWrapper"><table width="100%" border= "0" class="tableClass" cellpadding="0" cellspacing="0"><tr><th width="75%">Scheme Name</th> <th width="25%">Unit Price</th></tr>', c.length)
                    for (var d = 0; d < c.length; d++) a += "<tr><td>" + c[d].title + "(" + c[d].scheme_id + ")</td><td>" + parseFloat(c[d].nav_value).toFixed(4) + "</td></tr>";
                if (a += '<tr> <td colspan = "2" >Unit Values will be next updated on ' + l + "</td></tr></table></div>", a += "<h2 style='display:none'> Policy Account Value as on " + n + "</h2>", a += '<div class="navDetailWrapper" style="display:none"><table width="100%" border= "0" class="tableClass" cellpadding="0" cellspacing="0"><tr><th width="65%">Fund Name</th><th width="35%">Policy Account Value</th></tr>', s.length)
                    for (d = 0; d < s.length; d++) a += "<tr><td>" + s[d].title + "(" + s[d].scheme_id + ")</td><td>" + parseFloat(s[d].nav_value).toFixed(2) + "</td></tr>";
                a += '<tr> <td colspan = "2"> <p>Policy Account Value will be next updated on ' + i + " </p></td></tr></table></div>"
            }
            $("#latest_NAV_div").html("").html(a)
        }
    })
}

function load_schemes_data() {
    var e = $("base").attr("href") + "fund-performance/load-schemes",
        t = { tab: $("ul.fundTabUL li a.selected").attr("data-value") };
    $.ajax({
        url: e,
        type: "post",
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(t),
        dataType: "json",
        success: function(e) {
            var t = e,
                a = "";
            if (t.success) {
                var r = t.data;
                if (r.length)
                    for (var n = 0; n < r.length; n++) a += '<option value="' + r[n].url_title + '">' + r[n].title + " (" + r[n].scheme_id + ") </option>"
            }
            $("#schemes-dd").html("").html(a)
        }
    })
}
$(document).ready(function() {
    function a() {
        var e = $(".midWrapper").width(),
            t = window.innerWidth;
        return (e = 100 == e ? t : e >= 1150 ? 1150 : e) - (parseInt($(".midWrapper").css("padding-left")) + parseInt($(".midWrapper").css("padding-right"))) - (parseInt($(".navDetailWrapper").css("padding-left")) + parseInt($(".navDetailWrapper").css("padding-right")))
    }
    $("#years-dd").change(function() {
        var e = $(this).val(),
            t = $("#current_URL").val(),
            a = "year|" + e;
        dataLayer.push({ event: "event fund year", category: categoryGA, action: "fund update", label: a }), window.location.href = t + e
    }), $(".selectedvalue").text($("#selected-year").val()), $("#startDate, #endDate").datepicker({ dateFormat: "dd-mm-yy", maxDate: 0 }).on("change", function(e) {
        ! function(e) {
            var t;
            try { t = $.datepicker.parseDate(dateFormat, e.value) } catch (e) { t = null }
            console.log(t)
        }(this)
    }), $("#submit-graph").click(function() {
        var e = $.trim($("#schemes-dd").val()),
            t = $.trim($("#startDate").val()),
            a = $.trim($("#endDate").val()),
            r = $.trim($("#method-url").val());
        if ($("#graph-from-error").text("").hide(), "" == t) $("#graph-from-error").text("Please pick from date.").show();
        else if ("" == a) $("#graph-from-error").text("Please pick to date.").show();
        else if ("" == e) $("#graph-from-error").text("Please select scheme or fund.").show();
        else {
            var n = "go|" + e.replace("-", " ");
            dataLayer.push({ event: "event nav go", category: categoryGA, action: "nav performance", label: n }), window.location.href = r + e + "/" + t + "/" + a
        }
    }), 1 == $("section").find("div#graphicalView").length ? (GraphChart = new Highcharts.Chart({ reflow: !1, chart: { renderTo: "graphicalView" }, title: { text: "", style: { display: "none" } }, lang: { noData: "No data to display" }, exporting: { enabled: !1 }, credits: { enabled: !1 }, xAxis: [{ categories: e, crosshair: !0 }], yAxis: [{ title: { text: "NAV Values", style: { color: "#838383", fontWeight: "bold" }, margin: 10 }, labels: { format: "{value:.3f}", style: { color: "#052F61" } } }], tooltip: { shared: !0 }, legend: { layout: "horizontal", align: "center", verticalAlign: "bottom", backgroundColor: Highcharts.theme && Highcharts.theme.legendBackgroundColor || "#FFFFFF" }, plotOptions: { column: { allowPointSelect: !0, animation: !1 }, spline: { allowPointSelect: !0, animation: !1 } }, series: [{ name: "NAV Values", data: t, type: "column", color: "#052F61" }] }), $(window).load(function() {
        var e, t = 400;
        t = (e = a()) >= 450 ? t : 300, GraphChart.setSize(e, t, !0)
    }), $(window).resize(function() {
        var e, t = 400;
        t = (e = a()) >= 450 ? t : 300, GraphChart.setSize(e, t, !0)
    })) : $(".viewWrap").show(), 1 == $("section").find("ul#faqs-div").length && loadFaqsData(), $("#load-more-faqs").click(function() { loadFaqsData() }), $("#search-question-btn").click(function(e) { var t = $.trim($("#search-question").val()); return e.preventDefault(), "" == t || "Search by your question" == t ? $("#searchQues").val("") : ($("#searchQues").val("").val(t), gaSearchTermTracking("event search", "search", $("#search-question").attr("data-action"), t.toLowerCase())), $("#pageNo").val(0), $("#faqs-div li").remove(), loadFaqsData(), !1 }), $("#search-question").keyup(function(e) { 13 == e.keyCode && $("#search-question-btn").click() }), $("ul.accordUL li h3").on("click", function() {
        $(this).addClass("active").parent("li").siblings("li").find("h3").removeClass("active"), $(this).parent("li").find(".accordDesc").slideDown().parents("li").siblings("li").find(".accordDesc").slideUp();
        var e = parseInt($("header").height() + $(".second_navWrap").height()),
            t = $(this);
        t.parent().index() > 0 && setTimeout(function() {
            var a = parseInt(t.offset().top) - e;
            $("html,body").animate({ scrollTop: a }, 500)
        }, 350)
    }).eq(0).click()
}), $(document).ready(function() {}), $(window).on("load", function() {
    var e = $("#slect-tap-no").val();
    e = "" != e ? parseInt(e) : 3, $("ul.fundTabUL li a").click(function() {
        var e = $(this).parent().index(),
            t = $(this).attr("data-value");
        ($(this).addClass("selected").parent("li").siblings("li").find("a").removeClass("selected"), $(".navWrapper .navWrapDetails").eq(e).fadeIn().siblings(".navWrapDetails").hide(), "latest" == t) ? ($("#slect-tap-no").val(0), "" == $("#latest-nav-values").val() && ($(".innerLoader").css("display", "block"), load_latest_nav_data())) : "previous" == t ? ($("#slect-tap-no").val(1), $("#schemes-dd > option").length <= 0 && load_schemes_data()) : $("#slect-tap-no").val()
    }).eq(e).click(), "previous" == $("ul.fundTabUL li a.selected").attr("data-value") && $(window).scrollTop($("#mainNAVWrapper").offset().top - 50)
}), $(window).bind("beforeunload", function() { 1 == $("section").find("#pageNo").length && $("#pageNo").val(0) });