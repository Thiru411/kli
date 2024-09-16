  
$('.steps a.link').click(function(){
    var seg = $("#needSegment").val();
	var custName = $("#custName").val();
	var ageGroup = $("#ageGroup").val();
	var custNumber = $("#custNumber").val();
	
	if(seg!="" && custName!="" && ageGroup!="" && custNumber!=""){

	
		datastring = "needSegment="+seg+"&ageGroup="+ageGroup+"&name="+custName+"&number="+custNumber;
		$.ajax({
			url : base_url + 'Ajax/need-base-calculator/result',
			type: "POST",
			data: datastring,
			dataType: "JSON",
			success: function(data){
				alert(data+"==success");
				
			}
		});
	}
}) 