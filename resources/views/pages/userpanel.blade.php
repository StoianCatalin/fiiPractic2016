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
                    <h1 class="ui header">Panou de administrare</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            <div class="ui form warning success changeAccountInfo" style="max-width: 600px;">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="icon user"></i>
                        <input placeholder="Numele tau" type="text" name="name" value="{{Auth::user()->username}}">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon disabled input">
                        <i class="icon mail"></i>
                        <input placeholder="Email" type="text" name="email" value="{{Auth::user()->email}}"><br />
                    </div>
                    <span>Daca vrei sa schimbi email-ul trebuie sa contactezi un administrator.</span>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="icon world"></i>
                        <input placeholder="Adresa" type="text" name="address" value="{{Auth::user()->adress}}">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="icon phone"></i>
                        <input placeholder="Numar de telefon" type="text" name="phone" value="{{Auth::user()->phone}}">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <input placeholder="Parola Noua" type="password" name="password">
                        <i class="lock icon"></i>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <input placeholder="Repeta Parola" type="password" name="repeatPassword">
                        <i class="lock icon"></i>
                    </div>
                </div>
                <div class="center">
                    <div class="ui blue submit fluid button">Actualizeaza</div>
                </div>
                <div class="ui message success"></div>
                <div class="ui message warning"></div>
            </div>
            <br /><br />
            <h2 class="ui horizontal divider header">Training-uri la care doresti sa participi</h2>
            <br /><br />
            <div class="ui fluid cards">
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
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
                    <div class="ui red bottom attached button renuntaTraining" data-idTraining="12">
                        <i class="close icon"></i>
                        Renunta la training
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection