@extends('layout.main')

@section('content')
<!-- biodata -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- row for biodata -->
  <div class="flex flex-wrap -mx-3">
    <h1>Biodata</h1>
    <div class="w-full px-4 py-4">
      <p><strong>Nama:</strong> John Doe</p>
      <p><strong>Email:</strong> john.doe@example.com</p>
      <p><strong>Alamat:</strong> Jalan Independen No. 123, Jakarta, Indonesia</p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 1990</p>
      <p><strong>Hobi:</strong> Membaca, Menulis, Bersepeda</p>
    </div>
  </div>
</div>

<footer class="pt-4">
  <div class="w-full px-6 mx-auto">
    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
      <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
          ©
          <script>
            document.write(new Date().getFullYear() + ",");
          </script>
          made with <i class="fa fa-heart"></i> by
          <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
          for a better web.
        </div>
      </div>
      <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
        <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
          <li class="nav-item">
            <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- end biodata -->
@endsection
