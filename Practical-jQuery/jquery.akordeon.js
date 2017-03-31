(function($){
	$.fn.akordeon = function(){
	
		var $akor = $(this);
				
		$('pre', $akor).slideUp(1);
		$('pre', $akor).first().slideDown(1);
		if($akor.size() > 1){
			$('h3', $akor).click(function(){
				$('pre', $akor).slideUp("fast");
				$(this).next('pre').slideDown("fast");
			});
		}
	}
})(jQuery)