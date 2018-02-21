<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_libraries.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Including External Libraries<br />
            <strong class="size_11 hero_grey">Adding external libraries to the framework</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Backend</h3>
            	<p>
                	If additional libraries are required for the rendering of any of your view, you can load them in "classes/plugin_setup.class.php" by including them in the "load_admin_javascript" and
                    "load_admin_css" methods. Please only make use of CDN references if you are making use of external code.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Including libraries for backend views</span>
<pre>
//javascript - added to load_admin_javascript
wp_register_script($this->plugin_prefix .'&lt;script_name&gt;', $this->plugin_url .'assets/js/&lt;script_name&gt;.js');
wp_enqueue_script($this->plugin_prefix .'&lt;script_name&gt;');

//css - added to load_admin_css
wp_register_style($this->plugin_prefix .'&lt;style_name&gt;', $this->plugin_url .'assets/css/&lt;style_name&gt;.css');
wp_enqueue_style($this->plugin_prefix .'&lt;style_name&gt;');

//CDN reference - please note that no "http:" or "https:" must be used
wp_register_style($this->plugin_prefix .'&lt;script_name&gt;', '//example.com/example_script.js');
wp_enqueue_style($this->plugin_prefix .'&lt;script_name&gt;');
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
		
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Frontend</h3>
            	<p>
                	If additional libraries are required for your frontend output, they can be added to "classes/shortcode.class.php" by including them in the "load_frontend_javascript" and 
                    "load_frontend_css" methods.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Including libraries for frontend output</span>
<pre>
//javascript - added to load_frontend_javascript
wp_register_script($this->plugin_prefix .'&lt;script_name&gt;', $this->plugin_url .'assets/js/&lt;script_name&gt;.js');
wp_enqueue_script($this->plugin_prefix .'&lt;script_name&gt;');

//css - added to load_frontend_css
wp_register_style($this->plugin_prefix .'&lt;style_name&gt;', $this->plugin_url .'assets/css/&lt;style_name&gt;.css');
wp_enqueue_style($this->plugin_prefix .'&lt;style_name&gt;');
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
        
        
    </div>
</div>