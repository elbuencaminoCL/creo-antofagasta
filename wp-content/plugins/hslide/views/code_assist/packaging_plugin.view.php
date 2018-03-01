<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/packaging_plugin.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Packaging The Plugin<br />
            <strong class="size_11 hero_grey">Getting the plugin ready for release after development is complete</strong>
        </h1>
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Checklist before release</h3>
                <p>
                	Readme text file (<i class="hero_green">Location: readme.txt</i>)
                	<ol>
                    	<li>
                        	Update "=== Hero Plugin ===" to reflect your plugin name. (e.g. "=== My Hero Plugin ===")
                        </li>
                        <li>Enter the relevant tags for your plugin. Think of these as search terms</li>
                        <li>Update the "Tested up to" to reflect the latest version of WordPress that the plugin was tested with</li>
                        <li>Update the "Stable Tag" to reflect the new current version number</li>
                        <li>Enter a basic description for the plugin</li>
                        <li>Update the "Changelog" to reflect your updates</li>
                    </ol>
                </p>
                <br>
                <p>
                	Console logging (console.log)
                	<ol>
                    	<li>Search your plugin and remove all references to "console.log" - this is not required if you have made use of "console_log"</li>
                    </ol>
                </p>
                <br>
                <p>
                	Code
                	<ol>
                    	<li>Please ensure that all commented out code has been removed before release - i.e. only active code remains</li>
                        <li>Ensure that all code is correctly commented - this will assist with future plugin maintenance</li>
                    </ol>
                </p>
                <br>
                <p>
                	Uninstall (<i class="hero_green">Location: uninstall.php</i>)
                	<ol>
                    	<li>If you have added any additional tables, ensure that they are removed when the plugin is uninstalled</li>
                    </ol>
                </p>
                <br>
                <p>
                	Menu Object (<i class="hero_green">Location: objects/menu_object.js</i>)
                	<ol>
                    	<li>Remove the "Code Assist" node</li>
                        <li>Delete the "code_assist" directory in "views"</li>
                        <li>Set the "development_mode" value to "false" (without the quotes)</li>
                    </ol>
                </p>
                <br>
                <p>
                	Testing
                	<ol>
                    	<li>Please ensure that your plugin has been thoroughly tested before release!</li>
                    </ol>
                </p>
            </div>
		</div>
    </div>
</div>