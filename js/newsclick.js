
/*****************************************************
*
*	get the News Id and redirect to OneNews.phtml to display this News
*
*****************************************************/
$(".item").click(
	function(){
		var currentId = $(this).attr('id')
		$(location).attr('href',"./OneNews.phtml?id="+currentId);
	
	}
);