@extends('app')

@section('controller', 'ShowRandomCtrl')

@section('body')
<div class="quote-body">
    <div class="main-quote">
        <blockquote style='width: 600px'>
          <p>@{{ quote.text }}</p>
          <small>@{{ quote.source }}</small>
        </blockquote>
        <span ng-click='nextQuote()' class="quote-next glyphicon glyphicon-repeat"></span>
    </div>
</div>
<a class='create-quote' href="/quotes/create">создать</a>
@stop
