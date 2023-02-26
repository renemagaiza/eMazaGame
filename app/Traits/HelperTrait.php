<?php

namespace App\Traits;

use App\Models\Subject;
use App\Models\Question;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request){

        $orderDirection = $request-> query('direction', "desc");
        $orderColumn = $request-> query('column', "id");
        $totalPerPage = $request-> query('per_page', "3");

        $subjects = Subject::orderBy($orderColumn, $orderDirection)->paginate( $totalPerPage);

        return response() ->json(['sucess' => $subjects], status: 200);

    }
    public function processQuestions(Request $request){

        $orderDirection = $request-> query('direction', "desc");
        $orderColumn = $request-> query('column', "id");
        $totalPerPage = $request-> query('per_page', "3");

        $questions = Question::orderBy($orderColumn, $orderDirection)->paginate( $totalPerPage);

        return response() ->json(['sucess' => $questions], status: 200);

    }
}
