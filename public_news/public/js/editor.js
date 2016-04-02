$(document).ready(function() {
	$('#summernote').summernote({
		  placeholder: 'Please, write something amazing!',
		  height: 200,                 // set editor height
		  minHeight: 200,            // set minimum height of editor
		  toolbar: [
		            // [groupName, [list of button]]
		            ['style', ['bold', 'italic', 'underline', 'clear']],
		            ['font', ['strikethrough', 'superscript', 'subscript']],
		            ['fontsize', ['fontsize']],
		            ['color', ['color']],
		            ['para', ['ul', 'ol', 'paragraph']],
		            ['height', ['height']]
		          ]
	});
});