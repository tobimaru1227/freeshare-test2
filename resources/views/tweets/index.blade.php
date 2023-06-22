<x-app-layout>
    
    <x-slot name=header>Home</x-slot>
    
    <!-- フラッシュメッセージ -->
    @if(session('message'))
        <div class="flash-message">
            {{ session('message') }}
        </div>
    @endif
    
    <div class="tweet">
        <!-- 投稿データ一覧 -->
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
                
                <div class="tweet_menu">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button>
                                <img src="{{ asset('images/3dot.png') }}" alt="3点リーダー">
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('tweet.show')">
                                {{ __('詳細') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        @endforeach
    </div>
    
</x-app-layout>
