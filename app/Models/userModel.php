<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'tc_id', 'email', 'phone_number', 'gender', 'password'];

    // Diğer metotlar buraya eklenebilir
}
?>