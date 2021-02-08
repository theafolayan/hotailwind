@extends('admin.app')
@section('content')

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        Create a New Room
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 mx-6 sm:px-6 lg:px-15">
    <div class="mt-5 md:mt-0 md:col-span-2 lg:px-15">
      <form action="{{route('admin.store-room')}}" method="POST" class="lg:px-15" enctype="multipart/form-data">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">

          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-6">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Room Name</label>
                <input type="text" name="name" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                 {{-- @if ($errors()->name)
                    <p class="red-text-500"> {{$errors()->name}} </p>
                 @endif --}}
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Bed Size</label>
                <select id="country" name="bed_size" required autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>King</option>
                  <option>Diplomat</option>
                  <option>Queen</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3">
                       <label for="country" class="block text-sm font-medium text-gray-700">Room Image</label>
                <input type='file'  name = "image" required class="mt-1  block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                 </div>


              <div class="col-span-6">
                <label for="street_address" class="block text-sm font-medium text-gray-700">Room Description</label>
                <textarea cols="30" name="description" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> </textarea>
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="price" class="block text-sm font-medium text-gray-700">Price / Night ($)</label>
                <input type="number" required name="price_per_night" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="size" class="block text-sm font-medium text-gray-700">Approx Size in Ft</label>
                <input type="number" required name="size_in_ft" id="size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="max_guests" class="block text-sm font-medium text-gray-700">Max No. of Allowed guests</label>
                <input type="number" required name="max_guests" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>




              {{-- Checkboxes --}}
              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments" name="ac_included" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">A.C included?</label>
                  </div>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                 <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments" name="smoking_allowed" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">Smoking Allowed?</label>
                  </div>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                 <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments"  name="pool_access" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments"  class="font-medium text-gray-700">Access to pool included?</label>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Create Room
            </button>
          </div>
        </div>
      </form>
    </div>
</div>
    </div>
  </main>
@endsection
