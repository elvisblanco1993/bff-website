<?php

namespace App\Http\Livewire\Admin\Sponsors;

use App\Models\Sponsor;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $modal;
    public $name, $logo, $tier, $url;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'logo' => 'required|image|max:2048',
            'tier' => 'required',
        ]);

        try {
            $url = $this->logo->store('public/sponsors');
            Sponsor::create([
                'name' => $this->name,
                'logo' => $url,
                'tier' => $this->tier,
                'url' => $this->url,
            ]);
            session()->flash('flash.banner', 'Sponsor successfully created!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error creating the sponsor. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.sponsors');
    }

    public function render()
    {
        return view('livewire.admin.sponsors.create');
    }
}
