<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Area;
use App\Subarea;
use App\Training;
use App\Question;
use App\Group;
use App\User;
use App\Applicant;
use Auth;

class ViewController extends Controller
{
    private $info = array(
        'title' => 'FII Practic 2016 - Code challenge',
        'description' => '',
        'keywords' => '',
        'namespace' => ''
    );
    public function home() {
        $this->info['namespace'] = "home";
        return view('pages.home', ['info'=>$this->info]);
    }
    public function accounts() {
        $this->info['namespace'] = "accounts";
        $this->info['title'] = "Login and Register | " . $this->info['title'];
        return view('pages.login', ['info'=>$this->info]);
    }
    public function trainings() {
        $this->info['namespace'] = "trainings";
        if (isset($area)) {
            $this->info['selectedArea'] = Area::where('link', $area)->first();
            if (!isset($this->info['selectedArea']))
                $this->info['selectedArea'] = Subarea::where('link', $area)->first();
        }
        else {
            $info['selectedArea'] = "";
        }
        $this->info['title'] = "Training-uri | " . $this->info['title'];
        $this->info['arii'] = Area::all();
        return view('pages.trainings', ['info'=>$this->info]);
    }
    public function training($training = null) {
        $this->info['namespace'] = "trainings";
        if (isset($training)) {
            $this->info['selectedTraining'] = Training::where('link', $training)->first();
        }else {
            $this->info['selectedTraining'] = "";
        }
        if(Auth::check()){
            $this->info['logged'] = 1;
            $user_trainings = Applicant::where('user_id', Auth::user()->id)->get(['training_id']);
            foreach($user_trainings as $user_training){
                if($this->info['selectedTraining']->id == $user_training->training_id){
                    $this->info['logged'] = 2;
                    break;
                }
            }
        }else{
            $this->info['logged'] = 0;
        }
        return view('pages.training', ['info'=>$this->info]);
    }
    public function apply($link){
        if(Auth::check()){
            $this->info['namespace'] = "arii";
            $training = Training::where('link', $link)->first();
            $this->info['training_name'] = $training->name;
            $this->info['title'] = "Formular de aplicare | " . $this->info['title'];
            $this->info['questions'] = Question::where('training_id', $training->id)->get();
            return view('pages.quiz', ['info' => $this->info]);
        }else{
            return redirect('/cont');
        }
    }    
    public function arii() {
        $this->info['namespace'] = "arii";
        $this->info['title'] = "Arii de studiu | " . $this->info['title'];
        $this->info['arii'] = Area::all();
        return view('pages.arii', ['info'=>$this->info]);
    }
    public function subarii($id_arie) {
        $this->info['namespace'] = "subarii";
        $this->info['title'] = "Subarii | " . $this->info['title'];
        $area = Area::where('link', $id_arie)->first();
        $this->info['arii'] = Subarea::where('area_id', $area->id)->get();
        if (count($this->info['arii'])==0) abort(404);
        return view('pages.arii', ['info'=>$this->info]);
    }
    public function contact() {
        $this->info['namespace'] = "contact";
        $this->info['title'] = "Contact | " . $this->info['title'];
        return view('pages.contact', ['info'=>$this->info]);
    }
    public function conferinta() {
        $this->info['namespace'] = "contact";
        $this->info['title'] = "Conferinta | " . $this->info['title'];
        return view('pages.conferinta', ['info'=>$this->info]);
    }
    public function hackathon() {
        $this->info['namespace'] = "contact";
        $this->info['title'] = "Fii Practic Hackathon | " . $this->info['title'];
        return view('pages.hackathon', ['info'=>$this->info]);
    }
    public function faq() {
        $this->info['namespace'] = "contact";
        $this->info['title'] = "Fii Practic Hackathon | " . $this->info['title'];
        return view('pages.faq', ['info'=>$this->info]);
    }
    public function panou() {
        $this->info['namespace'] = "panou";
        $this->info['title'] = "Panou de administrare | " . $this->info['title'];
        return view('pages.userpanel', ['info'=>$this->info]);
    }
    public function trainerIndex() {
        $this->info['namespace'] = "trainerIndex";
        $groups = Group::where('trainer_id', Auth::user()->id)->get(['training_id', 'count']);
        foreach($groups as $group){
            $this->info['group_count'] = $group->count;
            $this->info['trainings'] = Training::where('id', $group->training_id)->get();
        }
        //$this->info['trainings'] = Training::where('area_id', $area_id)->where('subarea_id', $subarea_id)->get();
        $this->info['title'] = "Trainer Panel | " . $this->info['title'];
        return view('trainerPages.home', ['info'=>$this->info]);
    }
    public function trainerAdd() {
        $this->info['namespace'] = "trainerIndex";
        $this->info['arii'] = Area::all();
        $this->info['title'] = "Adauga Training | " . $this->info['title'];
        return view('trainerPages.add', ['info'=>$this->info]);
    }
    public function trainerSelect($id) {
        //$id is id of training.
        $this->info['training'] = Training::find($id);
        if ($this->info['training']->trainer_id == Auth::user()->id) {
            $this->info['namespace'] = "trainerIndex";
            $this->info['title'] = "Selecteaza Participanti | " . $this->info['title'];
            return view('trainerPages.select', ['info'=>$this->info]);
        }
        else {
            return redirect('/trainer');
        }
    }
}
