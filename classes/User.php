<?php
class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM user WHERE id = ?', [$id]);
        
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
        $records = getResultFromSQL('SELECT * FROM user WHERE username = ?', [$username]);
        
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