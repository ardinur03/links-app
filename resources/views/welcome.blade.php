<x-app-layout>
    @foreach ($users->links as $link)
        {{ $link->link_name }} <br>
    @endforeach
    {{ $users->links_count }}


    <livewire:counter />
</x-app-layout>
