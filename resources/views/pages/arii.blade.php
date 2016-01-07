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
                    <h1 class="ui header">Arii de studiu</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            <div class="ui stackable grid ariiStudiu">
                @foreach($info['arii'] as $area)
                    <div class="five wide column">
                        @if (count($area->subareas) > 0)
                            <a href="/arii-de-studiu/subarii/{{$area['link']}}">
                                @else
                                    <a href="/trainings/{{$area['link']}}">
                                        @endif
                                        <div class="arie">
                                            <i class="{{$area['icon']}}"></i>
                                            <h2>{{$area['title']}}</h2>
                                        </div>
                                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection