<?php
/**
 * Created by PhpStorm.
 * User: hockenburj1
 * Date: 12/17/15
 * Time: 11:01 AM
 */

class User {

    var $insurance_company = '';
    var $first_name = '';
    var $last_name = '';
    var $insurance_contact = '';
    var $insurance_phone = '';
    var $insurance_policy = '';
    var $social_worker = '';


    public function __construct($userID = 0) {
        global $database;
        $this->database = $database;
        if($userID != 0) {
            $parameters = array(
                'userID' => $userID
            );

            $query = get_sql('getUserInformation');
            $user = $database->query($query, $parameters);
            $user = $user[0];
            $this->userID = $userID;
            $this->insurance_company = $user['insurance_company'];
            $this->first_name = $user['first_name'];
            $this->last_name = $user['last_name'];
            $this->insurance_contact = $user['insurance_contact'];
            $this->insurance_phone = $user['insurance_phone'];
            $this->insurance_policy = $user['insurance_policy'];
            $this->social_worker = $user['social_worker'];
        }
    }

    public function create() {

    }

    public function save() {
        // Validate required fields are filled
        if($this->userID == 0) {
            return false;
        }

        $query = get_sql('updateUser');
        $parameters = array(
            'userID' => $this->userID,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'insurance_company' => $this->insurance_company,
            'insurance_contact' => $this->insurance_contact,
            'insurance_phone' => $this->insurance_phone,
            'insurance_policy' => $this->insurance_policy
        );

        $this->database->executeQuery($query, $parameters);
        return true;
    }

    public function get($key) {
        return $this->$key;
    }

    public static function login($userID, $email) {
        $_SESSION['userID'] = $userID;
        $_SESSION['email'] = $email;
        header("Location: myinfo.php");
    }
}