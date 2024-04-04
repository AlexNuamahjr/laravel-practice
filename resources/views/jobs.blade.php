<x-layout>
    <x-slot:pageHeading>
        Jobs Page
    </x-slot:pageHeading>
    @foreach ($jobs as $job)
        <ul>
            <li>
                <a href="/jobs/{{$job["id"]}}">
                    <strong>{{$job["title"]}}:</strong> pays {{$job["salary"]}}
                </a>
                
            </li>
        </ul>
    @endforeach
</x-layout>