$(document).ready(function() {
     $(document).on("click",".folder_name", function(e){
        e.preventDefault();
		
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
		var last_tagname = $a.parent().find(":last-child").eq(1).prop("tagName");
		
		if(last_tagname == "DIV"){
			$a.parent().find(":last-child").eq(1).remove();
		}
		else{
			$.ajax({
				type : "GET",
				data: arr,
				url: "php/gen_ajax.php",
				success : function(data){
					console.log(data)
					$a.parent().append(data);
				}
			});
		}
    });
});

$(document).ready(function() {
    $(".folder_name").on("click", function(e){
        e.preventDefault();
		
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
		
        $.ajax({
            type : "GET",
            data: arr,
            url: "php/current_url.php",
            success : function(data){
                $(".url").html(data);
            }
        });
    });
});