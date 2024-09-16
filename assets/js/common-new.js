
 $(document).ready(function () {
 
      $("html,body").animate({
        scrollTop: m + 1
    }, 60), n(), $(window).scroll(function () {
        m = $(this).scrollTop(), n()
    }), $(".videoList li").click(function (c) {
        for (var b = 0; b < playerInfoList.length; b++) curplayer[b].stopVideo();
        $(".videoTv").fadeIn(), $(".videoTv iframe").hide(), $(this).addClass("active").siblings().removeClass("active");
        var a = $(this).index();
        0 == a ? (curplayer[0].seekTo(0, !0), curplayer[0].playVideo(), $("#player").slideDown()) : (curplayer[a].seekTo(0, !0), $("#player" + a).slideDown(), curplayer[a].playVideo()), $("html, body").animate({
            scrollTop: $(".videoTv").offset().top
        }, 2e3)
    }), $(document).on("click", ".ga_track", function (e) {
        if (dataLayer) {
            var d = getSelectedTopMenu(),
                a = "",
                b = "",
                c = "";
            $(this).attr("data-event") && (c = $(this).attr("data-event")), $(this).attr("data-action") && (a = $(this).attr("data-action")), $(this).attr("data-label") && (b = $(this).attr("data-label")), dataLayer.push({
                event: c,
                category: d,
                action: a,
                label: b
            })
        }
    }), $(document).on("click", ".ga_banner_track", function (e) {
        if (dataLayer) {
            var b = "",
                c = "",
                d = "",
                a = "";
            $(this).attr("data-category") && (b = $(this).attr("data-category")), $(this).attr("data-event") && (a = $(this).attr("data-event")), $(this).attr("data-action") && (c = $(this).attr("data-action")), $(this).attr("data-label") && (d = $(this).attr("data-label")), a && dataLayer.push({
                event: a,
                category: b,
                action: c,
                label: d
            })
        }
    }), $(".ga_track_button").click(function (e) {
        if (dataLayer && $("#needSegment option:selected").val()) {
            var a, d = getSelectedTopMenu(),
                b = "",
                c = "";
            $(this).attr("data-event") && (c = $(this).attr("data-event")), $(this).attr("data-action") && (b = $(this).attr("data-action")), a = $("#needSegment option:selected").html(), dataLayer.push({
                event: c,
                category: d,
                action: b,
                label: a
            })
        }
    })
});
$(window).load(function (s) {
 $(".disclaimer h3").click(function () {
        $(this).toggleClass("active"), $(".disclaimerDetl").slideToggle()
    }), $("a.searchBtn").click(function () {
        $(".overlay").addClass("search_overlay"), $(this).hasClass("selected") ? ($(".overlay").fadeOut(), $(".searchBox").hide(), $(this).removeClass("selected")) : ($("#searchTxt").get(0).focus(), setTimeout(function () {
            $(".searchBox input").focus()
        }, 20), $(this).addClass("selected"), $(".overlay").fadeIn(), $(".searchBox").fadeIn(), $("a.closeSearch").addClass("activate")), $(".rhsBoxDetailWrap").removeClass("activate"), $(".rhsBoxDetails .rhsboxWrap").fadeOut(), setTimeout(function () {
            $("ul.fixedUL li").removeClass("selected")
        }, 100), $(".videoPlay").fadeOut(), $(".videoPlay iframe").attr("src", ""), $("html").addClass("bodyScrollHide")
    }), $("#searchResBtn").click(function () {
        var a = $("#searchTxt").val();
        if ("Search here" == a) return !1;
        window.location.href = base_url + "search?q=" + a
    }), $("#searchTxt").keyup(function (a) {
        13 == a.keyCode && $("#searchResBtn").click()
    }), $("#searchResBtn404").length >= 1 && ($("#searchResBtn404").click(function () {
        var a = $("#searchTxt404").val();
        if ("Search here" == a) return !1;
        gaSearchTermTracking("event search", "search", "404 page", a.toLowerCase()), window.location.href = base_url + "search?q=" + a
    }), $("#searchTxt404").keyup(function (a) {
        13 == a.keyCode && $("#searchResBtn404").click()
    }));
    var h, u = $(window).scrollTop(),
        b = $("header").height(),
        v = $("header .second_navWrap").height(),
        w = $(window).width();
    $(window).scroll(function () {
        w = $(window).width();
        var a = $(window).scrollTop();
        a < 0 && (a = 0), a > b + v && a > u ? $("header").addClass("scrollActive") : $("header").removeClass("scrollActive"), w <= 1024 && ($("header").hasClass("scrollActive") ? ($(".rhsFixed_Wrapper").addClass("fixedBlue"), $(".rhsFixed_Wrapper").removeClass("fixedBlueNormal")) : ($(".rhsFixed_Wrapper").removeClass("fixedBlue"), $(".rhsFixed_Wrapper").addClass("fixedBlueNormal"))), setTimeout(function () {
            u = a
        }, 100)
    });
    
    var D = 0,
        E = 0,
        o = $("ul.bannerUL li").length;
    for (a = 0; a < o; a++) $(".banner ul.sliderNav").append('<li><a href="javascript:;">' + a + "</a></li>");
    setTimeout(function () {
        $(".banner ul.sliderNav li").eq(0).find("a").trigger("click")
    }, 10);
    var F = 0;
    $("ul.sliderNav li a").click(function () {
        var a = $(this).parent("li");
        a.parents("ul").prev("ul").find("li").removeClass("activated"), a.parents("ul").prev("ul").find("li").hide(), E = a.index(), a.parents("ul").prev("ul").find("li").eq(E).fadeIn(), $(this).addClass("activate").parent("li").siblings("li").find("a").removeClass("activate"),
            F = $(".banner ul.sliderNav li a.activate").parent("li").index(),
            $("ul.bannerUL li").eq(F).addClass("activated"), clearTimeout(D),
              D = setTimeout(function () {
            $(".banner").is(":visible") && (F == o - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click"))
        }, 6e3);

            $("li.activated").mouseout(function () {
                $("activated").removeClass();
                 clearTimeout(D),
                 D = setTimeout(function () {
            $(".banner").is(":visible") && (F == o - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click"))
        }, 6e3);

            });
        $("li.activated").mouseover(function () {
            
            clearTimeout(D);
         
        });
    }), $(".menuActivate ul.second_navUL > li .linkAcrd .mobNavArrow").on("click", function () {
        $(this).parents(".linkAcrd").addClass("selected").parents("li").siblings().children(".linkAcrd").removeClass("selected"), $(".third_navWrap").hide(), $(this).parent(".linkAcrd").parent("li").find(".third_navWrap").fadeIn()
    }), $(".mobileMenu a").click(function () {
        $(".navWrap").fadeIn(), $(".navWrap").addClass("menuActivate");
        var a = $(window).height(),
            b = $("header").height();
        $(".second_navWrap").height(a - b), setTimeout(function () {
            $("html").addClass("mobileAct")
        }, 250)
    }), $("a.closeMenu").click(function () {
        $(".navWrap").removeClass("menuActivate"), setTimeout(function () {
            $(".navWrap").hide(), $(".third_navWrap").removeAttr("style"), $("ul.second_navUL > li > a").removeClass("selected"), $(".second_navWrap").removeAttr("style"), $("html").removeClass("mobileAct"), $(".linkAcrd").removeClass("selected")
        }, 200)
    }), b = 0;
    var _, G, H, I, e = 0,
        f = 0,
        g = 0;
    b = $("header").height(), e = $(".second_navWrap").height(), f = $(window).height(), g = f - (b + e), $(".rhsBoxDetails").height(g - 20);
    var J = "",
        K = 0;
    
       $("ul.fixedUL li a.buyOnline_login").click(function () {
        
        if ((o = $(window).width()) <= 1024 && $("html,body").animate({
                scrollTop: 0
            }, 200), $(this).parent("li").hasClass("selected")) $("a.closePopup").trigger("click");
        else {
            $(".rhsBoxDetailWrap").removeClass("activate"); 
            var e = parseInt($(this).parent().index());
            N = $(this).attr("class"), I = $("ul.fixedUL li .login").length > 0 ? 1 : "0", "login" != N && "getCall" != N && (e = parseInt(e - I), $(this).parent("li").addClass("selected").siblings("li").removeClass("selected"), $(".rhsBoxDetailWrap_login").addClass("activate"), $(".rhsBoxDetails .rhsboxWrap").eq(e).fadeIn().siblings(".rhsboxWrap").hide(), $(".overlay").fadeIn(), 0 == e && setTimeout(function () {
                a > 1024 && ($("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane())
            }, 100), 1 == e && setTimeout(function () {
                a > 1024 && $("#scroll_02").jScrollPane()
            }, 100), setTimeout(function () {
                jQuery.browser.version > 8 && B()
            }, 10), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected"))
        }
       
    })
    
    $("ul.fixedUL li a.buyOnline").click(function () {
        alert("popup");
        if ((w = $(window).width()) <= 1024 && $("html,body").animate({
                scrollTop: 0
            }, 200), $(this).parent("li").hasClass("selected")) $("a.closePopup").trigger("click"); 
        else {
            var a = parseInt($(this).parent().index());
            J = $(this).attr("class"), K = $("ul.fixedUL li .login").length > 0 ? 1 : "0", "login" != J && "getCall" != J && (a = parseInt(a - K), $(this).parent("li").addClass("selected").siblings("li").removeClass("selected"), $(".rhsBoxDetailWrap").addClass("activate"),$(".rhsBoxDetailWrap_login").addClass("activate"), $(".rhsBoxDetails .rhsboxWrap").eq(a).fadeIn().siblings(".rhsboxWrap").hide(), $(".overlay").fadeIn(), 0 == a && setTimeout(function () {
                h > 1024 && ($("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane())
            }, 100), 1 == a && setTimeout(function () {
                h > 1024 && $("#scroll_02").jScrollPane()
            }, 100), setTimeout(function () {
                jQuery.browser.version > 8 && N()
            }, 10), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected"))
        }
        $(this).hasClass("getCall") && ($("#getCallForm")[0].reset(), $("#getCallForm").css("display", "block"), $(".thankyouWrap").css("display", "none"), $(".querySel").text("Select your Query"), $("#getacallCaptcha").html("")), $(this).hasClass("joinusIcon") && (setTimeout(function () {
            $("#JoinUs_dob").datepicker()
        }, 300), $("#joinUsForm")[0].reset(), $("#joinUsForm").css("display", "block"), $(".thankyouWrap").css("display", "none"), $(".citySel").text("Select city")), $(".videoPlay").fadeOut(), $(".videoPlay iframe").attr("src", "")
    }), $("a.closePopup, .overlay, a.closeSearch").click(function () {
        $(".overlay").removeClass("search_overlay"), $("html").removeClass("bodyScrollHide"), $("ul.ourCampaignUL li").removeClass("activate"), $(".rhsBoxDetailWrap").removeClass("activate"), $(".rhsBoxDetails .rhsboxWrap").fadeOut(), $(".overlay").fadeOut(), setTimeout(function () {
            $("ul.fixedUL li").removeClass("selected")
        }, 100), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected"), $(".videoPlay").hide(), $(".videoPlay iframe").attr("src", ""), $("a.closeSearch").removeClass("activate")
    }), $(window).resize(function () {
        if ((x = $(window).width()) > 1024) $(".third_navWrap").removeAttr("style"), $(".navWrap").show(), $(".navWrap").removeClass("menuActivate"), $("ul.second_navUL > li > a").removeClass("selected"), $(".second_navWrap").removeAttr("style"), $("html").removeClass("mobileAct");
        else if ($(".navWrap").hasClass("menuActivate")) {
            var a = $(window).height(),
                c = $("header").height();
            $(".second_navWrap").height(a - c)
        }
        setTimeout(function () {
            jQuery.browser.version > 8 && N()
        }, 1e3), $("ul.reportUL li").removeAttr("style"), setTimeout(function () {
            p(), q(), r()
        }, 250), setTimeout(function () {
            b = $("header").height(), e = $(".second_navWrap").height(), f = $(window).height(), g = f - (b + e), $(".rhsBoxDetails").height(g - 20)
        }, 500), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || (G = (_ = $("#scroll_01").jScrollPane()).data("jsp"), H = $("#scroll_02").jScrollPane(), I = H.data("jsp"), $("#scroll_01").length > 0 && (x <= 1024 ? (G.destroy(), I.destroy()) : setTimeout(function () {
            $("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane()
        }, 500), x <= 640 ? setTimeout(function () {
            $("#lookingScroll").length >= 1 && $("#lookingScroll").jScrollPane().data("jsp").destroy()
        }, 50) : setTimeout(function () {
            $("ul#planResultUL li").hasClass("noRecordDiv") ? $("#lookingScroll").jScrollPane().data("jsp").destroy() : $("#lookingScroll").length >= 1 && $("#lookingScroll").jScrollPane()
        }, 300))), $(".testiDescriptionWrap").length > 0 && setTimeout(function () {
            var c = $(".testiDescriptionWrap.activate").length;
            $(".testiDescriptionWrap.activate").parents(".bodWrap").removeAttr("style"), $(".testiDescriptionWrap.activate").parents(".testimonialWrap").removeAttr("style");
            for (var a = 0; a < c; a++) {
                var b = parseInt($(".testiDescriptionWrap.activate").eq(a).find(".descriptionWrap.activate").height()) - parseInt($(".descriptionWrap.activate").eq(a).css("padding-top")) + parseInt($(".descriptionWrap.activate").eq(a).css("padding-bottom")) + parseInt($(".descriptionWrap.activate").eq(a).parents("article").find(".controls").height()) + 2 * parseInt($(".descriptionWrap.activate").eq(a).parents("article").css("padding-bottom"));
                $(".testiDescriptionWrap.activate").eq(a).parents(".bodWrap").height(b + 40), $(".testiDescriptionWrap.activate").eq(a).parents(".testimonialWrap").height(b)
            }
        }, 500)
    });
  
   $("select").each(function () {
        $(this).children("option").each(function () {
            $(this).attr("selected") && $(this).parent(".selectedvalue").html($(this).html())
        })
    }), $("select").on("change", function () {
        $(this).prop("selectedIndex"), $(this).prev().html($(this).find("option:selected").text())
    }), $.support.placeholder || ($("[placeholder]").focus(function () {
        $(this).val() == $(this).attr("placeholder") && $(this).val("")
    }).blur(function () {
        "" == $(this).val() && $(this).val($(this).attr("placeholder"))
    }).blur(), $("[placeholder]").parents("form").submit(function () {
        $(this).find("[placeholder]").each(function () {
            $(this).val() == $(this).attr("placeholder") && $(this).val("")
        })
    }))
});
$("#dndBack").click(function () {
    location.reload(), $("#doNotCallRegistryForm").css("display", "block"), grecaptcha.reset(dndCallRegistry), $("#doNotCallRegistryForm")[0].reset(), $(".thankyouWrap").css("display", "none"), $("#dnd_city").text("Select City")
}), $("#dndCallRegistrySubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var d = $.trim($('[name="dnd_full_name"]').val()),
        c = $.trim($('[name="dnd_email_id"]').val()),
        b = $.trim($('[name="dnd_mobile_number"]').val()),
        e = $.trim($('[name="dnd_city"]').val()),
        f = new RegExp(/^[789]\d{9}$/i),
        a = !0;
    if ("" != d && "Your Name" != d || ($("#dnd_full_name_error").text("Hey, it seems you have missed out to write your name."), a = !1), "" == b || "Mobile Number" == b ? ($("#dnd_mobile_number_error").text("Hey, it seems you have missed out to write your number."), a = !1) : (b.length < 10 || !f.test(b)) && ($("#dnd_mobile_number_error").text("Please Enter a vaild Mobile Number"), a = !1), "" == c || "Your Mail ID" == c ? ($("#dnd_email_id_error").text("Hey, it seems you have missed out to write your email id."), a = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(c) || ($("#dnd_email_id_error").text("Please enter valid email id."), a = !1), "" != e && "Select City" != e || ($("#dnd_city_error").text("Please select city."), a = !1), !a) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "do-not-call-registry/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#doNotCallRegistryForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (a) {
            if (a.status) $("#doNotCallRegistryForm")[0].reset(), grecaptcha.reset(dndCallRegistry), $('[name="dnd_full_name"]').val("Full Name"), $('[name="dnd_email_id"]').val("Email ID"), $('[name="dnd_mobile_number"]').val("Contact Number"), $('[name="dnd_city"]').val("Select City"), $('[name="dnd_city"]').prev().text($('[name="dnd_city"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#doNotCallRegistryForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy();
            else
                for (var b = 0; b < a.inputerror.length; b++) $('[name="' + a.inputerror[b] + '"]').addClass("has-error"), $("#doNotCallRegistryForm #" + a.inputerror[b] + "_error").text(a.error_string[b]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#dndCallRegistryClear").click(function () {
    grecaptcha.reset(dndCallRegistry), $("#doNotCallRegistryForm")[0].reset(), $("#dnd_city").text("Select City")
}), $("#getCallSubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var d = $.trim($('[name="yourName"]').val()),
        c = $.trim($('[name="yourEmailId"]').val()),
        b = $.trim($('[name="yourMobileNumber"]').val()),
        e = $.trim($('[name="yourQuery"]').val()),
        f = new RegExp(/^[789]\d{9}$/i),
        a = !0;
    if ("" != d && "Your Name" != d || ($("#yourName_error").text("Hey, it seems you have missed out to write your name."), a = !1), "" == b || "Mobile Number" == b ? ($("#yourMobileNumber_error").text("Hey, it seems you have missed out to write your number."), a = !1) : (b.length < 10 || !f.test(b)) && ($("#yourMobileNumber_error").text("Please Enter a vaild Mobile Number"), a = !1), "" == c || "Your Mail ID" == c ? ($("#yourEmailId_error").text("Hey, it seems you have missed out to write your email id."), a = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(c) || ($("#yourEmailId_error").text("Please enter valid email id."), a = !1), 0 == $('[name="allowCalls"]').prop("checked") && ($("#allowCalls_error").text("Accepting T&C would help us to contact you quickly."), a = !1), "" != e && "Select your Query" != e || ($("#yourQuery_error").text("Please select query."), a = !1), !a) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "get-a-call/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#getCallForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (a) {
            if (a.status) {
                if ($("#getCallForm")[0].reset(), grecaptcha.reset(contactFormCaptcha), $('[name="yourName"]').val("Your Name"), $('[name="yourEmailId"]').val("Your Mail ID"), $('[name="yourMobileNumber"]').val("Mobile Number"), $('[name="yourQuery"]').val("Select your Query"), $('[name="yourQuery"]').prev().text($('[name="yourQuery"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#contactSubmitMsg").text(a.status_message), dataLayer) {
                    var c = getSelectedTopMenu();
                    dataLayer.push({
                        event: "event get a call form",
                        category: c,
                        action: "get a call",
                        label: "submit"
                    })
                }
                $("#getCallForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy()
            } else
                for (var b = 0; b < a.inputerror.length; b++) $('[name="' + a.inputerror[b] + '"]').addClass("has-error"), $("#getCallForm #" + a.inputerror[b] + "_error").text(a.error_string[b]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#getCallClear").click(function () {
    grecaptcha.reset(getacall), $("#getCallForm")[0].reset(), $(".querySel").text("Select your Query")
}), $("#joinUsSubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var e = $.trim($('[name="JoinUs_yourName"]').val()),
        f = $.trim($('[name="JoinUs_dob"]').val()),
        c = $.trim($('[name="JoinUs_email"]').val()),
        b = $.trim($('[name="JoinUs_mobileNumber"]').val()),
        g = $('[name="JoinUs_city"]').val(),
        h = new RegExp(/^[789]\d{9}$/i),
        d = $.trim($('[name="JoinUs_pincode"]').val()),
        a = !0;
    if ("" != e && "Your Name" != e || ($("#JoinUs_yourName_error").text("Hey, it seems you have missed out to write your name."), a = !1), "" != f && "Date of Birth" != f || ($("#JoinUs_dob_error").text("Hey, it seems you have missed out to write your date of birth."), a = !1), "" == b || "Mobile Number" == b ? ($("#JoinUs_mobileNumber_error").text("Hey, it seems you have missed out to write your number."), a = !1) : (b.length < 10 || !h.test(b)) && ($("#JoinUs_mobileNumber_error").text("Please Enter a vaild Mobile Number"), a = !1), "" == c || "Your Mail ID" == c ? ($("#JoinUs_email_error").text("Hey, it seems you have missed out to write your email id."), a = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(c) || ($("#JoinUs_email_error").text("Please enter valid email id."), a = !1), "" != g && "Select City" != g || ($("#JoinUs_city_error").text("Hey, it seems you have missed out to select city."), a = !1), "" == d || "Pincode" == d ? ($("#JoinUs_pincode_error").text("Hey, it seems you have missed out to write your pincode."), a = !1) : d.length < 6 && ($("#JoinUs_pincode_error").text("Please Enter a vaild Pincode"), a = !1), 0 == $('[name="joinUsChk"]').prop("checked") && ($("#joinUsChk_error").text("Accepting T&C would help us to contact you quickly."), a = !1), !a) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "join-us/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#joinUsForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (a) {
            if (a.status) $("#joinUsForm")[0].reset(), grecaptcha.reset(contactFormCaptcha), $('[name="JoinUs_yourName"]').val("Your Name"), $('[name="JoinUs_dob"]').val("Date of Birth"), $('[name="JoinUs_email"]').val("Your Mail ID"), $('[name="JoinUs_mobileNumber"]').val("Mobile Number"), $('[name="JoinUs_city"]').val("Select City"), $('[name="JoinUs_city"]').prev().text($('[name="JoinUs_city"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#joinUsSubmitMsg").text(a.status_message), $("#joinUsForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy();
            else
                for (var b = 0; b < a.inputerror.length; b++) $('[name="' + a.inputerror[b] + '"]').addClass("has-error"), $("#joinUsForm #" + a.inputerror[b] + "_error").text(a.error_string[b]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#joinUsClear").click(function () {
    grecaptcha.reset(getacall), $("#joinUsForm")[0].reset(), $(".citySel").text("Select city")
}), $(".required").on("keypress change", function (b) {
    var a = $(this).val().replace(/[^a-z0-9.@\s]/gi, "").replace(/[_\s]/g, " ");
    $(this).val(a)
});
var playerInfoList = [{
        id: "player",
        height: "100%",
        width: "100%",
        videoId: "_Hf8SPPMc00"
    }, {
        id: "player1",
        height: "100%",
        width: "100%",
        videoId: "pFCAHnxJIFQ"
    }, {
        id: "player2",
        height: "100%",
        width: "100%",
        videoId: "xvBj2Vai5Rk"
    }, {
        id: "player3",
        height: "100%",
        width: "100%",
        videoId: "CKE8gxyKGvw"
    }],
    curplayer = {};

function onYouTubeIframeAPIReady() {
    if (void 0 !== playerInfoList)
        for (var a = 0; a < playerInfoList.length; a++) curplayer[a] = createPlayer(playerInfoList[a])
}

function createPlayer(a) {
    return new YT.Player(a.id, {
        height: a.height,
        width: a.width,
        videoId: a.videoId,
        events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange
        }
    })
}

function onPlayerReady(a) {}

function onPlayerStateChange(b) {
    if (0 === b.data) {
        for (var a = 0; a < playerInfoList.length; a++) curplayer[a].stopVideo();
        $(".videoTv").slideUp(), $(".videoTv iframe").hide(), $(".videoList li").removeClass("active")
    }
}

function getSelectedTopMenu() {
    var b = $(".customer-type.selected").attr("data-customer-type"),
        a = "";
    if (b) switch (b) {
        case "new_customer":
            a = "new customers";
            break;
        case "existing_customer":
            a = "existing Customers";
            break;
        case "life_advisor":
            a = "life advisor";
            break;
        default:
            a = ""
    }
    return a
}

function gaSearchTermTracking(a, b, c, d) {
    dataLayer && dataLayer.push({
        event: a,
        category: b,
        action: c,
        label: d
    })
}
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state"
}), $(".red_submit").click(function () {
    $(".details_form").validate({
        errorElement: "span",
        errorClass: "help-block",
        highlight: function (a, b, c) {
            $(a).closest(".form-group").addClass("has-error")
        },
        unhighlight: function (a, b, c) {
            $(a).closest(".form-group").removeClass("has-error")
        },
        rules: {
            fullname: {
                required: !0
            },
            number: {
                required: !0,
                minlength: 10,
                maxlength: 10
            },
            emailid: {
                required: !0
            },
            city_select: {
                required: !0
            },
            check_box: {
                required: !0
            }
        },
        messages: {
            fullname: {
                required: "Please enter your name"
            },
            number: {
                required: "Please enter your mobile number"
            },
            emailid: {
                required: "Please enter your email "
            },
            city_select: {
                required: "Please enter your city "
            },
            check_box: {
                required: "Please accept privacy policy "
            }
        }
    })
}), $(document).ready(function () {
    $(".accordion-section-title").click(function (a) {
        var b = $(this).attr("href");
        $(a.target).is(".active") ? ($(this).removeClass("active"), $(".accordion-section-content:visible").slideUp(300)) : ($(".accordion-section-title").removeClass("active").filter(this).addClass("active"), $(".accordion-section-content").slideUp(300).filter(b).slideDown(300))
    })
}); 

 $(function () {
    $("body").click(function () {
        $(".hidden-links").addClass("d-none")
    }), $(".more-clk").click(function (a) {
        $(".hidden-links").toggleClass("d-none"), a.stopPropagation()
    })
}), $(document).ready(function () {
    $(".calc-click").click(function () {
        $(".rem-buy-cal").addClass("dd-block")
    })
});
 $(document).ready(function () {
    $(".click-share").click(function () {
        $(".share-icons-mobile").toggleClass("share-block")
    })
});
/

$(document).ready(function () {
    $('a[rel="relativeanchor"]').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
});

$(document).ready(function () {
    $(".cross-red").click(function () {
        alert('testing');
        $(".close-modal").addClass("deactive");
    });
});


//Super hero blog
var $statustestimonial = $('.pagingInfo-review-tes'); 
var $slickElementreview = $('.slickClass');
$slickElementreview.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $statustestimonial.html('<span class="finished_count">' + '0' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + '0' + slick.slideCount + '</span>');
});
//Saving plan page
var $statustestimonial = $('.pagingInfo-review-tes');
var $slickElementreview = $('.saving-testimonial');
$slickElementreview.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $statustestimonial.html('<span class="finished_count">' + '0' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + '0' + slick.slideCount + '</span>');
});
//End Vinoth
var $statusreview = $('.pagingInfo-review');
var $slickElementreview = $('.reviewslick');
$slickElementreview.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $statusreview.html('<span class="finished_count">' + '0' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + '0' + slick.slideCount + '</span>');
});

