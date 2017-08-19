$(document).ready(function(){
	$('#gallery').hide();
	$('#view2').hide();
	$('#icon img').click(function() {
	var v=$(this).attr('src');
	$('#modalimage').attr("src",v);
});

$('#view').click(function() {
  $("#gallery").show();
  $('#view2').show();
  $('#view').hide();
});
$('#view2').click(function() {
  $("#gallery").hide();
  $('#view').show();
  $('#view2').hide();
});

});




