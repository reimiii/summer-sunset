<?php

namespace App\Http\ViewComposers;

use App\Models\User;
use Illuminate\View\View;

class HeaderViewComposer
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function compose(View $view)
    {
         $view->with('user', $this->user->select('name', 'email')->first());
    }
}