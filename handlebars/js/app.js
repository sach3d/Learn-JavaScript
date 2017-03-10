(function(){
	
	renderPage();

	function renderPage(){
		var template = $('#index-template').html(),
			compiled = Handlebars.compile(template),
			rendered = compiled(window.language);

		$('#main').html(rendered);
		$('LanguageSwitch').click(function(){
			DogPack.switchLanguage();
		}); 
	}
})();