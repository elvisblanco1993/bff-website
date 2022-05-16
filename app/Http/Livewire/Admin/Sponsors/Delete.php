<?php

namespace App\Http\Livewire\Admin\Sponsors;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Delete extends Component
{
    public $modal, $sponsor;

    public function delete()
    {
        Storage::delete($this->sponsor->logo);
        $this->sponsor->delete();
        session()->flash('flash.banner', 'Sponsor successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.sponsors');
    }
    public function render()
    {
        return view('livewire.admin.sponsors.delete');
    }
}
