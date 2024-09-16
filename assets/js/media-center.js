$(document).ready(function() {
    $('.fb').click(function() {
        var title = $(this).attr('data-title'),
            image = $(this).attr('data-image'),
            desc = $(this).attr('data-desc'),
            url = $(location).attr('href');
        window.open('https://www.facebook.com/dialog/feed?app_id=253017248432355&display=popup&name=' + encodeURIComponent(title) + '&caption=' + encodeURIComponent(title) + '&description=' + encodeURIComponent(desc) + '&link=' + encodeURIComponent(url) + '&picture=' + image, "", "width=650,height=400,top=200,left=250");
        return false;
    });

    $('.twt').click(function() {
        var url = $(location).attr('href'),
            desc = $(this).attr('data-desc');
        window.open('https://twitter.com/share?url=' + escape(url) + '&text=' + desc, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        return false;
    });

    /*Media Center Start*/
    var resArrayData = [];
    $("#btnSerach").click(function() {
        var fdate = $("#calFrom").val();
        var tdate = $("#calTo").val();
        var txtKeyword = $("#txtKeyword").val();
        var publicationName = $("#publicationName").val();

        var fromdate = moment(fdate, 'DD/MM/YYYY').unix();
        var todate = moment(tdate, 'DD/MM/YYYY').unix();

        if ((fdate == "" && tdate != "") || (fdate != "" && tdate == "")) {
            alert("Please select the year properly");
            return false;
        }


        if (fdate == "From Date") {
            fromdate = "";
        }
        if (tdate == "To Date") {
            todate = "";
        }

        if (publicationName != "" && fromdate == "" && todate == "" && txtKeyword == "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if (index.publication == publicationName) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName == "" && fromdate != "" && todate != "" && txtKeyword == "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if ((index.dateNew >= fromdate) && (index.dateNew <= todate)) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName == "" && fromdate == "" && todate == "" && txtKeyword != "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if (index.kli_title.toLowerCase().indexOf(txtKeyword.toLowerCase()) != -1) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName != "" && fromdate != "" && todate != "" && txtKeyword == "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if ((index.publication == publicationName) && (index.dateNew >= fromdate) && (index.dateNew <= todate)) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName != "" && fromdate != "" && todate != "" && txtKeyword != "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if ((index.publication == publicationName) && (index.dateNew >= fromdate) && (index.dateNew <= todate) && (index.kli_title.toLowerCase().indexOf(txtKeyword.toLowerCase()) != -1)) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName == "" && fromdate != "" && todate != "" && txtKeyword != "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if ((index.dateNew >= fromdate) && (index.dateNew <= todate) && (index.kli_title.toLowerCase().indexOf(txtKeyword.toLowerCase()) != -1)) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else if (publicationName != "" && fromdate == "" && todate == "" && txtKeyword != "Search for keyword") {
            resArrayData = jQuery.grep(jsonData, function(index, i) {
                if ((index.publication == publicationName) && (index.kli_title.toLowerCase().indexOf(txtKeyword.toLowerCase()) != -1)) { return true; }
            });
            updateTableArchives(resArrayData, gaCat);
        } else {
            updateTableArchives(jsonData, gaCat);
        }
        console.log(resArrayData);
    });

    updateTableArchives(jsonData, gaCat);

    function updateTableArchives(json, gaCat) {
        var $container = $("#resUL");
        var $pagi = $("#resPg");
        $container.empty();
        $pagi.empty();
        var pagenum = Math.ceil(json.length / 8);
        var cls_css = "";
        var j = 1;
        if (json.length > 0) {
            for (var i = 0; i < json.length; i++) {
                if (i >= json.length) {
                    break;
                }
                if (i > 7) { var cls_css = " class='deactive_li'"; }
                //var readMore = base_url +"why-kotak-life/media-center-details/"+ json[i].entry_id +"/2";
                //var res = readMore.replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                var pdf_url = json[i].kli_pdf_url;
                if (pdf_url != "") {
                    var readMore = pdf_url.replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                } else {
                    var readMore = json[i].urlLink;
                }

                //$container.append("<li "+cls_css+" alt='"+j+"'><div class='reportBox'><h3>" + json[i].kli_date + "</h3><p>" + json[i].kli_title + "</p><a href='" + readMore + "' class='newsIcon'>Read more</a></div></li>");
                var kli_ttl = json[i].kli_title;
                if (kli_ttl.length > 50) { kli_tl = kli_ttl.substring(0, 50) + "..."; } else { kli_tl = kli_ttl; }

                //var ga = "dataLayer.push({'event':'event media center news', 'category':'"+gaCat+"', 'action':'media center','label':'news|"+readMore+"'});";	
                $container.append("<li " + cls_css + " alt='" + j + "'><div class='reportBox'><h3>" + kli_tl + "</h3><p>" + json[i].kli_date + "</p><a data-label='news|" + kli_tl + "' data-event='event media center news' data-action='media center' href='" + readMore + "' class='newsIcon ga_track' target='_blank'>Read more</a></div></li>");
                j++;
            }
            for (var i = 1; i <= pagenum; i++) {
                if (i == 1) { var cls_act = "selected"; } else { var cls_act = ""; }
                $pagi.append("<li><a class='pagination " + cls_act + "' id='" + i + "' href='javascript:;'>" + i + "</a></li>");
            }
        } else {
            $container.append("<span style='color:red;font-size:22px;float:left;width:100%;text-align:center;'>No Records Found</span>");
        }
        gridBox01();
    }

    $(document).on("click", '.pagination', function(event) {
        $('a.pagination').removeClass("selected");
        $(this).addClass("selected");

        var id = this.id;
        var start = 8 * (id - 1) + 1;
        var end = 8 * id;

        $("#resUL li").each(function(index) {
            $(this).removeClass();
            var num = $(this).attr("alt");
            if (num >= start && num <= end) {
                $(this).addClass("active_li");
            } else {
                $(this).addClass("deactive_li");
            }
        });
        gridBox01();
    });

    var resArray1 = [];
    var $yearDropDown1 = $("#pressReleaseDD");

    updateTable(json1, 1, gaCat);
    $yearDropDown1.change(function() {
        var selecedyear = this.value;
        if (selecedyear != "") {
            resArray1 = jQuery.grep(json1, function(index, i) {
                return index.financialYear == selecedyear;
            });
            updateTable(resArray1, 1, gaCat);
        } else {
            updateTable(json1, 1, gaCat);
        }
    });

    var resArray2 = [];
    var $yearDropDown2 = $("#ourCampaignDD");

    updateTable(json2, 2, gaCat);
    $yearDropDown2.change(function() {
        var selecedyear = this.value;
        if (selecedyear != "") {
            resArray2 = jQuery.grep(json2, function(index, i) {
                return index.financialYear == selecedyear;
            });
            updateTable(resArray2, 2, gaCat);
        } else {
            updateTable(json2, 2, gaCat);
        }
    });

    function updateTable(json, flag, gaCat) {
        if (flag == 1) {
            var $container = $("#pressReleaseUL");
            $container.empty();
            if (json.length > 0) {
                for (var i = 0; i < 9; i++) {
                    if (i >= json.length) {
                        break;
                    }
                    //for (var i = 0; i < json.length; i++){
                    var pdf_url = json[i].pressRelease_pdf;
                    var res = pdf_url.replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                    //$container.append("<li><div class='reportBox'><h3>" + json[i].pressRelease_date + "</h3><p>" + json[i].pressRelease_description + "</p><a target='_blank' href=" + base_url+res + " class=''>Download</a></div></li>");
                    var kli_des = json[i].pressRelease_description;
                    if (kli_des.length > 50) { kli_desc = kli_des.substring(0, 50) + "..."; } else { kli_desc = kli_des; }

                    //var ga = "dataLayer.push({'event':'event press release download', 'category':'"+gaCat+"', 'action':'media center','label':'press|"+base_url+res+"'});";

                    $container.append("<li><div class='reportBox'><h3>" + kli_desc + "</h3><p>" + json[i].pressRelease_date + "</p><a data-event='event press release download' data-action='media center' data-label='press|" + kli_desc + "' target='_blank' href=" + base_url + res + " class='ga_track'>Download</a></div></li>");
                }
            } else {
                $container.append("<span class='noRecordDiv'>Sorry.</br>We do not have any Press Releases matching to your selection.</br>Kindly change your selection and try again.</span>");
            }

        } else if (flag == 2) {
            var $container = $("#ourCampaignUL");
            $container.empty();
            if (json.length > 0) {
                for (var i = 0; i < json.length; i++) {
                    if (i >= json.length) {
                        break;
                    }
                    var pdf_url = json[i].ourCamp_imgurl;
                    var res = pdf_url.replace("{filedir_9}", "assets/images/uploads/why_kotak/");
                    //json[i].ourCamp_vediolink = "";
                    if (json[i].ourCamp_vediolink != "") {
                        var videoLink = "<a href='javascript:;' rel='" + json[i].ourCamp_vediolink + "' class='videoIcon'>Video</a>";
                        var clsImg = "";
                    } else {
                        var videoLink = "";
                        var clsImg = "detailsImg";
                    }
                    //alert(base_url+res);
                    //$container.append("<li> <img src=" + json[i].ourCamp_imgurl + "><a href='javascript:;' rel=" + json[i].ourCamp_vediolink + "class='videoIcon'>Video</a><div class='details'><p>" + json[i].ourCamp_description + "</p></div></li>");

                    var ga = "dataLayer.push({'event':'event campaign video thumb', 'category':'" + gaCat + "', 'action':'media center','label':'video played|" + json[i].ourCamp_description + "'});";

                    $container.append("<li onClick='" + ga + "' style='height: 327px;'><img src='" + base_url + res + "'>" + videoLink + "<div class='details " + clsImg + "'><div class='details01'><p>" + json[i].ourCamp_description + "</p></div></div></li>");
                    //$container.append("<li><img src='../assets/images/campaign_01.jpg' alt='Camapaign' /> <a href='javascript:;' rel='https://www.youtube.com/embed/2ayh7cxlh3o?rel=0&amp;autoplay=1' class='videoIcon'>Video</a><div class='details'><p>darshan test</p></div></li>");
                }
            } else {
                $container.append("<span class='noRecordDiv'>Oops.</br>We do not have any Campaigns matching your selection.</br>Kindly change your selection and try again.</span>");
            }
        }
        setTimeout(function() {
            gridBox01();
        }, 300);
    }

    function gridBox01() {
        $('ul.reportUL > li').removeAttr('style');
        var reportUL_Len = $('ul.reportUL').length;
        var mxHt = 0,
            ht;

        for (var x = 0; x < reportUL_Len; x++) {
            maxDivWid = parseInt($('ul.reportUL').eq(x).css('width'));
            divWid = parseInt($('ul.reportUL').eq(x).find('li').css('width'));
            var divLen = $('ul.reportUL').eq(x).find('li').length;
            var boxLenRow = Math.round(maxDivWid / divWid);
            var boxRowCount = Math.ceil(divLen / boxLenRow);

            for (h = 0; h < divLen; h++) {
                for (var i = h; i < (boxLenRow + h); i++) {
                    ht = parseInt($('ul.reportUL').eq(x).find(' > li').eq(i).css("height"));
                    if (mxHt < ht) {
                        mxHt = ht;
                    }
                }
                for (var k = h; k < (boxLenRow + h); k++) {
                    $('ul.reportUL').eq(x).find(' > li').eq(k).css("height", mxHt);
                }
                h += (boxLenRow - 1);
                mxHt = 0;
            }
        }
    }

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }
        //console.log(date);
        return date;
    }

    $("#calFrom, #calTo").datepicker({ dateFormat: 'dd/mm/yy', maxDate: 0 }).on("change", function(e) {
        getDate(this);
    });
    /*Media Center End*/
});