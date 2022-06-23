<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Time;
use Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class TimeController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('time.listagem')) {
            $times = Time::all();
            Log::info(
                DB::getQueryLog()
            );
            
            return view('time.listagem', 
            ['times' => $times]);
        } else {
            return 'Página não encontradaaa.';
        }
        
    }

    public function detalhe($id) {
        $time = Time::findOrFail($id);
        return view("time.detalhe",
        ['time' => $time]);
    }

    public function delete($id) {
        $time = DB::select('delete from tbtime where id = ?',
             [$id]);
        
        Session::flash('message', 'Time excluído com sucesso!');

        return redirect('/time');
    }

    public function formulario () {
        return view('time.cadastro');
    }

    public function insert(Request $request) {
        $time = Time::create($request->all());
        $time->save();

        Session::flash('message', 'Time salvo com sucesso!');

        return redirect('/time');
    }

    public function update($id) {
        $time = Time::findOrFail($id);
        return view("time.update",
        ['time' => $time]);
    }

    public function altera($id, Request $request) {
        $aRequest = $request->all();
        $time = DB::select('update tbtime set nome = \''.$aRequest['nome'].'\', tecnico = \''.$aRequest['tecnico'].'\'  where id = ?',
        [$id]);
   
        Session::flash('message', 'Time alterado com sucesso!');

        return redirect('/time');
    }
}
