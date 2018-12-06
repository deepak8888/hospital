$.validator.setDefaults({
    showErrors: function(errorMap, errorList) {
        if (errorList.length < 1) {
            $('label.error').remove();
            return;
        }
        $.each(errorList, function(index, error) {
            $(error.element).next('label.error').remove();
            $(error.element).after(
                $('<label/>')
                    .addClass('error')
                    .append($('<em/>').text(''))
                    .append(error.message)
            );
        });
    }
});    

$("#registration").validate({	

		rules:{
			name:{required:true},
			address:{required:true},
			district:{required:true},
			locality:{required:true},
			contact:{required:true},
			email:{required:true,
			email:true,
			remote:'check_email.php'
			},
			bank:{required:true},
			branch:{required:true},
			acno:{required:true},
			username:{required:true,
	   	    remote:'check_username.php'
			},
			password:{required:true},
			
			},
			
		messages:{
			name:{required: "Enter your name"},
		address:{required:"Enter your address"},
			district:{required:"Select your district"},
			locality:{required:"Select your locality"},
			contact:{required: "Enter your contact number"},
			email:{required:"Enter your email address",
			remote:'already exist'},
			bank:{required: "Enter your bank"},
			branch:{required:"Enter your branch"},
			acno:{required:"Enter your account number"},
			username:{required: "Enter your username",
			remote:'already exist'},
			password:{required:"Enter your password"},
			
		},
		
		});
	