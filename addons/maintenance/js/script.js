(function($){
	
	var note = $('#note'),
		ts = new Date(2014, 12, 1); // der 01. 12. 2014 ist voreingestellt
		
		eventDate = true;
	
	if((new Date()) > ts){
		// Wenn der 01.12.2014 erreicht ist, werden 10 jeweils Tage runtergezählt
		ts = (new Date()).getTime() + 10*24*60*60;
		eventDate = false;
	}
		
		
		
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes){
			
			var message = "";
			
			message += "Nur noch "; // Text kann hier angepasst werden
			message += days + " Tage" + ( days==1 ? '':'' ) + ", ";
			message += hours + " Stunden" + ( hours==1 ? '':'' ) + " und ";
			message += minutes + " Minuten" + ( minutes==1 ? '':'' ) + ".";
			message += ""; // Text kann hier angepasst werden
			
			note.html(message);
		}
	});
	
})(jQuery);


jQuery(document).ready(function() {
	
	$('body').mouseenter(function() {
		$('.spinner').addClass('spin');
		});
		$('body').mouseleave(function() {
		$('.spinner').removeClass('spin');
		})
    
});