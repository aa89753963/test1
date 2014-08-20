<html>
    <head>
        <title>Example</title>
	<style type="text/css">
	    .formitem{margin: 10px;}
	    #name{padding:10px;}
	</style>
    </head>
    <body>
	<?php
	    $file   = '/home/s3/test/project/1.txt';
	    $action = $_GET['action'];
	    $id     = $_GET['id'];
	    if ($action == 'reply') {
		if (is_file($file)) {
		    $array = file($file);
		    if ($array[$id]) {
			$message = unserialize($array[$id]);
		        echo '<div class="formitem">';
		        echo '<p>Name: ' . $message['name'] . '</p>';
		        echo '<p>Date: ' . date('Ymd', $message['date']) . '</p>';
		        echo '<p>Summary: ' . $message['summary'] . '</p>';
		    	echo '</div>';
		   }
	?>
	<form method="POST" action="2.php?id=<?php echo $id; ?>&action=reply">
	    <div class="formitem">
		<label for="EDIT_reply">
		    Reply
		</label>
		<textarea name="EDIT_reply" rows="10"></textarea>
	    </div>
	    <input type="submit" name="submit" value="Submit" />
	</form>
	<?php
		}
	    } else {
	    if (is_file($file)) {
	    	$array = file($file);
		foreach ($array as $key => $a) {
		    echo $key. '<br />';
		    $message = unserialize($a);
		    echo '<div class="formitem">';
		    echo '<p>Name: ' . $message['name'] . '</p>';
		    echo '<p>Date: ' . date('Ymd', $message['date']) . '</p>';
		    echo '<p>Summary: ' . $message['summary'] . '<br /><a href="1.php?id=' . $key . '&action=reply&comment=test">Reply</a></p>';
		    foreach ($message['reply'] as $reply) {
			echo '<p>Reply: ' . $reply . '</p>';
		    }
		    echo '</div>';
		}
	    }
	?>
	<form method="POST" action="2.php">
	    <div class="formitem">
		<label for="name">
		    Name
		</label>
	    	<input id="name" type="text" name="EDIT_name" />
	    </div>
	    <div class="formitem">
		<label for="summary">
		    Summary
		</label>
		<textarea name="EDIT_summary" rows="10"></textarea>
	    </div>
	    <input type="submit" name="submit" value="Submit" />
	</form>
	<?php
	    }
	?>
    </body>
</html>
