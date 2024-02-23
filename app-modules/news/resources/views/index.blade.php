@php
/** @var \Illuminate\Pagination\LengthAwarePaginator<\Modules\News\Models\News> $news */
@endphp

<x-layout>
    <x-news::layout>
        @foreach($news->items() as $item)
            @php /** @var \Modules\News\Models\News $item */ @endphp
            <a href="{{ route('news.show', ['news' => $item]) }}">
                <h3>{{ $item->title }}</h3>
            </a>
            <p>{!! nl2br(e($item->content)) !!}</p>

            <hr>
        @endforeach

        {{ $news->links() }}
    </x-news::layout>
</x-layout>
