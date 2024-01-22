<?php

require_once 'dao/UserDaoMysql.php';

class Auth{
    private PDO $pdo;
    private $base;
    private $dao;


    public function __construct($pdo, $base){
        $this->pdo  = $pdo;
        $this->base = $base;
        $this->dao  = new UserDaoMysql($this->pdo); 
    }
   public function checkToken(){
    if(!empty($_SESSION['token'])){
        $token = $_SESSION['token'];

        
        $user    = $this->dao->findByToken($token);
        if($user){
            return $user;
        }

    }
    header("Location: ".$this->base."login.php");
    exit;
   }

   public function validateLogin($email, $password){
       
       $user    = $this->dao->findByEmail($email);

       if($user){
        if(password_verify($password, $user->password)){
            
            $token = md5(time().rand(0, 999).time());
            $_SESSION['token'] = $token;
            $user->token = $token;
            $this->dao->update($user);

            return true;            
        }

       }


       return false;
   }
   public function emailExists($email){
       
        if($this->dao->findByEmail($email)){
            return true;
        }else{
            return false;
        }
   }

   public function registerUser($name, $email, $password, $birthdate){
        
        $toke    = md5(time().rand(0, 999).time()); 

        $hash    = password_hash($password, PASSWORD_DEFAULT);
        $newUser = new User();
        $newUser->name      = $name;
        $newUser->email     = $email;
        $newUser->password  = $hash;
        $newUser->birthdate = $birthdate;
        $newUser->token     = $toke;

        $this->dao->insert($newUser);
        $_SESSION['token'] = $toke;
   }

}