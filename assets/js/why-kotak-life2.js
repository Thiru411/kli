function isNumber(e){var t=(e=e||window.event).which?e.which:e.keyCode;return!(t>31&&(t<48||t>57))}function contactFormGATrigger(e,t,a){if(dataLayer){var o="";if(a)switch(t){case"generalFeedback":o="general feedback";break;case"fullName":o="full name";break;case"emailID":o="email id";break;case"contactNumber":o="contact number";break;case"feedback":o="feedback";break;case"ndncReg":o="terms and conditions";break;default:o=""}o||(o=t),dataLayer.push({event:"event contact form",category:"form|contact us form",action:e,label:o})}}$(document).ready(function(){var e="";$(".fb").click(function(){var e=$(this).attr("data-title"),t=$(this).attr("data-image"),a=$(this).attr("data-desc"),o=$(location).attr("href");return window.open("https://www.facebook.com/dialog/feed?app_id=253017248432355&display=popup&name="+encodeURIComponent(e)+"&caption="+encodeURIComponent(e)+"&description="+encodeURIComponent(a)+"&link="+encodeURIComponent(o)+"&picture="+t,"","width=650,height=400,top=200,left=250"),!1}),$(".twt").click(function(){var e=$(location).attr("href"),t=$(this).attr("data-desc");return window.open("https://twitter.com/share?url="+escape(e)+"&text="+t,"","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600"),!1});var t=[];function a(){for(var e=0;e<t.length;e++)t[e].setMap(null);t.length=0}var o,n="assets/images/";if(window.onload=function(){o=new google.maps.Geocoder;var e={zoomControl:!0,zoomControlOptions:{position:google.maps.ControlPosition.LEFT_CENTER},streetViewControl:!0,streetViewControlOptions:{position:google.maps.ControlPosition.LEFT_TOP},center:new google.maps.LatLng(19.1084234,72.99999999),zoom:10,mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1},r=new google.maps.Map(document.getElementById("map_canvas"),e),s=new google.maps.InfoWindow,c=[],l=new google.maps.LatLngBounds;function p(){var e=$("#pincodeTxt").val();1==/^\d+$/.test(e)?(dataLayer.push({event:"event branch locator",category:"branch locator",action:e,label:e}),$(".pinErr").css("display","none"),$(".noBrances").css("display","none"),a(),$.ajax({url:base_url+"bind-result-pincode/pin",type:"POST",dataType:"JSON",data:"pincode="+e,success:function(a){if(""!=a)for(i=0;i<a.length;i++){var p=a[i];o.geocode({address:e},function(e,t){t==google.maps.GeocoderStatus.OK&&t!=google.maps.GeocoderStatus.ZERO_RESULTS&&r.setCenter(e[0].geometry.location)});var d=new google.maps.LatLng(p.lat,p.lng);c.push(d);var m=new google.maps.Marker({position:d,map:r,title:p.title,icon:n+"map-pointer.png"});l.extend(m.position),function(e,t){google.maps.event.addListener(e,"click",function(a){if(t.branchPhone)var o="<br/><p><b>Contact number</b> : "+t.stdCode+" "+t.branchPhone+"</p>";else var o="<br/><p><b>Contact number</b> : 1800 209 8800</p>";var n="<div class='info_content'><h3>"+t.branchArea+" Branch</h3><hr/><p><b>Address</b> : <br/>"+t.address+"</p>"+o+"</div>";s.setContent(n),s.open(r,e)})}(m,p),t.push(m)}else $(".noBrances").css("display","block")}})):$(".pinErr").css("display","block")}new google.maps.Marker({position:{lat:19.1084234,lng:72.99999999},map:r,icon:n+"map-pointer.png"}),document.getElementById("cityDD").addEventListener("change",function(){$(".pinErr").css("display","none"),$(".noBrances").css("display","none"),$("#pincodeTxt").val(""),a();var e=$("#cityDD").val(),p=$("#statesDD").val();dataLayer.push({event:"event branch locator",category:"branch locator",action:p,label:e});var d=$(this).val();$.ajax({url:base_url+"bind-result/city",type:"POST",dataType:"JSON",data:"cityData="+d,success:function(e){if(""!=e)for(i=0;i<e.length;i++){var a=e[i];d+=", India",o.geocode({address:d},function(e,t){t==google.maps.GeocoderStatus.OK&&t!=google.maps.GeocoderStatus.ZERO_RESULTS&&r.setCenter(e[0].geometry.location)});var p=new google.maps.LatLng(a.lat,a.lng);c.push(p);var m=new google.maps.Marker({position:p,map:r,title:a.title,icon:n+"map-pointer.png"});l.extend(m.position),function(e,t){google.maps.event.addListener(e,"click",function(a){if(t.branchPhone)var o="<br/><p><b>Contact number</b> : "+t.stdCode+" "+t.branchPhone+"</p>";var n="<div class='info_content'><h3>"+t.branchArea+" Branch</h3><hr/><p><b>Address</b> : <br/>"+t.address+"</p>"+o+"</div>";s.setContent(n),s.open(r,e)})}(m,a),t.push(m)}}})}),document.getElementById("searchBtn").addEventListener("click",function(){p()}),document.getElementById("pincodeTxt").addEventListener("keyup",function(e){e.preventDefault(),13==e.keyCode&&p()})},$(".uploadBtn input[type=file]").change(function(){var t=$("input[type='file']").val().split("/").pop().split("\\").pop();$(this).parents(".uploadBtn").find(".filePath").text(t),e=$("#customerDocument").val().split(".").pop().toLowerCase()}),$("#customerDOB").length>0&&$("#customerDOB").datepicker({dateFormat:"dd-mm-yy",changeMonth:!0,changeYear:!0,yearRange:"-100:+0",showButtonPanel:!0,maxDate:0}).on("change",function(e){try{$.datepicker.parseDate(dateFormat,element.value)}catch(t){}}),$("#contactSubmit").click(function(t){$(".input_error").text(""),$(".errorMsg").css("display","none");var a=$.trim($('[name="customer_policyno"]').val()),o=$.trim($('[name="customer_dob"]').val()),n=$.trim($('[name="customer_contactno"]').val()),r=$.trim($('[name="customer_emailid"]').val()),s=$.trim($('[name="srgroups"]').val()),c=$.trim($('[name="srtypes"]').val()),l=$.trim($('[name="feedback"]').val()),p=RegExp(/^[789]\d{9}$/i),d=!0;if(""!=a&&"Policy Number"!=a||($("#customer_policyno_error").text("It seems you have missed out to write your policy no."),d=!1),""!=o&&"Date of Birth"!=o||($("#customer_dob_error").text("It seems you have missed out to write your DOB."),d=!1),""==n||"Contact Number"==n?($("#customer_contactno_error").text("It seems you have missed out to write your Contact Number."),d=!1):(n.length<10||!p.test(n))&&($("#customer_contactno_error").text("Please Enter a vaild Mobile Number"),d=!1),""==r||"Email ID"==r?($("#customer_emailid_error").text("It seems you have missed out to write your email id."),d=!1):/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(r)||($("#customer_emailid_error").text("Please enter valid email id."),d=!1),""!=s&&"Select Options"!=s||($("#srgroup_error").text("Please select your option."),d=!1),""!=c&&"Select Options"!=c||($("#srtypes_error").text("Please select your option."),d=!1),""==l||"Please type here"==l?($("#feedback_error").text("It seems you have missed out to write your feedback."),d=!1):l.length>2e3?($("#feedback_error").text("It seems you have exceed the limit of characters."),d=!1):0==/^[a-zA-Z0-9- ,_:]*$/.test(l)&&($("#feedback_error").text("Special characters are not allowed."),d=!1),0==$('[name="ndncReg"]').prop("checked")&&($("#ndncReg_error").text("Accepting T&C would help us to contact you quickly."),d=!1),e){var m=$("input[type='file']").val().split("/").pop().split("\\").pop().split(".");(m.length>=2&&(-1==$.inArray(m[1],["php","php3","php4","phtml","pl","py","jsp","asp","htm","shtml","sh","cgi"])||($("#customerdocument_error").text("Please upload valid file."),d=!1)),-1==$.inArray(e,["png","jpg","jpeg","pdf","doc","docx"]))?($("#customerdocument_error").text("Please upload .jpg or .png or .jpeg or .pdf file of document."),d=!1):document.getElementById("customerDocument").files[0].size>2097152&&($("#customerdocument_error").text("The file you are trying to upload is too large (max 2MB)"),d=!1)}if(""==grecaptcha.getResponse(contactFormCaptcha)&&(d=!1,$("#contactformcaptcha_error").text("Please enter the Captcha")),!d)return $(".errorMsg").css("display","block"),!1;$(this).val("Please wait.."),$(this).attr("disabled",!0),$("#contact_us_form").submit()}),!("undefined"==typeof failureNotification&&"undefined"==typeof sucessNotification||!0!==failureNotification&&!0!==sucessNotification)){var r=parseInt($("header").height()+$(".second_navWrap").height()),s=parseInt($(".feedbackWrap").offset().top)-r;$("html, body").animate({scrollTop:s},500)}$("#srgroups").change(function(){if($("#srgroups option:selected").val()){var e=$(this).val();""!=e?($.ajax({url:base_url+"bind-srtype-dropdown/srgroup",type:"POST",dataType:"JSON",data:"srgroup="+e,success:function(e){$("#srtypes").html(""),$("#srtypes").html(e)}}),"164135"===e?$("#srgroup-knowmore").html('<p class="optionView"><a href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" target="_blank" title="Download Financial Document">Click here</a> to download Financial Document</p>'):$("#srgroup-knowmore").html(""),dataLayer&&dataLayer.push({event:"event contact form",category:"form|contact us form",action:"contact dropdown",label:$("#srgroups option:selected").val()})):$("#srtypes").html("")}else $("#srtypes").html("")}),$("#srtypes").change(function(){if($("#srtypes option:selected").val()){var e=$(this).val(),t=$("#srgroups option:selected").val();""!=e&&""!=t?"164144"===e&&"164136"===t?$("#srtype-knowmore").html('<p class="optionView" ><a href="https://www.mykotaklife.com/payconnect/opc/opc/redirection.aspx" target="_blank" title="Pay your Premium">Click here</a> to Pay your Premium</p>'):"164148"===e&&"164136"===t?$("#srtype-knowmore").html('<p class="optionView" ><a href=base_url."/how-do-i/locate-kotak-branches" target="_blank" title="Locate your nearest Branch">Click here</a> to Locate your nearest Branch</p>'):$("#srtype-knowmore").html(""):$("#srtype-knowmore").html("")}}),$("#contactUsBack").click(function(){grecaptcha.reset(contactFormCaptcha),$("input[type=text], textarea").val(""),$("#thanksMsgContactUs").css("display","none"),$(".feedbackSel").text("Select Option"),$("#contact_us_form").css("display","block")}),$("#contactClear").click(function(){grecaptcha.reset(contactFormCaptcha),$("input[type=text], textarea").val(""),$("#thanksMsgContactUs").css("display","none"),$(".feedbackSel").text("Select Option"),dataLayer&&dataLayer.push({event:"event contact form",category:"form|contact_us_form",action:"clear",label:"click"})}),$("#statesDD").change(function(){$("#cityDD").val("City"),$(".citySel").text("City");var e=$(this).val();""!=e?$.ajax({url:base_url+"bind-city-dropdown/states",type:"POST",dataType:"JSON",data:"stateData="+e,success:function(e){$("#cityDD").html(""),$("#cityDD").html(e)}}):$("#cityDD").html("")})});