$(".open-panel").click(function(){
  
  $("html").addClass("openNav");
  
});
	
$(".close-panel, #content").click(function(){
  
$("html").removeClass("openNav");
  
});
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes