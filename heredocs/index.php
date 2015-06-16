<?php

$post = array(

	'author' 		=> 'Sara Puljić',
	'title'  		=> 'My awesome text',
	'body' 			=> 'Here is the body',
	'publish-date' 	=> '15-06-2015',
	'category' 		=> 'Personal'

);

//$email = "<h1>{$post['title']}</h1>";
//echo $email;


//$email = <<<EOT
//<h1>{$post['title']}</h1>

//<p>By: {$post['author']}</p>

//<div>{$post['body']}</div>
//EOT;
//echo $email;


extract($post);
$email = <<<EOT
<h1>$title</h1>

<p>By: $author within the $category category.</p>

<div>$body</div>
EOT;
echo $email;


