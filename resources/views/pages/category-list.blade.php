<x-home-layout>
  <header class="container my-5">
      <div class="row">
          <div class="col">
              <h2>{{ $category }}</h2>
          </div>
      </div>
      <div class="row mb-4">
          <div class="col">
              <hr class="hr-danger" />
          </div>
      </div>
      @empty($posts[0])
          <h1 class="mb-5">There is no {{ $category }} yet</h1>
      @endempty
      @isset($posts[0])
      <div class="row">
          <div class="col">
              <a href="{{ route('detail', $posts[0]->slug) }}">
                  <div class="card text-bg-dark">
                      <img
                          src="{{ Storage::disk('public')->url($posts[0]->image) }}"
                          class="card-img"
                          alt="{{ $posts[0]->title }}"/>
                      <div class="card-img-overlay mt-auto text-center">
                          <h5
                              class="card-title px-1 rounded-1 header-category mx-auto"
                              >{{ $posts[0]->category }}</h5>
                          <p class="card-text header-subtitle">{{ $posts[0]->title }}
                              @if($posts[0]->category->value == 'Review')
                                  ({{ $posts[0]->rating }} <i class="fa-solid fa-star text-warning"></i>)
                              @endif
                          </p>
                          <p class="card-text header-publisher">
                              <small>By {{ $posts[0]->user->name }}</small>
                          </p>
                      </div>
                  </div>
              </a>
          </div>
      </div>
      @endisset
  </header>

  <section id="category-list" class="container">
        @foreach($posts as $post)
            @continue($loop->first)
          <div class="category-item row mt-3 py-4 border-top">
              <div class="col-4 d-flex align-items-center">
                  <img
                      src="{{ Storage::disk('public')->url($post->image) }}"
                      alt="{{ $post->title }}"
                      class="img-fluid"
                  />
              </div>
              <div class="col-8 item-info">
                  <p class="text-danger">{{ $post->category }}</p>
                  <h3>{{ $post->title }}
                              @if($posts[0]->category->value == 'Review')
                                  ({{ $posts[0]->rating }} <i class="fa-solid fa-star text-warning"></i>)
                              @endif
                  </h3>
                  <p class="text-truncate">
                      {{ $post->content }}
                  </p>
                  <p>By {{ $post->user->name }}</p>
                  <p><i class="fa-regular fa-clock"></i> {{ $post->updated_at }}
              </div>
          </div>
        @endforeach
  </section>

  {{ $posts->links() }}
</x-home-layout>
