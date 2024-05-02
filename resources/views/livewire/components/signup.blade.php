<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create New Account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
      <form class="space-y-4" wire:submit="signup">
        <div class="">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input wire:model="signup_form.name" id="name" name="student_name" type="text"  class="bg-gray-50 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <p class="text-red-600 mt-1">@error('signup_form.name') {{ $message }} @enderror</p>
          </div>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input wire:model="signup_form.email" id="email" name="email" type="text" autocomplete="email"  class="bg-gray-50 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <p class="text-red-600 mt-1">@error('signup_form.email') {{ $message }} @enderror</p>
          </div>

        </div>

        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input wire:model="signup_form.password" id="password" name="password" type="text" class="bg-gray-50 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <p class="text-red-600 mt-1">@error('signup_form.password') {{ $message }} @enderror</p>
            </div>
        </div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register Now</button>
      </form>
    </div>
  </div>
