<div
        class="my-6"
        x-data="{ replying: false, editing: false }"
        x-on:replied.window="replying = false"
>

    <div>
        <div class="flex items-center space-x-2">
            <img src="" alt="" class="bg-black rounded-full size-8">
            <div class="font-semibold">
                {{ $comment->user->name }}
            </div>
            <div class="text-sm">
                {{ $comment->created_at->diffForHumans() }}
            </div>
        </div>

        @can('edit', $comment)
            <template x-if="editing">
                <form class="mt-4" wire:submit="edit">
                    <div>
                        <x-textarea class="w-full" rows="4" wire:model="editForm.body" />
                        <x-input-error :messages="$errors->get('editForm.body')"/>
                    </div>
                    <div class="flex items-baseline space-x-2">
                        <x-primary-button class="mt-2">
                            Edit
                        </x-primary-button>
                        <button class="text-gray-500 text-sm" x-on:click="editing = false">
                            Cancel
                        </button>
                    </div>
                </form>
            </template>
        @endcan

        <div class="mt-4" x-show="!editing">
            {{ $comment->body }}
        </div>

        <div class="mt-6 text-sm flex items-center space-x-3">
            @can('reply', $comment)
                <button class="text-gray-500" x-on:click="replying = true">
                    Reply
                </button>
            @endcan

            @can('edit', $comment)
                <button class="text-gray-500" x-on:click="editing = true">
                    Edit
                </button>
            @endcan
        </div>

        <template x-if="replying">
                <form class="mt-4" wire:submit="reply">
                    <div>
                        <x-textarea placeholder="Reply to {{ $comment->user->name }}" class="w-full" rows="4" wire:model="replyForm.body" />
                        <x-input-error :messages="$errors->get('replyForm.body')"/>
                    </div>
                    <div class="flex items-baseline space-x-2">
                        <x-primary-button class="mt-2">
                            Reply
                        </x-primary-button>
                        <button class="text-gray-500 text-sm" x-on:click="replying = false">
                            Cancel
                        </button>
                    </div>
                </form>
        </template>

        @if( is_null($comment->parent_id) && $comment->children()->count())

            <div class="ml-8 mt-8">

                @foreach($comment->children as $child)

                    <livewire:comment-item :comment="$child" />

                @endforeach

            </div>

        @endif

    </div>

</div>
