<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-primary" href="{{ route('post.create') }}"><i class="fa-solid fa-pencil"></i> Add Post</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                <img src="{{ Storage::disk('public')->url($post->image) }}" class="img-fluid img-thumbnail" alt="..." style="max-width: 24vw" />
                            </td>
                            <td>{{ $post->category }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}"><i class="fa-solid fa-pencil"></i></a>
                                <form action="{{ route('post.delete', $post->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $posts->links() }}
</x-app-layout>
