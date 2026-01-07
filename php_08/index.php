<?php
//interface

interface Notifiable{
    public function send($massege);
}


class EmailNotification implements Notifiable{
    public function send($massege){
        echo "Sending Email Notification: " . $massege;
    }
}

class SMSNotification implements Notifiable{
    public function send($massege){
        echo "Sending SMS Notification: " . $massege;
    }
}
class PushNotification implements Notifiable{
    public function send($massege){
        echo "Sending Push Notification: " . $massege;
    }
}

function notifyUser(Notifiable $notifiable, $massege){
    $notifiable->send($massege);
}

$email = new EmailNotification();
$sms = new SMSNotification();
$push = new PushNotification();

notifyUser($email, "Welcome to our service via Email!");
echo "<br>";
notifyUser($sms, "Welcome to our service via SMS!");
echo "<br>";
notifyUser($push, "Welcome to our service via Push Notification!");