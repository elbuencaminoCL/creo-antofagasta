<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_components.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Components<br />
            <strong class="size_11 hero_grey">Framework components available to developers</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_green size_14">
        	<div class="hero_col_12">
            	<h3 class="hero_grey">Component Set</h3>
                <p class="hero_grey">
                	Below is a working set of components available within the plugin framework.
                </p>
            </div>        
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="colour_val">
                        <h2 class="size_14 hero_green">Colour Picker</h2>
                        <p class="size_12 hero_grey">A canvas based colour selection input</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" id="colour_val" class="color_picker" name="colour_val" value="#DC4551">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name">
                        <h2 class="size_14 hero_green">Text Input</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="lrg" id="txt_name" name="txt_name">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name2">
                        <h2 class="size_14 hero_green">Text Input (with error)</h2>
                        <p class="size_12 hero_grey">Size: medium</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="med" id="txt_name2" name="txt_name" class="has-error">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name3">
                        <h2 class="size_14 hero_green">Text Input</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="sml" id="txt_name3" name="txt_name">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name4">
                        <h2 class="size_14 hero_green">Text Input</h2>
                        <p class="size_12 hero_grey">Size: default</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" id="txt_name4" name="txt_name4">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name5">
                        <h2 class="size_14 hero_green">Text Input (pixels)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="sml" id="txt_name5" name="txt_name4" data-hero_type="px">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name6">
                        <h2 class="size_14 hero_green">Text Input (milliseconds)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="sml" id="txt_name6" name="txt_name4" data-hero_type="ms">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name7">
                        <h2 class="size_14 hero_green">Text Input (percentage)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="sml" id="txt_name7" name="txt_name4" data-hero_type="perc">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="txt_name8">
                        <h2 class="size_14 hero_green">Text Input (image)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="text" data-size="sml" id="txt_name8" name="txt_name4" data-hero_type="img">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="text_area">
                        <h2 class="size_14 hero_green">Textarea</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <textarea data-size="lrg" id="text_area" name="text_area"></textarea>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="text_area2">
                        <h2 class="size_14 hero_green">Textarea (with error)</h2>
                        <p class="size_12 hero_grey">Size: medium</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <textarea data-size="med" id="text_area2" name="text_area2" class="has-error"></textarea>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="text_area3">
                        <h2 class="size_14 hero_green">Textarea</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <textarea data-size="sml" id="text_area3" name="text_area3"></textarea>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="radio_field_grouped1">
                        <h2 class="size_14 hero_green">Radio Button (grouped)</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="radio" data-size="lrg" id="radio_field_grouped1" name="radio_field_group" value="radio_1" checked>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="radio_field_grouped2">
                        <h2 class="size_14 hero_green">Radio Button (grouped)</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="radio" data-size="lrg" id="radio_field_grouped2" name="radio_field_group" value="radio_2">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="radio_field_grouped3">
                        <h2 class="size_14 hero_green">Radio Button (grouped)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="radio" data-size="sml" id="radio_field_grouped3" name="radio_field_group2" value="radio_1" checked>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="radio_field_grouped4">
                        <h2 class="size_14 hero_green">Radio Button (grouped)</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="radio" data-size="sml" id="radio_field_grouped4" name="radio_field_group2" value="radio_2">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="check_field1">
                        <h2 class="size_14 hero_green">Checkbox</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="checkbox" data-size="lrg" id="check_field1" name="check_field1" value="check_1">
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="check_field2">
                        <h2 class="size_14 hero_green">Checkbox</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <input type="checkbox" data-size="sml" id="check_field2" name="check_field2" value="check_2" checked>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="my_select_box">
                        <h2 class="size_14 hero_green">Select Box (with error)</h2>
                        <p class="size_12 hero_grey">Size: large</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <select data-size="lrg" id="my_select_box" name="my_select_box" data-height="50" class="has-error">
                        <option value="value_1" selected="selected">Value One</option>
                        <option value="value_2">Value Two</option>
                        <option value="value_3">Value Three</option>
                        <option value="value_4">Value Four</option>
                        <option value="value_5">Value Five</option>
                    </select>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="my_select_box_2">
                        <h2 class="size_14 hero_green">Select Box</h2>
                        <p class="size_12 hero_grey">Size: small</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <select data-size="med" id="my_select_box_2" name="my_select_box_2">
                        <option value="fold">Fold out arrow</option>
                        <option value="fullarrow" selected="selected">Full size arrow</option>
                        <option value="sideslide">Slide out arrow</option>
                        <option value="circle">Circular arrow</option>
                        <option value="rounded">Rounded arrow</option>
                        <option value="doubleflip">3D fold out box</option>
                        <option value="bend">Basic line arrow</option>
                    </select>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="field_name">
                        <h2 class="size_14 hero_green">Button</h2>
                        <p class="size_12 hero_grey">Colour: red</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <div class="hero_button_auto red_button rounded_3">BUTTON</div>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="field_name">
                        <h2 class="size_14 hero_green">Button</h2>
                        <p class="size_12 hero_grey">Colour: green</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <div class="hero_button_auto green_button rounded_3">BUTTON</div>
                </div>
            </div>
            <div class="hero_col_12">
                <div class="hero_col_6">
                    <label for="field_name">
                        <h2 class="size_14 hero_green">Button</h2>
                        <p class="size_12 hero_grey">Colour: grey</p>
                    </label>
                </div>
                <div class="hero_col_6">
                    <div class="hero_button_auto darkgrey_button rounded_3">BUTTON</div>
                </div>
            </div>
        </div>
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Working with components</h3>
                <p>
                	The above set of components have been created to 'replace' standard HTML elements. This allows developers to create a unique experience for users without the need 
                    for custom development.
                </p>
                <br>
                <p>
                	In order for us to achieve the above, the framework has been configured to replace standard HTML elements with custom elements. There are a number of ways to configure
                    your plugin to enable the component switch. In the menu object, you can make use of the "auto_load_components" node (per view) to set your view to automatically switch components
                    on load - while this the simplest way to achieve the component switch, it is not always a feasible option. In the event that you would like to pre-populate your view 
                    with data, it would be advisable to manually handle the component switch after population to ensure that all components are in the desired state after the switch takes
                    place. If this is the requirement, set "auto_load_components" to "false" in the menu object and trigger the component switch event, after populating your view, by running the code below.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Manual Component Switch</span>
<pre>
switch_components();
</pre>
<!--END: sample code-->
			</div>
            <p>
            	<br>
            	Framework select boxes can be slightly more tricky to work with. A standard HTML select component will be 'replaced' by the framework's select box when "switch_components();"
                is called. All data in the HTML select component will be populated into the framework select box. If the content within a select box is modified (by means of a user action, etc...), 
                the select box component will require a reload in order for it to 'match' it's contained content to the HTML select component.
            </p>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Reloading Select Component Example</span>
<pre>
update_select_component(jQuery('#example_element'));
</pre>
<!--END: sample code-->
			</div>
		</div>
        
    </div>    
</div>