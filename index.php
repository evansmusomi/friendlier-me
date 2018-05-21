<?php
  $person = (empty($_GET['i'])) ? 'there': ucfirst($_GET['i']);
?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once 'analytics.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Relationship Assistant - FriendlierMe</title>
    <meta name="description" content="Be a better friend to the people you care about the most.">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:700,400|Lato" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="wrapper"><!--wrapper started-->
    	<div class="abovebanner"><!-- above banner started -->
            <div class="orange"></div>
    	</div><!-- above banner ended -->

        <div class="banner-content"><!-- banner content started -->
            <div class="header"><!-- header started-->
              <h1 id="logo">FriendlierMe</h1>
              <p class="line1">Personal Relationship Assistant</p>
            </div><!-- header ended-->

            <div class="content"><!-- content started-->
                <p>COMING SOON: A better way for people to nurture their most important relationships.</p> 
                <p>Be a better friend to the people you care about the most.</p>
                <div class="form"><!-- form started -->
                  <div class="mainform">
                    <form action="https://friendlierme.us9.list-manage.com/subscribe?u=471d32eae8eb4ba8b604b9263&id=7495c1136b" method="post" autocomplete="off" target="_blank" id="subscribe" name="subscribe">
                      <div class="field"><input type="text" id="input-email" value="" name="MERGE0" placeholder="Your Email"/></div>
                      <div class="submit"><input id="input-submit" type="button" value="Notify Me" /></div>
                    </form>
                  </div>
                </div><!-- form ended -->
            </div><!-- content ended -->

            <!-- Chat Head -->
            <a id="chat-head" href="#" title="Poke me.">
              <i>1</i>
            </a>
            <div id="chat-message"> 
              Hey <?php echo $person; ?>, thanks for stopping by. Working hard to deliver FriendlierMe ASAP. Subscribe to be notified when something's ready for you. 
            </div>
        </div><!-- banner content ended -->

    	<div class="belowbanner">
    		<div class="social">
    			<h2>follow us</h2>
    		    <a href="https://twitter.com/FriendlierMe" target="_blank" title="Follow us on Twitter">
    		        <i class="fa fa-twitter" aria-hidden="true"></i>
    		    </a>
    		</div>
    	</div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" 
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
        crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        let placeholder = $("#input-email").val();
        
        $("#input-email").keydown(function() {
          if (this.value === placeholder) { this.value = ""; }
        }).blur(function() {
          if (this.value === "") { this.value = placeholder; }
        });
        
        $("#input-submit").click(function(){
          if ($("#input-email").val() !== ""){ $("#subscribe").submit(); }
          return false;
        });
        
        $(document).ready(function () {
          $("#chat-head").addClass("animate");
        });
        
        $("#chat-head").on("click", function(e){
          let inbox = $("#chat-head i").text();
          if(inbox == 1){ $("#chat-head").text(""); }
          $("#chat-message").slideToggle();
          return false;
        });
    </script>
    <?php include_once 'livechat.php'; ?>
</body>
</html>