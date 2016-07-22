$(document).ready(function(){
	$('#DeleteButton').click(function(e){
		e.preventDefault();
		if(confirm('Are you sure you want to delete?')){
			var action = $('#TeacherEditForm').attr('action');
				action = action.replace('edit','delete');
			$('#TeacherEditForm').attr('action',action).submit();
		}
	});
});