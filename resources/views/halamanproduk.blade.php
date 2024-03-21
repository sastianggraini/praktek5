@extends('layout.main')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- row 1 -->
  <div class="flex flex-wrap -mx-3">
    <h1 class="w-full px-3 text-2xl font-bold mb-4">Produk Kami</h1>
    <!-- Product cards -->
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="p-6 border rounded-lg">
        <h2 class="text-xl font-semibold mb-2">Nama Produk 1</h2>
        <p class="mb-4">Deskripsi singkat produk 1.</p>
        <p class="font-bold">Harga: $XX.XX</p>
        <!-- Add more product details as needed -->
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="p-6 border rounded-lg">
        <h2 class="text-xl font-semibold mb-2">Nama Produk 2</h2>
        <p class="mb-4">Deskripsi singkat produk 2.</p>
        <p class="font-bold">Harga: $XX.XX</p>
        <!-- Add more product details as needed -->
      </div>
    </div>
    <!-- Add more product cards as needed -->
  </div>
</div>
<!-- end cards -->
@endsection
