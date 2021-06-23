var serviceTypesData = [];
var servicesWrapper = [];
var serviceTypeDataLength = 0;

$(document).ready(function(){

  // ***** TEST DATA - prefilled data for testing ***** //
  $('#company-name').val('COMPANY XYZ');
  $('#company-description').val('SOME DESCRIPTION ABOUT THE COMPANY STATED HERE');
  $('#client-name').val('JOHN DOE');
  $('#client-email').val('JOHNDOE@TESTLOCAL.COM');
  $('#client-contact').val('1234567890');
  $('#account-manager').val('ALAIN PEDRONIO');
  $('#account-manager-contact').val('0987654321');
  $('#account-manager-email').val('ALAIN@REDTEAMPARTNERS.CO.UK');
  $('#test-date').val('04/30/2021');
  $('#number-of-days').val('10');

  $('#delivery-manager-name').val('John Doe');
  $('#delivery-manager-email').val('johndoe@testlocal.co');
  $('#client-name').val('Jane Doe');
  $('#client-company-name').val('Company & ACME');
  $('#poc-name').val('Ruben Reyes');
  $('#poc-mobile-number').val('1234567890');
  $('#poc-email-address').val('rubenpoc@test.local');
  $('#tester-name').val('Philip Tester');
  $('#tester-email').val('philiptester@local.co');
  $('#generated-date').val('06/23/2021');
  $('#estimated-delivery-date').val('06/23/2021');
  $('#test-start-date').val('06/23/2021');

  $('.critical').val('1');
  $('.high').val('2');
  $('.medium').val('3');
  $('.low').val('4');
  $('.service-name').val('This is a Test Service Name');
  $('.version').val('1.0');
  $('.date-generated').val('06/30/2021');
  $('.test-duration-from').val('06/30/2021');
  $('.test-duration-to').val('07/30/2021');
  $('.overall-security').val('This is something about overall security.');

  
  $('#test-date').datepicker({
		minDate: 0,
    changeMonth: true,
    changeYear: true
	});

  $('#generated-date').datepicker({
		minDate: 0,
    changeMonth: true,
    changeYear: true
	});

  $('#estimated-delivery-date').datepicker({
    minDate: 0,
    changeMonth: true,
    changeYear: true
  });

  $('#test-start-date').datepicker({
    minDate: 0,
    changeMonth: true,
    changeYear: true
  });

  $('#date-generated').datepicker({
    // minDate: 0
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true
  });

  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#test-duration-from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#test-duration-to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );




  $('#service-type').select2({
    // placeholder: 'This is my placeholder',
    // allowClear: true
    // minimumInputLength: 2 // only start searching when the user has input 3 or more characters
    theme: "classic",
    width: "100%"
  });

  
  
    
  $('#service-type').on('change', function (e) {

    serviceTypesData = $('#service-type').select2('data');
    serviceTypeDataLength = serviceTypesData.length;

    if (serviceTypeDataLength > 0) {
      $('.services-actions').show();
      $('.services-actions button').prop('disabled', false);
    }
    else{
      $('.services-actions').hide();
      $('.services-actions button').prop('disabled', true);
    }

    $.each(serviceTypesData, function(index, serviceDataObj){
  
      
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

  
  // ***** PROPOSAL GENERATOR ***** // 

  $("form#proposal-generator-form").validate({
    ignore: "hidden",
    groups: {
      servicetype: "service-type"
    },
    errorPlacement: function(error, element) {
      if ( element.attr("name") == "service-type[]" ) {
        error.insertAfter(".select2-selection");
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function(form) {
      // do other things for a valid form

      $('.lds-facebook').css('visibility', 'initial');
      $('button[type="submit"]').prop("disabled", true);

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

      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: $(form).serialize(),
        xhrFields: {
          responseType: 'blob'
        },
        // dataType: "json",
        success: function (data) {
          var a = document.createElement('a');

          $('.lds-facebook').css('visibility', 'hidden');
          $('button[type="submit"]').prop("disabled", false);

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
      return false;

    },
    
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

  // ***** END PROPOSAL GENERATOR ***** //


  // ***** S.O.W. GENERATOR ***** //

  $("form#sow-generator-form").validate({
    ignore: "hidden",
    groups: {
      servicetype: "service-type"
    },
    errorPlacement: function(error, element) {
      if ( element.attr("name") == "service-type[]" ) {
        error.insertAfter(".select2-selection");
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function(form) {
      // do other things for a valid form

      $('.lds-facebook').css('visibility', 'initial');
      $('button[type="submit"]').prop("disabled", true);

      var companyName = $('#client-company-name').val();
      // var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'process-sow.php',
        data: $(form).serialize(),
        xhrFields: {
          responseType: 'blob'
        },
        // dataType: "json",
        success: function (data) {
          var a = document.createElement('a');

          $('.lds-facebook').css('visibility', 'hidden');
          $('button[type="submit"]').prop("disabled", false);

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
      return false;

    },
    
  });

  // ***** REPORTS GENERATOR TOOL ***** 




  $("form#reports-generator-form").validate({
    // ignore: "hidden",
    // groups: {
    //   servicetype: "service-type"
    // },
    // errorPlacement: function(error, element) {
    //   if ( element.attr("name") == "service-type[]" ) {
    //     error.insertAfter(".select2-selection");
    //   } else {
    //     error.insertAfter(element);
    //   }
    // },
    submitHandler: function(form) {
      // do other things for a valid form

      $('.lds-facebook').css('visibility', 'initial');
      $('button[type="submit"]').prop("disabled", true);

      // var companyName = $('#client-company-name').val();
      // var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'process-reports.php',
        data: $(form).serialize(),
        // xhrFields: {
        //   responseType: 'blob'
        // },
        // dataType: "json",
        success: function (data) {
          var a = document.createElement('a');

          $('.lds-facebook').css('visibility', 'hidden');
          $('button[type="submit"]').prop("disabled", false);

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
          else if(typeof data === 'string'){
            console.log(data)
          }
          
          else{
            console.log('AJAX return data error.');
          }
          
        },
        error: function( xhr, textStatus, errorThrown ) {

        }
      });
      return false;

    },
    
  });
      
    
  $( ".help-icon" ).tooltip();




  $('.entry-btn').on('click', function(e){
    // console.log(e.target.id);

    var targetBtn = e.target.id;    
    var entryTxtboxInput = $("."+targetBtn+"-input");

    if (entryTxtboxInput.val().length > 0){
      $("."+targetBtn+"-listgroup").append('<li class="list-group-item" id="listing-item"><span class="entry-value">'+ entryTxtboxInput.val() +'</span><span class="del-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></span><input type="hidden" value="'+entryTxtboxInput.val()+'" name="'+targetBtn+'-hidden[]"</li>');
      // console.log(entryTxtboxInput.val());

      // $("."+targetBtn+"-listgroup-wrapper").append('>');
    }
    else{
      alert('Cannot add empty value.');
    }
    entryTxtboxInput.val('');

  });

  $(document).on('click', '.del-item', function(e){

    var targetElement = $(this);

    $( "#delete-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      show: {
        effect: "fade",
        duration: 300
      },
      modal: true,
      buttons: {
        "Delete item?": function() {
          targetElement.parent().remove();
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
    
    e.preventDefault();
    
  });


  // calculate total findings
  $('.findings').on('change', function() {
    computeTotalFindings();
  });

  $('.findings').on('keyup', function() {
    computeTotalFindings();
  });

  
}); // document





// ***** FUNCTIONS ***** //

function computeTotalFindings() {
  var sum = 0;
  $('.findings').each(function(){
      sum += Number($(this).val());
  });
  $('.total-findings').val(sum);
}

function dateToday(){
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '-' + dd + '-' + yyyy;
  
  return today;
}