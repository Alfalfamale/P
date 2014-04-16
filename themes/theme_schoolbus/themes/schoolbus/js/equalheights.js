$(function(){ 
	// Create array of resizable elements.
	var d = new Array(); d['L'] = new Array(); d['M'] = new Array(); d['S'] = new Array();
	for(t in d) {
		for(var i=1; i<999; i++) {
			if($('.eqH-'+t+'-'+i).length == 0) break;
			d[t]['eqH-'+t+'-'+i] = $('.eqH-'+t+'-'+i); 
		}
	}
	
	$(window).on('resize', function() {
		if(this.resizeTO) clearTimeout(this.resizeTO);
		this.resizeTO = setTimeout(function() { $(this).trigger('resizeEnd'); }, 100);
	}).on('resizeEnd', function() {
		var t = 'L';
		if($(window).width() < 781) t = 'M';
		if($(window).width() < 481) t = 'S';
		equalHeightsReset();
		for(var p in d[t]) {
			if(d[t][p].length > 0)  {
				equalHeightsResizeRow(d[t][p]);
			}
		}
	}).trigger('resize');
	
	function equalHeightsReset() {
		for(t in d) {
			for(var p in d[t]) {
				d[t][p].height('auto');
			}
		}
	}
	
	function equalHeightsResizeRow(o) {
		var ms = 0, me;
		o.each(function() { // Find biggest first.
			if ($(this).outerHeight() > ms ) {
				me = this; ms = $(this).outerHeight();
			}
		});
		return o.each(function() { // Resize the rest.
			if(this != me) { $(this).height(ms); }
		});
	}
});