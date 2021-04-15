var serviceTypesData = [];
var servicesWrapper = [];
var serviceTypeDataLength = 0;

$(document).ready(function(){
  $('#test-date').datepicker({
		minDate: 0
	});

  $('#service-type').select2({
    // placeholder: 'This is my placeholder',
    // allowClear: true
    // minimumInputLength: 2 // only start searching when the user has input 3 or more characters
  });

  
  
  // 2. if service is removed from data variable, delete element in html.
  
  // 0. add each service type to variable data and create an element based on the data.
  


  $('#service-type').on('change', function (e) {
    
    serviceTypesData = $('#service-type').select2('data');
    serviceTypeDataLength = serviceTypesData.length;

    $.each(serviceTypesData, function(index, serviceDataObj){
      // 1. check if there is new service entered in data variable, if there is, append new service to html form.      
      
      servicesWrapper.indexOf(serviceDataObj.text) === -1 ? servicesWrapper.push(serviceDataObj.text) : console.log('this item already exists, skipping...');

      var tmpVar = '.' + (serviceDataObj.text).replace(/\s+/g, "") +'_class';

      console.log(tmpVar);

      if ( $('#services-type-wrapper').has(tmpVar).length === 0 ) {
        $('#services-type-wrapper').append( '<li class="'+ (serviceDataObj.text).replace(/\s+/g, "") +'_class">' + serviceDataObj.text + '</li>');
      }
    });
    // console.log(servicesWrapper);
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