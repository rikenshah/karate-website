<?php 
include("config.php");
include("functions.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Threaded Comments</title>
<script type='text/javascript' src='jquery.pack.js'></script>
<script type='text/javascript'>
$(function(){
	$("a.reply").click(function() {
		var id = $(this).attr("id");
		$("#parent_id").attr("value", id);
		$("#name").focus();
	});
});
</script>
<style type='text/css'>
html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote,
pre, form, fieldset, table, th, td { margin: 0; padding: 0; }

body {
font-size: 14px;
line-height:1.3em;
}

a, a:visited {
outline:none;
color:#7d5f1e;
}

.clear {
clear:both;
}

#wrapper {
	width:480px;
	margin:0px auto;
	padding:15px 0px;
}

.comment {
	padding:5px;
	border:2px solid #7d5f1e;
	margin-top:15px;
	list-style:none;
}

.aut {
	font-weight:bold;
}

.timestamp {
	font-size:85%;
	float:right;
}

#comment_form {
	margin-top:15px;
}

#comment_form input {
	font-size:1.2em;
	margin:0 0 10px;
	padding:3px;
	display:block;
	width:100%;
}

#comment_body {
	display:block;
	width:100%;
	height:150px;
}

#submit_button {
	text-align:center; 
	clear:both;
}
</style>
</head>
<body>
<div id='wrapper'>
<ul>
<?php
$q = "SELECT * FROM threaded_comments WHERE parent_id = 0";
$r = mysql_query($q);
while($row = mysql_fetch_assoc($r)):
	getComments($row);
endwhile;
?>
</ul>

<form id="comment_form" action="post_comment.php" method='post'>
	<label for="name">Name:</label>
	<input type="text" name="name" id='name'/>
	<label for="comment_body">Comment:</label>
	<textarea name="comment_body" id='comment_body'></textarea>
	<input type='hidden' name='parent_id' id='parent_id' value='0'/>
	<div id='submit_button'>
		<input type="submit" value="Add comment"/>
	</div>
</form>

</div>
</body>
</html>