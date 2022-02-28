<?php

namespace App\Http\Composers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NavigationComposers
{
    /**
     * @param View $view
     * @return void
     */
    public function compose(View $view): View
    {
        $skills = Skill::all();


        return $view->with('skills', $skills);
    }
}
