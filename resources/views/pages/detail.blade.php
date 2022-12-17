<x-home-layout>
    <div class="container my-5" id="details">
        <div class="row" id="category">
            <p>{{ $post->category->value }}</p>
        </div>

        <div class="row" id="title">
            <h2>
                {{ $post->title }}
            </h2>
        </div>

        <div class="row my-3">
            <div class="col-1" id="publisher">
                <p>by {{ $post->user->name }}</p>
            </div>

            <div class="col" id="publish">
                <p><small>{{ $post->updated_at }}</small></p>
            </div>
        </div>

        <div class="row g-5">
            <img src="{{ Storage::disk('public')->url($post->image) }}" alt="" />
            <p id="desc">{{ $post->content }}</p>
        </div>
    </div>
</x-home-layout>
