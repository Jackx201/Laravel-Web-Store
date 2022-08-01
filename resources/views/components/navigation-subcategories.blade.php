@props(['category'])

<div class="grid grid-cols-3 p-4">
      <div>
          <p class="text-log font-bold text-center text-gray-500 mb-3">Subcateories </p>
          <ul>
              @foreach ($category->subcategories as $subcategory)
              <li>
                  <a href="" class="text-gray-500 font-semibold inline-block py-1 px-4 hover:text-orange-500">
                      {{$subcategory->name}}
                  </a>
              </li>
              @endforeach
          </ul>
      </div>

      <div class="col-span-2">
        <img class="h-64 w-full object-cover object-center" src="{{Storage::url($category->image)}}" alt="">
      </div>

</div>