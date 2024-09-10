<?php
$to="ashirvad2912@gmail.com";
$subject="Test Mail";
$message= "Hello ashirvad";
$from="ashirvad824@gmail.com";
$headers="From:$from";
mail($to,$subject,$message,$headers);
echo "Mail Sent"
?>