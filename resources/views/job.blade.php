<x-layout>
    <x-slot:pageHeading>
        Job
    </x-slot:pageHeading>
    <h1 class="font-bold text-lg">{{$job["title"]}}</h1>
    <p>This job pays {{$job["salary"]}} per year.</p>
</x-layout>