<x-app-layout>
  {{-- Begins:Container --}}
  <div class="container" py-8>
    <div class="grid grid-cols-2 gap-6">
     
      {{-- Begins:FlexSlider --}}
      <div>
        {{-- Begins:flexslider --}}
        <div class="flexslider">
          {{-- Begins:Slides --}}
          <ul class="slides">
            @foreach ($product->images as $image)
              <li data-thumb="{{Storage::url($image->url)}}">
                <img src="{{Storage::url($image->url)}}"/>
              </li>
            @endforeach
          </ul>
          {{-- Ends:Slides --}}
        </div>
        {{-- Ends:flexslider --}}
      </div>
      {{-- Ends:FlexSlider --}}

      {{-- Begins:Product Details --}}
      <div>
        <h1 class="text-xl font-bold text-gray-700"> {{$product->name}}</h1>
        
        <div class="flex">
          <p class="text-gray-700">Brand: <a class="underline capitalize hover:text-orange-500" href=""> {{$product->brand->name}} </a> </p>
          <p class="text-gray-700 ml-6">5 <i class="fa fa-star text-sm text-yellow-400"></i></p>
        </div>

        <p class="text-2xl font-semibold text-gray-700">
          USD$ {{$product->price}}
        </p>

        {{-- Begins:Card --}}
        <div class="bg-white rounded-lg shadow-lg mb-6">
          <div class="p-4 flex items-center">
            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-500">
              <i class="fa fa-truck text-sm text-white"></i>
            </span>

            <div class="ml-4">
              <p class="text-lg format-semibold text-green-600">Shipments available to all México</p>
              <p>Receive it on {{now()->addDay(3)->format('l j F')}}</p>
            </div>
          </div>
        </div>
        {{-- Ends:Card --}}


      </div>
      {{-- Ends: Product Details--}}
    
    </div>

  {{-- Ends:Container --}}
  </div>

  @push('script')
  <script>
      $(document).ready(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          controlNav: "thumbnails"
        });
      });
  </script>
  @endpush
</x-app-layout>