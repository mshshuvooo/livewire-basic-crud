<nav class="bg-gray-800">
    <div class="mx-auto w-[1400px] ">
      <div class="relative flex h-16 items-center">
        <div class="flex flex-1 items-center">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              @auth
              <a href="/students" wire:navigate class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Students</a>
              @endauth
              @guest
              <a href="/signup" wire:navigate class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
              <a href="/login" wire:navigate class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
              @endguest
              @auth
              <button wire:click="logout" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Logout</button>
              @endauth
            </div>
          </div>
          @if (Auth::user())
          <div class="absolute right-0" >
            <p class="text-white">{{ Auth::user()->name }}</p>
          </div>
          @endif
        </div>

      </div>
    </div>
  </nav>
