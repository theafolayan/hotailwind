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
      <!-- Replace with your content -->
{{-- <div class="mt-6 center sm:mt-0"> --}}
  {{-- <div class="md:grid md:grid-cols-3 md:gap-6"> --}}
    {{-- <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Hotel Information</h3>
        <p class="mt-1 text-sm text-gray-600">
          Kindly fill in the Information concerning the room in the form below
        </p>
      </div>
    </div> --}}
    <div class="mt-5 md:mt-0 md:col-span-2 lg:px-15">
      <form action="#" method="POST" class="lg:px-15">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-6">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Room Name</label>
                <input type="text" name="room_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Bed Size</label>
                <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option> King Size</option>
                  <option>Diplomat</option>
                  <option>Queen Size</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3">
                       <label for="country" class="block text-sm font-medium text-gray-700">Room Image</label>

                {{-- <span class="">Select a file</span> --}}
                <input type='file' class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                 </div>


              <div class="col-span-6">
                <label for="street_address" class="block text-sm font-medium text-gray-700">Room Description</label>
                <textarea cols="30" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> </textarea>
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="price" class="block text-sm font-medium text-gray-700">Price / Night ($)</label>
                <input type="number" name="price" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="size" class="block text-sm font-medium text-gray-700">Approx Size in Ft</label>
                <input type="number" name="size" id="size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="max_guests" class="block text-sm font-medium text-gray-700">Max No. of Allowed guests</label>
                <input type="number" name="max_guests" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>




              {{-- Checkboxes --}}
              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">A.C included?</label>
                  </div>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                 <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">Smoking Allowed?</label>
                  </div>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                 <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">Access to pool included?</label>

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
  {{-- </div> --}}
</div>



      <!-- /End replace -->
    </div>
  </main>
@endsection
