<!doctype>
<html>
<head>
<meta charset="utf-8"></meta>
</head>
<body>

<?php

echo "begin ";
if (isset($C) && $C=="C_know")
  echo "you know C well";
 elseif (isset($C) && $C=="C_learn")
    echo "you will learn C";

    else
      echo "no C";




echo " end";


?>
</body>
</html>
