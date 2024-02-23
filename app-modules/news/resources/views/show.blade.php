@php
    /** @var \Modules\News\Models\News $news */
@endphp

<x-layout>
    <x-news::layout>
        <h2>{{ $news->title }}</h2>
        <p>{!! nl2br(e($news->content)) !!}</p>
    </x-news::layout>
</x-layout>
