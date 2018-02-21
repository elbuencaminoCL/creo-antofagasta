<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_media.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
           Working With Media<br />
            <strong class="size_11 hero_grey">Making use of the WordPress Media Library</strong>
        </h1>
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Media Library Integration</h3>
            	<p>
                	The framework support WordPress Media Library integration to assist with the management of plugin media. The integration consists of 2 components: A button to trigger the 
                    launch of the media library and an input field (can be hidden) to capture the media URL location.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Example Implementation</span>
<pre>
&lt;div class="hero_col_8"&gt;
    &lt;div class="hero_button_auto green_button rounded_3 hero_media_uploader" data-connect-with="example_url" data-multiple="false"&gt;Add Image&lt;/div&gt;
&lt;/div&gt;
&lt;div class="hero_col_4"&gt;
    &lt;input type="text" data-size="lrg" data-hero_type="img" id="example_url" name="example_url" value=""&gt;
&lt;/div&gt;
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Embedded iFrame Example</h3>
                <div class="hero_col_2">
                    <div class="hero_button_auto green_button rounded_3 hero_media_uploader" data-connect-with="example_url" data-multiple="false">Add Image</div>
                </div>
                <div class="hero_col_10">
                    <input type="text" data-size="lrg" data-hero_type="img" id="example_url" name="example_url" value="">
                </div>
            </div>
		</div>
                 
    </div>
</div>