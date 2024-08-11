<?php
namespace App\Interfaces\RepositoryInterface;
interface UserRepositoryInterface {
    public function getUsers();
    public function getUser($id);
    public function createUser($data);
    public function updateUser($id, $data);
    public function deleteUser($id);
  }