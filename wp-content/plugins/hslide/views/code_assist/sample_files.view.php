<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_files.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework File Structure<br />
            <strong class="size_11 hero_grey">Filesystem layout and overview</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Menu Object</h3>
                <p>
                	The menu object is used to define the navigation structure and generate / link all views.
                    <br>
                    <i class="hero_green">Location: objects/menu_object.js</i>
                </p>
            </div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Views</h3>
                <p>
                	When constructing the menu object in development mode, all views are automatically generated. Each view has a corresponding JavaScript file placed in the view's "js" 
                    directory. Each view has a Core "index.php" file and a corresponding "view.core.js" file. Each view also contains a "html_snippets" directory where all popup content
                    can be stored.
                    <br>
                    <i class="hero_green">Location: views/</i>
                </p>
            </div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">CSS</h3>
                <p class="hero_red">
                    <strong>Framework</strong>
                </p>
                <p>
                	The framework CSS is contained in a single stylesheet - Please do not modify this CSS as it has been designed to maintain a uniform look-and-feel across all plugins.
                    <br>
                    <i class="hero_green">Location: assets/css/admin_styles.css</i>
                </p>
                <br>
                <p class="hero_red">
                    <strong>Backend</strong>
                </p>
                <p>
                	A CSS file has been generated and included for plugin-specific styling. Please place all required plugin backend styles into the provided file.
                    <br>
                    i.e. All styles for your generated views must be placed in this CSS file.
                    <br>
                    <i class="hero_green">Location: assets/css/backend_styles.css</i>
                </p>
                <br>
                <p class="hero_red">
                    <strong>Frontend</strong>
                </p>
                <p>
                	A CSS file has been generated and included for frontend styling. This file is automatically included on the frontend when the shortcode is detected. This stylesheet allows
                    you to style all code output on the website.
                    <br>
                    <i class="hero_green">Location: assets/css/frontend_styles.css</i>
                </p>
            </div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Classes</h3>
                <p class="hero_red">
                    <strong>Framework</strong>
                </p>
                <p>
                	The framework has been designed to integrate seamlessly with WordPress. The plugin class structure has been predefined to allow for a uniform architecture across all 
                    plugins and to allow for 'clean' code separation - These classes are contained within "classes/core/".
                    <br>
                    <i class="hero_green">Location: classes/core/</i>
                </p>
   				<br>
                <p>
                	A helper class has been generated and included within the plugin framework to assist with plugin development. This class is automatically instantiated and made 
                    available via PHP globals - to make use of this class within a method, use "global $&lt;plugin_name&gt;_helper;". You can append to this class but do not remove 
                    any existing methods as some of them are used by the framework.
                    <br>
                    <i class="hero_green">Location: classes/helper/</i>
                </p>
                <br>
                <p>
                	The framework has been designed to execute certain code blocks based on WordPress events - Activate plugin, Deactivate plugin and Update plugin. The "activate_plugin.class.php" 
                    is executed upon activating the WordPress plugin - this is where all DB tables should be generated. The "update_plugin.class.php" is used when the plugin is upgraded - this
                    should be used to modify any DB tables if changes have been made since a previous version.
                    <br>
                    <i class="hero_green">Location: classes/management/</i>
                </p>
                <br>
                <p class="hero_red">
                    <strong>Backend</strong>
                </p>
                <p>
                	The "backend.class.php" file should be used for all admin development. This class is automatically instantiated and used for all AJAX hooks. If you require additional backend
                    classes, please ask for advise on the best possible implementation.
                    <br>
                    <i class="hero_green">Location: classes/backend.class.php</i>
                </p>
                <br>
                <p class="hero_red">
                    <strong>Frontend</strong>
                </p>
                <p>
                	The "frontend.class.php" file should be used to output data to the website frontend. The class is automatically instantiated and used when the plugin shortcode is used.
                    <br>
                    <i class="hero_green">Location: classes/frontend.class.php</i>
                </p>
            </div>
		</div>
           
                        
    </div>
</div>