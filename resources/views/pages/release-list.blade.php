<x-home-layout>
    <div class="container my-5" id="detail-newRelease">
        <div class="row">
            <h5>{{ $title }}</h5>
            <hr class="hr-danger" />
        </div>

        <div class="row my-3">
            @foreach($posts as $post)
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
    {{ $posts->links() }}
</x-home-layout>
