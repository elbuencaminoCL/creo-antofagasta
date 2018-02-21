<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_development.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Development<br />
            <strong class="size_11 hero_grey">Tools for plugin developmers</strong>
        </h1>       
         
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Console Logging</h3>
                <p>
                	If you check your console, you will notice that the JSON object, attached to the sidebar link (as shown above), has been passed to the view and logged to the console.
                </p>
                <br>
                <p>
                	We have added functionality to allow for console logging to be managed via the plugin core framework - this will allow you to leave you console logging 
                    in for development purposes without the issue of console logs being displayed in the 'end product'. Please make use of "console_log();" instead of the usual
                    "console.log();". When you switch the application from dev mode to production, all logging will stop.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Console Logging</span>
<pre>
console_log('test');
</pre>
<!--END: sample code-->
			</div>
		</div>
                      
                        
    </div>
</div>