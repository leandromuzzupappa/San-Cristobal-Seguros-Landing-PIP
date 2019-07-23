// Handle loading
function onEnterFrame() {
	t = setTimeout(function(){ onEnterFrame() }, 25);
}
function onResize() {
}
$(document).ready(function () {
	
	// Eventos Loading
	var animLoading = new TimelineMax({ repeat:-1 });
	animLoading.add( TweenLite.to( "#loading .lineaFrente", 2, { "stroke-dashoffset":-640, ease:Power0.easeNone } ) );
	
	// Eventos Responsive
	$( window ).resize(function() {
		onResize();
	});
	onResize();

});
$( window ).load(function() {
	
	// LOADING
	TweenLite.to( $("#loading"), 0.5, { opacity:0, delay:0.2,
		onComplete:function(){
			$("#loading").css("display","none");
		}
	});
	
	onEnterFrame();
	
});

// Handle login alerts events
function removeAlert (id) {
	let Element = $('#'+id);
	Element.css({
		'right': '-400px'
	})
	setTimeout(() => {
		Element.remove();
	}, 500);
}



// Handle section2 disabled
function removeDisable (seccion) {
	if ( !$('.'.seccion).hasClass('disabled') ) {
		$('.barco img').attr('src', './assets/images/barco.png');
	}
}

// Handle form button
// - remove section2 disabled class
$('#sendUserData').click(() => {
	event.preventDefault();
	
	var formUrl = $('#getUserData').attr('action');
	console.log(formUrl);
    $.ajax({
        url: formUrl,
        type: 'POST',
        dataType: 'json',
        data: $('#getUserData').serialize(),
        success: function(data) {
                  console.log('enviado');
                 }
	});

	window.open('./assets/scripts/functions.php');
	
	$('.seccion2').removeClass('s2disabled');
	removeDisable('seccion2');
});

// Handle boton sortear
var getCamarote = function(){
	var camarotes = new Array('5958','3496');
	var i;

	for (i=0;i<camarotes.length;i++){
	  var printCamarote = camarotes[Math.floor(Math.random() * camarotes.length)];
	  $('#numero-de-camarote > h2').html(printCamarote)
	}

	$('.seccion3').removeClass('s3disabled');
	removeDisable('seccion3');

	$('.seccion4').removeClass('s4disabled');
	removeDisable('seccion4');

	/*
	$('.cta').css('cursor', 'not-allowed')
	$('#sorteo').css({
		'pointerEvents': 'none',
		'background': '#EBEDF0',
		'color': '#CCCCCC'
	})
	*/
  };

// sorteo
$('#sorteoButton').click(() => {
	event.preventDefault();

	var camarotes = new Array('5958','3496');

	for (let i= 0; i< camarotes.length; i++){
	var printCamarote = camarotes[Math.floor(Math.random() * camarotes.length)];
	
		$('#numero-de-camarote > h2').html(printCamarote);

		var urlBonita = './assets/scripts/functions.php';
		$.ajax({
			url: urlBonita,
			type: 'POST',
			dataType: 'json',
			data: camaroteSorteado = printCamarote,
			success: () => {
				console.log('botoncito enviado');
			}
		})

		window.open('./assets/scripts/functions.php');

	}
})
