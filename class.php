<?php
class User
{
    protected $name;
    protected $surname;

    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
class Admin  extends User
{
    public function adminGet()
    {
         echo "Добрый день админ " . $this->name . " " . $this->surname . ". Вы можете на сайте делать всё.";
    }
}
class Manager  extends User
{
    public function managerGet()
    {
        echo "Добрый день менеджер " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, удалять и создавать клиентов.";
    }
}
class Client extends  User
{
    public function clientGet()
    {
        echo "Добрый день клиент " . $this->name . " " . $this->surname . ". Вы можете на сайте просматривать информацию доступную пользователям.";
    }
}
?>