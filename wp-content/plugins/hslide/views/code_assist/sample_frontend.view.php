<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_frontend.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Frontend Website Output<br />
            <strong class="size_11 hero_grey">Using the framework to output frontend code</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Shortcode Integration</h3>
            	<p>
                	The plugin framework automatically integrates with the WordPress shortcode system. The shortcode is bound based on your plugin name. You can access any shortcode attributes 
                    by referencing "$atts" within the "get_shortcode_content" method.
                    <br>
                    <i>e.g. If your plugin name is "hplugin", the shortcode could be [hplugin id='1']</i>
                </p>
                <br>
                <p>
                	The frontend class has been configured to detect the usage of the shortcode in the frontend website and instantiate your code. Configure the "get_shortcode_content" 
                    method to implement your output methods where required - this method will always return your output code as it is already configured to buffer all output to the frontend.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Returning output for display buffering</span>
<pre>
#IMPLEMENT SHORTCODE LISTENER
public function get_shortcode_content($atts){
    return $this->generate_frontend_output($atts['id']);
}

#GENERATE FRONTEND OUTPUT
private function generate_frontend_output($id){
    return '&lt;div&gt;frontend HTML output&lt;/div&gt;';
}
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div> 
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Frontend CSS</h3>
            	<p>
                	When a shortcode is detected, the framework will automatically inject the plugin frontend stylesheet. All frontend styles that are required to render your HTML 
                    output should be placed in this stylesheet.
                    <br>
                    <i class="hero_green">Location: assets/css/frontend_styles.css</i>
                </p>
            </div>
        </div>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Frontend JavaScript</h3>
            	<p>
                	When a shortcode is detected, the framework will automatically inject the plugin frontend script. All frontend JavaScript (where possible) should be placed in this
                    file.
                    <br>
                    <i class="hero_green">Location: assets/js/frontend_script.css</i>
                </p>
                <br>
                <p>
                	If required, you can inject dynamic JavaScript into the frontend through the HTML output - please only make use of this if absolutely necessary.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">JS injection through frontend HTML output</span>
<pre>
#IMPLEMENT SHORTCODE LISTENER
public function get_shortcode_content($atts){
    return $this->generate_frontend_output($atts['id']);
}

#GENERATE FRONTEND OUTPUT
private function generate_frontend_output($id){
    return '
        &lt;script type="text/javascript"&gt;
            console.log('js injection');
        &lt;/script&gt;
    ';
}
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
        
                      
    </div>
</div>