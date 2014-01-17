/**
 * function dee l'image de fond
 */
function redimensionnement(){
    var $image = $('.img-contrat');
    var image_width = $image.width();
    var image_height = $image.height();
    var over = image_width / image_height;
    var under = image_height / image_width;
    var body_width = $(window).width();
    var body_height = $(window).height();
    if(body_width / body_height >= over){
      $image.css({
      	'width': body_width + 'px',
      	'height': Math.ceil(under * body_width) + 'px',
      	'left': '0px',
      	'top': Math.abs((under * body_width) - body_height) / -2 + 'px' 
      }); 
    }else { 
      $image.css({
      	'width': Math.ceil(over * body_height) + 'px',
      	'height': body_height + 'px',
      	'top': '0px',
      	'left': Math.abs((over * body_height) - body_width) / -2 + 'px' 
      }); 
    } 
}

$(document).ready(function(){
	// chargement de la page
	  redimensionnement();

	//en cas de redimentionnement de la fenete
	$(window).resize(function(){
		redimensionnement();
	});
});