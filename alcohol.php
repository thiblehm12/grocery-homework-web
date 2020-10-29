<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">

        <title>page2</title>
    </head>
<body>

    <?php


            if(!empty($_POST['name'])) //get = store details from guests
            {
               echo '<p> Your name is '.htmlspecialchars($_POST['name']);

            }
            if(!empty($_POST['surname'])) //post = store details from forum
            {
               echo '<p> Your surname is '.htmlspecialchars($_POST['surname']);
            }
            if (filter_var($_POST['adress'], FILTER_VALIDATE_EMAIL))
            {
                if(!empty($_POST['adress'])) //post = store details from forum
                {
                   echo '<p> Your email is '.htmlspecialchars($_POST['adress']);
                }

            }
            else
            {
                echo '<br/><br/><br/> <u>UNKNOW EMAIL</u>';
            }

            if(!empty($_POST['city'])) //post = store details from forum
            {
               echo '<p> Your city is '.htmlspecialchars($_POST['city']);
            }
            if(!empty($_POST['gender'])) //post = store details from forum
            {
               echo '<p> You are a '.htmlspecialchars($_POST['gender']);
            }
            if(!empty($_POST['hobby'])) //post = store details from forum
            {
               echo '<p> You like '.htmlspecialchars($_POST['hobby']);
            }
            if(!empty($_POST['message'])) //post = store details from forum
            {
               echo '<p> Your message is : '.htmlspecialchars($_POST['message']);
            }

            /*$emailTo ="thiblehm12@gmail.com";
            $headers = "From: ".$_POST['adress'];
            $txt = "You have receive an email from ".$_POST['name']. ".\n\n" .$_POST['message'];

            mail($emailTo, $headers, $txt, $headers);
            header("Loation: answer.php?mailsend");*/
      ?>
            <form>
                <input id = "btn" type = "button" value = "Return"  onclick = "history.go(-1)">
            </form>

</body>
</html>
