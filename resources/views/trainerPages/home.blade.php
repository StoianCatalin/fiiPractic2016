@extends('trainer')

@section('content')
    <div class="thirteen wide column">
        <h2 class="ui header">Training-urile mele</h2>
        <div class="ui segment">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nume Training</th>
                    <th>Numar locuri</th>
                    <th>Actiuni</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($info['trainings'] as $training)
                    <tr>
                        <td>{{$training->id}}</td>
                        <td>{{$training->name}}</td>
                        <?php
                            $number = 0;
                        foreach ($training->groups() as $group) {
                            $number += $group->users()->count();
                        }
                        ?>
                        <td>{{$number}}/{{$training->groups()->count() * 30}}</td>
                        <td>
                            <div class="ui icon buttons trainBut">
                                <!-- <button data-id="1" data-content="Sterge Training" class="ui button stergeTrainButt"><i class="icon delete"></i></button> -->
                                <a href="/trainer/selectParticipants/{{$training->id}}"><button data-content="Adauga participanti" class="ui button"><i class="icon add user"></i></button></a>
                                <button data-content="Adauga o grupa" class="ui button addGroup" data-id="{{$training->id}}"><i class="icon add"></i></button>
                                <!-- <button data-content="Editeaza Training" class="ui button"><i class="icon write"></i></button> -->
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection