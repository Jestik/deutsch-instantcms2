jQuery(function($){
	$.datepicker.regional['de'] = {
		clearText: 'Löschen', clearStatus: '',
		closeText: 'Schließen', closeStatus: '',
		prevText: '&#x3c;Zurück', prevStatus: '',
		prevBigText: '&#x3c;&#x3c;', prevBigStatus: '',
		nextText: 'Weiter&#x3e;', nextStatus: '',
		nextBigText: '&#x3e;&#x3e;', nextBigStatus: '',
		currentText: 'Heute', currentStatus: '',
		monthNames: ['Januar','Februar','März','April','Mai','Juni',
		'Juli','August','September','Oktober','November','Dezember'],
		monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
		'Jul','Aug','Sep','Okt','Nov','Dez'],
		monthStatus: '', yearStatus: '',
		weekHeader: 'KW', weekStatus: '',
		dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
		dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		dayStatus: 'DD', dateStatus: 'D, d. M',
		dateFormat: 'dd.mm.yy', firstDay: 1,
		initStatus: '', isRTL: false};
	$.datepicker.setDefaults($.datepicker.regional['de']);
});