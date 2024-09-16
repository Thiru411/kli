var customer_type = $('.customer-type').attr('data-customer-type'),
    categoryGA = '';
if (customer_type == 'existing_customer') {
    categoryGA = 'existing customers';
} else if (customer_type == 'new_customer') {
    categoryGA = 'new customers';
} else if (customer_type == 'life_advisor') {
    categoryGA = 'life advisor';
} else {
    categoryGA = 'new customers';
}

var gridBox01 = function() {
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
        //console.log('boxLenRow-->'+boxLenRow+' ..................boxRowCount-->'+boxRowCount+'...............calculation--?>'+(boxLenRow)+'          divLen-->'+divLen)

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

};

var loadArticleData = function(sort_type) {
	
    var pageNo = parseInt($('#pageNo').val()),
	url = $('#url').val(),
        sortType = $('#sortType').val(),
        pageLimit = $('#pageLimit').val(),
        topicSlug = $('#topicSlug').val(),
        searchArticle = $('#searchArticle').val(),
        baseurl = $('base').attr('href'),
        pageType = $('#pageType').val(),
        href = pageType == 'topic' ? baseurl + 'insurance-guide/articles/load-more' : baseurl + 'insurance-guide/tag-articles/load-more',
        post_data = { page: pageNo, sortType: sortType, topicSlug: topicSlug, searchArticle: searchArticle,url:url };
    $('.noRecord').text('').css("display", "none");//alert(searchArticle);
    $('#load-more-articles').css("display", "none");
    $('.innerLoader').css("display", "block");
    $.ajax({
        url: href,
        type: 'post',
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(post_data),
        dataType: "json",
        success: function(data) {//console.log(data+'==testing');
		
            var newdata = data,
                nextDataCount = newdata.nextDataCount;
				console.log(nextDataCount);
            if (newdata.success) {
                var arraydata = newdata.data,
                    article_title = '',
                    short_description = '',
                    simpletext = new RegExp(searchArticle, "gi"),
                    newhtmldata = '',
                    eventGA = 'event insurance guide read more',
                    actionGA = '',
                    labelGA = '',
                    topic_name = '';
                if (arraydata.length) {
                    $('#pageNo').val(parseInt(pageNo) + 1);
					newhtmldata=newdata.newhtmldata;console.log(newdata.newhtmldata);
                    /*for (i = 0; i < arraydata.length; i++) {
                        article_title =  arraydata[i].article_title;
                        short_description = (searchArticle != '') ? arraydata[i].short_description.replace(simpletext, '<b>' + searchArticle + '</b>') : arraydata[i].short_description;
                        topic_name = pageType == 'tag' ? '<h4>' + arraydata[i].title + '</h4>' : '';
                        actionGA = pageType == 'tag' ? 'tag' : arraydata[i].title.toLowerCase();
                        labelGA = 'read more|' + arraydata[i].article_title.toLowerCase();
                        dynamicActionGA = actionGA;
                        newhtmldata += '<li><div class="reportBox"><div class="img"><img src="' + arraydata[i].article_image + '" alt="Topic Icon"></div><div class="detail">' + topic_name + '<ul class="dateInfo"><li>' + arraydata[i].posted_date + '</li><li><a href="javascript:;" class="views">' + arraydata[i].viewed_count + '</a></li></ul><h3>' + article_title + '</h3><p>' + short_description + '</p><a href="' + baseurl + 'insurance-guide/' + arraydata[i].topic_url_title + '/' + arraydata[i].url_title + '" class="links"  onclick="dataLayer.push({\'event\': \'' + eventGA + '\', \'category\': \'' + categoryGA + '\', \'action\': \'' + actionGA + '\', \'label\': \'' + labelGA + '\'});">Read more</a></div></div></li>';
                    }
*/
                    $("#articles-div").append(newhtmldata);

                   /* if (searchArticle.length >= 1 && pageNo == 0) {
                        //GA code Variables
                        eventGA = 'event search';
                        categoryGA = 'search';
                        labelGA = searchArticle.toLowerCase();
                        dataLayer.push({ 'event': eventGA, 'category': categoryGA, 'action': actionGA, 'label': labelGA });
                    }*/
                }

                if ((arraydata.length < pageLimit) || nextDataCount == 0) {
                    if (pageNo == 0 && arraydata.length == 0) {
                        $('.noRecord').text('').text(newdata.message).css("display", "block");
                    }
                    $('#load-more-articles').css("display", "none");
                } else {
                    $('#load-more-articles').css("display", "table");
                }

                $('.innerLoader').css("display", "none");
                gridBox01();
            }
        }
    });

};

