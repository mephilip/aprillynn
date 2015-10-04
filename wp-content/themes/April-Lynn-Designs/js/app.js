// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


function loadPortfolioImgExt(e)
{
	var currDiv = e.getAttribute('id');
	var currImg = e.getElementsByTagName('img');
	
	console.log(currDiv);
	
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajax-view").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","#" + currDiv,true);
xmlhttp.send();
}

function removeClass(element, index, array){
	element[index].classList.remove('active');
}

function loadPortfolioImg(e)
{
	
	var gallery = document.getElementById('slicker');
	var view = document.getElementById('portfolio-view');
	var activeNow = gallery.getElementsByClassName('active');
	for (var i = 0; i<=activeNow.length; i ++) {
		activeNow[i].classList.remove('active');
	}
	e.className = e.className + "active";
	var currDiv = e.getAttribute('id');
	var currImg = e.innerHTML;
	
	view.innerHTML = currImg;
	
	console.log(currDiv);
}

// On document ready:

$(function(){

	// Instantiate MixItUp:

	$('#gallery-view').mixItUp();

});





$(document).ready(function() {
	$('#gallery-view > .anitem').on('click', function() {
		 $('#ajax-view').addClass('ajaxpad');
		var toLoad = $(this).attr('id')+' #portfolio-single';
	    $('#ajax-view').hide('fast',loadContent);
	    $('#load').remove();
	    $('#ajax-wrapper').append('<span id="load">LOADING...</span>');
	    $('#load').fadeIn('normal');

	    //window.location.hash = $(this).attr('id').substr(0,$(this).attr('href'));
	    function loadContent() {
	        $('#ajax-view').delay(1000).load(toLoad,'',showNewContent());
	       	}
	   
	    function showNewContent() {
		    
		    	        $('#ajax-view').show('normal',hideLoader());
		    	         
		    	        
	    }
	    function hideLoader() {
	        $('#load').delay(1000).fadeOut('normal');
	        $("html, body").animate({ scrollTop: 0 }, "slow");
					  return false;
	    }

	});
});

function hideView() {
		$('#load').remove();
	    $('#ajax-view').hide('slow', removePort);
	    function removePort() {
		    $('#load').delay(1000).fadeOut('normal');
	    }
	    
}

	  


$(document).ready(function() {
	$('.slick-slider').slick({
		lazyLoad: 'ondemand',
		centerMode: true,
		centerPadding: '60px',
		variableWidth: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		]
	  });
});

$(document).change(function() {
	$('.slick-slider').slick({
		lazyLoad: 'ondemand',
		centerMode: true,
		centerPadding: '60px',
		variableWidth: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		]
	  });
});