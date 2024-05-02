<div class="mt-4"
x-data="{ open: true }"
x-init="setTimeout(() => open = false, 2000)"

>
@if (session()->has('success'))
    <div class="rounded flex items-center gap-x-6 bg-green-600 px-6 py-2.5 sm:px-3.5 fixed top-5 transition-all ease-in-out delay-500 duration-500"
    :class="open ? 'left-5 opacity-100' : 'left-[-100px] opacity-0 invisible'" >
    <p class="text-sm text-left leading-6 text-white">
      {{ session('success') }}
    </p>
    <div class="flex flex-1 justify-end">
      <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]" @click="open = false ">
        <span class="sr-only">Dismiss</span>
        <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
        </svg>
      </button>
    </div>
  </div>
@endif
</div>
