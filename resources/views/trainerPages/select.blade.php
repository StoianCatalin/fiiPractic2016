@extends('trainer')

@section('content')
    <div class="thirteen wide column">
        <h2 class="ui header">Selecteaza Participanti</h2>
        @foreach($info['training']->applicants() as $applicant)
            <div class="ui fluid card">
                <div class="content">
                    <div class="header">Participant cu id-ul 1</div>
                    <div class="meta">3 days ago</div>
                    <div class="description">
                        <div class="intrebare">
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor magna. Aenean sit amet mauris massa.</p>
                        </div>
                        <div class="intrebare">
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor magna. Aenean sit amet mauris massa.</p>
                        </div>
                        <div class="intrebare">
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor magna. Aenean sit amet mauris massa.</p>
                        </div>
                        <div class="intrebare">
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor magna. Aenean sit amet mauris massa.</p>
                        </div>
                        <div class="intrebare">
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor magna. Aenean sit amet mauris massa.</p>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <div data-id="1" class="ui green labeled icon button aproabaParticipant"><i class="icon checkmark"></i> Approve</div>
                    <div class="ui yellow labeled icon button maiTraziu"><i class="icon clock"></i> Later</div>
                    <div data-id="2" class="ui red labeled icon button respingeParticipant"><i class="icon trash"></i> Decline</div>
                </div>
            </div>
        @endforeach
        <div class="ui green icon message">
            <i class="smile icon"></i>
            <div class="content">
                <div class="header">
                    Oops!
                </div>
                <p>Se pare ca nu mai exista participanti pentru acest training. In cazul in care exista persoane trecute in lista de asteptare va rugam sa da-ti refresh la pagina.</p>
            </div>
        </div>
    </div>
@endsection