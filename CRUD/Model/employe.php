<?php
class employe
{
    private $lastName;
    private$firstname;
    private $password;
    private $phone;
    private $email;
    private $dOB;
    public function getlastName()
     {
        return $this->lastName;
     }
     public function getfirstname()
     {
        return $this->firstname;
     }
     public function getpassword()
     {
        return $this->password;
     }
     public function getphone()
     {
        return $this->phone;
     }
     public function getemail()
     {
        return $this->email;
     }
     public function getdob()
     {
        return $this->dOB;
     }

    public  function setlastname($b)
    {
        $this->lastName=$b;
    }
    public  function setfirstname($a)
    {
        $this->firstname=$a;
    }
    public  function setpassword($c)
    {
        $this->password=$c;
    }
    public  function setphone($d)
    {
        $this->phone=$d;
    }
    public  function setemail($e)
    {
        $this->email=$e;
    }
    public  function setdob($f)
    {
        $this->dOB=$f;
    }



    public function __construct($a,$b,$c,$d,$e,$f){
        $this->firstname=$a;
        $this->lastName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }
    public function Afficher()
    { echo"nom= ".$this->firstname;
       echo"prenom= ".$this->lastName;
       echo"password= ".$this->password;
       echo"phone= ".$this->phone;
       echo"email= ".$this->email;
       echo"date of birth= ".$this->dOB;
    }

}
$personnel=new employe("yassine","kamoun","2A24","22222","kyass","22/07/2003");
$personnel->Afficher();
?>