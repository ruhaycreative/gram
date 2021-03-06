@props(['id', 'name', 'placeholder' => '', 'disabled' => false, 'readonly' => false, 'lefticon' => false])

@php
    $padding = ($lefticon) ? 'px-10' : 'pl-3 pr-10';
    $classes = $padding . ' py-2 placeholder-gray-400 text-gray-600 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm';
@endphp

<div x-data="{ show: true }" class="relative w-full {{ ($lefticon) ? '-ml-10' : '' }}">
    <input name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" :type="show ? 'password' : 'text'" {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} {!! $attributes->merge(['class' => $classes]) !!}>
    <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5 cursor-pointer">
        <svg @click="show = !show" :class="{'hidden': !show, 'block':show }" class="h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
        <svg @click="show = !show" :class="{'block': !show, 'hidden':show }" class="h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
    </div>
</div>
