<head>
<title>新建网页</title>
</head>
    <body>
    	<table border =1>
    		<?php 
    			header("Content-type: text/html; charset=utf-8"); 
    			$i=1;
    			while ($i <= 9) {
    				echo '<tr>';
    				$j=1;
    				while ($j <= $i) {
    					echo '<td>';
    					echo $j.'x'.$i.'='.$j*$i;
    					echo '</td>';
    					$j++;
    				}

    				$i++;
    			}
   		
    		?>
    	</table>
    </body>
</html>