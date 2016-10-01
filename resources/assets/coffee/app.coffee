angular.module("Quotes", ['ngResource'])
    .controller 'ShowRandomCtrl', ($scope, $http) ->
        $http.get "api/getRandom"
        .then (response) ->
            $scope.quote = response.data

        $scope.nextQuote = ->
            $http.get "api/getNextRandom?previous_id=#{$scope.quote.id}"
            .then (response) ->
                $scope.quote = response.data

    .controller 'CreateCtrl', ($scope, Quote) ->
        $scope.addQuote = ->
            $scope.saving = true
            Quote.save $scope.quote, ->
                $scope.quote = {}
                window.location = '/'
