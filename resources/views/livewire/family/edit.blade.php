{{-- <form wire:submit.prevent="store">
    <input type="text" wire:model="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <input type="text" wire:model="gender">
    @error('gender') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save</button>
</form> --}}

<div class="col col-sm-6">
    <form wire:submit.prevent="update">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Name </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                placeholder="Name" />
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <div class="form-label">Gender</div>
                <select class="form-select @error('gender') is-invalid @enderror" wire:model="gender">
                    <option selected hidden>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="famale">Famale</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <div class="form-label">Parent</div>
                <select class="form-select @error('parentId') is-invalid @enderror" wire:model="parentId" value>
                    <option selected hidden>Select Parent</option>
                    @foreach ($families as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </select>
                @error('parentId')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>