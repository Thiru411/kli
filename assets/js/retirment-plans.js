$("#readMoreContent").click(function () {
  if ($(".contenttable").hasClass("show-more-height")) {
    $(this).text("Read Less");
    $(this).css("bottom", "-15px");
    $(".contenttable").css("borderBottom", "1px solid #dbdbdb")
  } else {
    $(this).text("Read More");
    $(this).css("bottom", "0");
    $(".contenttable").css("borderBottom", "none")
  }

  $(".contenttable").toggleClass("show-more-height");
});
