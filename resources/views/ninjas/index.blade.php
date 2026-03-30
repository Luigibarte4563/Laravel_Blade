<x-layout>
    <h2>Curently Available Ninjas</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name']}}</p>
                <a href="/ninjas/{{ $ninja['id']}} ">View details</a>
            </li>
        @endforeach
    </ul>
</x-layout>