<?php


class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT id, name from users WHERE 
            username = :login AND password = MD5(:password)");
        $sth->execute([
            ':login' => $_POST['username'],
            ':password' => $_POST['password'],
        ]);
        $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {
            Session::set('loggedIn', true);
            Session::set('useName', $data[0]['name']);
            Session::set('startDate', $_POST['start_date']);
            Session::set('endDate', $_POST['end_date']);
            header('location: ../campaigns');
        } else {
            header('location: ../index');
        }

    }

}