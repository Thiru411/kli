var player, $status = $(".pagingInfo"),
    $slickElement = $(".bene-slick");
$slickElement.on("init reInit afterChange", function (c, a, b, d) {
    $status.html('<span class="finished_count">0' + ((b || 0) + 1 + 0) + '</span><span class="total_count">/0' + a.slideCount + "</span>")
});
var $status1 = $(".pagingInfo_How"),
    $slickElement1 = $(".how-slick");
$slickElement1.on("init reInit afterChange", function (c, a, b, d) {
    $status1.html('<span class="finished_count">0' + ((b || 0) + 1 + 0) + '</span><span class="total_count">/0' + a.slideCount + "</span>")
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
    var a = this.nextElementSibling;
    if (a.style.maxHeight) a.style.maxHeight = null, this.classList.remove("active");
    else {
        let c = document.querySelectorAll(".accordion-div .accordion.active");
        for (let b = 0; b < c.length; b++) c[b].classList.remove("active"), c[b].nextElementSibling.style.maxHeight = null;
        this.classList.toggle("active"), a.style.maxHeight = a.scrollHeight + "px"
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
        for (var f = $("ul.bannerUL li").length, a = 0; a < f; a++) {
            var g = $("ul.bannerUL li").eq(a).find(".vidDiv img.posterImg").attr("src");
           /* $("ul.bannerUL li").eq(a).find(".vidDiv").css({
                "background-image": "url(" + g + ")"
            })*/
        }
    if ($("a.joinusClick").click(function () {
            console.log('hello modal');
            $("ul.existingFixedUL li a.joinusIcon").trigger("click"), 1024 >= $(window).width() && $("html,body").animate({
                scrollTop: 0
            }, 0)
        }), $("ul.optionBoxUL li a").click(function () {
            $("ul.optionBoxUL li a").removeAttr("class");
            for (var a = $(this).parent("li").index(), b = 0; b <= a; b++) $("ul.optionBoxUL li").eq(b).find("a").addClass("selcted-" + a);
            $("#feedback_ratings").val(""), $("#feedback_ratings").val(a)
        }), $(document).on("click", "ul.reportUL li h3", function () {
            var a = "";
            $(this).parents(".reportBox").find("a").hasClass("links") ? null != (a = $(this).parents(".reportBox").find("a.links").attr("href")) && (window.location.href = a) : $(this).parents(".reportBox").find("a").hasClass("pdfIcon") && null != (a = $(this).parents(".reportBox").find("a.pdfIcon").attr("href")) && window.open(a, "_blank")
        }), $("ul.planUL li h3").click(function () {
            var a = $(this).parents("li").find("a.links").attr("href");
            null != a && (window.location.href = a)
        }), $("ul.eligibilityUL > li:last-child").addClass("lastEle_LI"), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var h = $(".telBtn").length,
            c = 0;
        for (a = 0; a < h; a++) c = $(".telBtn").eq(a).text(), $(".telBtn").eq(a).attr("href", "tel:" + c);
        var k = $(".telBtn01").length,
            d = 0;
        for (a = 0; a < k; a++) d = $(".telBtn01").eq(a).find("b").text(), $(".telBtn01").eq(a).attr("href", "tel:" + d)
    }
    for (var l = $(".tabWrap ul.fundTabUL li").length, e = 0, b = 0; b < l; b++) e += Math.floor($(".tabWrap ul.fundTabUL li").eq(b).width());
    $(".tabWrap ul.fundTabUL").width(e + 10);
    var m = $(window).scrollTop(),
        o = $(window).height(),
        p = $(window).width();

    function n() {
        for (var c = $("ul.howWorksUL li").length, a = 0; a < c; a++) {
            var b = $("ul.howWorksUL li").eq(a).offset().top - m - o;
            p > 768 ? b < -250 ? ($("ul.howWorksUL li").eq(a).addClass("animate"), $("ul.howWorksUL li").eq(a).addClass("activeArticle")) : $("ul.howWorksUL li").eq(a).removeClass("activeArticle") : b < -25 ? ($("ul.howWorksUL li").eq(a).addClass("animate"), $("ul.howWorksUL li").eq(a).addClass("activeArticle")) : $("ul.howWorksUL li").eq(a).removeClass("activeArticle")
        }
    }
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
}), $(window).load(function (s) {
    $(document).on("click", "ul.accordUL li h3", function () {
        $(this).addClass("active").parent("li").siblings("li").find("h3").removeClass("active"), $(this).parent("li").find(".accordDesc").slideDown().parents("li").siblings("li").find(".accordDesc").slideUp();
        var b = parseInt($("header").height() + $(".second_navWrap").height()),
            a = $(this);
        a.parent().index() > 0 && setTimeout(function () {
            var c = parseInt(a.offset().top) - b;
            $("html,body").animate({
                scrollTop: c
            }, 500)
        }, 350)
    }), $("ul.fundTabUL01").length > 0 && setTimeout(function () {
        var a = parseInt($("ul.fundTabUL01 li a.selected").offset().left);
        $(".tabWrap").animate({
            scrollLeft: a
        }, 800)
    }, 20), $("ul.viewUL li a").click(function () {
        var a = $(this).parent().index();
        $(this).addClass("selected").parent("li").siblings("li").find("a").removeClass("selected"), $(".navDetailWrapper .viewWrap").eq(a).fadeIn().siblings(".viewWrap").hide()
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
            var a = "https://www.youtube.com/embed/" + $(this).find("a.videoIcon").attr("rel");
            $(".videoPlay iframe").attr("src", a), $(".overlay").fadeIn(), $(".videoPlay").fadeIn(), $(this).addClass("activate")
        }
    }), $(".checkOut a").click(function () {
        var a = parseInt($(".kli_Left").height()),
            b = parseInt($(".kliNewsDetails").height());
        a > b ? ($(".kliNewsWrap").height(a), $(".kliNewsDetails").height(a)) : $(".kliNewsWrap").height(b), $(".kliNewsDetails").addClass("activate")
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
    }), h = $(window).width(), $(window).resize(function () {
        h = $(window).width();
        for (var c = $(".tabWrap ul.fundTabUL li").length, b = 0, a = 0; a < c; a++) b += Math.floor($(".tabWrap ul.fundTabUL li").eq(a).width());
        $(".tabWrap ul.fundTabUL").width(b + 10)
    });
    var c = 0;
    if (/MSIE\s([\d.]+)/.test(navigator.userAgent) && (c = new Number(RegExp.$1)), 8 == c);
    else {
        if ($("#homeBanner").length > 0) {
            var k = document.getElementById("homeBanner");
            new Hammer(k).on("release dragleft dragright swipeleft swiperight", function (b) {
                if ("swipeleft" == b.type) {
                    var a = $(".banner ul.sliderNav li").length;
                    $(".banner ul.sliderNav li a.activate").parents("li").index() >= a - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click")
                }
                "swiperight" == b.type && (a = $(".banner ul.sliderNav li").length, 0 == $(".banner ul.sliderNav li a.activate").parents("li").index() ? $(".banner ul.sliderNav li").eq(a - 1).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").prev().find("a").trigger("click"))
            })
        }
        if ($("#carousel_01").length > 0) {
            var l = document.getElementById("carousel_01");
            new Hammer(l).on("release dragleft dragright swipeleft swiperight", function (a) {
                "swipeleft" == a.type && $(".carouselWrap").eq(0).find(".sliderControl a.next").trigger("click"), "swiperight" == a.type && $(".carouselWrap").eq(0).find(".sliderControl a.prev").trigger("click")
            })
        }
        if ($("#carousel_02").length > 0) {
            var m = document.getElementById("carousel_02");
            new Hammer(m).on("release dragleft dragright swipeleft swiperight", function (a) {
                "swipeleft" == a.type && $(".carouselWrap").eq(1).find(".sliderControl a.next").trigger("click"), "swiperight" == a.type && $(".carouselWrap").eq(1).find(".sliderControl a.prev").trigger("click")
            })
        }
    }
    for (var x = $(window).width(), y = "", n = $(".carouselWrap").length, d = 0, a = 0; a < n; a++) d = $(".carouselWrap").eq(a).find(".cont").length, $(".carouselWrap").eq(a).find(".sliderControlWrap ul.sliderCount li").eq(0).text(1), $(".carouselWrap").eq(a).find(".sliderControlWrap ul.sliderCount li").eq(1).text(d), $(".carouselWrap").eq(a).find(".contWrap .cont").eq(0).addClass("activeSlide"), $(".carouselWrap").eq(a).find(".imgSrc img").eq(0).addClass("activeSlide"), $(".carouselWrap").eq(a).find(".sliderControl a.prev").addClass("disabled");

    function z(a, b) {
        dataLayer && dataLayer.push({
            event: "event insurance guide slider",
            category: getSelectedTopMenu(),
            action: a,
            label: b
        })
    }
    $(".sliderControl a").click(function () {
        y = $(this).attr("class");
        var a = $(this);
        if ("next" == y) {
            a.parents(".sliderControl").find("a.prev").removeClass("disabled"), a.parents(".carouselWrap").find(".cont.activeSlide").hide(), a.parents(".carouselWrap").find(".cont").show(), a.parents(".carouselWrap").find(".cont.activeSlide").next().addClass("activeSlide").siblings(".cont").removeClass("activeSlide"), a.parents(".carouselWrap").find("img.activeSlide").next().addClass("activeSlide").siblings("img").removeClass("activeSlide");
            var b = a.parents(".carouselWrap").find(".cont.activeSlide").index();
            a.parents(".sliderControlWrap").find("ul.sliderCount li").eq(0).text(b + 1), d = a.parents(".carouselWrap").find(".cont").length, dataLayer && $(this).attr("data-label") && z("insurance guide|" + $(".cont.activeSlide").find("h3").html().replace("&amp;", "&"), $(this).attr("data-label")), b >= d - 1 ? $(this).addClass("disabled") : $(this).removeClass("disabled")
        } else {
            if ("prev" != y) return !1;
            a.parents(".sliderControl").find("a.next").removeClass("disabled"), a.parents(".carouselWrap").find(".cont.activeSlide").hide(), a.parents(".carouselWrap").find(".cont").show(), a.parents(".carouselWrap").find(".cont.activeSlide").prev().addClass("activeSlide").siblings(".cont").removeClass("activeSlide"), a.parents(".carouselWrap").find("img.activeSlide").prev().addClass("activeSlide").siblings("img").removeClass("activeSlide"), b = a.parents(".carouselWrap").find(".cont.activeSlide").index(), a.parents(".sliderControlWrap").find("ul.sliderCount li").eq(0).text(b + 1), dataLayer && $(this).attr("data-label") && z("insurance guide|" + $(".cont.activeSlide").find("h3").html().replace("&amp;", "&"), $(this).attr("data-label")), 0 == b ? $(this).addClass("disabled") : $(this).removeClass("disabled")
        }
    });
    var A = "",
        B = 0;

    function C(a, b) {
        "nextData" != a.attr("class") && "prevData" != a.attr("class") || b--, parseInt(a.parents("article").height()), parseInt(a.parents("article").css("padding-top"));
        var c = parseInt(a.parents("article").find(".descriptionWrap").eq(b).height()) - parseInt(a.parents("article").find(".descriptionWrap").eq(b).css("padding-top")) + parseInt(a.parents("article").find(".descriptionWrap").eq(b).css("padding-bottom")) + parseInt(a.parents("article").find(".controls").height()) + 2 * parseInt(a.parents("article").css("padding-bottom"));
        a.parents("article").find(".bodWrap").height(c + 40), a.parents("article").find(".testimonialWrap").height(c);
        var d = $("header").height(),
            e = a.parents("article").find(".topDesc").height(),
            f = (parseInt(a.parents("article").find(".topDesc").css("padding-top")), a.parents("article").offset().top);
        a.parents("section").hasClass("home") ? $("html,body").animate({
            scrollTop: f - d + e
        }, 500) : $("html,body").animate({
            scrollTop: f - d + (e + 20)
        }, 500), setTimeout(function () {
            $("header").removeClass("scrollActive")
        }, 510)
    }
    $(".controls a").click(function () {
        if ($(this).hasClass("disabled")) return !1;
        A.parents(".testimonialWrap").removeAttr("style");
        var a = $(this).attr("class"),
            b = (A = $(this)).parents(".testiDescriptionWrap").find(".descriptionWrap").length;
        linkIndex = A.parents(".testiDescriptionWrap").find(".descriptionWrap.activate").index() + 1, "prevData" == a ? (linkIndex--, A.parents(".testiDescriptionWrap").find("a.nextData").removeClass("disabled"), A.parents(".testiDescriptionWrap").find(".descriptionWrap").hide(), A.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).fadeIn(), A.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), C(A, linkIndex), 1 == linkIndex && $(this).addClass("disabled")) : "nextData" == a && (linkIndex++, A.parents(".testiDescriptionWrap").find("a.prevData").removeClass("disabled"), A.parents(".testiDescriptionWrap").find(".descriptionWrap").hide(), A.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).fadeIn(), A.parents(".testiDescriptionWrap").find(".descriptionWrap").eq(linkIndex - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), C(A, linkIndex), linkIndex == b && $(this).addClass("disabled"))
    }), $("ul.testimonialUL li .testimonialMidBox, ul.bodUL li a").click(function () {
        var a = $(this);
        A = a;
        var b = a.parent().index();
        if (linkIndex = b, b >= 0) {
            a.parents("article").find(".testiDescriptionWrap").addClass("activate"), a.parents("ul").hasClass("bodUL") ? (a.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(b).fadeIn().siblings(".descriptionWrap").hide(), a.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(b).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), linkIndex++, B = b) : (a.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(b - 1).fadeIn().siblings(".descriptionWrap").hide(), a.parents("article").find(".testiDescriptionWrap .descriptionWrap").eq(b - 1).addClass("activate").siblings(".descriptionWrap").removeClass("activate"), B = b - 1);
            var c = a.parents("article").find(".testiDescriptionWrap .descriptionWrap").length;
            a.parents("article").find("a.nextData").removeClass("disabled"), a.parents("article").find("a.prevData").removeClass("disabled"), 1 == linkIndex && a.parents("article").find("a.prevData").addClass("disabled"), linkIndex == c && a.parents("article").find("a.nextData").addClass("disabled")
        }
        C(A, B)
    }), $(".descriptionWrap .closePopup").click(function () {
        var a = $(this);
        a.parents(".testiDescriptionWrap").removeClass("activate"), a.parents(".testimonialWrap").removeAttr("style"), setTimeout(function () {
            a.parents(".descriptionWrap").fadeOut(), a.parents(".bodWrap").removeAttr("style")
        }, 200)
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
        a.parents("ul").prev("ul").find("li").removeClass("activated"), a.parents("ul").prev("ul").find("li").hide(), E = a.index(), a.parents("ul").prev("ul").find("li").eq(E).fadeIn(), $(this).addClass("activate").parent("li").siblings("li").find("a").removeClass("activate"), F = $(".banner ul.sliderNav li a.activate").parent("li").index(), $("ul.bannerUL li").eq(F).addClass("activated"), clearTimeout(D), D = setTimeout(function () {
            $(".banner").is(":visible") && (F == o - 1 ? $(".banner ul.sliderNav li").eq(0).find("a").trigger("click") : $(".banner ul.sliderNav li a.activate").parents("li").next().find("a").trigger("click"))
        }, 6e3);
        //pause the banner
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
         //End pause the banner
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
    $("ul.fixedUL li a.buyOnline").click(function () {
        if ((w = $(window).width()) <= 1024 && $("html,body").animate({
                scrollTop: 0
            }, 200), $(this).parent("li").hasClass("selected")) $("a.closePopup").trigger("click");
        else {
            var a = parseInt($(this).parent().index());
            J = $(this).attr("class"), K = $("ul.fixedUL li .login").length > 0 ? 1 : "0", "login" != J && "getCall" != J && (a = parseInt(a - K), $(this).parent("li").addClass("selected").siblings("li").removeClass("selected"), $(".rhsBoxDetailWrap").addClass("activate"), $(".rhsBoxDetails .rhsboxWrap").eq(a).fadeIn().siblings(".rhsboxWrap").hide(), $(".overlay").fadeIn(), 0 == a && setTimeout(function () {
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
    var L, M, N = function () {
            $("ul.plansUL li").removeAttr("style"), L = parseInt($(".rhsboxWrap").css("width")), M = parseInt($("ul.plansUL > li").css("width"));
            var e, f = $("ul.plansUL > li").length,
                b = Math.round(L / M),
                a = 0;
            for (h = 0; h <= f; h++) {
                for (var c = h; c < b + h; c++) a < (e = parseInt($("ul.plansUL > li").eq(c).css("height"))) && (a = e);
                for (var d = h; d < b + h; d++) $("ul.plansUL > li").eq(d).css("height", a);
                h += b - 1, a = 0
            }
        },
        p = function () {
            $("ul.reportUL > li").removeAttr("style");
            for (var b = $("ul.reportUL").length, a = 0; a < b; a++) L = parseInt($("ul.reportUL").eq(a).css("width")), M = parseInt($("ul.reportUL").eq(a).find("li").css("width")), $("ul.reportUL").eq(a).find("li").length
        },
        q = function () {
            $("ul.planUL > li").removeAttr("style");
            for (var b = $("ul.planUL").length, a = 0; a < b; a++) L = parseInt($("ul.planUL").eq(a).css("width")), M = parseInt($("ul.planUL").eq(a).find("li").css("width")), $("ul.planUL").eq(a).find("li").length
        },
        r = function () {
            $("ul.landingUL > li").removeAttr("style"), $("ul.landingUL > li .boxInfo").removeAttr("style");
            for (var b = $("ul.landingUL").length, a = 0; a < b; a++) L = parseInt($("ul.landingUL").eq(a).css("width")), M = parseInt($("ul.landingUL").eq(a).find("li").css("width")), $("ul.landingUL").eq(a).find("li").length
        };
    p(), q(), r(), $("select").each(function () {
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
    }), $(".more-clk").click(function (a) {
        $(".hidden-links").toggleClass("d-none"), a.stopPropagation()
    })
}), $(document).ready(function () {
    $(".calc-click").click(function () {
        $(".rem-buy-cal").addClass("dd-block")
    })
}), $(".buy-life-slick").slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: true,
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
})
/*crspdf scroll to section v*/
