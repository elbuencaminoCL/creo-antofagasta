<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/getting_started.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Getting Started<br />
            <strong class="size_11 hero_grey">Approach to development within the framework</strong>
        </h1>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Where do I start?</h3>
                <p>
                	Right. So, you have your shiny new plugin framework in front of you, but where do you start? It can be a bit overwhelming at first but once you have a basic 
                    understanding of how things have been stitched together, you will soon realise that it's really easy to develop within the environment; in fact, most things 
                    have been done for you!
                    <br><br>
                    The starting point is merely to take a brief look under the hood...
                </p>
            </div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">The Default Object</h3>
                <p>
                	The entire system relies on the existence of the default object. The object has been conveniently placed in the "objects" directory and labelled 
                    "default_object.js". The object defines the structure of all of your views - in other words, for every input there needs to be a corresponding object node.
                    Object nodes are mapped to HTML elements by means of the data attribute "data-node_val" (example below).
                    <br><br>
                    Nodes are mapped as follows:
                    <br>
                    Default object path: test_data.colour_picker<br>
                    data-node_val: testdata/colour_picker<br>
                    i.e. "." becomes "/"
                </p>
				<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Default Object Example</span>
<pre>
{
    "test_data": {
        <b class="hero_green">"colour_picker": "#FF0000"</b>,
        "text_input": "test string",
        "text_input_px": 100,
        "text_input_ms": 100,
        "text_input_perc": 100,
        "text_area": "test string for text area",
        "radio_button": "radio_1",
        "check_box": false,
        "select_box": "value_1"
    }
}
</pre>
<!--END: sample code-->
				</div>
                <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">HTML Example for the colour picker</span>
<pre>
&lt;div class="hero_col_12"&gt;
    &lt;div class="hero_col_6"&gt;
        &lt;label for="colour_val"&gt;
            &lt;h2 class="size_14 hero_green"&gt;Colour Picker&lt;/h2&gt;
            &lt;p class="size_12 hero_grey"&gt;A canvas based colour selection input&lt;/p&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="hero_col_6"&gt;
        &lt;input type="text" id="colour_val" <b class="hero_green">data-node_val="test_data/colour_picker"</b> class="color_picker" name="colour_val" value=""&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<!--END: sample code-->
				</div>                
            </div>
            <p>
                When a new object is created, it will make use of the default object to define the default values for each input. So, to recap, make sure that every new element
                has a corresponding node.
            </p>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">The Menu Object</h3>
                <p>
                	The system has been designed to automatically create and integrate any required views. Views are defined in the menu object, located in "objects/menu_object.js".
                    Once you have created your views in the menu object, merely refresh the plugin in your browser and all the views will be created and placed under the appropriate
                    directory under "views". All generated files have a corresponding JavaScript file that has already been linked for you. For more information on the menu, please see
                    "Framework > Menu".
                </p>
            </div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Object Naming</h3>
                <p>
                	The framework has made provision for dynamic object naming. In short, you can define what your objects are called - e.g. When you click on "Add New" the input 
                    could say "Menu Name" as opposed to "Object Name". To define these names, open "assets/js/hplugin_object_manager.js" and set dropdown_object_name_singular and
                    dropdown_object_name_plural. The system will take care of the rest.
                    <br><br>
                    <p class="size_11">
                        <i>note: It is important to set the dropdown "title" attribute, in the menu object to the same as the dropdown_object_name_plural value to maintain consistent naming across the framework</i>
                    </p>
                </p>
            </div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Conclusion</h3>
                <p>
                	The above information should get you started with your development. Please refer to the additional documentation in the "Code Assist" pack. If you have any further
                    questions, please chat to Brett or Edwil.
                </p>
            </div>
		</div>
    </div>
</div>