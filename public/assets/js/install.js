$(document).ready(function(){

    /* form wizard */
    if($("#form-wizard").length > 0){
        $("#form-wizard").bootstrapWizard({"tabClass": "form-wizard-levels"});
    }
    /* Wizard validation */
    if($("#form-wizard2").length > 0){

        var $validator = $("#wizard-validate").validate({
    		rules: {
                company_name:{
                    required    : true,
                    minlength   : 3,
                    maxlength   : 32
                },
                company_service:{
                    required    : true
                },
                username: {
                    required    : true,
                    minlength   : 6,
                    maxlength   : 32
                },
                password: {
                    required    : true,
                    minlength   : 6,
                    maxlength   : 64
                },
                name: {
                    required    : true,
                    minlength   : 3,
                    maxlength   : 64
                },
                email: {
                    required    : true,
                    email       : true
                }
            }
		});

	  	$('#form-wizard2').bootstrapWizard({
	  		'tabClass': 'form-wizard-levels',
	  		'onNext': function(tab, navigation, index) {
	  			var $valid = $("#wizard-validate").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
                                var $total = navigation.find('li').length;
                                var $current = index+1;
                                if($current >= $total) {
                                    $('#wizard-validate').find('.pager .next').hide();
                                    $('#wizard-validate').find('.pager .finish').show();
                                }else{
                                    $('#wizard-validate').find('.pager .next').show();
                                    $('#wizard-validate').find('.pager .finish').hide();
                                }
	  		},
                        onTabClick: function(tab, navigation, index) {return false;}
	  	});
    }
    /* eof wizard validation */
    /* eof form wizard */

    $("#companyName").keyup(function() {
        $('#reviewCompanyName').html($('#companyName').val());
    });

    $('#companyService').change(function(){
        $('#reviewCompanyService').html($('#companyService option:selected').text());
    });

    $("#companyAddress").keyup(function() {
        $('#reviewCompanyAddress').html($('#companyAddress').val());
    });

    $("#companyDescription").keyup(function() {
        $('#reviewCompanyDescription').html($('#companyDescription').val());
    });

    $("#adminUsername").keyup(function() {
        $('#reviewAdminUsername').html($('#adminUsername').val());
    });

    $("#adminName").keyup(function() {
        $('#reviewAdminName').html($('#adminName').val());
    });
    $("#adminEmail").keyup(function() {
        $('#reviewAdminEmail').html($('#adminEmail').val());
    });
});
