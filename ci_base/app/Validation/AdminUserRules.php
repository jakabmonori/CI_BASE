<?php
namespace App\Validation;
use App\Models\AdminModel;
use CodeIgniter\Model;



class AdminUserRules
{

    public function validateAdminUser(string $str, string $fields, array $data)
    {

        $model = new AdminModel();
        $user = $model->where('email', $data['email'])->first();

        if (!$user)
            return false;

        return (sha1($data['password']) == $user['password']) ? true : false;

    }
}

?>