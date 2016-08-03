var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){

	//USERNAME EVENT HANDLER
	$('#UserUsername').on('change',function(){
		var username = $(this).val();
		var loginuser = $('#LoginUser').text();
		if(username == loginuser){
			$('#UserUsername').siblings('.help-inline').remove();
			$('#SubmitButton').attr('disabled','disabled');
		}else{
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
					if(username.length){
						if(FormReturn.result){
							$('#UserUsername').after('<span class="help-inline">'+FormReturn.message+'</span>');
							$('#UserUsername').val('').focus();
						}
					}
					$('#SubmitButton').removeAttr('disabled');
				}
			}); 
		}
	}); 

	//CHANGEPASSWORD CHECKBOX EVENT HANDLER
	$('#ChangePassword').on('click',function(){
		var isCheck =  $(this).is(':checked');
		if(isCheck){
			$('#NewPasswordWrapper').find('input').removeAttr('disabled');
		}else{
			$('#NewPasswordWrapper').find('input').attr('disabled','disabled');
		}
	});

	//CHANGEINFO CHECKBOX EVENT HANDLER
	$('#ChangeInfo').on('click',function(){
		var isCheck =  $(this).is(':checked');
		if(isCheck){
			$('#InfoWrapper').find('input').removeAttr('disabled');
		}else{
			$('#InfoWrapper').find('input').attr('disabled','disabled');
		}
	});
	
	//PASSWORD VALIDATION EVENT HANDLER
	$('#UserNewPassword,#UserRe-typeNewPassword').on('change',function(){
		$('#UserRe-typeNewPassword').siblings('.help-inline').remove();
		$('#UserRe-typeNewPassword').parents('.control-group').removeClass('error');
		
		if($('#UserNewPassword').val().length){
			if($('#UserNewPassword').val() != $('#UserRe-typeNewPassword').val() && $('#UserRe-typeNewPassword').val().length){
				$('#UserRe-typeNewPassword').after('<span class="help-inline">Password did not matched</span>');
				$('#UserRe-typeNewPassword').parents('.control-group').addClass('error');
				$('#UserRe-typeNewPassword').val('').focus();
			}
		}
	});
	
	//CURRENT PASSWORD VALIDATION
	$('#UserCurrentPassword').on('change',function(){
	
		var current_password = $(this).val();
		if(current_password.length){
			$.ajax({
				url:BASE_URL+'users/check_password',
				dataType:'json',
				data:{'data':{'User':{'current_password':current_password}}},
				type:'post',
				beforeSend:function(){
					$('#UserCurrentPassword').siblings('.help-inline').remove();
					$('#UserCurrentPassword').parents('.control-group').removeClass('error');
					$('#SubmitButton').attr('disabled','disabled');
				},
				success:function(FormReturn){
					if(FormReturn.status=="ERROR"){
						$('#UserCurrentPassword').after('<span class="help-inline">'+FormReturn.message+'</span>');
						$('#UserCurrentPassword').parents('.control-group').addClass('error');
						$('#UserCurrentPassword').val('').focus();
					}else{
						$('#SubmitButton').removeAttr('disabled');
					}
				}
			}); 
		}else{
			$('#SubmitButton').removeAttr('disabled');
		}
	});	
	
});

