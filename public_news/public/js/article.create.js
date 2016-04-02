$("form").submit(function() {
	$('input[name="Content"]').val($('#summernote').code());
    return true;
});

$.cloudinary.config({ cloud_name: 'pauer-projects', api_key: '997557685584258'})
