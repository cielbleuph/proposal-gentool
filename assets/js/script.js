$(document).ready(function(){
  $('#test-date').datepicker({
		minDate: 0
	});

  $('#service-type').select2({
    // placeholder: 'This is my placeholder',
    // allowClear: true
    // minimumInputLength: 2 // only start searching when the user has input 3 or more characters
  });

  var serviceTypesData = $('#service-type').select2('data');

  $.each(serviceTypesData, function(key, value){
    console.log(serviceTypesData[key].text);
  });

  $('#service-type').on('select2:select', function (e) {
    // Do something
    $.each(serviceTypesData, function(key, value){
      console.log(serviceTypesData[key].text);
    });
  });

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