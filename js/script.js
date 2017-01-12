$(document).ready(function() {
	console.log("pouet");
    $(".folder_name").on("click", function(e){
        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
        $.ajax({
            type : "GET",
            data: arr,
            url: "php/gen_ajax.php",
            success : function(data){
                $("#ajaxx").html(data);
            }
        });
    });
});