<?php

namespace App\Http\Livewire\Admin\Events;

use Livewire\Component;

class Delete extends Component
{
    public $modal, $event;

    public function delete()
    {
        $this->event->delete();
        session()->flash('flash.banner', 'Event successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.events');
    }

    public function render()
    {
        return view('livewire.admin.events.delete');
    }
}
