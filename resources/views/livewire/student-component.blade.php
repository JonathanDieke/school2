<div class="px-8 bg-red-100">

    <div class="flex align-content-center space-x-8 py-8 px-7" id="header">
        <h1>{{ __("Liste des étudiants") }}</h1>
        <div class="px-4 py-1">
            <input class="rounded-lg" type="text" wire:model.debounce.350ms="q" placeholder="Recherche...">
        </div>
    </div>
    <div class="content flex justify-between">
        {{-- Liste --}}
        <div>
            <table class="py-5">
                <thead>
                    <th>#</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénoms</th>
                    <th>Classe</th>
                    <th>E-mail</th>
                    <th>Date d'anniv.</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($students as $student )
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $student->register }}</td>
                            <td>{{ $student->fname }}</td>
                            <td>{{ $student->lname }}</td>
                            <td>{{ $student->classroom->libel }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->birthdate }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>
                                <button class=" shadow-lg rounded-lg text-center text-gray-700 py-1 px-2 bg-blue-500">Détails</button>
                                <button class=" shadow-lg rounded-lg text-center text-gray-700 py-1 px-2 bg-yellow-500">Editer</button>
                                <button class=" shadow-lg rounded-lg text-center text-gray-700 py-1 px-2 bg-red-500">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            {{ $students->links() }}
        </div>
        {{-- Formulaire --}}
        @livewire('student-create-form')
    </div>
</div>
