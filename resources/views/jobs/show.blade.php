<x-layout title="Jobs">
    <div class="space-y-4">
        <h2 class="font-bold text-lg">{{ $job->title }}</h2>
        <p>
            This job pays: {{ $job->formatted_salary }}
        </p>
        <x-button-link
            color="primary"
            href="{{ route('jobs.edit', $job->id) }}">
            Edit Job
        </x-button-link>
    </div>
</x-layout>
