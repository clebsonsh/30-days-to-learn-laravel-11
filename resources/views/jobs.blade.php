<x-layout title="Jobs Listing">
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="{{ route('job', $job) }}" class="px-4 py-6 rounded-lg border border-gray-200 block">
                <div class="text-blue-500 text-sm font-bold">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job->title }} pays:</strong> {{ $job->salay_formatted }}
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
