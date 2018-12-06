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
$("#log").validate({		
		rules:{
			username:{required:true},
			password:{required:true},
			usertype:{required:true},
		},
		messages:{
			username:{required: "Enter your username"},
			password:{required:"Enter your password"},
			usertype:{required:"Select your usertype"},
			},
		});
