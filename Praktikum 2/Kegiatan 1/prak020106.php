<html>
 	<head>Headings</head>
 	<body>
 	<?php
        $i = 2;

        do {
            echo '<h'.$i.' style="color:red">Heading '.$i.'</h'.$i.'>';
        $i+=2;
        } while ($i <= 6);
 	?>
 	</body>
</html>