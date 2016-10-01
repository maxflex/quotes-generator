@extends('app')

@section('controller', 'ShowRandomCtrl')

@section('body')
<div class="quote-body">
    <div class="main-quote">
        <div class="quote-text">@{{ quote.text }}</div>
        <div class="quote-source">@{{ quote.source }}</div>
        <span ng-click='nextQuote()' class="quote-next glyphicon glyphicon-repeat"></span>
    </div>
</div>
@stop
