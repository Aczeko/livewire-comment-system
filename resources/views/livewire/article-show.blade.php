<div>

    @if(!empty($users))
        @foreach($users as $user)
            <a href="{{ route('login', $user) }}"
               class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{  $user->name }}</a>
        @endforeach
        <a href="{{ route('logout') }}"
           class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ __('Logout') }}</a>
    @endif

    @auth
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight underline">
            {{ 'Authorized at: ' . auth()->user()->name }}
        </h1>
    @else
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight underline">
            {{ 'Unauthorized' }}
        </h1>
    @endauth

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $article->title }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Article Body
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:comments :model="$article"/>
                </div>
            </div>
        </div>
    </div>


</div>

