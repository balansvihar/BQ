<!DOCTYPE html>
<html>
	<head>
		<title>Bq.js | Balquery | Balan's Query | - Balsoft </title>
		<meta name="balquery documentation, bq.js api, balan's query documentation, simple javascript framework documentation, lightweight framework, simple  jquery" />
		<meta name="description" content="Documentation bq.js contains" />
		<?php $menu="contact"; include("meta.php")  ?>
		
	</head>

	<body class="docs">
			<?php include("header.php"); ?>
			<section>
				<article>
					<h1>Contact</h1>



<form method=post action=saveMsg.php class=formHldr>
<h4 >Please send your questions, suggestiona and feed-backs. </h4>
    <div class=ctrl>
        <label for=txtName>Name* :</label>
        <input type=text id=txtName class=txt />
    </div>
    <div class=ctrl>
        <label for=txtEmail>Email* :</label>
        <input type=text id=txtEmail class=txt />
    </div>
    <div class=ctrl>
        <label for=txtPhno>Phone :</label>
        <input type=text id=txtPhno class=txt maxlength=10 />
    </div>
    <div class=ctrl>
        <label for=txtMsg>Message* :</label>
        <textarea class=msg rows=4 id=txtMsg></textarea>
    </div>
	 <div class=ctrl>
        <label for=txtMsg></label>
         <input type=button value=Send class=send />
    </div>
  
</form>
<h4>Thanks to <a href="http://in.linkedin.com/pub/kahuwa-jyoti-das/34/58/98a" target="_blank">Kahuwa Jyoti Das</a>, for helping me in writting the documents.</h4>
<div class="clear"></div>
				</article>
				
			</section>
			<?php include("footer.php")?>
			<script>
			$bq().start(function(){
				var msg=$bq(".formHldr h4").html();
				$bq(".send").on("click",function(){
					$bq(".formHldr h4").html(msg).removeClass("error");
					var E = {
						"txtName": $bq("#txtName").val(),
						"txtEmail": $bq("#txtEmail").val(),
						"txtPhno": $bq("#txtPhno").val(),
						"txtMsg": $bq("#txtMsg").val()
					};
					
					
					
					
					if (E.txtName == "") {
						$bq(".formHldr h4").html("Please enter your name.").addClass("error");
						return false
					} else {
						if (E.txtEmail == "") {
							$bq(".formHldr h4").html("Please enter your email id.").addClass("error");
							return false
						} else {
							if (E.txtMsg == "") {
								$bq(".formHldr h4").html("Please enter your message.").addClass("error");
								return false
							}
						}
					}
					var D = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if (D.test(E.txtEmail) == false) {
						$bq(".formHldr h4").html("Please enter valid email id.").addClass("error");
						return false
					}
					if (E.txtPhno != "" && isNaN(E.txtPhno) == false || E.txtPhno != "" && E.txtPhno.length != 10) {
						$bq(".formHldr h4").html("Please enter valid mobile number.").addClass("error");
						return false
					}
				
					
						
					$bq().ajax("email.php","POST",E,function(data,ex){
						if (data=="1")
						$bq(".formHldr h4").html("Thanks for sending your message.").removeClass("error");
						else
						$bq(".formHldr h4").html("Sorry unable to send the message now.").addClass("error");
					});
				});
			});			
			</script>
	</body>
</html>