<script type="text/javascript" src="<?php echo $_GET['vp']; ?>js/sample_object_management.view.js"></script>
<div class="hero_views">
    <div class="hero_col_12">
        <h1 class="hero_red size_18">
            NoSQL Object Model<br />
            <strong class="size_11 hero_grey">NoSQL object model use within the framework</strong>
        </h1>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">Understanding NoSQL</h3>
                <p>
                	A NoSQL (often interpreted as Not only SQL) database provides a mechanism for storage and retrieval of data that is modelled in means other than 
                    the tabular relations used in relational databases. Motivations for this approach include simplicity of design, horizontal scaling, and finer control 
                    over availability. The data structures used by NoSQL databases (e.g. key-value, graph, or document) differ from those used in relational databases, 
                    making some operations faster in NoSQL and others faster in relational databases. The particular suitability of a given NoSQL database depends on the 
                    problem it must solve.
					<br>
					<br>
					NoSQL databases are increasingly used in big data and real-time web applications. NoSQL systems are also called "Not only SQL" to emphasize that they 
                    may also support SQL-like query languages. Many NoSQL stores compromise consistency (in the sense of the CAP theorem) in favour of availability and 
                    partition tolerance. Barriers to the greater adoption of NoSQL stores include the use of low-level query languages, the lack of standardized interfaces, 
                    and huge investments in existing SQL.
                </p>
                <br>
                <p class="size_11">
                	<i>source: <a href="http://en.wikipedia.org/wiki/NoSQL" target="_blank">wikipedia.org</a></i>
                </p>
            </div>
		</div>
        <div class="hero_section_holder hero_grey">
            <div class="hero_col_12">
            	<h3 class="hero_grey">NoSQL Use within the framework</h3>
                <p>
					In the past we have made use of provided MySQL relational databases for data storage. The level of unnecessary complexity, that we soon realised, forced 
                    us to relook at our base system architecture and redefine our approach to data storage. The result: a NoSQL-based data storage implementation.
                    <br><br>
                    The framework has been tweaked to support full JSON object creation, manipluation and storage, straight out of the box. The concept was simple: instead of 
                    converting our JSON object to PHP arrays, dividing it into multiple pieces and then storing it across several tables, only to reverse the process when the 
                    data is required again, we simple store it as a JSON object. This has drastically reduced the amount of code required per view creation and hugely increased 
                    the framework performance when interacting with the database. We have seen results such as a reduction in transactions from 2 seconds to several milliseconds.
                </p>
            </div>
		</div>
    </div>
</div>