<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class ExpertSystemController extends Controller
{   
    public function index() {
        return view('index');
    }
    
    public function start() {
        $question = Question::with('options')->find(1);
        return view('question', ['question' => $question]);
    }

    public function process(Request $request) {
        $validated = $request->validate(['option_id' => 'required|exists:options,id']);
        $selectedOption = Option::find($validated['option_id']);

        if ($selectedOption->next_question_id) {
            $nextQuestion = Question::with('options')->find($selectedOption->next_question_id);
            return view('question', ['question' => $nextQuestion]);
        }

        if ($selectedOption->diagnosis_id) {
            return redirect()->route('result', ['diagnosis' => $selectedOption->diagnosis_id]);
        }
        return redirect('/');
    }

    public function showResult(Diagnosis $diagnosis) {
        return view('result', ['diagnosis' => $diagnosis]);
    }
}