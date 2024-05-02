<div class="mt-20 bg-gray-50 p-5 rounded-xl">
    <div class="px-4 sm:px-0 flex justify-between">
      <div>
        <h3 class="text-base font-semibold leading-7 text-gray-900">Student Information</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Details information of the student.</p>
      </div>
      <div class="flex" x-data="{ confirmModal: false }">
        <button wire:navigate href="/students/{{ $student->id }}/edit" class="block text-indigo-600 text-md mr-5">Edit Student</button>
        <button @click="confirmModal = true"  class="block text-indigo-600 text-md">Delete Student</button>
        <div x-show="confirmModal" x-transition.duration.500ms x-transition.delay.50ms class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg" >
                <p class="mb-3">Are you sure you want to delete the student?</p>
                <button class="bg-red-600 text-white px-4 py-1.5 rounded-full" @click="confirmModal = false">Cancel</button>
                <button class="bg-green-600 text-white px-4 py-1.5 rounded-full" wire:click="delete_student({{ $student->id }})">Confirm</button>
            </div>
        </div>
      </div>
    </div>

    <div class="mt-6 border-t border-gray-200">
      <dl class="divide-y divide-gray-200">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $student->student_name }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Email</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $student->student_email }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Class</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $student->student_class }}</dd>
        </div>
      </dl>
    </div>
  </div>
