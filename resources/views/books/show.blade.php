@extends("books.template")

@section("content")
<div class="my-5 px-4">
    <div class="row mb-4 align-items-center">
        <div class="col">
            <h2>Book Details</h2>
        </div>
        <div class="col-auto">
            <a class="btn btn-primary" href="{{route('books.index')}}">Return</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ $book->img }}" class="img-fluid rounded" style="max-height: 200px;" alt="{{ $book->name }}" />
                    </div>
                    
                    <div class="mb-3">
                        <h5 class="text-muted mb-1">Name</h5>
                        <div class="fs-5">{{$book->name}}</div>
                    </div>

                    <div class="mb-3">
                        <h5 class="text-muted mb-1">Price</h5>
                        <div class="fs-5">${{$book->price}}</div>
                    </div>

                    <div class="mb-3">
                        <h5 class="text-muted mb-1">Description</h5>
                        <div class="fs-6">{{$book->description}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
