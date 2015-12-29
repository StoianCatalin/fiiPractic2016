@extends('app')
@section('content')
    <section id="top">
        <div class="ui container">
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            <div class="centered buttons">
                <a href="/hackathon">
                    <div class="ui massive teal icon button" data-variation="inverted" data-content="Esti interesat de hackathon-ul nostru? Click aici!">
                        <i class="icon code"></i>
                        Hackathon
                    </div>
                </a>
                <a href="/conferinta">
                    <div class="ui massive icon button" data-variation="inverted" data-content="Aici chiar nu stiu despre ce e vorba :D">
                        <i class="icon trophy text"></i>
                        Conferance
                    </div>
                </a>
            </div>
            <h2 class="ui header">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et ...</h2>
            <div class="ui stackable grid">
                <div class="eight wide column">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et, viverra eget nibh. Nullam elit ante, tincidunt sit amet tempor nec, viverra in neque. Quisque dictum massa nunc, non vestibulum turpis sagittis non. Morbi egestas, mauris at consectetur maximus, erat sem euismod lorem, nec dignissim nisi metus eu orci. </p>
                </div>
                <div class="eight wide column">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et, viverra eget nibh. Nullam elit ante, tincidunt sit amet tempor nec, viverra in neque. Quisque dictum massa nunc, non vestibulum turpis sagittis non. Morbi egestas, mauris at consectetur maximus, erat sem euismod lorem, nec dignissim nisi metus eu orci. </p>
                </div>
            </div>
        </div>
    </section>
@endsection