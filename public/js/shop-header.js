/*Menu-toggle*/
$(document).ready(function(){
	$("#wrapper").toggleClass("active");
    $("#menu-toggle").click(function(e) {	
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
});