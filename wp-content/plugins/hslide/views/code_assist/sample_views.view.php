<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_views.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Views<br />
            <strong class="size_11 hero_grey">View management and object scope</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">View Scope</h3>
            	<p>
                	The plugin framework is made up of four separately-scoped views. This layout has been specifically selected to enable code segregation and memory management.
                </p>
                <br>
                <p class="hero_red">
                    <strong>Panel Core</strong>
                </p>
                <p>
                	The 'root' layer - used as a container for all other views. This is automatically constructed and is used to make certain framework specific PHP data available to 
                    child views. This view should never be modified or removed.
                </p>
                <br>
                <p class="hero_red">
                    <strong>Sidebar</strong>
                </p>
                <p>
                	The Sidebar layer - used as a container for root view navigation. This is automatically constructed based on the menu object.
                </p>
                <p class="size_11">
                    <i>For more information on sidebar management, population and manipulation see <a href="#" onClick="load_sub_view('sample_sidebar', 'code_assist/','sample_sidebar');">Sidebar</a></i>
                </p>
                <br>
                <p class="hero_red">
                    <strong>View Core</strong>
                </p>
                <p>
                	All single views are loaded into the View Core. The view core allows a developer to create objects with a scope that is 'global' to the view core - effectively 
                    making the objects available across all views in a specific section.
                </p>
                <br>
                <p class="hero_red">
                    <strong>Views</strong>
                </p>
                <p>
                	Views are used to present plugin 'screens' to users. All views have corresponding JavaScript files.
                </p>
                <p class="size_11">
                    <i>For more information on view construction see <a href="#" onClick="load_sub_view('sample_menu', 'code_assist/','sample_menu');">Menu</a></i>
                </p>
            </div>
        </div>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">View Header Management</h3>
            	<p>
                	Default View Headers are defined in the menu object. To manually set the header copy for the current view, call "set_current_header_label" (illustrated in the code below).
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Set Current header</span>
<pre>
jQuery(function(){
	set_current_header_label('Currently Viewing','Advanced Options');
});
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Manual View Core Load</h3>
            	<p>
                	In order to navigate the core framework views, making use of your own navigation, you will need to attach event listeners onto your navigation components. These
                    event listeners will be set up to load core views based on certain user-generated events. The "manual_load_core_view" method requires 3 parameters - The ID of the 
                    core view that you wish to load, a JSON object to pass to the core view (to be set as "undefined" if not required) as well as the name of the callback method that 
                    has been configured to accept the JSON object (to be set as "undefined" if not required).
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Manual Core View Load</span>
<pre>
//load core view
manual_load_core_view('core_view_id', undefined, undefined);

//load core view, passing JSON object
manual_load_core_view('core_view_id', {"exampleId":1}, 'example_callback');
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>
        
        
        <div class="hero_section_holder hero_grey">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Manual View Load</h3>
            	<p>
                	In some cases, a data lookup may be required in order to properly render a view. In this instance, you would set the view (contained within the menu node) 
                    to "auto_load_subview: false". This will allow you to retrieve the required data before the view loads. In order to instantiate the view, call "manual_load_view" and
                    pass the name of the view, that you wish to load, to the method.
                </p>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Manual View Load</span>
<pre>
manual_load_view('dropdown_default');
</pre>
<!--END: sample code-->
				</div>
            </div>
        </div>               
    </div>
    
    
</div>