<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $this->info['title'] = "Training-uri | " . $this->info['title'];
        return view('pages.trainings', ['info'=>$this->info]);
    }
    public function arii() {
        $this->info['namespace'] = "arii";
        $this->info['title'] = "Arii de studiu | " . $this->info['title'];
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
        $this->info['title'] = "Trainer Panel | " . $this->info['title'];
        return view('trainerPages.home', ['info'=>$this->info]);
    }
    public function trainerAdd() {
        $this->info['namespace'] = "trainerIndex";
        $this->info['title'] = "Adauga Training | " . $this->info['title'];
        return view('trainerPages.add', ['info'=>$this->info]);
    }
    public function trainerSelect($id) {
        //$id is id of training.
        $this->info['namespace'] = "trainerIndex";
        $this->info['title'] = "Selecteaza Participanti | " . $this->info['title'];
        return view('trainerPages.select', ['info'=>$this->info]);
    }
}
