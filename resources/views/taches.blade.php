<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Taches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Menu de taches
                </div>
                <!DOCTYPE html>
<html>
   <head>
      <style>
         .button {
            background-color: #09a3fc;
            box-shadow: 0 5px 0 #105cad;
            color: white;
           padding: 1em 2.5em;
           position: relative;
           text-decoration: none;
           display: inline-block;
        }
      </style>
   </head>
   <body>
      <a href="/taches" class="button">Ajouter une tache</a>
      <a href="/taches" class="button">Modifier une tache</a>
      <a href="/taches" class="button">Supprimer une tache</a>
   </body>
</html>
            </div>
        </div>
    </div>
</x-app-layout>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/taches">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('taches') }}">
            @csrf

            <!-- Nom_tache -->
            <div>
                <x-label for="nom_tache" :value="__('Nom de la tache')" />

                <x-input id="nom_tache" class="block mt-1 w-full" type="text" title="Saisissez le nom de la tache " name="nom" :value="old('nom_tache')" required autofocus />
            </div>

             <!-- Description -->
             <div>
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="text" title="Une bref description de la tache" name="description" :value="old('description')" required autofocus />
            </div>

            <!-- Date de début -->
            <div class="mt-4">
                <x-label for="date_debut" :value="__('Date de début')" />

                <x-input id="date_debut" class="block mt-1 w-full" type="date" title="Date de début de la tache" name="date_debut" :value="old('date_debut')" required />
            </div>

             <!-- Date de fin -->
            <div class="mt-4">
                <x-label for="date_fin" :value="__('Date de fin')" />

                <x-input id="date_fin" class="block mt-1 w-full" type="date" title="Date de fin de la tache" name="date_fin" :value="old('date_fin')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Ajouter') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
