 setInterval((function() {
$(".slider").slick({
    dots: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 4,
      pauseOnHover:true,
    autoplay: !0,
    autoplaySpeed: 2e3,
    slidesToScroll: 4,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: !0,
            dots: !0
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: !0
        }
    }]
})
      }), 9000);
    
    $(".family-slick").slick({
    dots: !0,
    infinite: !1,
    speed: 100,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: !0,
    arrows: !0,
    dots: !1
}), $(document).ready(function () {
    $.validator.addMethod("usernameRegex", function (e, n) {
        return this.optional(n) || /^[a-zA-Z0-9]*$/i.test(e)
    }, "Username must contain only letters, numbers"), $(".next").click(function () {
        $(".number_li").addClass("selected");
        var e = $("#myform");
        e.validate({
            errorElement: "span",
            errorClass: "help-block",
            highlight: function (e, n, t) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function (e, n, t) {
                $(e).closest(".form-group").removeClass("has-error")
            },
            rules: {
                username: {
                    required: !0,
                    usernameRegex: !0,
                    minlength: 6
                },
                number: {
                    required: !0,
                    minlength: 10
                },
                age: {
                    required: !0
                },
                need: {
                    required: !0
                },
                name: {
                    required: !0,
                    minlength: 3
                }
            },
            messages: {
                username: {
                    required: "Username required"
                },
                number: {
                    required: "Number required"
                },
                name: {
                    required: "Name required"
                },
                age: {
                    required: "Age group required"
                },
                need: {
                    required: "Please select your need"
                }
            }
        }), !0 === e.valid() && ($("#account_information").is(":visible") ? (current_fs = $("#account_information"), next_fs = $("#company_information")) : $("#company_information").is(":visible") && (current_fs = $("#company_information"), next_fs = $("#personal_information")), next_fs.show(), current_fs.hide())
    }), $(".prev").click(function () {
        $("#company_information").is(":visible") ? (current_fs = $("#company_information"), next_fs = $("#account_information")) : $("#personal_information").is(":visible") && (current_fs = $("#personal_information"), next_fs = $("#company_information")), next_fs.show(), current_fs.hide()
    })
}), document.addEventListener("DOMContentLoaded", function () {
    var e;
    if ("IntersectionObserver" in window) {
        e = document.querySelectorAll(".lazy");
        var n = new IntersectionObserver(function (e, t) {
            e.forEach(function (e) {
                if (e.isIntersecting) {
                    var t = e.target;
                    t.src = t.dataset.src, t.classList.remove("lazy"), n.unobserve(t)
                }
            })
        });
        e.forEach(function (e) {
            n.observe(e)
        })
    } else {
        var t;

        function o() {
            t && clearTimeout(t), t = setTimeout(function () {
                var n = window.pageYOffset;
                e.forEach(function (e) {
                    e.offsetTop < window.innerHeight + n && (e.src = e.dataset.src, e.classList.remove("lazy"))
                }), 0 == e.length && (document.removeEventListener("scroll", o), window.removeEventListener("resize", o), window.removeEventListener("orientationChange", o))
            }, 20)
        }
        e = document.querySelectorAll(".lazy"), document.addEventListener("scroll", o), window.addEventListener("resize", o), window.addEventListener("orientationChange", o)
    }
}), $(document).ready(function () {
    $(window).scroll(function () {
        $(this).scrollTop() > 50 ? ($("header").addClass("box-hover"), $(".online-but").addClass("content_css")) : ($("header").removeClass("box-hover"), $(".online-but").removeClass("content_css"))
    })
});
var $input = $("#txtAcrescimo");
$input.val(1), $(".slick-next").click(function () {
    $(this).hasClass("slick-next") && parseInt($input.val()) <= 5 && $input.val(parseInt($input.val()) + 1)
}), $(".slick-prev").click(function () {
    $(this).hasClass("slick-prev") && parseInt($input.val()) >= 2 && $input.val(parseInt($input.val()) - 1)
});
var x = 0,
    span = document.querySelector("span"),
    increment = document.getElementById("increment"),
    decrement = document.getElementById("decrement");
increment.addEventListener("click", function () {
    span.textContent = x++
}), decrement.addEventListener("click", function () {
    span.textContent = x--
}), $(function () {
    $(".selected").click(function () {
        $(this).hasClass("active") ? $(this).removeClass("active") : $(this).addClass("active")
    })
}), $(".formvalidation").bootstrapValidator({}).on("success.form.bv", function (e) {
    e.preventDefault();
    var n = $(e.target);
    fv = n.data("formValidation"), null != n.attr("action") && (n.unbind("submit"), n.submit())
}), $(".js-example-placeholder-single").select2({
    placeholder: "Choose your need"
}), $(".demo").select2({
    placeholder: "Choose your need"
}), $(".on-hover1").hover(function () {
    $(".add-block").toggleClass("d-none"), $(".rem-none").toggleClass("d-none")
});
