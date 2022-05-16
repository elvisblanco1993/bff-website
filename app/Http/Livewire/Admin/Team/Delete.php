<?php

namespace App\Http\Livewire\Admin\Team;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Delete extends Component
{
    public $deleteModal;

    public function mount($member)
    {
        $this->member = $member;
    }

    public function delete()
    {
        try {
            $this->member->delete();
            session()->flash('flash.banner', 'Member successfully deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error removing the member. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.team');
    }
    public function render()
    {
        return view('livewire.admin.team.delete');
    }
}
