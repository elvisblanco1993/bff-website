<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;
use App\Models\Multimedia;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $article, $title, $body, $status, $files = [];

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'files.*' => 'required|image|max:2048', // 2MB max.
        ]);

        try {
            $article = Article::create([
                'title' => $this->title,
                'body' => $this->body,
                'status' => ($this->status == 'true') ? 1 : 0
            ]);

            foreach ($this->files as $file) {
                $url = $file->store('public/articles');
                $image = Multimedia::create([
                    'url' => $url,
                ]);
                $image->articles()->attach($article);
            }
            session()->flash('flash.banner', 'Article successfully created!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error creating the article. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.articles');
    }

    public function render()
    {
        return view('livewire.admin.articles.create');
    }
}
