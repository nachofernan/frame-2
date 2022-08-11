<?php

namespace App\Models;

use App\Config\Model;

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function store(string $email, string $username, string $password) {
        if(!isset($email) || !isset($password) || !isset($username) || !$username || !$email || !$password){
            return false;
        } else {
            if(
                $this->db->from($this->table)
                    ->where('email')->is($email)
                    ->select(['id'])
                    ->first()
                == 
                false
            ) {
                $this->db->insert([
                    'email' => $email,
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ])->into($this->table); 
                return true;
            } else {
                return false;
            }
        }
    }

    public function check(string $email, string $password) {
        if(!isset($email) || !isset($password) || !$email || !$password){
            return false;
        } else {
            $user = $this->db->from($this->table)
                        ->where('email')->is($email)
                        ->select([])
                        ->first();
            if($user && password_verify($password, $user->password)) {
                return $user;
            } else {
                return false;
            }
        }
    }
}