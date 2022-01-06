<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers\tache;
    
    use App\Http\Controllers\Controller;
    use App\Models\tache;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Rules;

    
    
    class tachecontroller extends Controller
    {
        /**
         * Display the registration view.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('taches');
        }
    
        /**
         * Handle an incoming registration request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         *
         * @throws \Illuminate\Validation\ValidationException
         */
        public function store(Request $request)
        {
            $request->validate([
                'nom_tache'=> ['required', 'string', 'max:255'],
                'description'=> ['required', 'string', 'max:255'],
                'date_debut'=> ['required', 'date'],
                'date_fin'=> ['required', 'date'],
                'FK_etat'=> ['required', 'text'],
            ]);
    
            $tache = tache::create([
                'nom_tache' => $request->nom_tache,
                'description' => $request->description,
                'date_debut' => $request->date_debut,
                'date_fin' => $request->date_fin,
                'FK_etat' => $request->FK_etat,
            ]);
    
            event(new Registered($tache));
    
            tache::taches($tache);
    
            return redirect(RouteServiceProvider::HOME);
        }
    }

