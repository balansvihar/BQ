<!DOCTYPE html>
<html>
	<head>
		<title>Bq.js | Balquery | Balan's Query | - Balsoft </title>
		<meta name="balquery documentation, bq.js api, balan's query documentation, simple javascript framework documentation, lightweight framework, simple  jquery" />
		<meta name="description" content="Documentation bq.js contains" />
		<?php $menu="docs"; include("meta.php")  ?>
		
	</head>

	<body class="docs">
			<?php include("header.php"); ?>
			<section>
				<article>
					<h1>Documentation</h1>
					<p>The bq.js syntax is very easy to learn, which is tailor made for selecting the HTML element(s) and performing some action on the 	selected element(s). The bq.js selectors uses javascript queryselector function internally.
						<div class="code">
							<pre>$bq(selector).action();</pre> 
						</div>
						Where, $bq = $bq is the sign to access balquery,(Selector) = Query Selector string, action() = function
					</p>
					<h3>Selectors</h3>
					<p>The bq.js uses javascript Query Selector function which takes any valid css selector. It can be a class slector or ID selector or any.</p>
					<h3>Action</h3>
					<p>The bq.js has limited number of function which is more than enough to make a small to medium range projects. The bq.js has following list of function.</p>
					<ol>
						<li>start</li>
						<li>router</li>
						<li>on</li>
						<li>html</li>
						<li>val</li>
						<li>append</li>
						<li>prepend</li>
						<li>remove</li>
						<li>show</li>
						<li>hide</li>
						<li>addClass</li>
						<li>removeClass</li>
						<li>hasClass</li>
						<li>attr</li>
						<li>removeAttr</li>
						<li>css</li>
						<li>parent</li>
						<li>ajax</li>
						<li>each</li>
					<ol>
				</article>
				<div class="sep"></div>
				<article>
					<h2>.start()</h2>
					<p>The start function executes when the page Document Object Model (DOM) is ready.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq().start(function);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
$bq().start(function(){
	alert("Hello World!");
});
</pre>
					</div>
					
				</article>
				<div class="sep"></div>
				<article>
					<h2>.router()</h2>
					<p>The start function executes when the hash values changes in the URL. The function can be use for a developing a Single Page Applications. 
</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq().router(function(hashValue));</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
$bq().router(function(val){
	alert(val);
});
</pre>
					</div>
					
				</article>
				<div class="sep"></div>	
			</section>
			
			<section>
			
				<article>
					<h2>.on()</h2>
					<p>The on() method attaches event handlers for the selected elements.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).on(event,function(handler));</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
$bq().on("click",function(e){
	alert("Hello World!");
});
</pre>
					</div>
					
				</article>
			
			<div class="sep"></div>
			</section>
			<section>
			
			
			
				<article>
					<h2>.html()</h2>
					<p>The html() function get or set the HTML content of the selected element.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).html(content);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
<u>Set HTML</u>
	$bq("#myName").html("&lt;p&gt;"Balan"&lt;/p&gt;"");
<u>Get HTML</u>
	var name = $bq("#myName").html();
	alert(name);
</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>
			
			
			
			
			
			
			<section>
				<article>
					<h2>.val()</h2>
					<p>The .val() function gets or sets the value of the selected element.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).val(value);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
