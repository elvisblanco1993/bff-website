<?php

namespace App\Http\Livewire\Admin\Events;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $event, $modal, $type, $start, $end, $all_day, $repeat = false, $frequency, $stop_after, $title, $description, $location;

    public function mount()
    {
        $this->type = $this->event->type;
        $this->title = $this->event->title;
        $this->all_day = ($this->event->all_day === "1") ? true : false;
        $this->description = $this->event->description;
        $this->location = $this->event->location;
        $this->start = $this->event->start;
        $this->end = $this->event->end;
    }

    public function save()
    {
        $this->validate([
            'type' => 'required',
            'start' => 'required',
            'title' => 'required',
        ]);

        try {
            $this->event->update([
                'type' => $this->type,
                'title' => $this->title,
                'all_day' => $this->all_day,
                'description' => $this->description,
                'location' => $this->location,
                'start' => $this->start,
                'end' => $this->end,
            ]);
            session()->flash('flash.banner', 'Event successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error updating the event. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.events');
    }

    public function render()
    {
        return view('livewire.admin.events.edit');
    }
}
