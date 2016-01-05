@extends('trainer')

@section('content')
    <div class="thirteen wide column">
        <h2 class="ui header">Adauga Training</h2>
        <div class="ui segment">
            <div class="ui container">
                <div class="ui form">
                    <div class="field">
                        <label>Nume training</label>
                        <input placeholder="Nume training" type="text">
                    </div>
                    <div class="field">
                        <label>Descriere</label>
                        <textarea></textarea>
                    </div>
                    <div class="field">
                        <label>Arie</label>
                        <select class="ui search dropdown selecteazaArie">
                            <option value="">Arii de studiu...</option>
                            @foreach($info['arii'] as $area)
                                <option data-type="arie" value="{{$area['id']}}">{{$area['title']}}</option>
                                @if(count($area->subareas))
                                    @foreach($area->subareas as $subarea)
                                        <option data-type="arie" value="{{$subarea['id']}}">{{$subarea['title']}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Numar locuri</label>
                        <input placeholder="Numar locuri" type="text">
                    </div>
                    <div class="field">
                        <label>Imagine</label>
                        <input placeholder="Imagine de coperta" type="file">
                    </div>
                    <div class="intrebariFields">
                        <div class="field">
                            <label>Intrebare 1</label>
                            <input placeholder="Intrebare 1" type="text">
                        </div>
                        <div class="clearfloat"></div>
                    </div>
                    <button class="ui leftFloat labeled icon green button adaugaIntrebare">
                        <i class="icon add"></i>
                        Adauga intrebare
                    </button>
                    <button class="ui rightFloat labeled icon blue button">
                        <i class="icon send"></i>
                        Adauga Training
                    </button>
                    <div class="clearfloat"></div>
                </div>
            </div>
        </div>
    </div>
@endsection