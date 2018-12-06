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
$("#article").validate({		
		rules:{
			title:{required:true},
			description:{required:true},
			upload_file:{required:true},
		},
		messages:{
			title:{required: "Enter Tittle"},
			description:{required:"Enter description"},
			upload_file:{required:"Uploab images"},
			},
		});
