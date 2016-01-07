<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Training;
use Storage;
use App\Area;
use App\Subarea;
use App\Group;
use Auth;

class TrainingController extends Controller
{
    public function addTraining(Request $request) {
        $data = array(
            'name' => htmlentities($request->input('title')),
            'description' => htmlentities($request->input('description')),
            'image' => $request->input('imagine'),
            'areaType' => substr($request->input('arie'), 0, 1),
            'area' => htmlentities(substr($request->input('arie'), 1)),
            'locuri' => htmlentities($request->input('locuri')),
            'ziua' => htmlentities($request->input('ziua')),
            'ora' => htmlentities($request->input('ora'))
        );
        $data['intrebari'] = array();
        $idIntrebare = 1;
        $intrebare = htmlentities($request->input('intrebare'.$idIntrebare));
        while(isset($intrebare)) {
            array_push($data['intrebari'], $intrebare);
            $idIntrebare++;
            $intrebare = $request->input('intrebare'.$idIntrebare);
        }
        $rules = array(
            'name' => 'required',
            'description' => 'required',
            'image' => 'image',
            'area' => 'exists:areas,id',
            'subarea' => 'exists:subareas,id',
            'locuri' => 'numeric|required',
            'ziua' => 'required',
            'ora' => 'required'
        );
        if ($data['areaType']=='s') {
            $data['subarea'] = $data['area'];
            $data['area'] = Subarea::where('id', $data['subarea'])->area_id;
        }
        else {
            $data['subarea'] = "";
        }
        $validator = Validator::make($data, $rules);
        if (!$validator->fails()) {
            $training = new Training();
            $nameOfImage = $this->RandomString().'.jpg';
            Storage::put('images/'.$nameOfImage, $data['image']);
            $training->trainer_id = Auth::user()->id;
            $training->name = $data['name'];
            $training->description = $data['description'];
            $training->image = "images/".$nameOfImage;
            $training->area_id = $data['area'];
            $training->subarea_id = $data['subarea'];
            $training->locuri = $data['locuri'];
            $training->save();
            $group = new Group();
            $group->trainer_id = Auth::user()->id;
            $group->training_id = $training->id;
            $group->area_id = $training->area_id;
            $group->subarea_id = $training->subarea_id;
            $group->groupOrder = 1;
            $group->data = $data['ziua'];
            $group->ora = $data['ora'];
            $group->save();
            return redirect('/trainer');

        }
        else return $data['areaType'];
    }
    private function RandomString()
    {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
}
