<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container">
        <div class="row">
          <div class="col-md-8">
          <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                      @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->category_name}} </td>
                        <td>{{$category->user_id}} </td>
                        <td>{{$category->created_at}} </td>
                        <td>
                            <a href="{{ route('editCategory', $category->id) }}" class="btn btn-info">Update</a>
                            <a href="{{url('delete_category', $category->id)}}" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger">Delete</a></td>
                        </td>
                    </tr>


                     @endforeach
                </tbody>
            </table>
          </div>
          </div>
             <!-- Add Categories Form -->
             <div class="col-md-4">
                <div class="card p-3">
                    <form method="POST" action="{{ route('AllCat') }}">
                        @csrf
                        <div class="mb-3">
                            <h3 class="text-center">Add a Category</h3>
                            <label for="cat_name">Category Name</label>
                            <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                        </div>
                        <div class="mb-3">
                            <label for="user_id">User ID</label>
                            <input type="number" class="form-control" name="user_id" placeholder="Enter User ID" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
    </div>
</x-app-layout>
