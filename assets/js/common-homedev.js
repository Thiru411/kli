var player, $status = $(".pagingInfo"),
    $slickElement = $(".bene-slick");
$slickElement.on("init reInit afterChange", function (e, a, l, s) {
    $status.html('<span class="finished_count">0' + ((l || 0) + 1 + 0) + '</span><span class="total_count">/0' + a.slideCount + "</span>")
});
var $status1 = $(".pagingInfo_How"),
    $slickElement1 = $(".how-slick");
$slickElement1.on("init reInit afterChange", function (e, a, l, s) {
    $status1.html('<span class="finished_count">0' + ((l || 0) + 1 + 0) + '</span><span class="total_count">/0' + a.slideCount + "</span>")
}), $(".btn-what").click(function () {
    $("html,body").animate({
        scrollTop: $(".what").offset().top
    }, "slow")
}), $(".btn-bene").click(function () {
    $("html,body").animate({
        scrollTop: $(".bene").offset().top
    }, "slow")
}), $(".btn-feat").click(function () {
    $("html,body").animate({
        scrollTop: $(".feat").offset().top
    }, "slow")
}), $(".btn-why").click(function () {
    $("html,body").animate({
        scrollTop: $(".btn-whys").offset().top
    }, "slow")
}), $(".btn-eterm").click(function () {
    $("html,body").animate({
        scrollTop: $(".btn-eterms").offset().top
    }, "slow")
}), $(".btn-6").click(function () {
    $("html,body").animate({
        scrollTop: $(".difference-bwn").offset().top
    }, "slow")
}), $(".btn-7").click(function () {
    $("html,body").animate({
        scrollTop: $(".term-types").offset().top
    }, "slow")
}), $(".btn-8").click(function () {
    $("html,body").animate({
        scrollTop: $(".who-buy").offset().top
    }, "slow")
}), $(".btn-9").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-choose").offset().top
    }, "slow")
}), $(".btn-10").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-buy").offset().top
    }, "slow")
}), $(".btn-11").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-much").offset().top
    }, "slow")
}), $(".btn-12").click(function () {
    $("html,body").animate({
        scrollTop: $(".what-policy-period").offset().top
    }, "slow")
}), $(".btn-13").click(function () {
    $("html,body").animate({
        scrollTop: $(".new-terms").offset().top
    }, "slow")
}), $(document).ready(function () {
    $(".more-clk").click(function () {
        $(".hidde-links").toggleClass("d-none")
    })
}), $(document).ready(function () {
    $(".s").click(function () {
        $(".hidden-links").addClass("d-none")
    })
}), $(".online-slick-onee").slick({
    dots: !0,
    arrows: !1,
    infinite: !1,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
}), $(function () {
    $("#show-fancybox").fancybox()
}), $(".bene-slic").slick({
    dots: !1,
    arrows: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: !0,
    responsive: [{
        breakpoint: 767,
        settings: "unslick"
    }]
}), $(".how-slick").slick({
    dots: !1,
    arrows: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: !0,
    responsive: [{
        breakpoint: 767,
        settings: "unslick"
    }]
}), $(".online-slick-two").slick({
    dots: !0,
    arrows: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            dots: !0,
            arrows: !0,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0
        }
    }, {
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            dots: !0,
            arrows: !0,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            dots: !0,
            arrows: !0,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 480,
        settings: {
            dots: !0,
            arrows: !0,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});
let active = document.querySelectorAll(".accordion-div .accordion.active");
for (let t = 0; t < active.length; t++) active[t].classList.remove("active"), active[t].nextElementSibling.style.maxHeight = null;
var i, j, acc = document.getElementsByClassName("accordion");
for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function () {
    var e = this.nextElementSibling;
    if (e.style.maxHeight) e.style.maxHeight = null, this.classList.remove("active");
    else {
        let a = document.querySelectorAll(".accordion-div .accordion.active");
        for (let l = 0; l < a.length; l++) a[l].classList.remove("active"), a[l].nextElementSibling.style.maxHeight = null;
        this.classList.toggle("active"), e.style.maxHeight = e.scrollHeight + "px"
    }
});

