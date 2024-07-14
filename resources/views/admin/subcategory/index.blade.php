@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        @if (session('subcategory_delete'))
            <div class="alert alert-success">{{ session('subcategory_delete') }}</div>
        @endif
        @foreach ($categories as $category)
            <div class="m-auto col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $category->category_name }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Sub Category</th>
                                <th>Action</th>
                            </tr>
                            @forelse (App\Models\Subcategory::where('category_id',$category->id)->get() as $subcategory)
                                <tr>
                                    <td>{{ $subcategory->sub_category_name }}</td>
                                    <td>
                                        <a href="{{ route('subcategory.edit', $subcategory->id) }}"
                                            class="btn btn-info">Edit</a>

                                        <form action="{{ route('subcategory.destroy', $subcategory->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-danger">No Sub Category Found!</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
