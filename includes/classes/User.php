<?php

class User {

    private $user;
    private $con;
    public function __construct($con, $username)
    {
        $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'" );
        $this->user = mysqli_fetch_array($query);
        $this->con = $con;
    }

    public function getFirstLastName() {
        return $this->user['firstname'] . " " . $this->user['lastname'];
    }

    public function getDateBirth() {
        return $this->user['date_birth'];
    }

   public function getAge() {
       $then = $this->user['date_birth'];
        $then_ts = strtotime($then);
        $then_year = date('Y', $then_ts);
        $age = date('Y') - $then_year;
        if(strtotime('+' . $age . ' years', $then_ts) > time()) $age--;
        return $age;
    }

    public function getCategory() {
        return $this->user['category'];
    }

    public function getBowTypeAndPounds() {
        return $this->user['bow_type'] . " (" . $this->user['pounds'] . " funty)";
    }

    public function getDateMedical() {
        // $date_medical = new DateTime($this->user['date_medical']);
        // $now = date_format(new DateTime(), 'Y-m-d');

        // $interval = $now->diff($date_medical);
        //     return $interval->format('%R%a days');

            $dStart = new DateTime();
            $dEnd  = new DateTime($this->user['date_medical']);
            $dDiff = $dStart->diff($dEnd);
            if ($dDiff->format('%r%a') > 0) {

            return "<span class='green'> Aktualne </span> (" . $this->user['date_medical'] .")"; 
            }        else return "<span class='red'> Nieaktualne </span> (" . $this->user['date_medical'] .")"; 

      
    }
}

?>