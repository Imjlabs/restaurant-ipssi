<?php
namespace App\Model;

use Core\Model\DefaultModel;

class UserModel extends DefaultModel {
    protected string $table = 'utilisateurs';
    protected string $entity = 'User';
}