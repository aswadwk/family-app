<div>
    <div>
        <a href="{{ route('family.create') }}" class="btn btn-md btn-success mb-3 text-end">Add Family</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Parent</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($families as $family)
                <tr>
                    <td>{{ $family->name }}</td>
                    <td>{{ $family->gender }}</td>
                    <td>{{ $family->parent?->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('family.edit', ['familyId' => $family->id]) }}"
                            class="btn btn-sm btn-primary">
                            EDIT
                        </a>
                        <button wire:click="destroy({{ $family->id }})" class="btn btn-sm btn-danger">DELETE</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>