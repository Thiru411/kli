
// $('.viewBtn').click(function () {
//     $('#moreText').slideToggle();
//     if ($('.viewBtn').text() == "View All") {
//       $(this).text("View less")
//     } else {
//       $(this).text("View All")
//     }
//   });

        $(document).ready(function() {
            $('.viewBtn').click(function() {
                $('#moreText').slideToggle();
                if ($(this).text() === "View All") {
                    $(this).text("View less");
                } else {
                    $(this).text("View All");
                }
            });
        });
    