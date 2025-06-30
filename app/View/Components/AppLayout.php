<?php

namespace App\View\Components;

use App\Clinic;
use App\Settings\GeneralSettings;
use App\Settings\SeoSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use RyanChandler\FilamentNavigation\Models\Navigation;
use SiroDiaz\Redirection\Models\Redirection;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string         $title = null,
        public ?string         $description = null,
        public ?string         $image = null,
        public ?bool           $showHeader = true,
        public ?bool           $showFooter = true,
    )
    {
        if (!$this->image) {
            $this->image = asset('images/logo.svg');
        }
    }

    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
