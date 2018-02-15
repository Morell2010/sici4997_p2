<?php
class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    
    public static function loadFromID($id) {       
<<<<<<< HEAD
        $records = getResultFromSQL('SELECT * FROM user WHERE id = ?', [$id]);
=======
        $records = getResultFromSQL('SELECT * FROM `user2` WHERE id = ?', [$id]);
>>>>>>> cde2f5921dca81a78102f86a899d3401a48fade2
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        
        return $u;
    }
    
    public static function loadFromUsername($username) {
<<<<<<< HEAD
        $records = getResultFromSQL('SELECT * FROM user WHERE username = ?', [$username]);
=======
        $records = getResultFromSQL('SELECT * FROM `user2` WHERE username = ?', [$username]);
>>>>>>> cde2f5921dca81a78102f86a899d3401a48fade2
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL, ?, ?, ?);";
            
            getResultFromSQL($sql, [$this->username,$this->email, $this->password]);
        }
    }
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}
?>