<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'tc_id', 'phone_number', 'email', 'password', 'gender', 'type', 'address', 'balance', 'birth_date'];
    // Diğer metotlar buraya eklenebilir
}
