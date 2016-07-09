$(document).ready(function(){
	//Initialize variables
	var CURRENT_PAGE = 0;
	var TOTAL_PAGES = $('.page').length;
	//Define showCurrentPage function
	function showCurrentPage(page_no){
		//Hide all pages first before displaying current page
		$('.page').hide();
		$('.page-'+page_no).show();
		CURRENT_PAGE = page_no;
	}
	//Define displayError function
	function displayError(CODE){
		return alert('Action not allowed for '+CODE);
	}
	//Define computeTotal function 
	function computeTotal(page_no){
		//Get all inputs for the current page
		var scores = $('.page-'+page_no).find('.choices input[type="text"]');
		//Initialize total to zero
		var total = 0;
		//Loop on the scores and add to total
		$.each(scores,function(i,s){
			//Convert value to integer before adding
			var score = parseInt($(s).val());
			total+=score;
		});
		//Display total to inputbox
		$('.total-'+page_no).val(total);
	}
	//Show initial current page
	showCurrentPage(CURRENT_PAGE);
	
	//Handle radio button input
	$('.choices>input[type="radio"]').change(function(){
		var score  =  $(this).val();
		var inputbox = $(this).parent().find('input[type="text"]');
		inputbox.val(score);
		computeTotal(CURRENT_PAGE);
	});
	
	//Navigation buttons
	$('#proceed-button').click(function(e){
		e.preventDefault();
		var curr_page =  CURRENT_PAGE + 1;
		if(curr_page<TOTAL_PAGES)
			showCurrentPage(curr_page);
		else
			displayError('LAST_PAGE');
	});
	$('#back-button').click(function(e){
		e.preventDefault();
		var curr_page =  CURRENT_PAGE - 1;
		if(curr_page>=0)
			showCurrentPage(curr_page);
		else 
			displayError('FIRST_PAGE');
	});
});