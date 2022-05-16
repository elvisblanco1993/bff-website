<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $addModal;
    public $team;
    public $name, $email, $position, $bio, $avatar, $is_board;

    public function mount()
    {
        $this->team = Team::all();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'bio' => 'required|min:100'
        ]);


        $board = ($this->is_board === true) ? 1 : 0;
        $avatar_path = $this->avatar->store('avatars');
        $order = ($this->team->max('order') == 1) ? 1 + $this->team->max('order') : 1;

        try {
            Team::create([
                'name' => $this->name,
                'email' => $this->email,
                'position' => $this->position,
                'order' => $order,
                'board' => $board,
                'avatar' => $avatar_path,
                'bio' => $this->bio
            ]);

            session()->flash('flash.banner', 'Member successfully added!');
            session()->flash('flash.bannerStyle', 'success');

        } catch (\Throwable $th) {
            throw $th;
            session()->flash('flash.banner', 'Could not add member, Please contact support!');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.team');
    }

    private function getOrder()
    {
        return (true) ? $this->teams->max('order') + 1 : 1;
    }

    public function render()
    {
        return view('livewire.admin.team.create');
    }
}
