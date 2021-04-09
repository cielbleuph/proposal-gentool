$(document).ready(function(){
	  // var services = [];
   
  // $.each($(".service-type option:selected"), function(){            
  //     services.push($(this).val());
  // });
  // // alert("You have selected the services - " + services.join(", "));

  // $('.list-service-wrapper').html(services);
  
  // $('.service-type').select(function(){
  //   alert( 'test' );
  // });
  
  $('#test-date').datepicker({
		minDate: 0
	});

  $('.js-example-basic-multiple').select2();

	$('form#proposal-generator-form').on('submit', function(e){
		e.preventDefault();

		console.log('clicked!');

    var companyName = $('#company-name').val();
		var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: formData,
        xhrFields: {
          responseType: 'blob'
        },
        // dataType: "json",
        success: function (data) {
          var a = document.createElement('a');

          if(typeof data != 'string'){
            var binaryData = [];
            binaryData.push(data);
            var url = window.URL.createObjectURL(new Blob(binaryData, {type: "application/docx"}))
            a.href = url;
            // console.log(a);
            a.download = companyName + '_' + dateToday() +'.docx';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
          }
          else{
            console.log('AJAX return data error.');
          }
          
        },
        error: function( xhr, textStatus, errorThrown ) {

        }
    });
	});
}); // document


function dateToday(){
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '-' + dd + '-' + yyyy;
  
  return today;
}