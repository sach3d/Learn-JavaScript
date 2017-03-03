	

var numer = Math.floor(Math.random()*5) + 1;//Math.floor zamienia losowe liczby zdrobnione na cale

function schowaj()
{
	$("#slider").fadeOut(1000);
}

function zmienslajd()
{
	numer++; 
	if (numer > 5) numer = 1;

	var plik = "<img src=\"img/img" + numer + ".jpg\">";
	
	document.getElementById('slider').innerHTML = plik;
	$('#slider').fadeIn(1000);

	setTimeout("zmienslajd()", 5000);
	setTimeout("schowaj()", 4000);
}

