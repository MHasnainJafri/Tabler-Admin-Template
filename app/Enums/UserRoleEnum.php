<?php
namespace App\Enum;


enum UserRoleEnum:string
{
    case ADMIN = 'admin';
    case USER = 'user';
 
}

// uses 
// in validator
// 'status' => 'required|in:' . OrderStatus::cases(),
// typecasting in model 
// protected $casts = [
//     'role' => UserRoleEnum::class
// ];

