@props(['active' => false])

<a
    class="{{ $active ? 'bg-green-50 text-red-500' : 'text-gray-300 bg-blue-700 md:text-gray-200 md:dark:text-blue-500' }} block py-2 px-3 md:p-0 rounded md:bg-transparent"
    {{ $attributes->merge(['aria-current' => $active ? 'page' : null]) }}>
    {{ $slot }}
</a>
