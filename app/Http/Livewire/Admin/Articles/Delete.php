<?php

namespace App\Http\Livewire\Admin\Articles;

use Livewire\Component;

class Delete extends Component
{
    public $article, $modal;

    public function delete()
    {
        $this->article->delete();
        session()->flash('flash.banner', 'Article successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.articles');
    }

    public function render()
    {
        return view('livewire.admin.articles.delete');
    }
}
