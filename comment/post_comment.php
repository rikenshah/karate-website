<?php
include("config.php");
$author = mysql_real_escape_string($_POST['name']);
$comment_body = mysql_real_escape_string($_POST['comment_body']);
$parent_id = mysql_real_escape_string($_POST['parent_id']);
$q = "INSERT INTO threaded_comments (author, comment, parent_id) VALUES ('$author', '$comment_body', $parent_id)";
$r = mysql_query($q);
if(mysql_affected_rows()==1) {
	header("location:index.php");
}
else {
echo "Comment cannot be posted. Please try again.";
}
?>