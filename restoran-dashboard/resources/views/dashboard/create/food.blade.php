{{-- resources/views/dashboard/create.food.blade.php --}}
<<<<<<< Updated upstream
@extends('layouts.app')

@section('content')
    @include('dashboard.form', ['kategori' => 'food'])
=======
@extends('layout')

@section('content')
<div class="container">
    <h3>Tambah Makanan</h3>
    @include('dashboard.form', [
        'action' => route('produk.food.store'),
        'method' => 'POST',
        'produk' => null
    ])
</div>
>>>>>>> Stashed changes
@endsection
