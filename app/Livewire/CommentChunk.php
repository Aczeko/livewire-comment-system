<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentChunk extends Component
{
    public array $ids = [];

    public function render()
    {
        $orderedComments = collect($this->ids)
            ->map(function ($id) {
                return Comment::with([
                    'user',
                    'children' => function ($query) {
                        $query->oldest()->with('user');
                    }
                ])->find($id);
            })
            ->filter();

        return view('livewire.comment-chunk', [
            'comments' => $orderedComments
        ]);
    }
}
