<?php

namespace App\Observers;

use App\Models\User;
use App\Enums\enum;

class UserEmailObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    
    public function creating(User $user)
    {
        // Your logic here
        if(str_starts_with($user->email, 'alfinindrawan')) {
            $user->role = 'admin';
        } else {
            $user->role = 'customer';
        }
    }
}
