<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class LanguageSelector extends Component
{
    public function render()
    {
        return view('livewire.language-selector');
    }

    public function changeLocale($locale)
    {
        App::setLocale($locale);
        session(['locale' => $locale]);
        return redirect()->route('experience');
    }

    public function yourFunction()
    {
        dd(1);
    }
}
