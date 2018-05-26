<!doctype>
<html>
<head>
  <meta charset="utf-8"></meta>
</head>
<body>

<?php
echo "begin <br>";
$C = isset($_POST['C']) ? $_POST['C'] : "";

if (isset($C) && $C=="C_know")
echo " you know C well<br> ";
elseif (isset($C) && $C=="C_learn")
echo " you will learn C <br>";

else
echo " there will be no C <br>";



          $Python = isset($_POST['Python']) ? $_POST['Python'] : "";

          if (isset($Python) && $Python=="Python_know")
            echo " you know Python well <br>";
           elseif (isset($Python) && $Python=="Python_learn")
              echo " you will learn Python <br>";

              else
                echo " there will be no Python<br>" ;



        $Java = isset($_POST['Java']) ? $_POST['Java'] : "";

        if (isset($Java) && $Java=="Java_know")
              echo " you know Java well <br>";
       elseif (isset($Java) && $Java=="Java_learn")
            echo " you will learn Java <br>";

          else
                  echo " there will be no Java <br>";



                  $Ruby = isset($_POST['Ruby']) ? $_POST['Ruby'] : "";

                  if (isset($Ruby) && $Ruby=="Ruby_know")
                    echo " you know Ruby well <br>";
                   elseif (isset($Ruby) && $Ruby=="Ruby_learn")
                      echo " you will learn Ruby <br>";

                      else
                        echo " there will be no Ruby <br>";



                        $HTML = isset($_POST['HTML']) ? $_POST['HTML'] : "";

                        if (isset($HTML) && $HTML=="HTML_know")
                          echo " you know HTML well <br>";
                         elseif (isset($HTML) && $HTML=="HTML_learn")
                            echo " you will learn HTML <br>";

                            else
                              echo " there will be no HTML <br>";


$Rails = isset($_POST['Rails']) ? $_POST['Rails'] : "";

  if (isset($Rails) && $Rails=="Rails_know")
  echo " you know Rails well <br>";
  elseif (isset($Rails) && $Rails=="Rails_learn")
  echo " you will learn Rails <br>";

  else
  echo " there will be no Rails <br> ";


  $Javascript = isset($_POST['Javascript']) ? $_POST['Javascript'] : "";

    if (isset($Javascript) && $Javascript=="Javascript_know")
    echo " you know Javascript well <br> ";
    elseif (isset($Javascript) && $Javascript=="Javascript_learn")
    echo " you will learn Javascript <br>";

    else
    echo " there will be no Javascript <br>";


    $PHP = isset($_POST['PHP']) ? $_POST['PHP'] : "";

      if (isset($PHP) && $PHP=="PHP_know")
      echo " you know PHP well <br>";
      elseif (isset($PHP) && $PHP=="PHP_learn")
      echo " you will learn PHP <br>";

      else
      echo " there will be no PHP <br>";


      $Cplus = isset($_POST['Cplus']) ? $_POST['Cplus'] : "";

        if (isset($Cplus) && $Cplus=="Cplus_know")
        echo " you know c++ well <br>";
        elseif (isset($Cplus) && $Cplus=="Cplus_learn")
        echo " you will learn c++ <br>";

        else
        echo " there will be no c++ <br>";




        $C2 = isset($_POST['C2']) ? $_POST['C2'] : "";

        if (isset($C2) && $C2=="C2_know")
        echo " you know C# well <br>";
        elseif (isset($C2) && $C2=="C2_learn")
        echo " you will learn C# <br>";

        else
        echo " there will be no C# <br>";



        $Objective_C = isset($_POST['Objective_C']) ? $_POST['Objective_C'] : "";

        if (isset($Objective_C) && $Objective_C=="Objective_C_know")
        echo " you know Objective_C well <br>";
        elseif (isset($Objective_C) && $Objective_C=="Objective_C_learn")
        echo " you will learn Objective_C <br>";

        else
        echo " there will be no Objective_C <br> ";


        $SQL = isset($_POST['SQL']) ? $_POST['SQL'] : "";

        if (isset($SQL) && $SQL=="SQL_know")
        echo " you know SQL well <br>";
        elseif (isset($SQL) && $SQL=="SQL_learn")
        echo " you will learn SQL <br>";

        else
        echo " there will be no SQL <br>";



        $Swift = isset($_POST['Swift']) ? $_POST['Swift'] : "";

        if (isset($Swift) && $Swift=="Swift_know")
        echo " you know Swift well <br>";
        elseif (isset($Swift) && $Swift=="Swift_learn")
        echo " you will learn Swift <br>";

        else
        echo " there will be no Swift <br>";

echo "<br> end  <br>";


?>
</body>
</html>
