var serviceTypesData = [];
var servicesWrapper = [];
var serviceTypeDataLength = 0;

$(document).ready(function(){

  // prefilled data for testing
  // $('#company-name').val('COMPANY XYZ');
  // $('#company-description').val('SOME DESCRIPTION ABOUT THE COMPANY STATED HERE');
  // $('#client-name').val('JOHN DOE');
  // $('#client-email').val('JOHNDOE@TESTLOCAL.COM');
  // $('#client-contact').val('1234567890');
  // $('#account-manager').val('ALAIN PEDRONIO');
  // $('#account-manager-contact').val('0987654321');
  // $('#account-manager-email').val('ALAIN@REDTEAMPARTNERS.CO.UK');
  // $('#test-date').val('04/30/2021');
  // $('#number-of-days').val('10');


  // $('#delivery-manager-name').val('John Doe');
  // $('#delivery-manager-email').val('johndoe@testlocal.co');
  // $('#client-name').val('Jane Doe');
  // $('#client-company-name').val('Company ACME');
  // $('#poc-name').val('Ruben Reyes');
  // $('#poc-mobile-number').val('1234567890');
  // $('#poc-email-address').val('rubenpoc@test.local');
  // $('#tester-name').val('Philip Tester');
  // $('#tester-email').val('philiptester@local.co');
  // $('#generated-date').val('06/23/2021');
  // $('#estimated-delivery-date').val('06/23/2021');
  // $('#test-start-date').val('06/23/2021');

  $('#test-date').datepicker({
		minDate: 0
	});

  $('#generated-date').datepicker({
		minDate: 0
	});

  $('#estimated-delivery-date').datepicker({
    minDate: 0
  });

  $('#test-start-date').datepicker({
    minDate: 0
  });

  $('#service-type').select2({
    // placeholder: 'This is my placeholder',
    // allowClear: true
    // minimumInputLength: 2 // only start searching when the user has input 3 or more characters
    theme: "classic",
    width: "100%"
  });

  
  $('#add-days').on('click', function(e){
    e.preventDefault();
    console.log('add days');

    $.each(servicesWrapper, function(index, service){
      var elemService = (service).replace(/\s+/g, "");
      var classElem = '.' + elemService +'_class';
      $('#services-type-wrapper').append('<div class"form-group"><label for="'+ elemService +'">'+service+'</label><input type="number" step="0.1" class="'+elemService+' serviceDays" id="'+elemService+'" name="'+elemService+'" />')
    });

  });

  $('#clear-services').on('click', function(e) {
    e.preventDefault();
    $('#service-type').val(null).trigger('change');

    $('#services-type-wrapper').html('');

    servicesWrapper = [];
  });
    
  $('#service-type').on('change', function (e) {

    serviceTypesData = $('#service-type').select2('data');
    serviceTypeDataLength = serviceTypesData.length;

    // update buttons
    // serviceTypeDataLength > 0 ?  : 

    if (serviceTypeDataLength > 0) {
      $('.services-actions').show();
      $('.services-actions button').prop('disabled', false);
    }
    else{
      $('.services-actions').hide();
      $('.services-actions button').prop('disabled', true);
    }

    $.each(serviceTypesData, function(index, serviceDataObj){
      // 1. check if there is new service entered in data variable, if there is, append new service to html form.      
      
      servicesWrapper.indexOf(serviceDataObj.text) === -1 ? servicesWrapper.push(serviceDataObj.text) : console.log('this item already exists, skipping...');

      // var elemService = (serviceDataObj.text).replace(/\s+/g, "");
      // var classElem = '.' + elemService +'_class';
      // var cleaner = [];

      // console.log(servicesWrapper);

      // if (servicesWrapper.indexOf(serviceTypesData.text) === -1) {
      //   servicesWrapper.push(serviceDataObj.text);
      //   // $('#services-type-wrapper').append( '<li class="'+ (serviceDataObj.text).replace(/\s+/g, "") +'_class">' + serviceDataObj.text + '</li>');
      //   // $('#services-type-wrapper').append('<div class"form-group"><label for="'+ elemService +'">'+serviceDataObj.text+'<input type="number" class="'+elemService+'" id="'+elemService+'" name="'+elemService+'" /></label>')
      //   // console.log(servicesWrapper);
      // }
      // else{
      //   console.log('this item already exists. skipping...');
      // }

    });
  });

  
	$('form#proposal-generator-form').on('submit', function(e){
		e.preventDefault();

		console.log('clicked!');

    // get all days
    var totalInputDays = $('.serviceDays');
    var totalDaysArray = [];
    var sumTotalDays = 0;

    for(i = 0; i < totalInputDays.length; i++){
      // totalDaysArray.push( $(totalInputDays[i]).val() );
      sumTotalDays += parseFloat( $( totalInputDays[i] ).val() );
    }

    $('.totalDays').val(sumTotalDays);

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


  $('form#sow-generator-form').on('submit', function(e){
		e.preventDefault();

		console.log('sow generate!');

    var companyName = $('#client-company-name').val();
		var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'process-sow.php',
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