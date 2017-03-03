var sitemap = [
	{ slug: 'start', 	title: 'Strona główna', 	template: '', icon:'' },
	{ slug: 'about', 	title: 'O nas', 			template: '', icon:'' },
	{ slug: 'offer', 	title: 'Oferta', 			template: '', icon:'' },
	{ slug: 'works', 	title: 'Portfolio', 		template: '', icon:'' },
	{ slug: 'contact', 	title: 'Kontakt', 			template: '', icon:'' }
];

function paintMenu(id) {
	var templateNav = Handlebars.compile("<div>{{#each sitemap}}<div><a href=\"{{slug}}.html\">{{title}}</a></div>{{/each}}</div>");
	var appNav = document.getElementById(id);
	var data = { sitemap: sitemap };
	appNav.innerHTML = templateNav(data); 
}

function loadTemplate(src) {		
	var jsSrc = $('<script src="'+src+'"></script>');
	$("head").append(jsSrc); 		
};	
