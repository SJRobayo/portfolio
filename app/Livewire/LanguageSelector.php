<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LanguageSelector extends Component
{
    public function render()
    {
        return view('livewire.language-selector');
    }

    public function changeLocale($locale)
    {
        Session::put('locale', $locale);

        // App::setLocale($locale);
        return redirect()->back();
    }

  
}
