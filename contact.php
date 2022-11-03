<?php

		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$comments=$_POST['comments'];
           


   
    mail('seetharamugn@gmail.com',$name, $comments);
    echo "The email message was sent.";
		
		
	
	?>