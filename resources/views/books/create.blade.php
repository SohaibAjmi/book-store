@extends('books.template')

@section("content")
<div class="my-5 px-4">
    <div class="row mb-4 align-items-center">
        <div class="col">
            <h2>Save a new Book</h2>
        </div>
        <div class="col-auto">
            <a class="btn btn-primary" href="{{route("books.index")}}">Return</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{route("books.store")}}" method="POST" class="card shadow-sm">
                <div class="card-body">
                    @csrf
                    <div class="mb-3">
                        <label for="img" class="form-label">Image URL:</label>
                        <input type="text" id="img" name="img" class="form-control" value="{{old("img")}}"/>
                        @error('img')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{old("name")}}"/>
                        @error('name')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{old("price")}}"/>
                        @error('price')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" rows="3">{{old("description")}}</textarea>
                        @error('description')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <button class="btn btn-primary w-100" type="submit">Add Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

