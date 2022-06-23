<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Atleta;
use Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class AtletaController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('atleta.listagem')) {
            $atletas = Atleta::all();
            Log::info(
                DB::getQueryLog()
            );
            
            return view('atleta.listagem', 
            ['atletas' => $atletas]);
        } else {
            return 'Página não encontradaaa.';
        }
        
    }

    public function detalhe($id) {
        $atleta = Atleta::findOrFail($id);
        return view("atleta.detalhe",
        ['atleta' => $atleta]);
    }

    public function delete($id) {
        $atleta = DB::select('delete from tbatleta where id = ?',
             [$id]);
        
        Session::flash('message', 'Atleta excluído com sucesso!');

        return redirect('/atleta');
    }

    public function formulario () {
        return view('atleta.cadastro');
    }

    public function insert(Request $request) {
        $atleta = Atleta::create($request->all());
        $atleta->save();

        Session::flash('message', 'Atleta salvo com sucesso!');

        return redirect('/atleta');
    }

    
    public function update($id) {
        $atleta = Atleta::findOrFail($id);
        return view("atleta.update",
        ['atleta' => $atleta]);
    }

    public function altera($id, Request $request) {
        $aRequest = $request->all();
        var_dump($aRequest);
        $campeonato = DB::select('update tbatleta set nome = \''.$aRequest['nome'].'\',
                                                          peso = \''.$aRequest['peso'].'\',
                                                          altura = \''.$aRequest['altura'].'\',
                                                          id_time = \''.$aRequest['id_time'].'\'
                                    where id = ?',
        [$id]);
   
        Session::flash('message', 'Atleta alterado com sucesso!');

        return redirect('/atleta');
    }
    
}
