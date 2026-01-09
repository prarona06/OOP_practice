<?php
//dependency injection

class EmailService
{
public function  sendEmail ($message)
{
    echo "Email sent with message: $message\n";
}
}


class UserController
{
    protected $email;
    public function __construct(EmailService $email)
    {
        $this->email = $email;
    }
    public function notifyUser($message)
    {
        $this->email->sendEmail($message);
    }
}
$emailService = new EmailService();
$userController = new UserController($emailService);
$userController->notifyUser("Welcome to our platform!");