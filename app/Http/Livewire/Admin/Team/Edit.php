<?php

namespace App\Http\Livewire\Admin\Team;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $editModal;
    public $member, $name, $email, $position, $bio, $avatar, $is_board;

    public function mount($member)
    {
        $this->member = $member;
        $this->name = $this->member->name;
        $this->email = $this->member->email;
        $this->position = $this->member->position;
        $this->bio = $this->member->bio;
        $this->is_board = ($this->member->board == 1) ? true : false;

    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'bio' => 'required|min:100'
        ]);

        if ($this->avatar) {
            Storage::delete($this->member->avatar);
        }

        $board = ($this->is_board === true) ? 1 : 0;
        $avatar_path = ($this->avatar) ? $this->avatar->store('avatars') : $this->member->avatar;


        try {
            $this->member->update([
                'name' => $this->name,
                'email' => $this->email,
                'position' => $this->position,
                'bio' => $this->bio,
                'board' => $board,
                'avatar' => $avatar_path,
            ]);
            session()->flash('flash.banner', 'Member successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error updating the member. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }

        return redirect()->route('admin.team');
    }

    public function render()
    {
        return view('livewire.admin.team.edit');
    }
}
