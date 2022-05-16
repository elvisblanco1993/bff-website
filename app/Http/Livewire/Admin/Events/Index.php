<?php

namespace App\Http\Livewire\Admin\Events;

use Carbon\Carbon;
use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.events.index', [
            'events' => Event::where('start', '>=' , Carbon::now())->paginate(10)
        ]);
    }
}
