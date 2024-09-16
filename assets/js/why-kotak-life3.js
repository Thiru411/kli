function isNumber(e) { var t = (e = e || window.event).which ? e.which : e.keyCode; return !(t > 31) || !(t < 48) && !(t > 57) }

function contactFormGATrigger(e, t, o) {
    if (dataLayer) {
        var a = "";
        if (o) switch (t) {
            case "generalFeedback":
                a = "general feedback";
                break;
            case "fullName":
                a = "full name";
                break;
            case "emailID":
                a = "email id";
                break;
            case "contactNumber":
                a = "contact number";
                break;
            case "feedback":
                a = "feedback";
                break;
            case "ndncReg":
                a = "terms and conditions";
                break;
            default:
                a = ""
        }
        a || (a = t), dataLayer.push({ event: "event contact form", category: "form|contact us form", action: e, label: a })
    }
}
$(document).ready(function() {
    var e, t = "";
    $(".fb").click(function() {
        var e = $(this).attr("data-title"),
            t = $(this).attr("data-image"),
            o = $(this).attr("data-desc"),
            a = $(location).attr("href");
        return window.open("https://www.facebook.com/dialog/feed?app_id=253017248432355&display=popup&name=" + encodeURIComponent(e) + "&caption=" + encodeURIComponent(e) + "&description=" + encodeURIComponent(o) + "&link=" + encodeURIComponent(a) + "&picture=" + t, "", "width=650,height=400,top=200,left=250"), !1
    }), $(".twt").click(function() {
        var e = $(location).attr("href"),
            t = $(this).attr("data-desc");
        return window.open("https://twitter.com/share?url=" + escape(e) + "&text=" + t, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600"), !1
    });
    var o = [];

    function a() {
        for (var e = 0; e < o.length; e++) o[e].setMap(null);
        o.length = 0
    }
    var r = "assets/images/";

    function n(e, t) {
        var o = new google.maps.InfoWindow({ content: t });
        google.maps.event.addListener(e, "click", function() { o.open(map, e) })
    }
    if (window.onload = function() {
            e = new google.maps.Geocoder;
            var t = { zoomControl: !0, zoomControlOptions: { position: google.maps.ControlPosition.LEFT_CENTER }, streetViewControl: !0, streetViewControlOptions: { position: google.maps.ControlPosition.LEFT_TOP }, center: new google.maps.LatLng(19.1084234, 72.99999999), zoom: 10, mapTypeId: google.maps.MapTypeId.ROADMAP, scrollwheel: !1 },
                n = new google.maps.Map(document.getElementById("map_canvas"), t),
                s = new google.maps.InfoWindow,
                c = [],
                l = new google.maps.LatLngBounds;

            function p() {
                var t = $("#pincodeTxt").val();
                !0 == /^\d+$/.test(t) ? (dataLayer.push({ event: "event branch locator", category: "branch locator", action: t, label: t }), $(".pinErr").css("display", "none"), $(".noBrances").css("display", "none"), a(), $.ajax({
                    url: base_url + "bind-result-pincode/pin",
                    type: "POST",
                    dataType: "JSON",
                    data: "pincode=" + t,
                    success: function(a) {
                        if ("" != a)
                            for (i = 0; i < a.length; i++) {
                                var p = a[i];
                                e.geocode({ address: t }, function(e, t) { t == google.maps.GeocoderStatus.OK && t != google.maps.GeocoderStatus.ZERO_RESULTS && n.setCenter(e[0].geometry.location) });
                                var d = new google.maps.LatLng(p.lat, p.lng);
                                c.push(d);
                                var u = new google.maps.Marker({ position: d, map: n, title: p.title, icon: r + "map-pointer.png" });
                                l.extend(u.position),
                                    function(e, t) {
                                        google.maps.event.addListener(e, "click", function(o) {
                                            if (t.branchPhone) var a = "<br/><p><b>Contact number</b> : " + t.stdCode + " " + t.branchPhone + "</p>";
                                            var r = "<div class='info_content'><h3>" + t.branchArea + " Branch</h3><hr/><p><b>Address</b> : <br/>" + t.address + "</p>" + a + "</div>";
                                            s.setContent(r), s.open(n, e)
                                        })
                                    }(u, p), o.push(u)
                            } else $(".noBrances").css("display", "block")
                    }
                })) : $(".pinErr").css("display", "block")
            }
            new google.maps.Marker({ position: { lat: 19.1084234, lng: 72.99999999 }, map: n, title: "", icon: r + "map-pointer.png" }), document.getElementById("cityDD").addEventListener("change", function() {
                $(".pinErr").css("display", "none"), $(".noBrances").css("display", "none"), $("#pincodeTxt").val(""), a();
                var t = $("#cityDD").val(),
                    p = $("#statesDD").val();
                dataLayer.push({ event: "event branch locator", category: "branch locator", action: p, label: t });
                var d = $(this).val();
                $.ajax({
                    url: base_url + "bind-result/city",
                    type: "POST",
                    dataType: "JSON",
                    data: "cityData=" + d,
                    success: function(t) {
                        if ("" != t)
                            for (i = 0; i < t.length; i++) {
                                var a = t[i];
                                d += ", India", e.geocode({ address: d }, function(e, t) { t == google.maps.GeocoderStatus.OK && t != google.maps.GeocoderStatus.ZERO_RESULTS && n.setCenter(e[0].geometry.location) });
                                var p = new google.maps.LatLng(a.lat, a.lng);
                                c.push(p);
                                var u = new google.maps.Marker({ position: p, map: n, title: a.title, icon: r + "map-pointer.png" });
                                l.extend(u.position),
                                    function(e, t) {
                                        google.maps.event.addListener(e, "click", function(o) {
                                            var a = "";
                                            t.branchPhone && (a = 0 != t.stdCode ? "<br/><p><b>Contact number</b> : " + t.stdCode + " " + t.branchPhone + "</p>" : "<br/><p><b>Contact number</b> : " + t.branchPhone + "</p>"), t.branchPhone;
                                            var r = "<div class='info_content'><h3>" + t.branchArea + " Branch</h3><hr/><p><b>Address</b> : <br/>" + t.address + "</p>" + a + "<br/><p><b>Secondary Number</b> : 1800 209 8800</p></div>";
                                            s.setContent(r), s.open(n, e)
                                        })
                                    }(u, a), o.push(u)
                            }
                    }
                })
            }), document.getElementById("searchBtn").addEventListener("click", function() { p() }), document.getElementById("pincodeTxt").addEventListener("keyup", function(e) { e.preventDefault(), 13 == e.keyCode && p() })
        }, $(".uploadBtn input[type=file]").change(function() {
            var e = $("input[type='file']").val().split("/").pop().split("\\").pop();
            $(this).parents(".uploadBtn").find(".filePath").text(e), t = $("#customerDocument").val().split(".").pop().toLowerCase()
        }), $("#customerDOB").length > 0 && $("#customerDOB").datepicker({ dateFormat: "dd-mm-yy", changeMonth: !0, changeYear: !0, yearRange: "-100:+0", showButtonPanel: !0, maxDate: 0 }).on("change", function(e) { var t; try { t = $.datepicker.parseDate(dateFormat, element.value) } catch (o) { t = null } }), $("#contactSubmit").click(function(e) {
            $(".input_error").text(""), $(".errorMsg").css("display", "none");
            var o = $.trim($('[name="customer_policyno"]').val()),
                a = $.trim($('[name="customer_dob"]').val()),
                r = $.trim($('[name="customer_contactno"]').val()),
                n = $.trim($('[name="customer_emailid"]').val()),
                s = $.trim($('[name="srgroups"]').val()),
                c = $.trim($('[name="srtypes"]').val()),
                l = $.trim($('[name="feedback"]').val()),
                p = RegExp(/^[789]\d{9}$/i),
                d = !0;
            if (("" == o || "Policy Number" == o) && ($("#customer_policyno_error").text("It seems you have missed out to write your policy no."), d = !1), ("" == a || "Date of Birth" == a) && ($("#customer_dob_error").text("It seems you have missed out to write your DOB."), d = !1), "" == r || "Contact Number" == r ? ($("#customer_contactno_error").text("It seems you have missed out to write your Contact Number."), d = !1) : (r.length < 10 || !p.test(r)) && ($("#customer_contactno_error").text("Please Enter a vaild Mobile Number"), d = !1), "" == n || "Email ID" == n ? ($("#customer_emailid_error").text("It seems you have missed out to write your email id."), d = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(n) || ($("#customer_emailid_error").text("Please enter valid email id."), d = !1), ("" == s || "Select Options" == s) && ($("#srgroup_error").text("Please select your option."), d = !1), ("" == c || "Select Options" == c) && ($("#srtypes_error").text("Please select your option."), d = !1), "" == l || "Please type here" == l ? ($("#feedback_error").text("It seems you have missed out to write your feedback."), d = !1) : l.length > 2e3 ? ($("#feedback_error").text("It seems you have exceed the limit of characters."), d = !1) : !1 == /^[a-zA-Z0-9- ,_:]*$/.test(l) && ($("#feedback_error").text("Special characters are not allowed."), d = !1), !1 == $('[name="ndncReg"]').prop("checked") && ($("#ndncReg_error").text("Accepting T&C would help us to contact you quickly."), d = !1), t) {
                var u = $("input[type='file']").val().split("/").pop().split("\\").pop().split(".");
                (u.length >= 2 && (-1 == $.inArray(u[1], ["php", "php3", "php4", "phtml", "pl", "py", "jsp", "asp", "htm", "shtml", "sh", "cgi"]) || ($("#customerdocument_error").text("Please upload valid file."), d = !1)), -1 == $.inArray(t, ["png", "jpg", "jpeg", "pdf", "doc", "docx"])) ? ($("#customerdocument_error").text("Please upload .jpg or .png or .jpeg or .pdf file of document."), d = !1) : document.getElementById("customerDocument").files[0].size > 2097152 && ($("#customerdocument_error").text("The file you are trying to upload is too large (max 2MB)"), d = !1)
            }
            if ("" == grecaptcha.getResponse(contactFormCaptcha) && (d = !1, $("#contactformcaptcha_error").text("Please enter the Captcha")), !d) return $(".errorMsg").css("display", "block"), !1;
            $(this).val("Please wait.."), $(this).attr("disabled", !0), $("#contact_us_form").submit()
        }), ("undefined" != typeof failureNotification || "undefined" != typeof sucessNotification) && (!0 === failureNotification || !0 === sucessNotification)) {
        var s = parseInt($("header").height() + $(".second_navWrap").height()),
            c = parseInt($(".feedbackWrap").offset().top) - s;
        $("html, body").animate({ scrollTop: c }, 500)
    }

    function l() {
        $("ul.reportUL > li").removeAttr("style");
        for (var e, t = $("ul.reportUL").length, o = 0, a = 0; a < t; a++) {
            maxDivWid = parseInt($("ul.reportUL").eq(a).css("width")), divWid = parseInt($("ul.reportUL").eq(a).find("li").css("width"));
            var r = $("ul.reportUL").eq(a).find("li").length,
                n = Math.round(maxDivWid / divWid);
            for (h = 0; h < r; h++) {
                for (var s = h; s < n + h; s++) o < (e = parseInt($("ul.reportUL").eq(a).find(" > li").eq(s).css("height"))) && (o = e);
                for (var c = h; c < n + h; c++) $("ul.reportUL").eq(a).find(" > li").eq(c).css("height", o);
                h += n - 1, o = 0
            }
        }
    }
    $("#srgroups").change(function() { if ($("#srgroups option:selected").val()) { var e = $(this).val(); "" != e ? ($.ajax({ url: base_url + "bind-srtype-dropdown/srgroup", type: "POST", dataType: "JSON", data: "srgroup=" + e, success: function(e) { $("#srtypes").html(""), $("#srtypes").html(e) } }), "164135" === e ? $("#srgroup-knowmore").html('<p class="optionView"><a href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" target="_blank" title="Download Financial Document">Click here</a> to download Financial Document</p>') : $("#srgroup-knowmore").html(""), dataLayer && dataLayer.push({ event: "event contact form", category: "form|contact us form", action: "contact dropdown", label: $("#srgroups option:selected").val() })) : $("#srtypes").html("") } else $("#srtypes").html("") }), $("#srtypes").change(function() {
        if ($("#srtypes option:selected").val()) {
            var e = $(this).val(),
                t = $("#srgroups option:selected").val();
            "" != e && "" != t ? "164144" === e && "164136" === t ? $("#srtype-knowmore").html('<p class="optionView" ><a href="https://www.mykotaklife.com/payconnect/opc/opc/redirection.aspx" target="_blank" title="Pay your Premium">Click here</a> to Pay your Premium</p>') : "164148" === e && "164136" === t ? $("#srtype-knowmore").html('<p class="optionView" ><a href="https://insurance.kotak.com/how-do-i/locate-kotak-branches" target="_blank" title="Locate your nearest Branch">Click here</a> to Locate your nearest Branch</p>') : $("#srtype-knowmore").html("") : $("#srtype-knowmore").html("")
        }
    }), $("#contactUsBack").click(function() { grecaptcha.reset(contactFormCaptcha), $("input[type=text], textarea").val(""), $("#thanksMsgContactUs").css("display", "none"), $(".feedbackSel").text("Select Option"), $("#contact_us_form").css("display", "block") }), $("#contactClear").click(function() { grecaptcha.reset(contactFormCaptcha), $("input[type=text], textarea").val(""), $("#thanksMsgContactUs").css("display", "none"), $(".feedbackSel").text("Select Option"), dataLayer && dataLayer.push({ event: "event contact form", category: "form|contact_us_form", action: "clear", label: "click" }) }), $("#statesDD").change(function() { $("#cityDD").val("City"), $(".citySel").text("City"); var e = $(this).val(); "" != e ? $.ajax({ url: base_url + "bind-city-dropdown/states", type: "POST", dataType: "JSON", data: "stateData=" + e, success: function(e) { $("#cityDD").html(""), $("#cityDD").html(e) } }) : $("#cityDD").html("") })
});