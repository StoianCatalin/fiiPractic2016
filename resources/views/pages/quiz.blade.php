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
                <h1 class="ui header">{{ $info['training_name'] }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="quizSection">
	<div class="ui container">
		<div class="ui form warning success sendQuestionResponses" style="max-width: 600px;">
			@foreach ($info['questions'] as $question)
			<p>
				{{$question->question}}
				@if($question->required)
					<span style='color: red;'>*</span>
				@endif
			</p>
            <div class="field">
                <div class="ui input">
                    <input type="text" name="question-{{$question->id}}">
                </div>
            </div>
            @endforeach
            <div class="center" style="width: 200px;">
                <div class="ui blue submit fluid button">Expediaza raspunsurile</div>
            </div>
            <div class="ui message success"></div>
            <div class="ui message warning"></div>
        </div>
	</div>
</section>

@endsection