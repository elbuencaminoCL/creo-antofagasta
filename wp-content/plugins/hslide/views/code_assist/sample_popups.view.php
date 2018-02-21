<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_popups.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Popup Panels<br />
            <strong class="size_11 hero_grey">Built in panel windows</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Launch Popup Window</h3>
                <p>
                	The core framework has a built in popup window system. Popup windows are populated with HTML snippets. Snippets are scoped to make use of framework CSS - this allows 
                    developers to make use of framework components and styles within their HTML snippets. There are 3 required methods when launching a popup: a method to run when the 
                    popup is launched (this will only be called once the HTML snippet has been successfully loaded), a method to run when the popup "Update" button is clicked and a method to run the  
                    popup "Cancel" button is clicked - the framework will make the JSON object available to all 3 functions. The launch method can be used to populate the HTML snippet that has been 
                    loaded into the popup. The update method can be used to persist changes in the popup window data back to the View Core object.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Launch Popup</span>
<pre>
launch_hero_popup('code_assist/html_snippets/popup.html','popup_launch','popup_update_clicked','popup_cancel_clicked',{"example_object":1});
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="launch_popup_btn" class="hero_button_auto green_button rounded_3">LAUNCH POPUP</div>
            </div>
		</div>
                      
                        
    </div>
</div>