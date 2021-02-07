@extends('admin.app')
@section('content')

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        Dashboard
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">


          <!-- Total Rooms -->
          <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-3">

              <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                  <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Total Rooms</span>
                    <span class="text-lg font-semibold">100,221</span>
                  </div>
                  <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
              </div>
              {{-- Total Reservations --}}
              <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                  <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Total Reservations</span>
                    <span class="text-lg font-semibold">100,221</span>
                  </div>
                  <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
              </div>

              {{-- Total Users --}}

              <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                  <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Total Users</span>
                    <span class="text-lg font-semibold">100,221</span>
                  </div>
                  <div class="p-10 bg-gray-700 rounded-md">
                     <img src="https://www.flaticon.com/svg/vstatic/svg/615/615075.svg?token=exp=1612634836~hmac=f829f6fb3adafab33095932eb035a703" alt="">
                  </div>
                </div>
              </div>
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
@endsection