var loadGlossaryData = function(sort_type) {
    var pageNo = $('#pageNo').val(),
        keyword = $('#keyword').val(),
        pageLimit = $('#pageLimit').val(),
        baseurl = $('base').attr('href'),
        href = baseurl + 'insurance-guide/glossary/load-more',
        post_data = { page: pageNo, keyword: keyword };
    /* Clear form error & success messages */
    $('#users-name-error, #users-email-error, #users-keyword-error, #form-success, #form-error').text('').css("display", "none");

    $('.noRecord').text('').css("display", "none");
    $('#load-more-glossary').css("display", "none");
    $('.innerLoader').css("display", "block");
    $.ajax({
        url: href,
        type: 'post',
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(post_data),
        dataType: "json",
        success: function(data) {
            var newdata = data,
                nextDataCount = newdata.nextDataCount;
            if (newdata.success) {
                var arraydata = newdata.data,
                    simpletext = new RegExp(keyword, "gi"),
                    title = '',
                    description = '',
                    eventGA = 'event glossary alphabets search',
                    actionGA = 'glossary search clicks',
                    labelGA = '',
                    newhtmldata = '';
                if (arraydata.length) {
                    $('#pageNo').val(parseInt(pageNo) + 1);
                    for (i = 0; i < arraydata.length; i++) {
                        title = /*(keyword.length > 1) ? arraydata[i].title.replace(simpletext, '<i>' + keyword + '</i>') :*/ arraydata[i].title;
                        description = (keyword.length > 1) ? arraydata[i].description.replace(simpletext, '<b>' + keyword + '</b>') : arraydata[i].description;
                        labelGA = arraydata[i].title.toLowerCase();
                         newhtmldata += '<li class="ga_track" data-event="event glossary alphabets search" data-action="glossary search clicks" data-label="' + labelGA + '"><div class="reportBox"><h3>' + title + '</h3><p>' + description + '</p></div></li>';
                    }

                    $("#glossary-div").append(newhtmldata);

                   /* if (keyword.length >= 1 && pageNo == 0) {
                        //GA code Variables
                        eventGA = 'event search';
                        categoryGA = 'search';
                        actionGA = 'glossary';
                        labelGA = keyword.toLowerCase();
                        dataLayer.push({ 'event': eventGA, 'category': categoryGA, 'action': actionGA, 'label': labelGA });
                    }*/
                }

                if ((arraydata.length < pageLimit) || nextDataCount == 0) {
                    if (pageNo == 0 && arraydata.length == 0) {
                        $('.noRecord').text('').text(newdata.message).css("display", "block");
                    }
                    $('#load-more-glossary').css("display", "none");
                } else {
                    $('#load-more-glossary').css("display", "table");
                }

                $('.innerLoader').css("display", "none");
                gridBox01();
            } else {
                // show error message
                if (pageNo == 0) {
                    $('.noRecord').text('').text(newdata.message);
                }
            }

        }
    });

};

