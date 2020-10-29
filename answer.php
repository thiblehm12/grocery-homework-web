<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">

        <title>page2</title>
    </head>
<body>

    <?php


            // today's date
            $jour = date("d",time());
            $mois = date("m",time());
            $annee = date("Y",time());
            $heure = date("H");


            // determination of the age
            $age = $_POST['age'];
            $age = explode("-", $age); //we create an array
            //echo '<p> Your birth is '.($_POST['age']);
            //echo '<p> the age is '.$age[0]. '-'.$age[1]. '-'.$age[2];

            if ($jour >= $age[0] and $mois = $age[1] or $mois > $age[1])
                    {
                    $age = $annee - $age[0];

                    }
            else
                    {
                    $age = $annee - $age[0] - 1;

                    }

            echo '<p> Your age is '.$age;
            $ageLimit = 21;
            if ($age < $ageLimit )
            {
                echo '<p>Hello '.$_POST['name']. ' I\'m sorry but you can\'t buy alcohol, you are too young.';
            }
            else {
                if (10 < $heure and $heure < 20){

                    header('Location: http://localhost/HW/alcool/alcohol.html');
                    exit();
                 }
                 else{
                    echo '<p>'.$_POST['name'].' It\'s not the good time to buy alcohol !';
                 }

            }


      ?>
            <form>
                <input id = "btn" type = "button" value = "Return"  onclick = "history.go(-1)">
            </form>

</body>
</html>
