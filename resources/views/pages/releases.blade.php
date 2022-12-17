<x-home-layout>
    <div class="container my-5" id="gameRelease">
        <h5>
            Game Release
            <hr class="hr-danger container-fluid" />
        </h5>

        <div class="row">
            @foreach($posts as $post)
            <div class="col-4 my-3">
                <a href="{{ route('detail', $post->slug) }}">
                    <div class="card">
                        <img
                            src="{{ Storage::disk('public')->url($post->image) }}"
                            class="img-fluid rounded-1"
                            alt="{{ $post->title }}"
                        />
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="container my-5" id="newRelease">
            <div class="row">
                <div class="col">
                    <h5>New Release</h5>
                </div>
                <div class="col-1">
                    <small id="hover">
                        <a href="{{ route('releases-list', ['title' => 'New Release']) }}"
                            >Browse All</a
                        >
                    </small>
                </div>
            </div>
            <div class="row">
                <hr class="hr-primary" />
            </div>

            <div class="row my-3">
                @foreach($posts as $post)
                @break($loop->index == 4)
                <div class="col-3">
                    <a href="{{ route('detail', $post->slug) }}">
                        <img
                            src="{{ Storage::disk('public')->url($post->image) }}"
                            class="img-thumbnail"
                            alt="{{ $post->title }}"
                        />
                        <div class="title">
                            <p>{{ $post->title }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container my-5" id="bestSeller">
        <div class="row">
            <div class="col">
                <h5>best seller</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Best Seller']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            @foreach($posts as $post)
            @break($loop->index == 4)
            <div class="col-3">
                <a href="{{ route('detail', $post->slug) }}">
                    <img
                        src="{{ Storage::disk('public')->url($post->image) }}"
                        class="img-thumbnail"
                        alt="{{ $post->title }}"
                    />
                    <div class="title">
                        <p>{{ $post->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5" id="comingSoon">
        <div class="row">
            <div class="col">
                <h5>coming Soon</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Coming Soon']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            @foreach($posts as $post)
            @break($loop->index == 4)
            <div class="col-3">
                <a href="{{ route('detail', $post->slug) }}">
                    <img
                        src="{{ Storage::disk('public')->url($post->image) }}"
                        class="img-thumbnail"
                        alt="{{ $post->title }}"
                    />
                    <div class="title">
                        <p>{{ $post->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5" id="mostPlayed">
        <div class="row">
            <div class="col">
                <h5>most Played</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Most Played']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            @foreach($posts as $post)
            @break($loop->index == 4)
            <div class="col-3">
                <a href="{{ route('detail', $post->slug) }}">
                    <img
                        src="{{ Storage::disk('public')->url($post->image) }}"
                        class="img-thumbnail"
                        alt="{{ $post->title }}"
                    />
                    <div class="title">
                        <p>{{ $post->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-home-layout>
