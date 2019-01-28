// Get the modal
var modal = document.getElementById('idLogin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function openPopup(){
	modal.style.display='block';
	if ( $('body').hasClass('offcanvas') ) {
    	$('body').removeClass('offcanvas');
    	$('.js-fh5co-nav-toggle').removeClass('active');
	}
}
