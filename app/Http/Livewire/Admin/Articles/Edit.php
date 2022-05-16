<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;
use App\Models\Multimedia;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $article, $title, $body, $status, $files = [];

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->title = $this->article->title;
        $this->body = $this->article->body;
        $this->status = $this->article->status;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
        ]);

        try {
            $this->article->update([
                'title' => $this->title,
                'body' => $this->body,
                'status' => ($this->status == 'true') ? 1 : 0
            ]);

            if (count($this->files) > 0) {
                if ((integer) $this->article->multimedia->count() > 0) {
                    foreach ($this->article->multimedia as $file) {
                        Storage::delete($file->url);
                        $file->articles()->detach();
                        $file->delete();
                    }
                }

                foreach ($this->files as $file) {
                    $url = $file->store('public/articles');
                    $image = Multimedia::create([
                        'url' => $url,
                    ]);
                    $image->articles()->attach($this->article);
                }
            }

            session()->flash('flash.banner', 'Article successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', 'There was an error updating the article. Please contact support');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.articles');
    }

    public function render()
    {
        return view('livewire.admin.articles.edit');
    }
}
