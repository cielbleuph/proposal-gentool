$(document).ready(function(){
	$('#test-date').datepicker({
		minDate: 0
	});

	$('form#proposal-generator-form').on('submit', function(e){
		// e.preventDefault();

		// console.log('clicked!');

		// var formData = $(this).serialize();
		// $.ajax({
  //           type: 'POST',
  //           url: 'process.php',
  //           data: formData,
  //           // dataType: "json",
  //           success: function( data ) {

  //           },
  //           error: function( xhr, textStatus, errorThrown ) {

  //           }
  //       });

	});
}); // document