<?php

namespace App\Http\Livewire\Admin\Events;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Create extends Component
{
    public $addModal,$type,$start,$end,$all_day = false, $repeat = false, $frequency, $stop_after, $title,$description,$location;

    public function save()
    {
        $this->validate([
            'type' => 'required',
            'start' => 'required',
            'title' => 'required',
        ]);

        try {

            if ($this->repeat === true) {
                $start = Carbon::parse($this->start);
                $end = Carbon::parse($this->end);
                for ($i=0; $i <= $this->stop_after ; $i++) {
                    if ($this->frequency == 'weekly') {
                        $start = $start->addWeek();
                        $end = $end->addWeek();
                    }
                    if ($this->frequency == 'biweekly') {
                        $start = $start->addWeeks(2);
                        $end = $end->addWeeks(2);
                    }
                    if ($this->frequency == 'monthly') {
                        $start = $start->addMonth();
                        $end = $end->addMonth();
                    }
                    if ($this->frequency == 'yearly') {
                        $start = $start->addYear();
                        $end = $end->addYear();
                    }

                    Event::create([
                        'type' => $this->type,
                        'start' => $start,
                        'end' => $this->end,
                        'all_day' => $this->all_day,
                        'title' => $this->title,
                        'description' => $this->description,
                        'location' => $this->location,
                    ]);
                }
            } else {
                Event::create([
                    'type' => $this->type,
                    'start' => $this->start,
                    'end' => $this->end,
                    'all_day' => $this->all_day,
                    'title' => $this->title,
                    'description' => $this->description,
                    'location' => $this->location,
                ]);
                session()->flash('flash.banner', 'Event successfully created!');
                session()->flash('flash.bannerStyle', 'success');
            }
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error creating the event. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.events');
    }

    public function render()
    {
        return view('livewire.admin.events.create');
    }
}
