<x-layout title="Edit Job: {{ $job->title }}">
    <form method="POST" action="{{ route('jobs.update', $job) }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <!-- Title -->
                    <x-input
                        name="title"
                        label="Title"
                        placeholder="Shift Leader"
                        value="{{ $job->title }}"
                    />

                    <!-- Salary -->
                    <x-input
                        name="salary"
                        label="Salary"
                        value="{{ $job->salary }}"
                        placeholder="$50,000 per year"
                    />
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <x-button
                form="delete-form"
                color="danger"
            >
                Delete
            </x-button>

            <div class="flex items-center gap-x-6">
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
        </div>
    </form>

    <form method="POST" action="{{ route('jobs.destroy', $job) }}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
