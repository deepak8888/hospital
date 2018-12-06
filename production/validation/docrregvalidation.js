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

		$("#docregistration").validate({		
		rules:{
			name:{required:true},
			address:{required:true},
			email:{required:true,
			email:true,
			 },
			 phone:{required:true},
 photo:{required:true,
                // extension: "docx|rtf|doc|pdf"

 },

				 qualification:{required:true},
				 certificate:{required:true},
		
				 venue:{required:true},


			username:{required:true,
			remote:'check_username.php'
			 },
						password:{required:true},
 
			},
		
messages:{
	
username:{
			remote:"Already Exist",
			 },	
}
			
		
		});
	