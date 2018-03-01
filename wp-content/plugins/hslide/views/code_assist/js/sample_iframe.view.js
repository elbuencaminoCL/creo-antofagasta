//SAMPLE_IFRAME VIEW

//view load
jQuery(function(){
	//load iframe for pack upload
	load_iframe();
});

//load iframe for pack upload
function load_iframe(){
	load_secure_iframe('inc/iframe.example.php', 45, '.example_iframe_holder');
}

//detect processing completion
function process_complete(){
	//show success message
	show_message("success", "Upload Success", "The selected file was successfully passed to the server.");
	//reload iframe (new security token)
	load_iframe();
}