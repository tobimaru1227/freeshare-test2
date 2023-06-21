<x-app-layout>
    <x-slot name=header>Home</x-slot>
    <div class="tweet">
        <!-- 投稿データの表示 -->
        @foreach ($tweets as $tweet)
            <div class="tweet-container">
                <!-- 投稿者の表示 -->
                <div class="user-name">{{ $tweet->user->name }}</div>
                <!-- 投稿内容の表示 -->
                <div class="tweet-content">{{ $tweet->content }}</div>
                <!-- 画像があれば表示 -->
                @if ($tweet->image)
                    <img src="../../storage/{{ $tweet->image }}" alt="投稿画像" class="tweet-image">
                @endif
                <!-- 投稿日の表示 -->
                <div class="tweet-date">{{ $tweet->created_at }}</div>

                <x-primary-button>いいね</x-primary-button>
                <x-primary-button>リツイート</x-primary-button>
            </div>
        @endforeach
    </div>
</x-app-layout>
