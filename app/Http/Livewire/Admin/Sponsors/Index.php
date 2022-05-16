<?php

namespace App\Http\Livewire\Admin\Sponsors;

use App\Models\Sponsor;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.sponsors.index', [
            'sponsors' => Sponsor::all()
        ]);
    }
}
