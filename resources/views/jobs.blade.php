<x-layout title="Jobs Listing">
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="{{ route('job', $job['id']) }}" class="hover:text-blue-800 hover:underline">
                    <strong>{{ $job['title'] }} pays:</strong> {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
