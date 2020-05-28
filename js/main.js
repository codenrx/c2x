(function($){
$(window).on("load", function () {
    $('.page-loader').fadeOut("slow");
});
$(document).ready(function () {
    $(".menu-bars").click(function () {
        $(".header-menu").slideToggle();
    });
    $(".reply_form").click(function(){
    	let id = $(this).attr("data-comment-id");
    	document.getElementById('comment_parent').value = id;
    	$("#respond").appendTo("#comment-"+id);
    	$("#cancel-comment-reply-link").show();
    });
    $("#cancel-comment-reply-link").click(function(){
    	$(this).hide();
    	document.getElementById('comment_parent').value = 0;
    	$("#respond").appendTo("#main-comment-section");
    });
});

})(jQuery);