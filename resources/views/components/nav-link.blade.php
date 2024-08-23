@props(['active' => false]);

<a {{ $attributes }}class= "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} py-2 px-3 text-sm font-medium text-white rounded-md" aria-current="{{ $active ? 'Home Page' : false }}">{{ $slot }}</a>