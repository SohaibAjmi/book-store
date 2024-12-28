@extends("books.template")


@section("content")
<div class="my-5 px-4">
    <div class="row mb-4 align-items-center">
        <div class="col">
            <h2>Update Book</h2>
        </div>
        <div class="col-auto">
            <a href="{{route('books.index')}}" class="btn btn-primary">Return</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{route("books.update",$book)}}" method="POST" class="card shadow-sm">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="img" class="form-label">Image URL:</label>
                        <input type="text" id="img" name="img" class="form-control" value="{{$book->img}}"/>
                        @error('img')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$book->name}}"/>
                        @error('name')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{$book->price}}"/>
                        @error('price')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" rows="3">{{$book->description}}</textarea>
                        @error('description')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <button class="btn btn-primary w-100" type="submit">Update Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
