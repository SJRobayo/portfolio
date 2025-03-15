<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LanguageSelector extends Component
{
    public function render()
    {
        return view('livewire.language-selector');
    }



    public function changeLocale($locale){

        session()->put('locale', $locale);
        setlocale(LC_TIME, $locale);
        Carbon::setLocale($locale);
        Log::info('Ctrl-sess: ' . session()->get('locale'));
        //            (new CacheHelper())->setLocaleIdCache();

        return redirect()->back();
    }
}
