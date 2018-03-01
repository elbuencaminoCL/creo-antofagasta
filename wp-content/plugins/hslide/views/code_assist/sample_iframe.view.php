<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_iframe.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Secure iFrame<br />
            <strong class="size_11 hero_grey">Built-in iFrame security tokens</strong>
        </h1>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Working with iFrames</h3>
                <p>
                	The framework has been configured to securely wrap all iFrame implementations to prevent outside (unauthorised) access to the site and to assist with code scope.
                </p>
                <br>
                <p>
                	We have implemented a custom security token system and integrated it seamlessly into the framework. Security tokens are valid for 20 minutes. If a secure token
                    is either not found or expired, the iframe content will be automatically reloaded and, a message notifying the user of the reload will be displayed.
                </p>
            </div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Implementing Secure iFrames</h3>
                <p>
                	The framework has been configured to automatically implement iFrames when requested. In order to add an iFrame to your view, you will need to provide a holding
                    div.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Holding &lt;div&gt; Example (placed into the view)</span>
<pre>
&lt;div class="example_iframe_holder"&gt;&lt;/div&gt;
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <p>
                	In order to place the iframe into the holding div, you will call "load_secure_iframe();". This method requires 3 parameters to be passed to it: The first is
                    the content (relative to the plugin root), the second is the height of the iFrame and the third is the holding div's identifier. The method should always be wrapped
                    to allow for a 'clean' reload when required.
                </p>
            </div>
            <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Method Wrap Example (placed into the view's corresponding js file)</span>
<pre>
//view load
jQuery(function(){
    //load iframe
    load_iframe();
});

//load iframe
function load_iframe(){
    load_secure_iframe('inc/iframe.example.php', 45, '.example_iframe_holder');
}
</pre>
<!--END: sample code-->
			</div>
		</div>


		<div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">iFrame Content Construction</h3>
                <p>
                	All iFrame content must be placed into the "inc" folder in the plugin root. In order to achieve the required security, all content must be wrapped with the
                    framework security wrapper in order to force secure token checks before allowing access to the content.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">iFrame Content Contruction Example</span>
<pre>
&lt;?php
    #SECURITY CHECK
    require_once('frame_sec.check.php');
    if(isset($secure_tag) && $secure_tag){ //secure (display content)
        #UPLOAD EXAMPLE
        //check for post
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo '
                &lt;script type="text/javascript"&gt;
                    //iframe call into parent to allow for scope transfer
                    window.parent.process_complete();
                &lt;/script&gt;
            ';
        }
?&gt;

    [place content here]

&lt;?php
    }
?&gt;
</pre>
<!--END: sample code-->
			</div>
		</div>


		<div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">iFrame Scoped Callbacks</h3>
                <p>
                	In order for the iFrame to communicate with the parent view, a method will need to be added to the view's corresponding js file. The iFrame will be able to 
                    communicate relevant information via the provided method.
                </p>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Method Example</span>
<pre>
//detect processing completion
function process_complete(){
    //show success message
    show_message("success", "Upload Success", "The selected file was successfully passed to the server.");
    //reload iframe (new security token)
    load_iframe();
}
</pre>
<!--END: sample code-->
			</div>
		</div>

        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Embedded iFrame Example</h3>
                <p>
                	Below is an example of a complete implementation.
                </p>
            </div>
            <div class="example_iframe_holder"></div>
		</div>
    </div>
    
</div>