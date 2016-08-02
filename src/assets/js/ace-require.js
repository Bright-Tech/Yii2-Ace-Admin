require.config({
	baseUrl: '../assets/js',
	
	waitSeconds: 600,
	
    shim: {
        'bootstrap': {
            deps: ['jquery']
        },
		'ace': {
            deps: ['jquery', 'bootstrap']
        },
		'ace-elements': {
			deps: ['ace']
		}
    }
});
require(['jquery', 'bootstrap', 'ace', 'ace-extra', 'ace-elements'], function($) {
	//try, to hide possible errors in case ace.demo is not available
	try {
		ace.demo.init(true);//true means the call is not from inside a jQuery document ready event
	} catch(e) {}
	
	/**
	//you can restore state of elements now (ace-extra.js is loaded)
	$('.ace-save-state').each(function() {
		ace.settings.loadState(this);
	});
	
	//or as soon as you render an element such as sidebar, etc ...
	  ace.settings.loadState('sidebar');
	*/
});