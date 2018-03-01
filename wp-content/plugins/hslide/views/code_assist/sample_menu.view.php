<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_menu.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Menu<br />
            <strong class="size_11 hero_grey">Menu object construction and manipulation</strong>
        </h1>
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Menu Object</h3>
                <p>
                	The menu object is located in "objects/menu_object.js". While the object is structured as JSON, some web servers are not correctly configured to support the ".json"
                    file format. To prevent any future client-side issues, we have contained the JSON object in a ".js" file.
                    <br><br>
                    In order to validate your json object please make use of <a href="http://jsonlint.com/" target="_blank" class="hero_green">http://jsonlint.com/</a>.
                </p>
                <br>
                <p class="size_11">
                	<i>All menu item nodes require an "id" parameter to enable the core (and yourself) to reference each node individually. All id's <u>MUST</u> be unique.</i>
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Menu Container</span>
<pre>
{
    "menu": {
    }
}
</pre>
<!--END: sample code-->
			</div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Configuration</h3>
                <p>
                	The "config" node is currently only used to define the "development_mode" but may be used for future functionality requirements.
                </p>
                <br>
                <p>
                	By default, "development_mode" is set to true. It is extremely important that this value is set to false before releasing the plugin. When set to true, the plugin
                    core framework will configure itself - Once the menu object has been constructed, all views will be automatically generated, along with all sub-views and JavaScript (pre-linked).
                    Views that already exist will not be tampered with by the framework so this feature can be left on during the entire development process. This switch is also responsible for activating /
                    de-activating the "console_log" functionality.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Development Mode</span>
<pre>
"config": {
    "development_mode": true
}
</pre>
<!--END: sample code-->
			</div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Structure</h3>
                <p>
                	All menu data is contained by the structure node.
                </p>
                <br>
                <p class="hero_red"><strong>Node Attributes</strong></p>
                <ul>
                	<strong class="hero_dark">id</strong> - A unique node reference<br>
                    <strong class="hero_dark">title</strong> - The name of the node (displayed in the front-end)<br>
                    <strong class="hero_dark">icon</strong> - A selected icon from "assets/icons" - use the name without the extension<br>
                    <strong class="hero_dark">type</strong> - The type of node required (link, dropdown or button)<br>
                    <strong class="hero_dark">auto_load_subview</strong> - Specify whether the subview is auto loaded or if you would like to load it manually (manual loading is useful if a data lookup is required before the view is initialised). The first view in the object will be loaded first<br>
                    <strong class="hero_dark">viewpath</strong> - The path to the view (auto-generated views will be created in "views/[viewpath]")<br>
                    <ul style="margin:0px;">
                    	<strong class="hero_dark">header</strong>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">auto_generate</strong> - Specify whether the core view requires a auto-generated header to be injected</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">show_save</strong> - Specify whether or not to show the save button (only available to auto-generated headers)</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">header_label</strong> - Set the default header label for the view</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">header_title</strong> - Set the default header title for the view</li>
                    </ul>
                    <ul style="margin:0px;">
                    	<strong class="hero_dark">submenu</strong> (only applicable to "type: dropdown")
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">id</strong> - A unique node reference</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">title</strong> - Title text for the sidebar menu</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">type</strong> - Supports "holder" or "button"</li>
                    </ul>
                    <ul style="margin:0px;">
                    	<strong class="hero_dark">views</strong>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">id</strong> - A unique node reference</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">title</strong> - Title text for the menu</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">auto_load_components</strong> - Select whether standard HTML components will be switched to framework components authomatically (on load)</li>
                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">icon</strong> - A selected icon from "assets/icons" for use in the menu</li>
                        <li style="margin:0px 0px 0px 25px;">
                        	<strong class="hero_dark">submenu</strong>
                            <ul style="margin:0px;">
                            	<li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">id</strong> - A unique node reference</li>
                                <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">title</strong> - Title text for the submenu</li>
		                        <li style="margin:0px 0px 0px 25px;"><strong class="hero_dark">view</strong> - The name of the view</li>
                            </ul>
                        </li>
                    </ul>
                </ul>
                <br>
                <p class="hero_red"><strong>Dashboard</strong></p>
                <p>
                	The dashboard is included, and should remain included, in all auto-generated plugins. The dashboard contains the plugin version information as well as release date 
                    information. In the default example, the plugin includes a small table with linked objects - this should remain the primary placement for plugin root data structures.
                </p>
                <br>
                <p class="size_11">
                	<i>Note: In the case of a maintained plugin, the dashboard will contain a plugin rating system as well as a linked promotion.</i>
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Dashboard Node</span>
<pre>
{
    "id": "dashboard",
    "title": "Dashboard",
    "icon": "dashboard",
    "type": "link",
    "auto_load_subview": false,
    "viewpath": "dashboard/",
    "header": {
        "auto_generate": false,
        "show_save": false,
        "header_label": "",
        "header_title": ""
    }
}
</pre>
<!--END: sample code-->
				<br>
			</div>
            <div class="hero_col_12">
	            <p class="hero_red"><strong>Dropdown</strong></p>
                <p>
                	In order to add a dropdown menu item to the sidebar, you would add a menu structure node with "type: dropdown". A dropdown submenu can contain one of two objects:<br>
                     "holder" - used as a holding area for submenu elements, placed in "views/sidebar_prepopulation.js"<br>
                     "button" - a button contained within the dropdown menu
                </p>
            </div>
 <!--BEGIN: sample code-->
