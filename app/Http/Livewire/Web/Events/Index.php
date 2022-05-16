<?php

namespace App\Http\Livewire\Web\Events;

use Carbon\Carbon;
use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        return view('livewire.web.events.index', [
            'events' => Event::where('start', '>=' , Carbon::now())->where('title', 'like', "%{$this->search}%")->paginate(5)
        ]);
    }
}