var loadFaqsData = function() {
    var pageNo = $('#pageNo').val(),
        keyword = $('#searchQues').val(),
        pageLimit = $('#pageLimit').val(),
        baseurl = $('base').attr('href'),
        href = baseurl + 'insurance-guide/policy-faqs/load-more',
        post_data = { page: pageNo, keyword: keyword };
    $('.noRecord').text('').css("display", "none");
    $('#load-more-faqs').css("display", "none");
    $('.innerLoader').css("display", "block");

    if (parseInt(pageNo) == 0) {
        // remove the previous tag
        if ($('script[type="application/ld+json"]').length >= 1)
            $('script[type="application/ld+json"]').remove();
    }

    $.ajax({
        url: href,
        type: 'post',
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(post_data),
        dataType: "json",
        success: function(data) {
            var newdata = data,
                simpletext = new RegExp(keyword, "gi"),
                title = '',
                description = '',
                nextDataCount = newdata.nextDataCount;
            if (newdata.success) {
                var arraydata = newdata.data,
                    eventGA = 'event policy faq',
                    actionGA = 'policy faqs',
                    labelGA = '',
                    newhtmldata = '';
                if (arraydata.length) {
                    $('#pageNo').val(parseInt(pageNo) + 1);
                    for (i = 0; i < arraydata.length; i++) {
                        title = /*(keyword.length >= 1) ? arraydata[i].title.replace(simpletext, '<i>' + keyword + '</i>') : */ arraydata[i].title;
                        description = (keyword.length >= 1) ? arraydata[i].description.replace(simpletext, '<b>' + keyword + '</b>') : arraydata[i].description;
                        labelGA = 'read more|' + arraydata[i].title.toLowerCase();
                       newhtmldata += '<li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="' + labelGA + '" ><h3><span>' + title + '</span></h3><div class="accordDesc">' + description + '</div></li>';
                        generateIndexingScripts('faqs', arraydata[i]);
                    }

                    $("#faqs-div").append(newhtmldata);

                    /*if (keyword.length >= 1 && pageNo == 0) {
                        //GA code Variables
                        eventGA = 'event search';
                        categoryGA = 'search';
                        labelGA = keyword.toLowerCase();
                        dataLayer.push({ 'event': eventGA, 'category': categoryGA, 'action': actionGA, 'label': labelGA });
                    }*/

                    $(window).scrollTop($('#faqsWrapDiv').offset().top - 50);
                }

                if ((arraydata.length < pageLimit) || nextDataCount == 0) {
                    if (pageNo == 0 && arraydata.length == 0) {
                        $('.noRecord').text('').text(newdata.message).css("display", "block");
                    }
                    $('#load-more-faqs').css("display", "none");
                } else {
                    $('#load-more-faqs').css("display", "table");
                }

                $('.innerLoader').css("display", "none");
                gridBox01();
            } else {
                // show error message
                if (pageNo == 0) {
                    $('.noRecord').text('').text(newdata.message);
                }
            }

        }
    });
}

var generateIndexingScripts = function(type, details) {
    if (type == 'insurance-guide') {
        var data = details,
            se = document.createElement('script');
			 var metadescription, titlecontent = "";
        if (($('meta[name=description]').attr("content")).length) {
            metadescription = $('meta[name=description]').attr("content");
        } else {
            metadescription = data.description;
        }
        if (($('head > title').text()).length) {
            titlecontent = $('head > title').text();
        } else {
            titlecontent = data.headline;
        }      

        se.type = "application/ld+json";
        se.id = data.entry_id;
        se.text = '{"@context": "http://schema.org","@type": "Article","datePublished": "' + data.date_published + '","dateModified": "' + data.date_modified + '","author": [{"@type": "Organization","name": "' + data.org_name + '","logo": [{"@type": "ImageObject","Url": "' +data.org_img_url + '","contentUrl": "' + data.org_content_url + '","name": "' + data.org_img_alt + '"}]}],"description": "' + metadescription + '","headline": "' + titlecontent + '","image": [{"@type": "ImageObject","Url": "' + base_url + data.img_url + '","contentUrl": "' + data.img_name + '","height": "' + data.img_height + '","width": "' + data.img_width + '","name": "' + data.page_title + '"}],"publisher": [{"@type": "Organization","name": "' + data.org_name + '","logo": [{"@type": "ImageObject","Url": "' + data.org_img_url + '","contentUrl": "' + data.org_content_url + '","name": "' + data.org_img_alt + '"}]}],"mainEntityofPage": {"@type": "WebPage"}}';
        document.getElementsByTagName('head')[0].appendChild(se);
    } else if (type == 'faqs') {
        var data = details,
            se = document.createElement('script');
        se.type = "application/ld+json";
        se.id = data.entry_id;
		var descriptioncontent="";
		if(data.schemadescription){
			descriptioncontent = data.schemadescription;
		}else{
			descriptioncontent = data.description;
		}		
        se.text = '{"@context": "http://schema.org","@type": "Question","text": "' + data.title + '","author": [{"@type": "Organization","name": "' + data.org_name + '","logo": [{"@type": "ImageObject","Url": "' + data.org_img_url + '","contentUrl": "' + data.org_content_url + '","name": "' + data.org_img_alt + '"}]}],"acceptedAnswer": {"text": "' + descriptioncontent + '","author": [{"@type": "Organization","name": "' + data.org_name + '","logo": [{"@type": "ImageObject","Url": "' + data.org_img_url + '","contentUrl": "' + data.org_content_url + '","name": "' + data.org_img_alt + '"}]}]}}';
        document.getElementsByTagName('head')[0].appendChild(se);
    } else {

    }
}

