var winWidth = $(window).width(),
    winHeight = $(window).height();
function faqs() {
    $(".accordList .accordLinks").click(function (e) {
        var link = $(this),
            parentElm = link.closest(".accordItem");
        link.hasClass("active")
            ? (parentElm.find(".accordDesc").removeClass("active"), link.removeClass("active"), parentElm.find(".accordDesc").slideUp())
            : ($(".accordList").find(".accordDesc").removeClass("active"),
              $(".accordList").find(".accordLinks").removeClass("active"),
              $(".accordList").find(".accordDesc").slideUp(),
              parentElm.find(".accordDesc, .accordLinks").addClass("active"),
              parentElm.find(".accordDesc").slideDown());
    });
}
function showscrollDiv() {
    var y = $(this).scrollTop();
    $(window).height() - $("header").outerHeight() < y ? $(".js_scrollTop").fadeIn() : $(".js_scrollTop").fadeOut();
}
function scrolltoTop() {
    $(document).on("click", ".js_scrollTop", function () {
        return $("html, body").animate({ scrollTop: 0 }, "slow"), !1;
    });
}
function Tab() {
    $(document).on("click", ".bs-tab .nav-item", function () {
        $(this).parents(".nav-tabs").find(".nav-item").removeClass("active"), $(this).addClass("active");
        var tabIndex = $(this).index();
        $(this).parents(".bs-tab").find(".tab-pane").removeClass("active"), $(this).parents(".bs-tab").find(".tab-pane").eq(tabIndex).addClass("active");
    });
}
function rangesliders() {
    $(".range-control").each(function () {
        parseFloat($(this).parents(".range-wrap").find(".range-control").attr("min")), parseFloat($(this).parents(".range-wrap").find(".range-control").attr("max"));
        $(this)
            .rangeslider({
                polyfill: !1,
                onSlideEnd: function () {
                    $(".card").find(".input-wrap").removeClass("focusState");
                },
            })
            .on("input", function () {
                $(this).parents(".range-wrap").find(".form-control").val(this.value).trigger("keyup"),
                    $(this).parents(".card").find(".input-wrap").removeClass("focusState"),
                    $(this).parents(".range-wrap").find(".input-wrap").addClass("focusState"),
                    $(this).parents(".range-wrap").find(".input-wrap").removeClass("error");
            });
    }),
        $(".form-control").on("blur", function () {
            var amtMin = parseFloat($(this).parents(".range-wrap").find(".range-control").attr("min")),
                amtMax = parseFloat($(this).parents(".range-wrap").find(".range-control").attr("max")),
                trigVal = $(this).val().replace(/,/g, "");
            amtMax < trigVal || "" == trigVal || trigVal < amtMin || "" == trigVal
                ? $(this).parent().addClass("error")
                : ($(this).parents(".range-wrap").find(".range-control").val(trigVal).trigger("change"), $(this).parent().removeClass("error"));
        }),
        $(".form-control").on("focus", function () {
            $(this).parents(".card").find(".input-wrap").removeClass("focusState"), $(this).parents(".range-wrap").find(".input-wrap").addClass("focusState");
        }),
        $(".form-control").on("blur", function () {
            $(".card").find(".input-wrap").removeClass("focusState");
        });
}
function typeAmountComma() {
    $(".comma").keyup(function () {
        var newvalue = $(this).val().replace(/,/g, ""),
            newvalue = Number(newvalue).toLocaleString("en-IN");
        $(this).val(newvalue);
    });
}
$(document).ready(function () {
    showscrollDiv(), scrolltoTop(), Tab(), $(".accordDesc").hide(), faqs(), rangesliders(), typeAmountComma();
}),
    $(window).on("load", function () {});
