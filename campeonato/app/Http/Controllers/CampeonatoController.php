<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Campeonato;
use Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class CampeonatoController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('campeonato.listagem')) {
            $campeonatos = Campeonato::all();
            Log::info(
                DB::getQueryLog()
            );
            
            return view('campeonato.listagem', 
            ['campeonatos' => $campeonatos]);
        } else {
            return 'Página não encontradaaa.';
        }
        
    }

    public function detalhe($id) {
        $campeonato = Campeonato::findOrFail($id);
        return view("campeonato.detalhe",
        ['campeonato' => $campeonato]);
    }

    public function delete($id) {
        $campeonato = DB::select('delete from tbcampeonato where id = ?',
             [$id]);
        
        Session::flash('message', 'Campeonato excluído com sucesso!');

        return redirect('/campeonato');
    }

    public function formulario () {
        return view('campeonato.cadastro');
    }

    public function insert(Request $request) {
        $campeonato = Campeonato::create($request->all());
        $campeonato->save();

        Session::flash('message', 'Campeonato salvo com sucesso!');

        return redirect('/campeonato');
    }

    public function update($id) {
        $campeonato = Campeonato::findOrFail($id);
        return view("campeonato.update",
        ['campeonato' => $campeonato]);
    }

    public function altera($id, Request $request) {
        $aRequest = $request->all();
        $campeonato = DB::select('update tbcampeonato set nome = \''.$aRequest['nome'].'\' where id = ?',
        [$id]);
   
        Session::flash('message', 'Campeonato alterado com sucesso!');

        return redirect('/campeonato');
    }
}
