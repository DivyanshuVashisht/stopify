<?php

    function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    function sanitizeFormUsername($inputText){
        $inputText = strip_tags($inputText);//strips all angle brackets of the html elements
        $inputText = str_replace(" ", "", $inputText);//replacing space with no space
        return $inputText;
    }

    function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    function sanitizeFormEmail($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = strtolower($inputText);
        return $inputText;
    }


    if(isset($_POST['registerButton'])){
        //Register button was pressed
        $username = sanitizeFormUsername($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $email = sanitizeFormEmail($_POST['email']);
        $email2 = sanitizeFormEmail($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password2']);

        $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

        if($wasSuccessful){
            $_SESSION['userLoggedIn'] = $username;
            header("Location: index.php");//redirects to a certain page
        }
    }
?>