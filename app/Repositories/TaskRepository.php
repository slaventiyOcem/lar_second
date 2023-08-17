<?php

namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * get all tasks for specify
     * @param User $user
     * @return \Illuminate\Support\Collection
     */
    public function forUser (User $user){
        return $user->tasks;
    }
}