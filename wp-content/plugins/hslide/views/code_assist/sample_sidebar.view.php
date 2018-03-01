<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_sidebar.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Sidebar Functionality<br />
            <strong class="size_11 hero_grey">Populating and managing elements in the sidebar</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Adding Elements To Dropdown Containers</h3>
                <p>
                	Sidebar elements can be pre-registered in "views/sidebar_prepopulation.js". Generally speaking, dropdown elements would be created on-the-fly based on data in the 
                    database - this would mean that you would need to populate the sidebar after retrieving data from the database by means of an AJAX call. The basic concept is to 
                    return data to the sidebar_prepopulation.js in a JSON format and then iterate the data, adding elements to the sidebar on each iteration.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Adding an element to the sidebar</span>
<pre>
add_sidebar_element('dropdown_default', 'Example Object 1', undefined, undefined);
</pre>
<!--END: sample code-->
			</div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">JSON Object Scope</h3>
                <p>
                	In order to pass information from a sidebar link to a View Core, a JSON object can be passed to the "add_sidebar_element" function along with a callback function 
                    (placed into the view core). The result, is the ability to change the scope of an object from the plugin core to the view core - this will enable you to make the 
                    object available to all Views.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Adding an element containing a JSON object and a callback funtion to the sidebar</span>
<pre>
add_sidebar_element('dropdown_default', 'Example Object 1', {"exampleId":1, "title": "Example Object 1"}, 'test_callback');
</pre>
<br>
<span class="hero_green">Retrieving a JSON object and making it available to all sub views</span>
<pre>
var core_params;

function test_callback(json){
	core_params = json;
	console_log(core_params);
}
</pre>
<!--END: sample code-->
			</div>
		</div>
            
                        
    </div>
</div>