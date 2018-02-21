<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_events.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            Framework Events<br />
            <strong class="size_11 hero_grey">Built in event subscription services</strong>
        </h1>       
         
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Framework Events Service</h3>
                <p>
                	Framework-wide events can be useful for determining user input. The current framework architecture doesn't allow Views to communicate with other views directly which
                    can be problematic at times. For instance, determining when a user navigates from one view to another. We have added a event service that you can subscribe to that will 
                    enable you to programmatically determine when certain events take place.
                </p>
                <br>
                <p>
                	All event subscriptions are attached to the View Core - subscriptions are automatically cancelled when reloading the View Core.
                </p>
            </div>
		</div>
        
        
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Subscribing To A Framework Event</h3>
                <p>
                	When subscribing to an event, you can specify which method will be called when the event takes place. You also have the option to pass a JSON object to the method that is
                    called.
                </p>
                <br>
                <p>
                	We have currently only added one event to the framework - 'view-nav'. We will add more events when and where required. 
                </p>
            </div>
            <div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Subscribe</span>
<pre>
//subscribe
hplugin_event_subscribe('view-nav','event_callback',undefined);

//subscribe with JSON object
hplugin_event_subscribe('view-nav','event_callback',{"example_object": 123});

//subscribe once
hplugin_event_subscribe_once('view-nav','event_callback',{"example_object": 123});
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="subscribe_btn" class="hero_button_auto darkgrey_button rounded_3">SUBSCRIBE</div>
			    <div id="subscribe_once_btn" class="hero_button_auto darkgrey_button rounded_3">SUBSCRIBE ONCE</div>
            </div>
			<div class="hero_col_12">
<!--BEGIN: sample code-->
<span class="hero_green">Unsubscribe</span>
<pre>
hplugin_event_unsubscribe('view-nav');
</pre>
<!--END: sample code-->
			</div>
            <div class="hero_col_12">
                <div id="unsubscribe_btn" class="hero_button_auto darkgrey_button rounded_3">UNSUBSCRIBE</div>
            </div>
		</div>
                      
                        
    </div>
</div>