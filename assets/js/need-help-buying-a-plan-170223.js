function lifeAdvisorFormGATrigger(e, r, t) {
    if (dataLayer) {
        var i = "";
        if (t)
            switch (r) {
                case "customer_name":
                    i = "your name";
                    break;
                case "mobile_number":
                    i = "mobile number";
                    break;
                case "city":
                    i = "select city";
                    break;
                case "customer":
                    i = "select customer";
                    break;
                case "plan_selected":
                    i = "select plan";
                    break;
                case "terms":
                    i = "terms checkbox";
                    break;
                case "customer_email":
                    i = "your email";
                    break;
                default:
                    i = "";
            }
        i || (i = r), dataLayer.push({ event: "event form", category: "form|request a life advisor", action: e, label: i });
    }
}
$(document).ready(function () {
    $(document).on("click", "#lifeAdvisorFormBack", function () {
        $(".buyForm .thankyouBox").hide(), $("#lifeAdvisorForm").show();
    }),
        $(document).on("click", "#clearLifeAdvisor", function () {
            $("#lifeAdvisorForm")[0].reset(),
                grecaptcha.reset(requestalifeadvisor),
                $('[name="customer_name"]').val("Your Name"),
                $('[name="mobile_number"]').val("Mobile Number"),
                $('[name="customer_email"]').val("Your Email"),
                $(".input_error").text(""),
                $(".errorMsg").css("display", "none"),
                $('[name="city"]').prev().text($('[name="city"] option:selected').val()),
                $('[name="customer"]').prev().text($('[name="customer"] option:selected').val()),
                $('[name="plan_selected"]').prev().text($('[name="plan_selected"] option:selected').val()),
                lifeAdvisorFormGATrigger("clear", "", !1);
        }),
        $(document).on("click", "#submitLifeAdvisor", function () {
            $(".input_error").text(""), $(".errorMsg").css("display", "none"), $("#lifeAdvisorFormStatusMessage").text(""), $("#submitLifeAdvisor").text("submitting..."), $("#submitLifeAdvisor").attr("disabled", !0);
            var e = $.trim($('[name="customer_name"]').val()),
                r = $.trim($('[name="mobile_number"]').val()),
                t = $.trim($('[name="city"]').val()),
                i = $.trim($('[name="customer"]').val()),
                o = $.trim($('[name="plan_selected"]').val()),
				pc = $.trim($('[name="pincode"]').val()),
				
                s = new RegExp(/^[789]\d{9}$/i),
                a = (new RegExp(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/), !0);
            if (
                ("" == e || "Your Name" == e
                    ? ($("#customer_name_error").text("Hey, it seems you have missed out to write your name."), (a = !1), lifeAdvisorFormGATrigger("skipped", "your name", !1))
                    : lifeAdvisorFormGATrigger("completed", "your name", !1),
                "" == r || "Mobile Number" == r
                    ? ($("#mobile_number_error").text("Hey, it seems you have missed out to write your number."), (a = !1), lifeAdvisorFormGATrigger("skipped", "mobile number", !1))
                    : r.length < 10 || !s.test(r)
                    ? ($("#mobile_number_error").text("Please Enter a vaild Mobile Number"), (a = !1), lifeAdvisorFormGATrigger("skipped", "mobile number", !1))
                    : lifeAdvisorFormGATrigger("completed", "mobile number", !1),
                "" == t || "Select City" == t
                    ? ($("#city_error").text("Hey, it seems you have missed out to select your city."), (a = !1), lifeAdvisorFormGATrigger("skipped", "select city", !1))
                    : lifeAdvisorFormGATrigger("completed", "select city", !1),
					
					"" == pc || "Select City" == pc
                    ? ($("#pincode_error").text("Hey, it seems you have missed out to enter pincode."), (a = !1), lifeAdvisorFormGATrigger("skipped", "pincode", !1))
                    : lifeAdvisorFormGATrigger("completed", "pincode", !1),
					
                "" == i || "Select Customer" == i
                    ? ($("#customer_error").text("Are you a existing or a new Customer?"), (a = !1), lifeAdvisorFormGATrigger("skipped", "select customer", !1))
                    : lifeAdvisorFormGATrigger("completed", "select customer", !1),
                "" == o || "Select Plan" == o
                    ? ($("#plan_selected_error").text("Selection of an insurance category will have help us to suggest your kind of plans."), (a = !1), lifeAdvisorFormGATrigger("skipped", "select plan", !1))
                    : lifeAdvisorFormGATrigger("completed", "select plan", !1),
                0 == $('[name="terms"]').prop("checked")
                    ? ($("#terms_error").text("Accepting T&C would help us to contact you quickly."), (a = !1), lifeAdvisorFormGATrigger("skipped", "terms checkbox", !1))
                    : lifeAdvisorFormGATrigger("completed", "terms checkbox", !1),
                !a)
            )
                return $(".errorMsg").css("display", "block"), $("#submitLifeAdvisor").text("submit"), $("#submitLifeAdvisor").attr("disabled", !1), lifeAdvisorFormGATrigger("submit failed", "", !1), !1;
            $.ajax({
                url: base_url + "request-a-life-advisor/submit",
                type: "POST",
                dataType: "JSON",
                data: new FormData($("#lifeAdvisorForm")[0]),
                contentType: !1,
                cache: !1,
                processData: !1,
                success: function (e) {
                    if (e.status){
                        $("#lifeAdvisorFormStatusMessage").text(""),
                            $("#lifeAdvisorForm")[0].reset(),
                            grecaptcha.reset(requestalifeadvisor),
                            $('[name="customer_name"]').val("Your Name"),
                            $('[name="mobile_number"]').val("Mobile Number"),
							$('[name="pincode"]').val("Pincode"),
                         //   $('[name="customer_email"]').val("Your Email"),
                            $('[name="city"]').prev().text($('[name="city"] option:selected').val()),
                            $('[name="customer"]').prev().text($('[name="customer"] option:selected').val()),
                            $('[name="plan_selected"]').prev().text($('[name="plan_selected"] option:selected').val()),
                            $(".errorMsg").css("display", "none"),
                            $(".buyForm .thankyouBox #thankyou-message").text(e.status_message),
                            $(".buyForm .thankyouBox").show(),
                            $("#lifeAdvisorForm").hide(),
                            lifeAdvisorFormGATrigger("submit successful", (t + "|" + i + "|" + o).toLowerCase(), !1);
					}     else {
                        for (var r = 0; r < e.inputerror.length; r++)
                            $('[name="' + e.inputerror[r] + '"]').addClass("has-error"),
                                $("#lifeAdvisorForm #" + e.inputerror[r] + "_error").text(e.error_string[r]),
                                $(".errorMsg").css("display", "block"),
                                lifeAdvisorFormGATrigger("skipped", e.inputerror[r], !0);
                        $("#lifeAdvisorFormStatusMessage").text(e.status_message);
                    }
                    $("#submitLifeAdvisor").text("submit"), $("#submitLifeAdvisor").attr("disabled", !1);
                },
                error: function (e, r, t) {
                    alert("Something Went Wrong!"), $("#submitLifeAdvisor").text("submit"), $("#submitLifeAdvisor").attr("disabled", !1), lifeAdvisorFormGATrigger("submit failed", "", !1);
                },
            });
        });
});
