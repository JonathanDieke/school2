<div class="max-w-full">
    @if(session()->has("response"))
        <div class="my-6">
            <div class="bg-white shadow-md rounded-md  py-4 px-6 justify-items-center text-green-600">
                {{ session("response") }}
            </div>
        </div>
    @endif
    <form class="flex-col justify-around" wire:submit.prevent = "submitForm">
        <div class="">
            <label for="fname">Nom : </label>
            <input type="text" id="fname" name="fname" wire:model.lazy="fname">
        </div>
        @error("fname")
            <p class="red">{{ $message }}</p>
        @enderror
        <div class="py-1"></div>
        <div class="">
            <label for="lname">Prenoms : </label>
            <input type="text" id="lname" name="lname" wire:model.lazy="lname">
        </div>
        @error("lname")
            <p class="red">{{ $message }}</p>
        @enderror
        <div class="py-1"></div>
        <div class="">
            <label for="classroom">Classe : </label>
            <select type="text" id="classroom" name="classroom" wire:model.lazy="classroom_id">
                @foreach ($classrooms as $classroom )
                    <option value="{{ $classroom->id }}" @if($loop->first) selected @endif>{{ $classroom->libel }}</option>
                @endforeach
            </select>
        </div>
        @error("classroom_id")
            <p class="red">{{ $message }}</p>
        @enderror
        <div class="py-1"></div>
        <div class="">
            <label for="email">Email : </label>
            <input type="email" id="email" name="email" wire:model.lazy="email">
        </div>
        @error("email")
            <p class="red">{{ $message }}</p>
        @enderror
        <div class="py-1"></div>
        <div class="">
            <label for="birthdate">Date d'aniversaire : </label>
            <input type="date" id="birthdate" name="birthdate" wire:model.lazy="birthdate">
        </div>
        @error("birthdate")
            <p class="red">{{ $message }}</p>
        @enderror
        <div class="py-1"></div>
        <div class="">
            <label for="fname">Genre : </label>
            <select name="gender" id="gender" wire:model.lazy="gender">
                <option value="M" selected >Masculin</option>
                <option value="F">Féminin</option>
            </select>
        </div>
        @error("gender")
            <p class="red">{{ $message }}</p>
        @enderror

        <button class="py-3 shadow-md" type="submit">Enregistrer</button>
    </form>
</div>
