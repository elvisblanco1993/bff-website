<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $articles, $search;

    public function render()
    {
        $this->articles = Article::where('title', 'like', "%{$this->search}%")->get();

        return view('livewire.admin.articles.index');
    }
}
