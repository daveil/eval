var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){

	//USERNAME EVENT HANDLER
	$('#UserUsername').on('change',function(){
		var username = $(this).val();
		$.ajax({
			url:BASE_URL+'users/check',
			dataType:'json',
			data:{'data':{'User':{'username':username}}},
			type:'post',
			beforeSend:function(){
				$('#UserUsername').siblings('.help-inline').remove();
				$('#SubmitButton').attr('disabled','disabled');
			},
			success:function(FormReturn){
				console.log(FormReturn);
				if(username.length){
					if(FormReturn.result){
						$('#UserUsername').after('<span class="help-inline error">'+FormReturn.message+'</span>');
						$('#UserUsername').val('').focus();
					}
				}
				$('#SubmitButton').removeAttr('disabled');
			}
		}); 
	});

	
	//PASSWORD VALIDATION EVENT HANDLER
	$('#UserConfirmPassword,#UserPassword').on('change',function(){
		$('#UserConfirmPassword').siblings('.help-inline').remove();
		
		if($('#UserPassword').val().length){
			if($('#UserPassword').val() != $('#UserConfirmPassword').val() && $('#UserConfirmPassword').val().length){
				$('#UserConfirmPassword').after('<span class="help-inline error">Password did not matched</span>');
				$('#UserConfirmPassword').val('').focus();
			}
		}
	});
	
	/*
	//PASSWORD CAPSLOCK EVENT HANDLER
	$('#UserPassword,#UserConfirmPassword').on('keypress',function(e){
		kc = e.keyCode?e.keyCode:e.which;
		sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);

		if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)){
			if (!$(this).next('div.popover:visible').length){
				$(this).popover('show');
			}
		}else{
			$(this).popover('hide');
		}
	}).on('blur',function(e){
		$(this).popover('hide');
	}).popover({content:'Caps Lock is on',placement:'bottom',trigger:'manual'});
	*/
});
