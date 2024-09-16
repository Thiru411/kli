/*lazy loading script v*/
!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);
/*lazy loading script ^*/

/* $(".send-card").click(function(){
  if ($(".group").hasClass("has-success") &&  $(".group1").hasClass("has-success") &&  $(".group2").hasClass("has-success")) {
    //alert(1)
    $('#firstthanq').modal('hide');
    $('#firstthanq-sent').modal('show');
  }
}); */

$(".send-card1").click(function(){
  if ($(".group").hasClass("has-success") &&  $(".group1").hasClass("has-success") &&  $(".group2").hasClass("has-success")) {
    //alert(1)
    $('#firstthanq1').modal('hide');
    $('#firstthanq1-sent').modal('show');
  }
});

$(".mail-box").click(function(){
    //alert(1)
    $('#firstthanq-sent').modal('hide');
    $('#mailModal').modal('show');
  
});
  

$(".mail-tooltip").click(function (e) {
  e.preventDefault(), e.stopPropagation(), $('.mail__box').show();
});
$(".mail__box").click(function (e) {
    e.stopPropagation();
});
$("body").click(function () {
    $(".mail__box").hide();
});

$('.formvalidation').bootstrapValidator({}).on('success.form.bv', function (e) {
    // Prevent form submission
    e.preventDefault();
    var $form = $(e.target);
    fv = $form.data('formValidation');
    if ($form.attr('action') != undefined) { 
      $form.unbind('submit');
      $form.submit();
    }
});

$('.js-example-basic-multiple').select2();



function save_details(i)
{
	if(i==1){cardType="thank_you"}
  if(i==2){cardType="thank_you1"}
  if(i==3){cardType="thank_you2"}
  if(i==4){cardType="thank_you_mentor"}
  if(i==5){cardType="thank_you_mentor1"}
  if(i==6){cardType="thank_you_colleague"}
  if(i==7){cardType="thank_you_colleague1"}
  if(i==8){cardType="thank_you_teamwork"}
  if(i==9){cardType="thank_you_teamwork1"}
  if(i==10){cardType="thank_you_extra_mile"}
  if(i==11){cardType="thank_you_extra_mile1"}    
  if(i==12){cardType="thank_you_generic"}
if(i==13){cardType="KLI_thank_you_card_Customer_to_Life_advisor";} 
  if(i==14){cardType="KLI_thank_you_card_Friends_and_Family";} 
  if(i==15){cardType="KLI_thank_you_card_Life_Advisor_and_customer";}
if(i==16){cardType="KLI_thank_you_card_Customer_to_Life_advisor"}
  if(i==17){cardType="KLI_thank_you_card_Friends_and_Family"}    
  if(i==18){cardType="KLI_thank_you_card_Life_Advisor_and_customer"}
if(i==19){cardType="Customers-doctors";} 
if(i==20){cardType="Customers-elders";} 
if(i==21){cardType="Customer-service-team-customers";} 
if(i==22){cardType="Customers-personal-circle";} 
if(i==23){cardType="Customers-service-providers";} 
if(i==24){cardType="Customers-teachers";} 
if(i==25){cardType="Customers-younger-people";} 
if(i==26){cardType="Life-advisor-customers";} 
if(i==27){cardType="Sales-team-life-advisor";} 
if(i==28){cardType="PostR1-min";}
if(i==29){cardType="PostR2-min";}
if(i==30){cardType="bookday";}
if(i==31){cardType="bookday2";}
if(i==32){cardType="earth-day";}
if(i==33){cardType="earth-day2";}
if(i==34){cardType="easter1";}
if(i==35){cardType="easter2";}
if(i==36){cardType="thankyoucard1";}
	if(i==37){cardType="thankyoucard2";}
	if(i==38){cardType="thankyoucard3";}
let cust_name=$("#customer_name").val();
let cust_type=$("#cust_type").val();
let customer_mobile=$("#customer_mobile").val();

  dataLayer.push({
    'event': 'kotak-greetings-card-send',
    'selectionBox': cust_type,    
    'name': cust_name,  
    'mobileNumber': customer_mobile,    
    'cardType': '{{'+cardType+'}}', //Dynamically pass the Card Type value i.e.thank_you_mentor|thank_you_colleague  
    'category': 'Kotak Greetings',    
    'action': 'Card Type',    
    'label': 'Send the card'    
    });

  let email_id="";//$("#name"+i).val();
  let description=$("#text"+i).val(); 

  let customRadioInline = $("input[name=customRadioInline]");
  
  let category = customRadioInline.filter(":checked").val();
  let customer_id=$("#customer_id").val();
  let card_id=i; 
//if(email_id!="" && description!="" && category!="" && card_id!="" && customer_id!=""){
if(description!="" && category!="" && card_id!="" && customer_id!=""){
  $.ajax({
    url: ajax_url+'save_details',
    method: 'POST',
    data: {email_id:email_id,description:description,category:category,card_id:card_id,customer_id:customer_id}, 
    success: function(response){ 
	//alert(response);
      if(response==0){
        
       // $("#msgs_id"+card_id).html("Invalid Email Id");
	   $("#msgs_id"+card_id).html("Please Enter the details");
        $("#name"+i).val();
        $('#myForm'+i)[0].reset();  
        $('#card'+i).removeAttr('disabled');
      }
      else{
		  let tmp=response.split("##");
      $('#myForm'+i)[0].reset();  
      
     // let gratitude_link=response;
	  let gratitude_link=tmp[0];
	   let img_link=tmp[1];
	  let card_title="Kotak Greetings";
     let linkedin_id="http://www.linkedin.com/shareArticle?mini=true&url="+img_link; 
     let facebook_id="https://www.facebook.com/sharer/sharer.php?u="+img_link;	 
	 let email_link_id="mailto:?subject=Kotak Greetings&body="+gratitude_link;
	 let whatsapp_id="https://api.whatsapp.com/send?text="+gratitude_link;
	 
	 /*
	 let linkedin_id="http://www.linkedin.com/shareArticle?mini=true&url="+gratitude_link; 
     let facebook_id="https://www.facebook.com/sharer/sharer.php?u="+gratitude_link;	 
	 let email_link_id="mailto:?subject=Kotak Greetings&body="+gratitude_link;
	 let whatsapp_id="https://api.whatsapp.com/send?text="+gratitude_link;*/


 $("#social_card_img_id").val(i);
 
      //$("#gratitude_link").attr("href",response);  
      $("#linkedin_id").attr("href",linkedin_id)
      $("#facebook_id").attr("href",facebook_id)
	  $("#email_link_id").attr("href",email_link_id)
	  $("#whatsapp_id").attr("href",whatsapp_id)
     // $("#instagram_id").attr("href",instagram_id)
 
    if(i==1){img="thank_you.jpg"}
    if(i==2){img="thank_you1.jpg"}
    if(i==3){img="thank_you2.jpg"}
    if(i==4){img="thank_you_mentor.jpg"}
    if(i==5){img="thank_you_mentor1.jpg"}
    if(i==6){img="thank_you_colleague.jpg"}
    if(i==7){img="thank_you_colleague1.jpg"}
    if(i==8){img="thank_you_teamwork.jpg"}
    if(i==9){img="thank_you_teamwork1.jpg"}
    if(i==10){img="thank_you_extra_mile.jpg"}
    if(i==11){img="thank_you_extra_mile1.jpg"}    
    if(i==12){img="thank_you_generic.jpg"}
	if(i==13){img="KLI_thank_you_card_Customer_to_Life_advisor.jpg";} 
    if(i==14){img="KLI_thank_you_card_Friends_and_Family.jpg";} 
    if(i==15){img="KLI_thank_you_card_Life_Advisor_and_customer.jpg";}
	if(i==16){img="KLI_thank_you_card_Customer_to_Life_advisor01.jpg"}
    if(i==17){img="KLI_thank_you_card_Friends_and_Family_01.jpg"}    
    if(i==18){img="KLI_thank_you_card_Life_Advisor_and_customer_01.jpg"}
	if(i==19){img="Customers-doctors-100.jpg";} 
	if(i==20){img="Customers-elders-100.jpg";} 
	if(i==21){img="Customer-service-team-customers-100.jpg";} 
	if(i==22){img="Customers-personal-circle-100.jpg";} 
	if(i==23){img="Customers-service-providers-100.jpg";} 
	if(i==24){img="Customers-teachers-100.jpg";} 
	if(i==25){img="Customers-younger-people-100.jpg";} 
	if(i==26){img="Life-advisor-customers-100.jpg";} 
	if(i==27){img="Sales-team-life-advisor-100.jpg";} 
	if(i==28){img="PostR1-min.jpg";}
	if(i==29){img="PostR2-min.jpg";}
	if(i==30){img="bookday.jpg";}
	if(i==31){img="bookday2.jpg";}
	if(i==32){img="earth-day.jpg";}
	if(i==33){img="earth-day2.jpg";}
	if(i==34){img="easter1.jpg";}
	if(i==35){img="easter2.jpg";}
  if(i==36){img="thankyoucard1.jpg";}
	if(i==37){img="thankyoucard2.jpg";}
	if(i==38){img="thankyoucard3.jpg";}
	


      let img_url=ajax_url+"assets/images/new/"+img;
      $('#thank_u_id').attr("src",img_url);
     $(".bg-hash-mail").html(email_id);
     $('#firstthanq'+i).modal('hide');
     $('#firstthanq-sent').modal('show');     
    }
  }
  });
}else{return false;}
}



