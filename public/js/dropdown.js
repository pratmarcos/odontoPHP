$("#group").change(function(event){
         
/*$.ajax({
    type: "GET",
    url: "../../../histories/1",
    data: {id:treatment.id},
    success: function(response) {
    	$treatment = $(response);
        console.log($treatment);
    }
});*/
	$.get("../../../histories/"+event.target.value+"",function(response,group){
		alert(response["data"])
		$("#treatment").empty();
		for(i=0; i<response.length; i++){
			$("#treatment").append("<option value='"+response[i].id+"'> "+response[i].process+"</option>");
		}
	});
});