<span class="hero_green">Dropdown Object</span>
<pre>
{
    "id": "dropdown_default",
    "title": "Dropdown",
    "icon": "markers",
    "type": "dropdown",
    "auto_load_subview": false,
    "submenu": [
        {
            "id": "dropdown_submenu_holder",
            "type": "holder"
        },
        {
            "id": "dropdown_example_btn",
            "title": "Example Button",
            "type": "button"
        }
    ],
    "viewpath": "dropdown/",
    "header": {
        "auto_generate": true,
        "show_save": true,
        "header_label": "",
        "header_title": ""
    },
    "views": [
        {
            "id": "sub_example",
            "title": "Sub Example",
            "icon": "markers",
            "submenu": [
                {
                    "id": "sub_example",
                    "title": "Sub Example",
                    "auto_load_components": true,
                    "view": "example"
                }
            ]
        }
    ]
}
</pre>
<!--END: sample code-->
			<br>
			<div class="hero_col_12">
	            <p class="hero_red"><strong>Link</strong></p>
                <p>
                	A link is merely used as a pointer to a core view. All views are constructed within the "views" node and subviews are added to the "submenu" node contained by the 
                    view.
                </p>
            </div>
 <!--BEGIN: sample code-->
<span class="hero_green">Link Object</span>
<pre>
{
    "id": "sample",
    "title": "Development Samples",
    "icon": "settings",
    "type": "link",
    "show_in_sidebar": true,
    "auto_load_subview": true,
    "viewpath": "sample/",
    "header": {
        "auto_generate": true,
        "show_save": false,
        "header_label": "Currently Viewing",
        "header_title": "Plugin Samples"
    },"views": [
        {
            "id": "sample_controls",
            "title": "Controls",
            "icon": "controls",
            "submenu": [
                {
                    "id": "sample_controls_sub",
                    "title": "Framework Controls",
                    "view": "sample"
                }
            ]
        },
        {
            "id": "sample_advanced",
            "title": "Advanced",
            "icon": "advanced",
            "submenu": [
                {
                    "id": "sample_advanced_sub",
                    "title": "Advanced Configuration",
                    "auto_load_components": true,
                    "view": "advanced"
                },
                {
                    "id": "sample_advanced_sub2",
                    "title": "Advanced Development",
                    "auto_load_components": true,
                    "view": "advanced_dev"
                },
                {
                    "id": "sample_advanced_sub3",
                    "title": "Menu Configuration",
                    "auto_load_components": true,
                    "view": "advanced_menu"
                }
            ]
        }
    ]
    
}
</pre>
<!--END: sample code-->

			<br>
			<div class="hero_col_12">
	            <p class="hero_red"><strong>Button</strong></p>
                <p>
                	This is used to place a button in the root of the sidebar menu. The button id can be used to bind functionality to the button. These bindings should be added to the
                    "views/sidebar_prepopulation.js" file.
                </p>
            </div>
 <!--BEGIN: sample code-->
<span class="hero_green">Button Object</span>
<pre>
{
    "id": "root_example_btn",
    "title": "Example Button",
    "type": "button"
}
</pre>
<!--END: sample code-->
		</div>
    </div>
</div>