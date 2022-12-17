<x-home-layout>
    <header class="container my-5">
      <div class="row">
        @isset($posts[0])
        <div class="col-8">
          <a href="{{ route('detail', $posts[0]->slug) }}">
            <div class="card text-bg-dark">
              <img src="{{ Storage::disk('public')->url($posts[0]->image) }}" class="card-img" alt="..." />
              <div class="card-img-overlay mt-auto">
                <h5 class="card-title px-1 rounded-1 header-category">{{ $posts[0]->category->value }}
                              @if($posts[0]->category->value == 'Review')
                                  ({{ $posts[0]->rating }} <i class="fa-solid fa-star text-warning"></i>)
                              @endif
                </h5>
                <p class="card-text header-subtitle">{{ $posts[0]->title }}</p>
                <p class="card-text header-publisher">
                  <small>By {{ $posts[0]->user->name }}</small>
                </p>
              </div>
            </div>
          </a>
        </div>
        @endisset

        <div class="col-4 d-flex flex-column justify-content-between">
          @foreach ($posts as $post)
            @continue($loop->first)
            <div class="row">
              <div class="col">
                <a href="{{ route('detail', $post->slug) }}">
                  <div class="card text-bg-dark">
                    <img
                    src="{{ Storage::disk('public')->url($post->image) }}"
                    class="card-img"
                    alt="{{ $post->title }}"
                    />
                    <div class="card-img-overlay mt-auto">
                      <h5 class="card-title px-1 rounded-1 s-header-category">{{ $post->category->value }}</h5>
                      <p class="card-text s-header-subtitle">
                          {{ $post->title }}
                          @if($posts[0]->category->value == "Review")
                              ({{ $posts[0]->rating }} <i class="fa-solid fa-star text-warning"></i>)
                          @endif
                      </p>
                      <p class="card-text s-header-publisher">
                        <small>By {{ $post->user->name }}</small>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </header>

    <div class="container my-5" id="upRelease">
      <div class="row">
        <div class="col">
          <h5>Upcoming Releases</h5>
        </div>
        <div class="col-1" id="hover">
          <small>
              <a href="{{ route('releases')}}">Browse All</a>              
          </small>
        </div>
      </div>
      <div class="row">
        <hr class="hr-danger" />
      </div>

      <div class="row my-3">
        @foreach($releases as $release)
          @break($loop->index == 3)
        <div class="col-4">
          <a href="{{ route('detail', $release->slug) }}">
            <div class="card">
              <img
              src="{{ Storage::disk('public')->url($release->image) }}"
              class="card-img"
              alt="{{ $release->title }}"
              />
              <div class="card-img-overlay mt-auto">
                <h5 class="card-title px-1 rounded-1">
                  {{ $release->category->value }}
                </h5>
              </div>
            </div>
            <h6 class="card-text my-2 uprelease-title">
              {{ $release->title }}
            </h6>
            <p class="card-text uprelease-time"><small>{{ $release->updated_at }}</small></p>
          </a>
        </div>
        @endforeach
        </div>
      </div>
    </div>

    <div class="container" id="theLatest-newRelease">
      <div class="row">
        <div class="col-9">
          <h5>
            The Latest
            <hr class="hr-danger container-fluid" />
          </h5>

          @foreach($news as $news_item)
          <div class="row my-3">
            <div class="col">
              <div class="card" style="max-width: 25em;">
                <img
                  src="{{ Storage::disk('public')->url($news_item->image) }}"
                  class="card-img"
                  alt="{{ $news_item->title }}"
                />
              </div>
            </div>
            <div class="col-7 my-3">
              <p class="card-title latest-category">
                {{ $news_item->category->value }}
              </p>
              <a href="{{ route('detail', $news_item->slug) }}">
                <h5 class="card-text my-3 latest-title">
                  {{ $news_item->title }}
                </h5>
              </a>
              <p class="card-text my-4 latest-subtitle text-truncate">
                {{ $news_item->content }}
              </p>
              <p class="card-text latest-publisher my-0"><small>By {{ $news_item->user->name }}</small></p>
              <p class="card-text latest-publish"><small>{{ $news_item->updated_at }}</small></p>
            </div>
            <hr class="hr-primary container-fluid"/>
          </div>
          @endforeach

          <div class="row my-5 position-relative top-0 start-50 translate-middle" id="more-news">
            <p>
              <a href="{{ route('news') }}">More News</a> 
            </p>
          </div>

        </div>

        <div class="col-3">
          <h5>
            New Release
          </h5>
          <hr class="hr-danger container-fluid" />

          @foreach($releases as $release)
          <div class="row my-3">
            <div class="card" style="max-width: 20em;">
              <img
                src="{{ Storage::disk('public')->url($release->image) }}"
                class="card-img"
                alt="{{ $release->title }}"
              />
              <div class="card-img-overlay mt-auto ">
                <h5 class="card-title px-1 rounded-1 newrelease-category">
                  {{ $release->category->value }}
                </h5>
              </div>
            </div>
            <a href="{{ route('detail', $release->slug) }}">
              <h5 class="card-text my-2 newrelease-title">
                {{ $release->title }}
              </h5>
            </a>
            <p class="card-text newrelease-publish"><small>{{ $release->updated_at }}</small></p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <div class="container my-0" id="features">
      <div class="row">
        <div class="col">
          <h5>Features</h5>
        </div>
      </div>
      <div class="row">
        <hr class="hr-danger" />
      </div>

      <div class="row my-3">
        @foreach($features as $feature)
        <div class="col-4">
          <a href="{{ route('detail', $feature->slug) }}">
            <div class="card">
              <img
              src="{{ Storage::disk('public')->url($feature->image) }}"
              class="card-img"
              alt="{{ $feature->title }}"
              />
            </div>
            <h6 class="card-text my-2 features-title">
              {{ $feature->title }}
            </h6>
            <p class="card-text features-publisher"><small>By {{ $feature->user->name }}</small></p>
          </a>
        </div>
        @endforeach
      </div>

      <div class="row my-5 position-relative top-0 start-50 translate-middle" id="more-features">
        <p>
          <a href="{{ route('features') }}">More Features</a> 
        </p>
      </div>

    </div>

    <div class="container my-0" id="guides">
      <div class="row">
        <div class="col">
          <h5>Guides</h5>
        </div>
      </div>
      <div class="row">
        <hr class="hr-danger" />
      </div>

      <div class="row my-3">
        @foreach($guides as $guide)
        <div class="col-4">
          <a href="{{ route('detail', $guide->slug) }}">
              <div class="card">
                <img
                  src="{{ Storage::disk('public')->url($guide->image) }}"
                class="card-img"
                alt="{{ $guide->title }}"
                />
              </div>
            <h6 class="card-text my-2 guides-title">
              {{ $guide->title }}
            </h6>
            <p class="card-text guides-publisher"><small>By {{ $guide->user->name }}</small></p>
          </a>
        </div>
        @endforeach
      </div>

      <div class="row my-5 position-relative top-0 start-50 translate-middle" id="more-guides">
        <p>
          <a href="{{ route('guides') }}">More Guides</a> 
        </p>
      </div>

    </div>

    <div class="container" id="game-release">
      <div class="row">
        <h5>
          Game Release
        </h5>
        <hr class="hr-danger container-fluid" />
      </div>

      <a href="{{ route('releases') }}">
        <div class="img my-3">
          <img src="{{ asset('assets/images/game releases.jpg') }}" class="img-fluid" alt="...">
        </div>
      </a>

    </div>

    <div class="container my-5" id="reviews">
      <div class="row">
        <h5>
          Recent Reviews
        </h5>
        <hr class="hr-danger container-fluid"/>

        @foreach($reviews as $review)
        <div class="col-4 my-3">
          <div class="card text-bg-dark">
            <img src="{{ Storage::disk('public')->url($review->image) }}" class="card-img" alt="{{ $review->title }}">
            <div class="card-img-overlay">
              <div class="star">{{ $review->rating }}</div>
            </div>
          </div>
          <a href="{{ route('detail', $guide->slug) }}">
            <h5 class="card-text my-2 newrelease-title">
              {{ $review->title }}
            </h5>
          </a>
        </div>
        @endforeach

      </div>

      <div class="row my-5 position-relative top-0 start-50 translate-middle" id="more-reviews">
        <p>
          <a href="{{ route('reviews') }}">More Reviews</a> 
        </p>
      </div>

    </div>
</x-home-layout>
