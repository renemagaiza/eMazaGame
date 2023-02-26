<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use HelperTrait;

    public function index(Request $request){

        return $this ->processSubjects($request);

    }

    public function store(Request $request){
        return response() ->json(['error' => 'Do momento, nao e possivel adicionar disciplina'], status: 403);
    }

    public function show(Request $request, Question $question){
        return response() ->json(['error' => 'Do momento, nao e possivel monstrar detalhes de uma disciplina'], status: 503);
    }

    public function update(Request $request, Question $question){
        return response() ->json(['error' => 'Do momento, nao e possivel atualizar de uma disciplina'], status: 503);
    }

    public function destroy(Request $request, Question $question){
        return response() ->json(['error' => 'Do momento, nao e possivel remover disciplina'], status: 503);
    }
}
