<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Question;
use App\Response;
use App\Training;
use App\Applicant;

class ApplyController extends Controller
{
    public function registerUserResponses(Request $request){
        $responses = array();
        $error = 0;
        foreach ($request->data as $data) {
            $question_id = explode("-", $data[0]);
            $question_id = $question_id[1];
            $required = Question::where('id', $question_id)->first()->required;
            if($required == 1){
                if($data[1] == ""){
                    $error = 1;
                    break;
                }
            }
            unset($data);
        }
        if($error == 0){
            $first_question_id = 0;
            foreach ($request->data as $data) {
                $question_id = explode("-", $data[0]);
                $question_id = $question_id[1];
                if($first_question_id == 0){
                    $first_question_id = $question_id;
                }
                $response = new Response();
                $response->question_id = $question_id;
                $response->response = $data[1];
                $response->applicant_id = Auth::user()->id;
                $response->save();
                unset($data);
            }
            $training_id = Question::where('id', $first_question_id)->first()->training_id;
            $applicant = new Applicant();
            $applicant->user_id = Auth::user()->id;
            $applicant->training_id = $training_id;
            $applicant->trainer_id = 0;
            $applicant->save();
            echo "Datele dvs. au fost preluate!";
        }else{
            echo "Intrebarile marcate cu * sunt obligatorii!";
        }
    }
}
