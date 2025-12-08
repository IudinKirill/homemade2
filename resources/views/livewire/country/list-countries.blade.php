<div>
    <h2>List Countries</h2>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>top</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr wire:key="{{ $country->id }}">
                    <td>{{ $country->id}}</td>
                    <td>{{ $country->name}}</td>
                    <td>
                        <button wire:click="decrement({{ $country->id }})" class="cursor-pointer">-</button>
                        <span>{{ $country->top}}</span>
                        <button wire:click="increment({{ $country->id }})" class="cursor-pointer">+</button>
                    </td>
                    <td>
                        <button wire:click="editCountry({{ $country->id }})" class="bg-green-500 text-white hover:bg-red-500 cursor-pointer">
                            Edit
                        </button>
                    </td>
                    <td>
                        <button wire:click="deleteCountry({{ $country->id }})" class="bg-red-500 text-white hover:bg-green-500 cursor-pointer">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
