@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Menu Management</h1>

<button class="btn btn-success mb-3">
Add New Dish
</button>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Action</th>
</tr>

<tr>
<td>1</td>
<td>Chicken Burger</td>
<td>$15</td>
<td>
<button class="btn btn-warning btn-sm">Edit</button>
<button class="btn btn-danger btn-sm">Delete</button>
</td>
</tr>

</table>

</div>
@foreach($items as $item)

<tr>
    <td>{{ $item->name }}</td>
    <td>${{ $item->price }}</td>

    <td>
        <a href="{{ route('menu-items.edit',$item->id) }}">
            Edit
        </a>
    </td>

    <td>
        <form method="POST"
              action="{{ route('menu-items.destroy',$item->id) }}">
            @csrf
            @method('DELETE')

            <button>
                Delete
            </button>
        </form>
    </td>
</tr>

@endforeach
@endsection
