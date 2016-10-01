@extends('app')

@section('controller', 'CreateCtrl')

@section('body')
<div class="section">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style='text-align: center; padding: 100px 0'>
            <div class="form-group">
                <textarea ng-model="quote.text" type="text" class="form-control" rows="5" placeholder="цитата"></textarea>
            </div>
            <div class="form-group" style="margin-top: 10px">
                <input ng-model="quote.source" type="text" class="form-control" placeholder="source">
            </div>

            <div class="form-group" style="margin-top: 10px">
                <div class="btn btn-success" ng-click="addQuote()">добавить</div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
@stop