function isNumberKeyevent(evt) //onkeypress="return isNumberKeyevent(event)"
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}

function AllowAlphabet(e)		// onkeypress="return AllowAlphabet(event)"
{
	  if ([e.keyCode||e.which]==8) //this is to allow backspace
		    return true;
	  if ([e.keyCode||e.which]==9) //this is to allow backspace
		    return true;
	isIE=document.all? 1:0
	keyEntry = !isIE? e.which:event.keyCode;
	if(((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry=='46') || (keyEntry=='32') || keyEntry=='45' ) 
		return true;  
	else
		return false;
}
$(".AlphaValidateOnPaste").on('paste', function(e) {
      $(e.target).keyup();
    });

    $('.AlphaValidateOnPaste').on('keyup',function(e){
        var value = $(this).val();
        var i = value.length;
        while (i--) {
          var result = value.charAt(i).match(/^[a-zA-Z ]*$/);
            if(result == null){
                $(this).val('');
                $("#msg").html('Only Alphabates and Spaces');
                break;
            }
            else{
              $("#msg").html("");
            }
        }
    });
    $(".numericValidateOnPaste").on('paste', function(e) {
      $(e.target).keyup();
    });

    $('.numericValidateOnPaste').on('keyup',function(e){
        var value = $(this).val();
        var i = value.length;
        while (i--) {
          var result = value.charAt(i).match(/^[0-9]*$/);
            if(result == null){
                $(this).val('');
                $("#msg1").html('Only Numeric');
                break;
            }
            else{
              $("#msg1").html("");
            }
        }
    });

    setTimeout(function() {
      $('#msg_id').hide('fast');
  }, 10000);
  setTimeout(function() {
    $('#msgs_id1').hide('fast');
    $('#msgs_id2').hide('fast');
    $('#msgs_id3').hide('fast');
    $('#msgs_id4').hide('fast');
}, 10000);


