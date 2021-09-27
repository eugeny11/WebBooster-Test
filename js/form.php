<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $merchandise = $_POST["merchandise"];

    if($name=="" or $email=="" or $phone=="" or $merchandise==""){ 
        echo "Все поля должны быть заполнены";
    }

    else{
    
        $to = "your_mail@mail.ru"; 
        $subject = "Обратная связь формы"; 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: <test@mail.ru>\r\n";

        
        $message .= "Имя пользователя: ".$name."\n";
        $message .= "Почта: ".$email."\n";
        $message .= "Телефон: ".$phone."\n";
        $message .= "Сообщение: ".$tmerchandise"\n";
        $send = mail($to, $subject, $message, $headers);

        if ($send == "true")
        {
            echo "Сообщение доставлено\r\n";
        }
        else
        {
            echo "Сообщение не доставлено";
        }
    }

?>