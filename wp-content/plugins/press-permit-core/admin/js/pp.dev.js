function pp_jqid(selector) {
    return selector.replace(/:/g, '\\:');
}

jQuery(document).ready( function($) {
	$(".pp-hidden-subdiv h3").click( function(e) {
		e.preventDefault();
		$(this).siblings(".hide-if-js").show();
	});
	
	//$('#userprofile_groupsdiv_pp ul.pp-agents-list li label').live('mouseenter', function() {
	$(document).on('mouseenter', '#userprofile_groupsdiv_pp ul.pp-agents-list li label', function() {
		var func = function(lbl) {
			//if ( $(lbl).is(':hover') )
				$(lbl).closest('li').find('a').show();
		}
		window.setTimeout( func, 300, $(this) );
	});
	
	$('span.pp-alert').each( function() {
		var msg = $(this).html();
		if ( msg ) {
			$( '<div id="message" class="error fade">' + msg + '</div>').insertAfter('#wpbody h2');
		}
	});
});

function agp_escape_id(myid) { 
   return myid.replace(/(:|\.)/g,'\\$1');
}