$(document).ready(function() {

    // Initial Load generateIndexingScripts
    if ($('#trackingInfo').length == 1) {
        var details = JSON.parse($('#trackingInfo').text());
        generateIndexingScripts('insurance-guide', details);
    }


    $('ul.mostVisited li a').click(function() {
        // Set active
        $('ul.mostVisited li a').removeClass('selected');
        $(this).addClass('selected');
        var sort_type = $(this).text() == 'Most Recent' ? 'recent' : 'viewed';
        $('#sortType').val('').val(sort_type);
        $('#search-article, #searchArticle').val('');
        $('#pageNo').val(0);
        $("#articles-div li").remove();
        $('#load-more-articles').text('').text('Load More').css("display", "table");
        loadArticleData();
    });

    $('#load-more-articles').click(function() {
        loadArticleData();
    });

    $('#search-article-btn').click(function(event) {
        var search_article = $.trim($('#search-article').val());

        event.preventDefault();
        if (search_article == '' || search_article == 'Search for article') {
            $('#searchArticle').val('');
            //error message
        } else {
            $('#searchArticle').val('').val(search_article);
			gaSearchTermTracking("event search", "search", $("#search-article").attr("data-action"), search_article.toLowerCase());
        }

        $('#pageNo').val(0);
        $("#articles-div li").remove();
        //$('#load-more-articles').text('').text('Loading...').css("display", "table");
        loadArticleData();
        return false;
    });

    $("#search-article").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#search-article-btn").click();
        }
    });

    // Initial Load aritcle data
    if ($('section').find("ul#articles-div").length == 1) {
        loadArticleData();
    }

    // Initial Load glossary data
    if ($('section').find("ul#glossary-div").length == 1) {
        loadGlossaryData();
    }

    // Trigger glossary alphabets click
    $('ul.glossaryUL li a').click(function() {
        // Set active
        $('ul.glossaryUL li a').removeClass('selected');
        $(this).addClass('selected');
        var keyword = $(this).text();
        $('#search-keyword').val('');
        $('#keyword').val('').val(keyword);
        $('#pageNo').val(0);
        $("#glossary-div li").remove();
        //$('#load-more-glossary').text('').text('Load More').css("display", "table");
        loadGlossaryData();
    });

    $('#load-more-glossary').click(function() {
        loadGlossaryData();
    });

    $('#search-keyword-btn').click(function(event) {
        var search_keyword = $.trim($('#search-keyword').val()),
            regex = new RegExp("^[a-zA-Z ]+$");

        event.preventDefault();
        $('ul.glossaryUL li a').removeClass('selected');
        if (search_keyword == '' || search_keyword == 'Search for word') {
            //error message
            $('ul.glossaryUL li a').eq(0).click();
        } else {
            $('#keyword').val('').val(search_keyword);
            $('#pageNo').val(0);
            $("#glossary-div li").remove();
			gaSearchTermTracking("event search", "search", $("#search-keyword").attr("data-action"), search_keyword.toLowerCase());
            //$('#load-more-glossary').text('').text('Load More').css("display", "table");
            loadGlossaryData();
        }
        return false;
    });

    $("#search-keyword").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#search-keyword-btn").click();
        }
    });

    /*FAQs*/
    // Initial Load glossary data
    if ($('section').find("ul#faqs-div").length == 1) {
        loadFaqsData();
    }
    $('#load-more-faqs').click(function() {
        loadFaqsData();
    });

    $('#search-question-btn').click(function(event) {
        var search_keyword = $.trim($('#search-question').val());

        event.preventDefault();
        if (search_keyword == '' || search_keyword == 'Search by your question') {
            $('#searchQues').val('');
            //error message
        } else {
            $('#searchQues').val('').val(search_keyword);
			gaSearchTermTracking("event search", "search", $("#search-question").attr("data-action"), search_keyword.toLowerCase());
        }

        $('#pageNo').val(0);
        $("#faqs-div li").remove();
        //$('#load-more-faqs').text('').text('Load More').css("display", "table");
        loadFaqsData();
        return false;
    });

    $("#search-question").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#search-question-btn").click();
        }
    });


    $('#user-word-submit').click(function(event) {
        event.preventDefault();
        $('.errorMsg, .successMeg').text('');

        var name = $('#users-name').val() !== 'Name' ? $('#users-name').val() : '',
            email = $('#users-email').val() !== 'Email ID' ? $('#users-email').val() : '',
            keyword = $('#users-keyword').val() !== 'Write word here' ? $('#users-keyword').val() : '',
            baseurl = $('base').attr('href'),
            href = baseurl + 'insurance-guide/glossary/add-new';

        /* Clear form error & success messages */
        $('#users-name-error, #users-email-error, #users-keyword-error, #form-success, #form-error').text('').css("display", "none");

        $.ajax({
            url: href,
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&keyword=' + keyword,
            success: function(data) {
                var newdata = JSON.parse(data);
                console.log(newdata);
                if (!newdata.success) {
                    var form_error = newdata.form_error;

                    //Set error for name field 
                    if (typeof form_error.name != 'undefined') {
                        $('#users-name-error').text('').text(form_error.name).css("display", "block");
                    }

                    //Set error for email field 
                    if (typeof form_error.email != 'undefined') {
                        $('#users-email-error').text('').text(form_error.email).css("display", "block");
                    }

                    //Set error for keyword field 
                    if (typeof form_error.keyword != 'undefined') {
                        $('#users-keyword-error').text('').text(form_error.keyword).css("display", "block");
                    }

                    // Form Error
                    if (form_error.length == 0) {
                        $('#form-error').text('').text(newdata.message).css("display", "block");
                    }
                } else {
                    // show success message
                    $('#users-name, #users-email, #users-keyword').val('');
                    $('#form-success').text('').text(newdata.message).css("display", "block");

                    //GA code Variables
                     if (dataLayer) {
                        dataLayer.push({
                            'event': "event write to us send",
                            'category':getSelectedTopMenu(),
                            'action': 'glossary',
                            'label': 'send click'
                        });
                    } 
                }

            }
        });

    });

    /********* Accordion Start *******/
    $('ul.accordUL li h3').live('click', function() {
        $(this).addClass('active').parent('li').siblings('li').find('h3').removeClass('active');
        $(this).parent('li').find('.accordDesc').slideDown().parents('li').siblings('li').find('.accordDesc').slideUp();
        var headerHT = parseInt($('header').height() + $('.second_navWrap').height());
        var ths_ = $(this);
        if (ths_.parent().index() > 0) {
            setTimeout(function() {
                var thsOffest = parseInt(ths_.offset().top) - (headerHT);
                $('html,body').animate({ scrollTop: thsOffest }, 500)
            }, 350)
        }
    }).eq(0).click();
    /********* Accordion End *******/
});

$(window).bind('beforeunload', function() {
    // Initial Load aritcle data
    if ($('section').find("#pageNo").length == 1) {
        $('#pageNo').val(0);
    }
});
