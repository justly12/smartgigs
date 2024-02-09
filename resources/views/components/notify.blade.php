@if(session()->has('message'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 transform bg-[#007ECC] left-1/2 -translate-x-1/2  text-white px-48 py-3 rounded-2xl mt-5">
 {{ session('message') }}
</div>

@endif