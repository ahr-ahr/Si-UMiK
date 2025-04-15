<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function findUserById($id)
    {
        return User::findOrFail($id);
    }

    public function updateUser($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
    }

    public function deleteUser($id)
    {
        $user = $this->findUserById($id);

        $user->sentMessages()->delete();
        $user->receivedMessages()->delete();

        $user->delete();
    }

}
