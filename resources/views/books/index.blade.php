@extends("books.template")

@section("content")
<div class="my-5 px-4">
    <h2 class="mb-4">Gestion de Books</h2>

    @if(session()->has('info'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        {{session('info')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row g-3 align-items-center mb-4">
        <div class="col-md-8">
            <form action="{{ route('books.index') }}" method="GET" class="d-flex gap-2">
                <input type="text" name="search" class="form-control" placeholder="Search by book name..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary px-4">Search</button>
                @if(request('search'))
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Clear</a>
                @endif
            </form>
        </div>
        <div class="col-md-4 text-md-end">
            <a class="btn btn-success px-4" href="{{route("books.create")}}">Add a new Book</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3" width="120">Image</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3" width="120">Price</th>
                        <th class="px-4 py-3">Description</th>
                        <th class="px-4 py-3 text-center" width="200">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td class="px-4 py-3">
                            <img src="{{ $book->img }}" class="book-img" alt="Book Image">
                        </td>
                        <td class="px-4 py-3">{{$book->name}}</td>
                        <td class="px-4 py-3">${{$book->price}}</td>
                        <td class="px-4 py-3">{{$book->description}}</td>
                        <td class="px-4 py-3">
                            <div class="d-flex justify-content-center gap-2">
                                <a class="btn btn-primary btn-sm px-3 align-self-start" href="{{route("books.show",$book)}}">View</a>
                                <a class="btn btn-warning btn-sm px-3 align-self-start" href="{{route("books.edit",$book)}}">Edit</a>
                                <form action="{{route('books.destroy',$book)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-3">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
