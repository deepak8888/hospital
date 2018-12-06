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
			
			number:{required:true},
			email:{required:true,
			email:true,
			 },
			 photo:{required:true,
               // accept: 'docx|doc'
},

			username:{required:true,
			remote:'check_username.php'
			 },
			password:{required:true},
			},
		messages:{
			name:{required: "Enter your name"},
			address:{required:"Enter your address"},
			
			number:{required: "Enter your contact number"},
			email:{required:"Enter your email address",
			},
						photo:{required: "Enter your Photo",
									      // accept: "format"

						},

			username:{required: "Enter your username",
						remote:"username already exist",

			},
			password:{required:"Enter your password"},
		},
		});
	