function goBack() {
    window.history.back()
}
$(".moreless-button").click(function () {
    $(".moretext").slideToggle(), "Read more" == $(".moreless-button").text() ? $(this).text("Read less") : $(this).text("Read more")
}), $(document).ready(function () {
    if (/iP(hone|od|ad)/.test(navigator.platform) && $("*").on("touchstart", function () {
            $(this).trigger("hover")
        }).on("touchend", function () {
            $(this).trigger("hover")
        }), $("ul.bannerUL").length > 0)
        for (var e = $("ul.bannerUL li").length, a = 0; a < e; a++) {
            var l = $("ul.bannerUL li").eq(a).find(".vidDiv img.posterImg").attr("src"); /*$("ul.bannerUL li").eq(a).find(".vidDiv").css({"background-image":"url("+l+")"})*/
        }
    if ($("a.joinusClick").click(function () {
            console.log("hello modal"), $("ul.existingFixedUL li a.joinusIcon").trigger("click"), 1024 >= $(window).width() && $("html,body").animate({
                scrollTop: 0
            }, 0)
        }), $("ul.optionBoxUL li a").click(function () {
            $("ul.optionBoxUL li a").removeAttr("class");
            for (var e = $(this).parent("li").index(), a = 0; a <= e; a++) $("ul.optionBoxUL li").eq(a).find("a").addClass("selcted-" + e);
            $("#feedback_ratings").val(""), $("#feedback_ratings").val(e)
        }), $(document).on("click", "ul.reportUL li h3", function () {
            var e = "";
            $(this).parents(".reportBox").find("a").hasClass("links") ? null != (e = $(this).parents(".reportBox").find("a.links").attr("href")) && (window.location.href = e) : $(this).parents(".reportBox").find("a").hasClass("pdfIcon") && null != (e = $(this).parents(".reportBox").find("a.pdfIcon").attr("href")) && window.open(e, "_blank")
        }), $("ul.planUL li h3").click(function () {
            var e = $(this).parents("li").find("a.links").attr("href");
            null != e && (window.location.href = e)
        }), $("ul.eligibilityUL > li:last-child").addClass("lastEle_LI"), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var s = $(".telBtn").length,
            r = 0;
        for (a = 0; a < s; a++) r = $(".telBtn").eq(a).text(), $(".telBtn").eq(a).attr("href", "tel:" + r);
        var o = $(".telBtn01").length,
            n = 0;
        for (a = 0; a < o; a++) n = $(".telBtn01").eq(a).find("b").text(), $(".telBtn01").eq(a).attr("href", "tel:" + n)
    }
    for (var c = $(".tabWrap ul.fundTabUL li").length, d = 0, p = 0; p < c; p++) d += Math.floor($(".tabWrap ul.fundTabUL li").eq(p).width());
    $(".tabWrap ul.fundTabUL").width(d + 10);
    var u = $(window).scrollTop(),
        h = $(window).height(),
        f = $(window).width();

    function m() {
        for (var e = $("ul.howWorksUL li").length, a = 0; a < e; a++) {
            var l = $("ul.howWorksUL li").eq(a).offset().top - u - h;
            f > 768 ? l < -250 ? ($("ul.howWorksUL li").eq(a).addClass("animate"), $("ul.howWorksUL li").eq(a).addClass("activeArticle")) : $("ul.howWorksUL li").eq(a).removeClass("activeArticle") : l < -25 ? ($("ul.howWorksUL li").eq(a).addClass("animate"), $("ul.howWorksUL li").eq(a).addClass("activeArticle")) : $("ul.howWorksUL li").eq(a).removeClass("activeArticle")
        }
    }
    $("html,body").animate({
        scrollTop: u + 1
    }, 60), m(), $(window).scroll(function () {
        u = $(this).scrollTop(), m()
    }), $(".videoList li").click(function (e) {
        for (var a = 0; a < playerInfoList.length; a++) curplayer[a].stopVideo();
        $(".videoTv").fadeIn(), $(".videoTv iframe").hide(), $(this).addClass("active").siblings().removeClass("active");
        var l = $(this).index();
        0 == l ? (curplayer[0].seekTo(0, !0), curplayer[0].playVideo(), $("#player").slideDown()) : (curplayer[l].seekTo(0, !0), $("#player" + l).slideDown(), curplayer[l].playVideo()), $("html, body").animate({
            scrollTop: $(".videoTv").offset().top
        }, 2e3)
    }), $(document).on("click", ".ga_track", function (e) {
        if (dataLayer) {
            var a = getSelectedTopMenu(),
                l = "",
                s = "",
                r = "";
            $(this).attr("data-event") && (r = $(this).attr("data-event")), $(this).attr("data-action") && (l = $(this).attr("data-action")), $(this).attr("data-label") && (s = $(this).attr("data-label")), dataLayer.push({
                event: r,
                category: a,
                action: l,
                label: s
            })
        }
    }), $(document).on("click", ".ga_banner_track", function (e) {
        if (dataLayer) {
            var a = "",
                l = "",
                s = "",
                r = "";
            $(this).attr("data-category") && (a = $(this).attr("data-category")), $(this).attr("data-event") && (r = $(this).attr("data-event")), $(this).attr("data-action") && (l = $(this).attr("data-action")), $(this).attr("data-label") && (s = $(this).attr("data-label")), r && dataLayer.push({
                event: r,
                category: a,
                action: l,
                label: s
            })
        }
    }), $(".ga_track_button").click(function (e) {
        if (dataLayer && $("#needSegment option:selected").val()) {
            var a, l = getSelectedTopMenu(),
                s = "",
                r = "";
            $(this).attr("data-event") && (r = $(this).attr("data-event")), $(this).attr("data-action") && (s = $(this).attr("data-action")), a = $("#needSegment option:selected").html(), dataLayer.push({
                event: r,
                category: l,
                action: s,
                label: a
            })
        }
    })
}), $(window).load(function (e) {
    $(document).on("click", "ul.accordUL li h3", function () {
        $(this).addClass("active").parent("li").siblings("li").find("h3").removeClass("active"), $(this).parent("li").find(".accordDesc").slideDown().parents("li").siblings("li").find(".accordDesc").slideUp();
        var e = parseInt($("header").height() + $(".second_navWrap").height()),
            a = $(this);
        a.parent().index() > 0 && setTimeout(function () {
            var l = parseInt(a.offset().top) - e;
            $("html,body").animate({
                scrollTop: l
            }, 500)
        }, 350)
    }), $("ul.fundTabUL01").length > 0 && setTimeout(function () {
        var e = parseInt($("ul.fundTabUL01 li a.selected").offset().left);
        $(".tabWrap").animate({
            scrollLeft: e
        }, 800)
    }, 20), $("ul.viewUL li a").click(function () {
        var e = $(this).parent().index();
        $(this).addClass("selected").parent("li").siblings("li").find("a").removeClass("selected"), $(".navDetailWrapper .viewWrap").eq(e).fadeIn().siblings(".viewWrap").hide()
    }).eq(0).click(), $("a.likeArticle").click(function () {
        $(this).toggleClass("liked")
    }), $(".mapInfo a.nextArrow").click(function () {
        $(".mapInfoDetails").addClass("activate")
    }), $(".mapInfoDetails a.backBtn").click(function () {
        $(".mapInfoDetails").removeClass("activate")
    }), $("ul.mapD li a.openNow").click(function () {
        $(this).toggleClass("opened"), $(this).parent("li").find(".timeDetails").slideToggle()
    }), $(document).on("click", "ul.ourCampaignUL li", function () {
        if ($(this).find("a.videoIcon").length > 0) {
            $("html").addClass("bodyScrollHide");
            var e = "https://www.youtube.com/embed/" + $(this).find("a.videoIcon").attr("rel");
            $(".videoPlay iframe").attr("src", e), $(".overlay").fadeIn(), $(".videoPlay").fadeIn(), $(this).addClass("activate")
        }
    }), $(".checkOut a").click(function () {
        var e = parseInt($(".kli_Left").height()),
            a = parseInt($(".kliNewsDetails").height());
        e > a ? ($(".kliNewsWrap").height(e), $(".kliNewsDetails").height(e)) : $(".kliNewsWrap").height(a), $(".kliNewsDetails").addClass("activate")
    }), $(".kliNewsDetails a.kliBack").click(function () {
        $(".kliNewsDetails").removeClass("activate"), setTimeout(function () {
            $(".kliNewsWrap").removeAttr("style"), $(".kliNewsDetails").removeAttr("style")
        }, 900)
    }), $(".owlCarousel").length > 0 && $(".owlCarousel").owlCarousel({
        items: 3,
        itemsCustom: !1,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: [640, 2],
        itemsMobile: [479, 1],
        navigation: !0,
        rewindNav: !1,
        pagination: !1
    }), $(".similerPlanCarousel").length > 0 && $(".similerPlanCarousel").owlCarousel({
        items: 3,
        itemsCustom: !1,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: [640, 2],
        itemsMobile: [479, 1],
        navigation: !0,
        rewindNav: !1,
        pagination: !1
    }), $(".workUL").length > 0 && $(".workUL").owlCarousel({
        items: 2,
        itemsCustom: !1,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [640, 2],
        itemsMobile: [479, 1],
        navigation: !0,
        rewindNav: !1,
        pagination: !1
    }), $(".disclaimer h3").click(function () {
        $(this).toggleClass("active"), $(".disclaimerDetl").slideToggle()
    }), $("a.searchBtn").click(function () {
        $(".overlay").addClass("search_overlay"), $(this).hasClass("selected") ? ($(".overlay").fadeOut(), $(".searchBox").hide(), $(this).removeClass("selected")) : ($("#searchTxt").get(0).focus(), setTimeout(function () {
            $(".searchBox input").focus()
        }, 20), $(this).addClass("selected"), $(".overlay").fadeIn(), $(".searchBox").fadeIn(), $("a.closeSearch").addClass("activate")), $(".rhsBoxDetailWrap, .rhsBoxDetailWrap_login").removeClass("activate"), $(".rhsBoxDetails .rhsboxWrap").fadeOut(), setTimeout(function () {
            $("ul.fixedUL li").removeClass("selected")
        }, 100), $(".videoPlay").fadeOut(), $(".videoPlay iframe").attr("src", ""), $("html").addClass("bodyScrollHide")
    }), $("#searchResBtn").click(function () {
        var e = $("#searchTxt").val();
        if ("Search here" == e) return !1;
        window.location.href = base_url + "search?q=" + e
    }), $("#searchTxt").keyup(function (e) {
        13 == e.keyCode && $("#searchResBtn").click()
    }), $("#searchResBtn404").length >= 1 && ($("#searchResBtn404").click(function () {
        var e = $("#searchTxt404").val();
        if ("Search here" == e) return !1;
        gaSearchTermTracking("event search", "search", "404 page", e.toLowerCase()), window.location.href = base_url + "search?q=" + e
    }), $("#searchTxt404").keyup(function (e) {
        13 == e.keyCode && $("#searchResBtn404").click()
    }));
    var a, l = $(window).scrollTop(),
        s = $("header").height(),
        r = $("header .second_navWrap").height(),
        o = $(window).width();
    $(window).scroll(function () {
        o = $(window).width();
        var e = $(window).scrollTop();
        e < 0 && (e = 0), e > s + r && e > l ? $("header").addClass("scrollActive") : $("header").removeClass("scrollActive"), o <= 1024 && ($("header").hasClass("scrollActive") ? ($(".rhsFixed_Wrapper").addClass("fixedBlue"), $(".rhsFixed_Wrapper").removeClass("fixedBlueNormal")) : ($(".rhsFixed_Wrapper").removeClass("fixedBlue"), $(".rhsFixed_Wrapper").addClass("fixedBlueNormal"))), setTimeout(function () {
            l = e
        }, 100)
    }), a = $(window).width(), $(window).resize(function () {
        a = $(window).width();
        for (var e = $(".tabWrap ul.fundTabUL li").length, l = 0, s = 0; s < e; s++) l += Math.floor($(".tabWrap ul.fundTabUL li").eq(s).width());
        $(".tabWrap ul.fundTabUL").width(l + 10)
    });
    var n = 0;
    if (/MSIE\s([\d.]+)/.test(navigator.userAgent) && (n = new Number(RegExp.$1)), 8 == n);
    else {
        if ($("#homeBanner").length > 0) {
            var c = document.getElementById("homeBanner");
            new Hammer(c).on("release dragleft dragright swipeleft swiperight", function (e) {
                if ("swipeleft" == e.type) {
                    var a = $(".banner ul.sliderNav li").length;
                    $(".banner ul.sliderNav li a.activate").parents("li").index() >= a - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click")
                }
                "swiperight" == e.type && (a = $(".banner ul.sliderNav li").length, 0 == $(".banner ul.sliderNav li a.activate").parents("li").index() ? $(".banner ul.sliderNav li").eq(a - 1).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").prev().find("a").trigger("click"))
            })
        }
        if ($("#carousel_01").length > 0) {
            var d = document.getElementById("carousel_01");
            new Hammer(d).on("release dragleft dragright swipeleft swiperight", function (e) {
                "swipeleft" == e.type && $(".carouselWrap").eq(0).find(".sliderControl a.next").trigger("click"), "swiperight" == e.type && $(".carouselWrap").eq(0).find(".sliderControl a.prev").trigger("click")
            })
        }
        if ($("#carousel_02").length > 0) {
            var p = document.getElementById("carousel_02");
            new Hammer(p).on("release dragleft dragright swipeleft swiperight", function (e) {
                "swipeleft" == e.type && $(".carouselWrap").eq(1).find(".sliderControl a.next").trigger("click"), "swiperight" == e.type && $(".carouselWrap").eq(1).find(".sliderControl a.prev").trigger("click")
            })
        }
    }
    for (var u = $(window).width(), h = "", f = $(".carouselWrap").length, m = 0, v = 0; v < f; v++) m = $(".carouselWrap").eq(v).find(".cont").length, $(".carouselWrap").eq(v).find(".sliderControlWrap ul.sliderCount li").eq(0).text(1), $(".carouselWrap").eq(v).find(".sliderControlWrap ul.sliderCount li").eq(1).text(m), $(".carouselWrap").eq(v).find(".contWrap .cont").eq(0).addClass("activeSlide"), $(".carouselWrap").eq(v).find(".imgSrc img").eq(0).addClass("activeSlide"), $(".carouselWrap").eq(v).find(".sliderControl a.prev").addClass("disabled");

    function g(e, a) {
        dataLayer && dataLayer.push({
            event: "event insurance guide slider",
            category: getSelectedTopMenu(),
            action: e,
            label: a
        })
    }
    $(".sliderControl a").click(function () {
        h = $(this).attr("class");
        var e = $(this);
        if ("next" == h) {
            e.parents(".sliderControl").find("a.prev").removeClass("disabled"), e.parents(".carouselWrap").find(".cont.activeSlide").hide(), e.parents(".carouselWrap").find(".cont").show(), e.parents(".carouselWrap").find(".cont.activeSlide").next().addClass("activeSlide").siblings(".cont").removeClass("activeSlide"), e.parents(".carouselWrap").find("img.activeSlide").next().addClass("activeSlide").siblings("img").removeClass("activeSlide");
            var a = e.parents(".carouselWrap").find(".cont.activeSlide").index();
            e.parents(".sliderControlWrap").find("ul.sliderCount li").eq(0).text(a + 1), m = e.parents(".carouselWrap").find(".cont").length, dataLayer && $(this).attr("data-label") && g("insurance guide|" + $(".cont.activeSlide").find("h3").html().replace("&amp;", "&"), $(this).attr("data-label")), a >= m - 1 ? $(this).addClass("disabled") : $(this).removeClass("disabled")
        } else {
            if ("prev" != h) return !1;
            e.parents(".sliderControl").find("a.next").removeClass("disabled"), e.parents(".carouselWrap").find(".cont.activeSlide").hide(), e.parents(".carouselWrap").find(".cont").show(), e.parents(".carouselWrap").find(".cont.activeSlide").prev().addClass("activeSlide").siblings(".cont").removeClass("activeSlide"), e.parents(".carouselWrap").find("img.activeSlide").prev().addClass("activeSlide").siblings("img").removeClass("activeSlide"), a = e.parents(".carouselWrap").find(".cont.activeSlide").index(), e.parents(".sliderControlWrap").find("ul.sliderCount li").eq(0).text(a + 1), dataLayer && $(this).attr("data-label") && g("insurance guide|" + $(".cont.activeSlide").find("h3").html().replace("&amp;", "&"), $(this).attr("data-label")), 0 == a ? $(this).addClass("disabled") : $(this).removeClass("disabled")
        }
    });
    var b = "",
        y = 0;

    function k(e, a) {
        "nextData" != e.attr("class") && "prevData" != e.attr("class") || a--, parseInt(e.parents("article").height()), parseInt(e.parents("article").css("padding-top"));
        var l = parseInt(e.parents("article").find(".descriptionWrap").eq(a).height()) - parseInt(e.parents("article").find(".descriptionWrap").eq(a).css("padding-top")) + parseInt(e.parents("article").find(".descriptionWrap").eq(a).css("padding-bottom")) + parseInt(e.parents("article").find(".controls").height()) + 2 * parseInt(e.parents("article").css("padding-bottom"));
        e.parents("article").find(".bodWrap").height(l + 40), e.parents("article").find(".testimonialWrap").height(l);
        var s = $("header").height(),
            r = e.parents("article").find(".topDesc").height(),
            o = (parseInt(e.parents("article").find(".topDesc").css("padding-top")), e.parents("article").offset().top);
        e.parents("section").hasClass("home") ? $("html,body").animate({
            scrollTop: o - s + r
        }, 500) : $("html,body").animate({
            scrollTop: o - s + (r + 20)
        }, 500), setTimeout(function () {
            $("header").removeClass("scrollActive")
        }, 510)
    }
    $(".controls a").click(function () {
        if ($(this).hasClass("disabled")) return !1;
        b.parents(".testimonialWrap").removeAttr("style");
        var e = $(this).attr("class"),
            a = (b = $(this)).parents(".testiDescriptionWrap").find(".descriptionWrap").length;
        linkIndex = b.parents(".testiDescriptionWrap").find(".descriptionWrap.activate").index() + 1, "prevData" == e ? (linkIndex--, b.parents(".testiDescriptionWrap").find("a.nextData").removeClass("disabled"), b.parents(".testiDescriptionWrap").find(".descriptionWrap").hide(), b.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).fadeIn(), b.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), k(b, linkIndex), 1 == linkIndex && $(this).addClass("disabled")) : "nextData" == e && (linkIndex++, b.parents(".testiDescriptionWrap").find("a.prevData").removeClass("disabled"), b.parents(".testiDescriptionWrap").find(".descriptionWrap").hide(), b.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).fadeIn(), b.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), k(b, linkIndex), linkIndex == a && $(this).addClass("disabled"))
    }), $("ul.testimonialUL li .testimonialMidBox, ul.bodUL li a").click(function () {
        var e = $(this);
        b = e;
        var a = e.parent().index();
        if (linkIndex = a, a >= 0) {
            e.parents("article").find(".testiDescriptionWrap").addClass("activate"), e.parents("ul").hasClass("bodUL") ? (e.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(a).fadeIn().siblings(".descriptionWrap").hide(), e.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(a).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), linkIndex++, y = a) : (e.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(a - 1).fadeIn().siblings(".descriptionWrap").hide(), e.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(a - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), y = a - 1);
            var l = e.parents("article").find(".testiDescriptionWrap .descriptionWrap").length;
            e.parents("article").find("a.nextData").removeClass("disabled"), e.parents("article").find("a.prevData").removeClass("disabled"), 1 == linkIndex && e.parents("article").find("a.prevData").addClass("disabled"), linkIndex == l && e.parents("article").find("a.nextData").addClass("disabled")
        }
        k(b, y)
    }), $(".descriptionWrap .closePopup").click(function () {
        var e = $(this);
        e.parents(".testiDescriptionWrap").removeClass("activate"), e.parents(".testimonialWrap").removeAttr("style"), setTimeout(function () {
            e.parents(".descriptionWrap").fadeOut(), e.parents(".bodWrap").removeAttr("style")
        }, 200)
    });
    var C = 0,
        w = 0,
        _ = $("ul.bannerUL li").length;
    for (v = 0; v < _; v++) $(".banner ul.sliderNav").append('<li><a href="javascript:;">' + v + "</a></li>");
    setTimeout(function () {
        $(".banner ul.sliderNav li").eq(0).find("a").trigger("click")
    }, 10);
    var x = 0;
    $("ul.sliderNav li a").click(function () {
        var e = $(this).parent("li");
        e.parents("ul").prev("ul").find("li").removeClass("activated"), e.parents("ul").prev("ul").find("li").hide(), w = e.index(), e.parents("ul").prev("ul").find("li").eq(w).fadeIn(), $(this).addClass("activate").parent("li").siblings("li").find("a").removeClass("activate"), x = $(".banner ul.sliderNav li a.activate").parent("li").index(), $("ul.bannerUL li").eq(x).addClass("activated"), clearTimeout(C), C = setTimeout(function () {
            $(".banner").is(":visible") && (x == _ - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click"))
        }, 6e3), $("li.activated").mouseout(function () {
            $("activated").removeClass(), clearTimeout(C), C = setTimeout(function () {
                $(".banner").is(":visible") && (x == _ - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click"))
            }, 6e3)
        }), $("li.activated").mouseover(function () {
            clearTimeout(C)
        })
    }), $(".menuActivate ul.second_navUL > li .linkAcrd .mobNavArrow").on("click", function () {
        $(this).parents(".linkAcrd").addClass("selected").parents("li").siblings().children(".linkAcrd").removeClass("selected"), $(".third_navWrap").hide(), $(this).parent(".linkAcrd").parent("li").find(".third_navWrap").fadeIn()
    }), $(".mobileMenu a").click(function () {
        $(".navWrap").fadeIn(), $(".navWrap").addClass("menuActivate");
        var e = $(window).height(),
            a = $("header").height();
        $(".second_navWrap").height(e - a), setTimeout(function () {
            $("html").addClass("mobileAct")
        }, 250)
    }), $("a.closeMenu").click(function () {
        $(".navWrap").removeClass("menuActivate"), setTimeout(function () {
            $(".navWrap").hide(), $(".third_navWrap").removeAttr("style"), $("ul.second_navUL > li > a").removeClass("selected"), $(".second_navWrap").removeAttr("style"), $("html").removeClass("mobileAct"), $(".linkAcrd").removeClass("selected")
        }, 200)
    }), s = 0;
    var W, S, T, U, q = 0,
        L = 0,
        D = 0;
    s = $("header").height(), q = $(".second_navWrap").height(), D = (L = $(window).height()) - (s + q), $(".rhsBoxDetails").height(D - 20);
    var N = "",
        I = 0;
    
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
        if ((o = $(window).width()) <= 1024 && $("html,body").animate({
                scrollTop: 0
            }, 200), $(this).parent("li").hasClass("selected")) $("a.closePopup").trigger("click");
        else {
            $(".rhsBoxDetailWrap_login").removeClass("activate");
            var e = parseInt($(this).parent().index());
            N = $(this).attr("class"), I = $("ul.fixedUL li .login").length > 0 ? 1 : "0", "login" != N && "getCall" != N && (e = parseInt(e - I), $(this).parent("li").addClass("selected").siblings("li").removeClass("selected"), $(".rhsBoxDetailWrap").addClass("activate"), $(".rhsBoxDetails .rhsboxWrap").eq(e).fadeIn().siblings(".rhsboxWrap").hide(), $(".overlay").fadeIn(), 0 == e && setTimeout(function () {
                a > 1024 && ($("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane())
            }, 100), 1 == e && setTimeout(function () {
                a > 1024 && $("#scroll_02").jScrollPane()
            }, 100), setTimeout(function () {
                jQuery.browser.version > 8 && B()
            }, 10), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected"))
        }
        $(this).hasClass("getCall") && ($("#getCallForm")[0].reset(), $("#getCallForm").css("display", "block"), $(".thankyouWrap").css("display", "none"), $(".querySel").text("Select your Query"), $("#getacallCaptcha").html("")), $(this).hasClass("joinusIcon") && (setTimeout(function () {
            $("#JoinUs_dob").datepicker()
        }, 300), $("#joinUsForm")[0].reset(), $("#joinUsForm").css("display", "block"), $(".thankyouWrap").css("display", "none"), $(".citySel").text("Select city")), $(".videoPlay").fadeOut(), $(".videoPlay iframe").attr("src", "")
    }), $("a.closePopup, .overlay, a.closeSearch").click(function () {
        $(".overlay").removeClass("search_overlay"), $("html").removeClass("bodyScrollHide"), $("ul.ourCampaignUL li").removeClass("activate"), $(".rhsBoxDetailWrap, .rhsBoxDetailWrap_login, .manage_login").removeClass("activate"), $(".rhsBoxDetails .rhsboxWrap").fadeOut(), $(".overlay").fadeOut(), setTimeout(function () {
            $("ul.fixedUL li").removeClass("selected")
        }, 100), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected"), $(".videoPlay").hide(), $(".videoPlay iframe").attr("src", ""), $("a.closeSearch").removeClass("activate")
    }), $(window).resize(function () {
        if ((u = $(window).width()) > 1024) $(".third_navWrap").removeAttr("style"), $(".navWrap").show(), $(".navWrap").removeClass("menuActivate"), $("ul.second_navUL > li > a").removeClass("selected"), $(".second_navWrap").removeAttr("style"), $("html").removeClass("mobileAct");
        else if ($(".navWrap").hasClass("menuActivate")) {
            var e = $(window).height(),
                a = $("header").height();
            $(".second_navWrap").height(e - a)
        }
        setTimeout(function () {
            jQuery.browser.version > 8 && B()
        }, 1000), $("ul.reportUL li").removeAttr("style"), setTimeout(function () {
            M(), F(), E()
        }, 250), setTimeout(function () {
            s = $("header").height(), q = $(".second_navWrap").height(), D = (L = $(window).height()) - (s + q), $(".rhsBoxDetails").height(D - 20)
        }, 500), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || (S = (W = $("#scroll_01").jScrollPane()).data("jsp"), U = (T = $("#scroll_02").jScrollPane()).data("jsp"), $("#scroll_01").length > 0 && (u <= 1024 ? (S.destroy(), U.destroy()) : setTimeout(function () {
            $("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane()
        }, 500), u <= 640 ? setTimeout(function () {
            $("#lookingScroll").length >= 1 && $("#lookingScroll").jScrollPane().data("jsp").destroy()
        }, 50) : setTimeout(function () {
            $("ul#planResultUL li").hasClass("noRecordDiv") ? $("#lookingScroll").jScrollPane().data("jsp").destroy() : $("#lookingScroll").length >= 1 && $("#lookingScroll").jScrollPane()
        }, 300))), $(".testiDescriptionWrap").length > 0 && setTimeout(function () {
            var e = $(".testiDescriptionWrap.activate").length;
            $(".testiDescriptionWrap.activate").parents(".bodWrap").removeAttr("style"), $(".testiDescriptionWrap.activate").parents(".testimonialWrap").removeAttr("style");
            for (var a = 0; a < e; a++) {
                var l = parseInt($(".testiDescriptionWrap.activate").eq(a).find(".descriptionWrap.activate").height()) - parseInt($(".descriptionWrap.activate").eq(a).css("padding-top")) + parseInt($(".descriptionWrap.activate").eq(a).css("padding-bottom")) + parseInt($(".descriptionWrap.activate").eq(a).parents("article").find(".controls").height()) + 2 * parseInt($(".descriptionWrap.activate").eq(a).parents("article").css("padding-bottom"));
                $(".testiDescriptionWrap.activate").eq(a).parents(".bodWrap").height(l + 40), $(".testiDescriptionWrap.activate").eq(a).parents(".testimonialWrap").height(l)
            }
        }, 500)
    });
    var P, A, B = function () {
            $("ul.plansUL li").removeAttr("style"), P = parseInt($(".rhsboxWrap").css("width")), A = parseInt($("ul.plansUL > li").css("width"));
            var e, l = $("ul.plansUL > li").length,
                s = Math.round(P / A),
                r = 0;
            for (a = 0; a <= l; a++) {
                for (var o = a; o < s + a; o++) r < (e = parseInt($("ul.plansUL > li").eq(o).css("height"))) && (r = e);
                for (var n = a; n < s + a; n++) $("ul.plansUL > li").eq(n).css("height", r);
                a += s - 1, r = 0
            }
        },
        M = function () {
            $("ul.reportUL > li").removeAttr("style");
            for (var e = $("ul.reportUL").length, a = 0; a < e; a++) P = parseInt($("ul.reportUL").eq(a).css("width")), A = parseInt($("ul.reportUL").eq(a).find("li").css("width")), $("ul.reportUL").eq(a).find("li").length
        },
        F = function () {
            $("ul.planUL > li").removeAttr("style");
            for (var e = $("ul.planUL").length, a = 0; a < e; a++) P = parseInt($("ul.planUL").eq(a).css("width")), A = parseInt($("ul.planUL").eq(a).find("li").css("width")), $("ul.planUL").eq(a).find("li").length
        },
        E = function () {
            $("ul.landingUL > li").removeAttr("style"), $("ul.landingUL > li .boxInfo").removeAttr("style");
            for (var e = $("ul.landingUL").length, a = 0; a < e; a++) P = parseInt($("ul.landingUL").eq(a).css("width")), A = parseInt($("ul.landingUL").eq(a).find("li").css("width")), $("ul.landingUL").eq(a).find("li").length
        };
    M(), F(), E(), $("select").each(function () {
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
}), $("#dndBack").click(function () {
    location.reload(), $("#doNotCallRegistryForm").css("display", "block"), grecaptcha.reset(dndCallRegistry), $("#doNotCallRegistryForm")[0].reset(), $(".thankyouWrap").css("display", "none"), $("#dnd_city").text("Select City")
}), $("#dndCallRegistrySubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var e = $.trim($('[name="dnd_full_name"]').val()),
        a = $.trim($('[name="dnd_email_id"]').val()),
        l = $.trim($('[name="dnd_mobile_number"]').val()),
        s = $.trim($('[name="dnd_city"]').val()),
        r = RegExp(/^[789]\d{9}$/i),
        o = !0;
    if ("" != e && "Your Name" != e || ($("#dnd_full_name_error").text("Hey, it seems you have missed out to write your name."), o = !1), "" == l || "Mobile Number" == l ? ($("#dnd_mobile_number_error").text("Hey, it seems you have missed out to write your number."), o = !1) : (l.length < 10 || !r.test(l)) && ($("#dnd_mobile_number_error").text("Please Enter a vaild Mobile Number"), o = !1), "" == a || "Your Mail ID" == a ? ($("#dnd_email_id_error").text("Hey, it seems you have missed out to write your email id."), o = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(a) || ($("#dnd_email_id_error").text("Please enter valid email id."), o = !1), "" != s && "Select City" != s || ($("#dnd_city_error").text("Please select city."), o = !1), !o) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "do-not-call-registry/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#doNotCallRegistryForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (e) {
            if (e.status) $("#doNotCallRegistryForm")[0].reset(), grecaptcha.reset(dndCallRegistry), $('[name="dnd_full_name"]').val("Full Name"), $('[name="dnd_email_id"]').val("Email ID"), $('[name="dnd_mobile_number"]').val("Contact Number"), $('[name="dnd_city"]').val("Select City"), $('[name="dnd_city"]').prev().text($('[name="dnd_city"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#doNotCallRegistryForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy();
            else
                for (var a = 0; a < e.inputerror.length; a++) $('[name="' + e.inputerror[a] + '"]').addClass("has-error"), $("#doNotCallRegistryForm #" + e.inputerror[a] + "_error").text(e.error_string[a]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#dndCallRegistryClear").click(function () {
    grecaptcha.reset(dndCallRegistry), $("#doNotCallRegistryForm")[0].reset(), $("#dnd_city").text("Select City")
}), $("#getCallSubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var e = $.trim($('[name="yourName"]').val()),
        a = $.trim($('[name="yourEmailId"]').val()),
        l = $.trim($('[name="yourMobileNumber"]').val()),
        s = $.trim($('[name="yourQuery"]').val()),
        r = RegExp(/^[789]\d{9}$/i),
        o = !0;
    if ("" != e && "Your Name" != e || ($("#yourName_error").text("Hey, it seems you have missed out to write your name."), o = !1), "" == l || "Mobile Number" == l ? ($("#yourMobileNumber_error").text("Hey, it seems you have missed out to write your number."), o = !1) : (l.length < 10 || !r.test(l)) && ($("#yourMobileNumber_error").text("Please Enter a vaild Mobile Number"), o = !1), "" == a || "Your Mail ID" == a ? ($("#yourEmailId_error").text("Hey, it seems you have missed out to write your email id."), o = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(a) || ($("#yourEmailId_error").text("Please enter valid email id."), o = !1), 0 == $('[name="allowCalls"]').prop("checked") && ($("#allowCalls_error").text("Accepting T&C would help us to contact you quickly."), o = !1), "" != s && "Select your Query" != s || ($("#yourQuery_error").text("Please select query."), o = !1), !o) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "get-a-call/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#getCallForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (e) {
            if (e.status) {
                if ($("#getCallForm")[0].reset(), grecaptcha.reset(contactFormCaptcha), $('[name="yourName"]').val("Your Name"), $('[name="yourEmailId"]').val("Your Mail ID"), $('[name="yourMobileNumber"]').val("Mobile Number"), $('[name="yourQuery"]').val("Select your Query"), $('[name="yourQuery"]').prev().text($('[name="yourQuery"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#contactSubmitMsg").text(e.status_message), dataLayer) {
                    var a = getSelectedTopMenu();
                    dataLayer.push({
                        event: "event get a call form",
                        category: a,
                        action: "get a call",
                        label: "submit"
                    })
                }
                $("#getCallForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy()
            } else
                for (var l = 0; l < e.inputerror.length; l++) $('[name="' + e.inputerror[l] + '"]').addClass("has-error"), $("#getCallForm #" + e.inputerror[l] + "_error").text(e.error_string[l]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#getCallClear").click(function () {
    grecaptcha.reset(getacall), $("#getCallForm")[0].reset(), $(".querySel").text("Select your Query")
}), $("#joinUsSubmit").click(function () {
    $(".input_error").text(""), $(".errorMsg").css("display", "none");
    var e = $.trim($('[name="JoinUs_yourName"]').val()),
        a = $.trim($('[name="JoinUs_dob"]').val()),
        l = $.trim($('[name="JoinUs_email"]').val()),
        s = $.trim($('[name="JoinUs_mobileNumber"]').val()),
        r = $('[name="JoinUs_city"]').val(),
        o = RegExp(/^[789]\d{9}$/i),
        n = $.trim($('[name="JoinUs_pincode"]').val()),
        c = !0;
    if ("" != e && "Your Name" != e || ($("#JoinUs_yourName_error").text("Hey, it seems you have missed out to write your name."), c = !1), "" != a && "Date of Birth" != a || ($("#JoinUs_dob_error").text("Hey, it seems you have missed out to write your date of birth."), c = !1), "" == s || "Mobile Number" == s ? ($("#JoinUs_mobileNumber_error").text("Hey, it seems you have missed out to write your number."), c = !1) : (s.length < 10 || !o.test(s)) && ($("#JoinUs_mobileNumber_error").text("Please Enter a vaild Mobile Number"), c = !1), "" == l || "Your Mail ID" == l ? ($("#JoinUs_email_error").text("Hey, it seems you have missed out to write your email id."), c = !1) : /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(l) || ($("#JoinUs_email_error").text("Please enter valid email id."), c = !1), "" != r && "Select City" != r || ($("#JoinUs_city_error").text("Hey, it seems you have missed out to select city."), c = !1), "" == n || "Pincode" == n ? ($("#JoinUs_pincode_error").text("Hey, it seems you have missed out to write your pincode."), c = !1) : n.length < 6 && ($("#JoinUs_pincode_error").text("Please Enter a vaild Pincode"), c = !1), 0 == $('[name="joinUsChk"]').prop("checked") && ($("#joinUsChk_error").text("Accepting T&C would help us to contact you quickly."), c = !1), !c) return $(".errorMsg").css("display", "block"), !1;
    $.ajax({
        url: base_url + "join-us/submit",
        type: "POST",
        dataType: "JSON",
        data: new FormData($("#joinUsForm")[0]),
        contentType: !1,
        cache: !1,
        processData: !1,
        success: function (e) {
            if (e.status) $("#joinUsForm")[0].reset(), grecaptcha.reset(contactFormCaptcha), $('[name="JoinUs_yourName"]').val("Your Name"), $('[name="JoinUs_dob"]').val("Date of Birth"), $('[name="JoinUs_email"]').val("Your Mail ID"), $('[name="JoinUs_mobileNumber"]').val("Mobile Number"), $('[name="JoinUs_city"]').val("Select City"), $('[name="JoinUs_city"]').prev().text($('[name="JoinUs_city"] option:selected').val()), $(".errorMsg").css("display", "none"), $("#joinUsSubmitMsg").text(e.status_message), $("#joinUsForm").css("display", "none"), $(".thankyouWrap").css("display", "block"), $("#scroll_02").jScrollPane().data("jsp").destroy();
            else
                for (var a = 0; a < e.inputerror.length; a++) $('[name="' + e.inputerror[a] + '"]').addClass("has-error"), $("#joinUsForm #" + e.inputerror[a] + "_error").text(e.error_string[a]), $(".errorMsg").css("display", "block")
        }
    })
}), $("#joinUsClear").click(function () {
    grecaptcha.reset(getacall), $("#joinUsForm")[0].reset(), $(".citySel").text("Select city")
}), $(".required").on("keypress change", function (e) {
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
        for (var e = 0; e < playerInfoList.length; e++) curplayer[e] = createPlayer(playerInfoList[e])
}

function createPlayer(e) {
    return new YT.Player(e.id, {
        height: e.height,
        width: e.width,
        videoId: e.videoId,
        events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange
        }
    })
}

function onPlayerReady(e) {}

function onPlayerStateChange(e) {
    if (0 === e.data) {
        for (var a = 0; a < playerInfoList.length; a++) curplayer[a].stopVideo();
        $(".videoTv").slideUp(), $(".videoTv iframe").hide(), $(".videoList li").removeClass("active")
    }
}

function getSelectedTopMenu() {
    var e = $(".customer-type.selected").attr("data-customer-type"),
        a = "";
    if (e) switch (e) {
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

function gaSearchTermTracking(e, a, l, s) {
    dataLayer && dataLayer.push({
        event: e,
        category: a,
        action: l,
        label: s
    })
}
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state"
}), $(".red_submit").click(function () {
    $(".details_form").validate({
        errorElement: "span",
        errorClass: "help-block",
        highlight: function (e, a, l) {
            $(e).closest(".form-group").addClass("has-error")
        },
        unhighlight: function (e, a, l) {
            $(e).closest(".form-group").removeClass("has-error")
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
    $(".accordion-section-title").click(function (e) {
        var a = $(this).attr("href");
        $(e.target).is(".active") ? ($(this).removeClass("active"), $(".accordion-section-content:visible").slideUp(300)) : ($(".accordion-section-title").removeClass("active").filter(this).addClass("active"), $(".accordion-section-content").slideUp(300).filter(a).slideDown(300))
    })
}), $(".btn-what").click(function () {
    $("html,body").animate({
        scrollTop: $(".what").offset().top
    }, "slow")
}), $(".btn-bene").click(function () {
    $("html,body").animate({
        scrollTop: $(".bene").offset().top
    }, "slow")
}), $(".btn-feat").click(function () {
    $("html,body").animate({
        scrollTop: $(".feat").offset().top
    }, "slow")
}), $(".btn-why").click(function () {
    $("html,body").animate({
        scrollTop: $(".btn-whys").offset().top
    }, "slow")
}), $(".btn-eterm").click(function () {
    $("html,body").animate({
        scrollTop: $(".btn-eterms").offset().top
    }, "slow")
}), $(".btn-6").click(function () {
    $("html,body").animate({
        scrollTop: $(".difference-bwn").offset().top
    }, "slow")
}), $(".btn-7").click(function () {
    $("html,body").animate({
        scrollTop: $(".term-types").offset().top
    }, "slow")
}), $(".btn-8").click(function () {
    $("html,body").animate({
        scrollTop: $(".who-buy").offset().top
    }, "slow")
}), $(".btn-9").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-choose").offset().top
    }, "slow")
}), $(".btn-10").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-buy").offset().top
    }, "slow")
}), $(".btn-10-cat").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-buy-cat").offset().top
    }, "slow")
}), $(".btn-11").click(function () {
    $("html,body").animate({
        scrollTop: $(".how-much").offset().top
    }, "slow")
}), $(".btn-12").click(function () {
    $("html,body").animate({
        scrollTop: $(".what-policy-period").offset().top
    }, "slow")
}), $(".btn-13").click(function () {
    $("html,body").animate({
        scrollTop: $(".new-terms").offset().top
    }, "slow")
}), $(".btn-gsp").click(function () {
    $("html,body").animate({
        scrollTop: $(".mobile-feat").offset().top
    }, "slow")
}), $(".btn-9-rel").click(function () {
    $("html,body").animate({
        scrollTop: $(".related-blogs-gsp").offset().top
    }, "slow")
}), $(document).ready(function () {
    $(".btn-online").click(function () {
        $(".image-div").addClass("d-none")
    })
}), $(".term-bene-slick").slick({
    dots: !1,
    arrows: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: !0,
    responsive: [{
        breakpoint: 767,
        settings: "unslick"
    }]
}), $(function () {
    $("body").click(function () {
        $(".hidden-links").addClass("d-none")
    }), $(".more-clk").click(function (e) {
        $(".hidden-links").toggleClass("d-none"), e.stopPropagation()
    })
}), $(document).ready(function () {
    $(".calc-click").click(function () {
        $(".rem-buy-cal").addClass("dd-block")
    })
}), $(".buy-life-slick").slick({
    infinite: !1,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: !0,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        },
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 767,
        settings: "unslick"
    }]
}), $(document).ready(function () {
    $(".dis-red").click(function () {
        $(".rem-buy-cal").removeClass("dd-block"), $(".rem-buy-cal").addClass("dis-none")
    })
}), $(document).ready(function () {
    $(".click-share").click(function () {
        $(".share-icons-mobile").toggleClass("share-block")
    })
}), $(".blogs-new-slick").slick({
    infinite: !1,
    slidesToShow: 3,
    slidesToScroll: 1
});

//Common Dev
$(document).ready(function () {
    function e(e, o, t, s) {
        var c = new Date;
        c.setTime(c.getTime() + 24 * t * 60 * 60 * 1e3);
        var i = c.toUTCString();
        document.cookie = e + "=" + o + ";expires=" + i + ";path=" + s + ";"
    }
    $(document).on("click", ".customer-type", function () {
        var o = $(this).attr("data-customer-type");
        console.log("Test=" + o), console.log(1), "existing_customer" == o ? e("kotak_customer_type", "existing_customer", 1825, "/") : "new_customer" == o ? e("kotak_customer_type", "new_customer", 1825, "/") : "life_advisor" == o && e("kotak_customer_type", "life_advisor", 1825, "/"), $(this).hasClass("mobDev"), window.location = base_url, console.log(2)
    })
});
