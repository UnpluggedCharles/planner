/* JS File */

// Start Ready
//<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
//<script type="text/javascript">
    
$(document).ready(function() {  

	// Icon Click Focus
	$('div.iconSearch').click(function(){
		$('input#SearchEquip').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#SearchEquip').val();
		$('b#SearchEquip-string').text(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "http://localhost/SearchEquip.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results").html(html);
				}
			});
		}return false;    
	}

	$("input#SearchEquip").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("ul#results").fadeOut();
			$('h4#results-text').fadeOut();
		}else{
			$("ul#results").fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});
//</script>