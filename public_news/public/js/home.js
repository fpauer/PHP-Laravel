
var articleKeyDel = '';
function confirmDelete(title, id)
{
	articleKeyDel = id;
	$('#modalMessage').html('The article "'+title+'" will be deleted, please confirm ?');
	$('#confirmModal').modal('show');
}


function deleteArticle()
{
    $.ajax({
        type: "GET",
        async: true,
        url: "/article/"+articleKeyDel+"/destroy",
        cache: false,
        success: function(data) {

			if( data == 'OK' )
			{
				window.location.href='/home';
			}
        }
    });
}

$('#btModalYes').click(function(){
	deleteArticle();
});

function toggleArticle(obj, articleKey, active)
{
    $.ajax({
        type: "GET",
        async: true,
        url: "/article/"+articleKey+"/update?active=" + active,
        cache: false,
        success: function(data) {

			if( data == 'OK' )
			{
				if( active == 0 )
				{
					$(obj).removeClass('btn-default');
					$(obj).addClass('btn-warning');
					$(obj).prev().removeClass('btn-success');
					$(obj).prev().addClass('btn-default');
				}
				else
				{
					$(obj).removeClass('btn-default');
					$(obj).addClass('btn-success');
					$(obj).next().removeClass('btn-warning');
					$(obj).next().addClass('btn-default');
				}
			}
        }
    });
}
