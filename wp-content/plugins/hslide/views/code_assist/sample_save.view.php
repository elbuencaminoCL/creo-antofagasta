<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_save.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Data Persistance<br />
            <strong class="size_11 hero_grey">Built in save functionality</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Flag Save Required</h3>
                <p>
                	If you check the top right-hand corner, you will notice that a save button has been placed in the header. This button needs to be configured to display in the
                    menu object. Once included, every time a save is required, you can merely call "flag_save_required" and the button will become active and the framework core will 
                    attempt to prevent users from navigating away from the View Core - this prevention mechanism comes in the form of an alert box explaining that a loss of data could occur.
                </p>
                <br>
                <p>
                	When calling the "flag_save_required" function you can pass a callback function, that will be called when the save button is clicked. Once clicked, the button will become 
                    disabled and the callback function will be called. It is the responsibility of the developer to persist any data changes to the database - the framework is merely managing 
                    the UX.
                </p>
                <br>
                <p>
                	In order to manually remove the requirement for the user to save, you can call "remove_save_required". The button will be disabled and the callback binding will be removed.
                </p>
            </div>
            
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Setting the save required and using a callback method</span>
<pre>
jQuery(function(){
	flag_save_required('save_clicked');
});

function save_clicked(){
	console_log('The user has clicked save');
}
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="flag_save_required_btn" class="hero_button_auto darkgrey_button rounded_3">FLAG SAVE REQUIRED</div>
            </div>
            <i>After clicking "Flag Save Required", navigate to the dashboard by selecting "Dashboard" in the sidebar.</i>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Remove save required</span>
<pre>
remove_save_required();
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="remove_save_required_btn" class="hero_button_auto darkgrey_button rounded_3">REMOVE SAVE REQUIRED</div>
            </div>
		</div>
                      
                        
    </div>
</div>