<u>Set Value</u>
	$bq("#txtName").val("&lt;p&gt;"Balan"&lt;/p&gt;"");
<u>Get HTML</u>
	var name = $bq("#myName").html();
	alert(name);
</pre>
					</div>
					
				</article>

			</section>
		<div class="sep"></div>

	
			<section>
				<article>
					<h2>.append()</h2>
					<p>The .append() function inserts the given content as the last of the selected element</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).append(content);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("#myDiv").append("&lt;p&gt;"This is bq.js!"&lt;/p&gt;"");</pre>
					</div>
					
				</article>

			</section>
		<div class="sep"></div>	
			
			
			<section>
				<article>
					<h2>.prepend()</h2>
					<p>The .prepend() function inserts the given content as the first of the selected element.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).prepend(content);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("#myDiv").prepend("&lt;p&gt;"This is bq.js!"&lt;/p&gt;"");</pre>
					</div>
					
				</article>
			</section>
			
			<div class="sep"></div>	
			<section>
				<article>
					<h2>.remove()</h2>
					<p>The .remove() function removes one or more selected element(s) from DOM.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).remove();</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("#myDiv").remove();</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			<section>
				<article>
					<h2>.show()</h2>
					<p>The .show() function shows one or more selected element(s).</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).show();</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("p").show();</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			<section>
				<article>
					<h2>.hide()</h2>
					<p>The .hide() function sets one or more elements to hide (internally display to none).</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).hide();</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("p").hide();</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			<section>
				<article>
					<h2>.addClass()</h2>
					<p>The .addClass() function sets css class to one or more element to hide.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).addClass(ClassName);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("p").addClass("pad10px");</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			
			<section>
				<article>
					<h2>.removeClass()</h2>
					<p>The .removeClass() function removes class to one or more element to hide.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).removeClass(ClassName);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
						<pre>$bq("p").removeClass("pad10px");</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			
			<section>
				<article>
					<h2>.hasClass()</h2>
					<p>The .hasClass() function returns true if the selected element has the mentioned class name else it returns false.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).hasClass(ClassName);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>var pad=$bq("#myDiv").hasClass("pad10px");
	alert(pad);
</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
			
			
			
			<section>
				<article>
					<h2>.attr()</h2>
					<p>The .attr() function get or set the the mentioned attribute for one or more selected element.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>
<u>Set Attribute</u>
$bq(selector).attr("AttributeName","AttributeValue");
<u>Get Attribute</u>
$bq(selector).attr("AttributeName");
</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>
<u>Set Attribute</u>
$bq("#divName").attr("name","Balan");
<u>Get Attribute</u>
var name = $bq("#divName").get("name");
alert(name);

</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>	
		
			
			<section>
				<article>
					<h2>.removeAttr()</h2>
					<p>The .removeAttr() function removes the mentioned attribue to one or more element to hide.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).removeAttr(AttributeName);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>$bq("p").removeAttr("pad10px");</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>				
			
			
			
					
			<section>
				<article>
					<h2>.css()</h2>
					<p>The .css() function set the css mentioned css values for the selected elements.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).css(CSSPropertiesAsJSON);</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>$bq("p").css({
	"padding":"20px",
	"margin":"10px"
});
</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>				
			
				
					
			<section>
				<article>
					<h2>.parent()</h2>
					<p>The .parent() function returns the parent node of the selected element.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).parent();</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>$bq("p").parent();</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>		



			
					
			<section>
				<article>
					<h2>.ajax()</h2>
					<p>The .ajax() function performs an asynchronous HTTP (Ajax) request. This function has four parameters as the names explain. First Parameter is the URL, second is Method(GET or POST), third parameters in json format and last is the function which will call after action in done with the response. The response will send back "error" if ajax faces any error and the exception details will be exception parameters.</p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq().ajax(URL,Method,Parameters,function(response,exception));</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>$bq().ajax("test.txt","GET",null,function(data){
	alert(data);
})
</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>		

			
					
			<section>
				<article>
					<h2>.each()</h2>
					<p>The .each() function loops the selected elements. </p>
					
					<h3>Syntax</h3>
					<div class="code">
						<pre>$bq(selector).each(function(index,element));</pre>
					</div>
					<h3>Example</h3>
					<div class="code">
<pre>$bq("p").each(function(idx,val){
	alert($bq(val).html("Hello "+idx));
});
</pre>
					</div>
					
				</article>
			</section>
			<div class="sep"></div>		

			<section>
				<article>
					<a href="http://plnkr.co/edit/1KGAs6bS2ZsvxVpnLzpV?p=preview" target="_blank">Demo</a>
				</article>
			</section>



		
			<?php include("footer.php")?>
	</body>
</html>