$(document).ready(function() {	
    $(".folder_name").on("click", function(e){
        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
		console.log(arr);
		// if(arr == "./"){
			// arr = arr.slice(1);
			$.ajax({
				type : "GET",
				data: arr,
				url: "php/gen_ajax.php",
				success : function(data){
					$("#ajaxx").html(data);
				}
			});
		// }
		// else{
			// $.ajax({
				// type : "GET",
				// data: arr,
				// url: "php/gen_ajax.php",
				// success : function(data){
					// $("#ajaxx").html(data);
				// }
			// });
		// }
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