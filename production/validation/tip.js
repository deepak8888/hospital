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
$("#tip").validate({		
		rules:{
			health_tips:{required:true},
			
		},
		messages:{
			health_tips:{required: "Enter the tip"},
		
			},
		});
