$(document).ready(function(){$(".fb").click(function(){var t=$(this).attr("data-title"),e=$(this).attr("data-image"),o=$(this).attr("data-desc"),n=$(location).attr("href");return window.open("https://www.facebook.com/dialog/feed?app_id=253017248432355&display=popup&name="+encodeURIComponent(t)+"&caption="+encodeURIComponent(t)+"&description="+encodeURIComponent(o)+"&link="+encodeURIComponent(n)+"&picture="+e,"","width=650,height=400,top=200,left=250"),!1}),$(".twt").click(function(){var t=$(location).attr("href"),e=$(this).attr("data-desc");return window.open("https://twitter.com/share?url="+escape(t)+"&text="+e,"","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600"),!1})});