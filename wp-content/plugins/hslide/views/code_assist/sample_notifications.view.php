<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_notifications.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Notifications<br />
            <strong class="size_11 hero_grey">Built in framework messaging system</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Core Message System</h3>
                <p>
                	The core framework contains a message queuing system that allows you to notify a user when certain events take place. In order to append a message to the queue, you can call
                    "show_message". There are three supported message types "success", "error" and "message" - each type differs in colour. The message queue method requires three parameters:
                    "type", "title" and "message". Messages are displayed for a total of 5 seconds and can be queued from any view/subview.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Message Queueing</span>
<pre>
//success
show_message('success', 'Success Message', 'This is a success message.');

//error
show_message('error', 'Error Message', 'This is a error message.');

//message
show_message('message', 'Message', 'This is a message.');
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="success_btn" class="hero_button_auto green_button rounded_3">SUCCESS</div>
                <div id="error_btn" class="hero_button_auto red_button rounded_3">ERROR</div>
                <div id="message_btn" class="hero_button_auto darkgrey_button rounded_3">MESSAGE</div>
            </div>
		</div>
                      
                        
    </div>
</div>