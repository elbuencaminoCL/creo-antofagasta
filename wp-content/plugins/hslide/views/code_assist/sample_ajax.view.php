<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_ajax.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework AJAX<br />
            <strong class="size_11 hero_grey">Built in wrapper for AJAX implementation</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Registering AJAX Hooks</h3>
                <p>
                	The framework has been configured to wrap the WordPress AJAX implementation in order to simplify object scope. All AJAX hooks must be registered in the 
                    "inc/ajax.calls.php" file. Hooks are automatically registered within the WordPress platform, taking authentication and scope into account.
                </p>
                <br>
                <p>
                	AJAX calls can be registered for the framework as well as the shortcode output - these two sections have been referred to as the 'backend' (admin) and the
                    'frontend' (website).
                </p>
                <br>
                <p>
                	Two classes have been constructed and configured to contain methods for the AJAX hooks to link to. There is a "backend.class.php" and a "frontend.class.php" located 
                    in the "classes/" directory. The idea is to add all methods required for the admin section in the backend class and all methods required by the website frontend in 
                    the frontend class.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Register AJAX Hooks</span>
<pre>
//backend AJAX registration
$backend_ajax_calls = array(
    array('action' => 'code_assist_example','method' => 'code_assist_example')		
);

//frontend AJAX registration
$frontend_ajax_calls = array(
    array('action' => 'frontend_example','method' => 'frontend_example')
);
</pre>
<!--END: sample code-->
			</div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">AJAX calls from JavaScript to PHP</h3>
                <p>
                	Once AJAX hooks have been registered and all required methods have been constructed, you can perform an AJAX post to the framework. Below is an example of how a post
                    should be constructed.
                </p>
                <br>
                <p>
                	The action defined which hook you would like to make use of - the action is a combination of your plugin name and the action defined in the hook registration.
                    As an example, if your plugin name is 'hplugin' and your hook action is 'code_assist_example' then you would combine the two strings with a underscore as a separator 
                    to determine the correct action - "hplugin_code_assist_example".
                </p>
                <br>
                <p>
                	To attach data to your post, you would append it as an additional node under the "data" node in the AJAX post. It is recommended that you make use of a serialized 
                    string as this is relatively simple to construct in JavaScript and PHP is capable of converting the string into a PHP object.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">JavaScript AJAX Call</span>
<pre>
jQuery.ajax({
    url: ajax_url,
    type: "POST",
    data: {
        'action': 'hplugin_code_assist_example',
        'form_data': jQuery('#example_form').serialize()
    },
    dataType: "json"
}).done(function(response){
    console_log(response);
});
</pre>
<!--END: sample code-->
			</div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Accessing Post Data In The Backend</h3>
                <p>
                	In order to access information, posted from JavaScript to PHP, in the backend you can reference the $_POST object. It is recommended that posted data is sent in the
                    form of a serialized string.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Access Post data</span>
<pre>
//access post data
$post_data = $_POST['form_data'];
</pre>
<!--END: sample code-->
			</div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Converting Post Data To A PHP Object</h3>
                <p>
                	Serialized strings can be converted to a PHP 'key->val' object by making use of the parse_str method.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Convert Post Data To Object</span>
<pre>
//convert post data to PHP object
$form_data = array();
parse_str($post_data, $form_data);
</pre>
<!--END: sample code-->
			</div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">AJAX Post Example</h3>
                <p>
                	Below is a working example of data passing from JavaScript to PHP and back from PHP to JavaScript.
                </p>
            </div>
            <form id="example_form">
                <div class="hero_col_12">
                    <div class="hero_col_1">
                        <label for="my_input">
                            <h2 class="size_14 hero_green">String</h2>
                        </label>
                    </div>
                    <div class="hero_col_11">
                        <input type="text" data-size="sml" id="my_input" name="my_input" maxlength="50">
                    </div>
                </div>
                <div class="hero_col_12">
                	<div class="hero_col_1">
                    	&nbsp;
                    </div>
                    <div class="hero_col_11">
	                    <div id="example_submit_btn" class="hero_button_auto darkgrey_button rounded_3">SUBMIT</div>
                    </div>
                </div>
            </form>
		</div>
                     
                        
    </div>
</div>