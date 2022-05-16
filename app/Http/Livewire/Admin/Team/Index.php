<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Index extends Component
{
    public function reorder($list)
    {
        foreach($list as $item) {
            try {
                Team::find($item['value'])->update([
                    'order' => (string) $item['order'],
                ]);
            } catch (\Throwable $th) {
                Log::error($th);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.team.index', [
            'members' => Team::orderBy('order', 'asc')->get(),
        ]);
    }
}
