@props(['active' => false])

<a {{ $attributes->merge([
    'class' => "flex items-center space-x-2 px-3 py-2 text-sm font-medium rounded-md transition-all duration-300 " .
               ($active ? 'text-blue-400' : 'text-white hover:text-blue-300')
]) }}
   aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
