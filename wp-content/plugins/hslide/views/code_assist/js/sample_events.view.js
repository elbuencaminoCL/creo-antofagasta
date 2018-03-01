//SAMPLE_EVENTS VIEW

//view load
jQuery(function(){
	//bind message button event listeners
	bind_event_btn_listeners();
});

//bind message button event listeners
function bind_event_btn_listeners(){
	//subscribe btn
	jQuery('#subscribe_btn').on('click', function(){
		hplugin_event_subscribe('view-nav','event_callback',{"example_object": 123});
	});
	//subscribe once btn
	jQuery('#subscribe_once_btn').on('click', function(){
		hplugin_event_subscribe_once('view-nav','event_callback',{"example_object": 123});
	});
	//unsubscribe btn
	jQuery('#unsubscribe_btn').on('click', function(){
		hplugin_event_unsubscribe('view-nav');
	});
}

//event callback
function event_callback(json){
	show_message('message', 'Message', 'Navigation event detected. JSON object passed: '+ JSON.stringify(json));
}