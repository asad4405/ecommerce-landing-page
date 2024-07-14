@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
                <div class="card-body">
                    @if (session('category_delete'))
                        <div class="alert alert-success">{{ session('category_delete') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td><img src="{{ asset('uploads/category') }}/{{ $category->icon }}" alt=""
                                        width="50">
                                </td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info">Edit</a>

                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">No Category Found!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
