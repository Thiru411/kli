function isNumber(e){var t=(e=e||windw.event).which?e.which:e.keyCode;return!(t>31&&(t<48||t>57))}function contactFormGATrigger(e,t,o){if(dataLayer){var a="";if(o)switch(t){case"generalFeedback":a="general feedback";break;case"fullName":a="full name";break;case"emailID":a="email id";break;case"contactNumber":a="contact number";break;case"feedback":a="feedback";break;case"ndncReg":a="terms and conditions";break;default:a=""}a||(a=t),dataLayer.push({event:"event contact form",category:"form|contact us form",action:e,label:a})}}$(document).ready((function(){var e="";$(".fb").click((function(){var e=$(this).attr("data-title"),t=$(this).attr("data-image"),o=$(this).attr("data-desc"),a=$(location).attr("href");return window.open("https://www.facebook.com/dialog/feed?app_id=253017248432355&display=popup&name="+encodeURIComponent(e)+"&caption="+encodeURIComponent(e)+"&description="+encodeURIComponent(o)+"&link="+encodeURIComponent(a)+"&picture="+t,"","width=650,height=400,top=200,left=250"),!1})),$(".twt").click((function(){var e=$(location).attr("href"),t=$(this).attr("data-desc");return window.open("https://twitter.com/share?url="+escape(e)+"&text="+t,"","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600"),!1}));

}));