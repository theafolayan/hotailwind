<div class=" px-24 flex items-end flex-row">


    @if ($message = Session::get('success'))

<div class="py-3 px-2 my-2 bg-green-300 text-green-800 rounded border border-green-600"> {{$message}}</div>

@endif


@if ($message = Session::get('error'))
<div class="py-3 px-2 my-2 bg-red-300 text-red-800 rounded border border-red-600">{{$message}}</div>
@endif


@if ($message = Session::get('warning'))
  <div class="py-3 px-2 my-2 bg-yellow-300 text-yellow-800 rounded border border-yellow-600">{{$message}}</div>
@endif


@if ($message = Session::get('info'))
 <div class="py-3 px-2 my-2 bg-blue-300 text-blue-800 rounded border border-blue-600">{{$message}}</div>
@endif

</div>
