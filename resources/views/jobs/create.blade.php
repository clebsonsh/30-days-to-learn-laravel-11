<x-layout title="Create Job">
    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new Jobs</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We need just a handful of details</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Title -->
                    <x-input name="title" label="Title" placeholder="Shift Leader"/>

                    <!-- Salary -->
                    <x-input name="salary" label="Salary" placeholder="$50,000 per year"/>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button-link
                href="{{ route('jobs.index') }}">
                Cancel
            </x-button-link>
            <x-button
                type="submit"
                color="primary"
            >
                Save
            </x-button>
        </div>
    </form>
</x-layout>
