<x-layout> 
    <x-slot:heading> 
    jobs listings
</x-slot:heading> 
<ul>
@foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            {{ $job['title'] }}
            <br>
        </a><strong>${{ $job['salary'] }}</strong> per year
        <br><hr style="width: 50%;"><br>
    </li>
@endforeach
</ul>

</x-layout> 