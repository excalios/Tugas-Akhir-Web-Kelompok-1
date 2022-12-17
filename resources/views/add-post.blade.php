<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Add Post
                </h2>
                </div>
            </div>
        </div>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row mb-3">
                      <div class="col-6">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{ old('title')}}">
                      </div>
                      <div class="col">
                        <label for="Category" class="form-label">Category</label>
                        <select class="form-select" aria-label="Select category" name="category">
                          <option selected disabled>Select Category</option>
                          @foreach(['News', 'Feature', 'Guide', 'Release', 'Review'] as $category)
                            <option value="{{$category}}" @selected(old('category') == $category)>{{$category}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-1">
                        <label for="Rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="rating" id="rating" aria-describedby="rating" value="{{ old('rating')}}">
                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="Content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="5">{{ old('content') }}</textarea>
                  </div>
                  <div class="mb-3">
                      <label for="Image" class="form-label">Image</label>
                      <input class="form-control" type="file" id="image" name="image">
                    </div>
                  <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;">
                      <i class="fa-solid fa-plus"></i> Add Post
                  </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
