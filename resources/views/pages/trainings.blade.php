@extends('app')
@section('content')
    <section id="top" class="nonIndex">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="ten wide column">
                    <img src="/images/indexBg.png" alt="Graphic" class="vectorGraphic" />
                    <div class="continutGraph"></div>
                </div>
                <div class="six wide column">
                    <h1 class="ui header">Trainings</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            @if (isset($info['selectedArea']))
            <p>{{$info['selectedArea']['description']}}</p>
            @endif
            <h2 class="ui header">Gaseste training-uri dupa preferinte</h2>
            <div class="ui form">
                <div class="fields">
                    <div class="eight wide field">
                        <div class="ui left icon input">
                            <i class="icon search"></i>
                            <input placeholder="Cauta..." type="text" name="cauta">
                        </div>
                    </div>
                    <div class="eight wide field">
                        <select class="ui search dropdown selectArie">
                            <option value="">Arii de studiu...</option>
                            @foreach($info['arii'] as $area)
                                <option data-type="arie" value="{{$area['id']}}">{{$area['title']}}</option>
                                @if(count($area->subareas))
                                    @foreach($area->subareas as $subarea)
                                        <option data-type="subarie" value="{{$subarea['id']}}">{{$subarea['title']}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="four wide field">
                        <div class="ui left icon input">
                            <i class="icon calendar"></i>
                            <input placeholder="Ziua" type="text" name="dataZi">
                        </div>
                    </div>
                    <div class="four wide field">
                        <div class="ui left icon input">
                            <i class="icon clock"></i>
                            <input placeholder="Ora minima" type="text" name="dataOra">
                        </div>
                    </div>
                    <div class="eight wide field">
                        <select class="ui search dropdown selectTrainer">
                            <option value="">Cauta dupa trainer / firma</option>
                            <option>Trainer 1</option>
                            <option>Trainer 7</option>
                            <option>Trainer 6</option>
                            <option>Trainer 5</option>
                            <option>Trainer 4</option>
                            <option>Trainer 3</option>
                            <option>Trainer 2</option>
                            <option>Firma</option>
                        </select>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="ui stackable cards">
                <h2 class="ui header horizontal divider">Luni 23/02/2016</h2>
                <div class="ui card">
                    <div class="content">
                        <img class="ui avatar image" src="/images/trainers/default.jpg"> Elliot
                    </div>
                    <div class="image">
                        <img src="/images/trainingsCover/jscover.png" alt="Cover" />
                    </div>
                    <div class="content">
                        <div class="header">Training de JavaScript</div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt sollicitudin vestibulum. Sed viverra, mi vitae convallis laoreet, odio sem hendrerit mi, nec rhoncus augue leo et ligula.
                        </div>
                    </div>
                    <div class="extra content">
                             <span class="right floated">
                             <i class="clock icon"></i>
                             18:00
                             </span>
                        <i class="users icon"></i>
                        10 participanti
                    </div>
                    <div class="ui teal bottom attached button participaTraining" data-idTraining="12">
                        <i class="send icon"></i>
                        Participa la training
                    </div>
                </div>
                <div class="ui card">
                    <div class="content">
                        <img class="ui avatar image" src="/images/trainers/default.jpg"> Elliot
                    </div>
                    <div class="image">
                        <img src="/images/trainingsCover/jscover.png" alt="Cover" />
                    </div>
                    <div class="content">
                        <div class="header">Training de JavaScript</div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt sollicitudin vestibulum. Sed viverra, mi vitae convallis laoreet, odio sem hendrerit mi, nec rhoncus augue leo et ligula.
                        </div>
                    </div>
                    <div class="extra content">
                             <span class="right floated">
                             <i class="clock icon"></i>
                             18:00
                             </span>
                        <i class="users icon"></i>
                        10 participanti
                    </div>
                    <div class="ui teal bottom attached button participaTraining" data-idTraining="12">
                        <i class="send icon"></i>
                        Participa la training
                    </div>
                </div>
                <div class="ui card">
                    <div class="content">
                        <img class="ui avatar image" src="/images/trainers/default.jpg"> Elliot
                    </div>
                    <div class="image">
                        <img src="/images/trainingsCover/jscover.png" alt="Cover" />
                    </div>
                    <div class="content">
                        <div class="header">Training de JavaScript</div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt sollicitudin vestibulum. Sed viverra, mi vitae convallis laoreet, odio sem hendrerit mi, nec rhoncus augue leo et ligula.
                        </div>
                    </div>
                    <div class="extra content">
                             <span class="right floated">
                             <i class="clock icon"></i>
                             18:00
                             </span>
                        <i class="users icon"></i>
                        10 participanti
                    </div>
                    <div class="ui teal bottom attached button participaTraining" data-idTraining="12">
                        <i class="send icon"></i>
                        Participa la training
                    </div>
                </div>
                <h2 class="ui header horizontal divider">Marti 24/02/2016</h2>
                <div class="ui card">
                    <div class="content">
                        <img class="ui avatar image" src="/images/trainers/default.jpg"> Elliot
                    </div>
                    <div class="image">
                        <img src="/images/trainingsCover/jscover.png" alt="Cover" />
                    </div>
                    <div class="content">
                        <div class="header">Training de JavaScript</div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt sollicitudin vestibulum. Sed viverra, mi vitae convallis laoreet, odio sem hendrerit mi, nec rhoncus augue leo et ligula.
                        </div>
                    </div>
                    <div class="extra content">
                             <span class="right floated">
                             <i class="clock icon"></i>
                             18:00
                             </span>
                        <i class="users icon"></i>
                        10 participanti
                    </div>
                    <div class="ui teal bottom attached button participaTraining" data-idTraining="12">
                        <i class="send icon"></i>
                        Participa la training
                    </div>
                </div>
                <div class="ui card">
                    <div class="content">
                        <img class="ui avatar image" src="/images/trainers/default.jpg"> Elliot
                    </div>
                    <div class="image">
                        <img src="/images/trainingsCover/jscover.png" alt="Cover" />
                    </div>
                    <div class="content">
                        <div class="header">Training de JavaScript</div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt sollicitudin vestibulum. Sed viverra, mi vitae convallis laoreet, odio sem hendrerit mi, nec rhoncus augue leo et ligula.
                        </div>
                    </div>
                    <div class="extra content">
                             <span class="right floated">
                             <i class="clock icon"></i>
                             18:00
                             </span>
                        <i class="users icon"></i>
                        10 participanti
                    </div>
                    <div class="ui teal bottom attached button participaTraining" data-idTraining="12">
                        <i class="send icon"></i>
                        Participa la training
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection