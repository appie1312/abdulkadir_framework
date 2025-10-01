@props (['active' => false])

<a  aria-current="page" class="{{ $active? 'bg-gray-950/50 text-white rounded-md px-3 py-2 text-sm font-medium': 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium'}}"
{{$attributes}}
>{{$slot}}</a>

