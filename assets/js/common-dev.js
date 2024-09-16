$(document).ready(function() {
    function e(e, o, t, s) { var c = new Date;
        c.setTime(c.getTime() + 24 * t * 60 * 60 * 1e3); var i = c.toUTCString();
        document.cookie = e + "=" + o + ";expires=" + i + ";path=" + s + ";" }
    $(document).on("click", ".customer-type", function() { var o = $(this).attr("data-customer-type");
        console.log("Test=" + o), console.log(1), "existing_customer" == o ? e("kotak_customer_type", "existing_customer", 1825, "/") : "new_customer" == o ? e("kotak_customer_type", "new_customer", 1825, "/") : "life_advisor" == o && e("kotak_customer_type", "life_advisor", 1825, "/"), $(this).hasClass("mobDev"), window.location = base_url, console.log(2) }) });