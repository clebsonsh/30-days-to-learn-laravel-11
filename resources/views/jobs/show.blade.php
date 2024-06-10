<x-layout title="Jobs">
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays: {{ $job->salay_formatted }}
    </p>
</x-layout>
