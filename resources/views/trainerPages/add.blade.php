@extends('trainer')

@section('content')
    <div class="thirteen wide column">
        <h2 class="ui header">Adauga Training</h2>
        <div class="ui segment">
            <div class="ui container">
                <form class="ui form addTraining" enctype="multipart/form-data" action="/requests/trainer/addTraining" method="post">
                    <div class="field">
                        <label>Nume training</label>
                        <input placeholder="Nume training" type="text" name="title">
                    </div>
                    <div class="field">
                        <label>Descriere</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="field">
                        <label>Arie</label>
                        <select class="ui search dropdown selecteazaArie" name="arie">
                            <option value="">Arii de studiu...</option>
                            @foreach($info['arii'] as $area)
                                <option data-type="arie" value="a{{$area['id']}}">{{$area['title']}}</option>
                                @if(count($area->subareas))
                                    @foreach($area->subareas as $subarea)
                                        <option data-type="subarie" value="s{{$subarea['id']}}">{{$subarea['title']}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Numar locuri</label>
                        <input placeholder="Numar locuri" type="text" name="locuri">
                    </div>
                    <div class="ui fields">
                        <div class="eight wide field">
                            <label>Ziua</label>
                            <input placeholder="Trebuie sa respecte urmatorul format: dd/mm/yyyy" type="text" name="ziua">
                        </div>
                        <div class="eight wide field">
                            <label>Ora</label>
                            <input placeholder="Trebuie sa respecte urmatorul format: hh/mm" type="text" name="ora">
                        </div>
                    </div>
                    <div class="field">
                        <label>Imagine</label>
                        <input placeholder="Imagine de coperta" type="file" name="imagine">
                    </div>
                    <div class="intrebariFields">
                        <div class="field">
                            <label>Intrebare 1</label>
                            <input placeholder="Intrebare 1" type="text" name="intrebare1">
                        </div>
                        <div class="clearfloat"></div>
                    </div>
                    <input type="hidden" value="{!! csrf_token() !!}" name="_token" />
                    <button class="ui leftFloat labeled icon green button adaugaIntrebare">
                        <i class="icon add"></i>
                        Adauga intrebare
                    </button>
                    <button class="ui rightFloat submit labeled icon blue button">
                        <i class="icon send"></i>
                        Adauga Training
                    </button>
                    <div class="clearfloat"></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.selecteazaArie').dropdown();
        $('.addTraining').form({
            fields: {
                title     : 'empty',
                description : 'empty',
                locuri : ['empty', 'number'],
                ziua : ['empty', 'regExp[/[0-9]{2}/[0-9]{2}/[0-9]{4}$/]'],
                ora : ['empty', 'regExp[/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]'],
                intrebare1 : 'empty'
            }
        });
    </script>
@endsection