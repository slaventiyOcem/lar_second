<?php

namespace App\Policies;


use App\Models\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function isAuthor(User $user, Task $task){
    return  $user->id === $task->user_id;
    }
}
