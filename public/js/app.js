(function() {
  angular.module("Quotes", ['ngResource']).controller('ShowRandomCtrl', function($scope, $http) {
    $http.get("api/getRandom").then(function(response) {
      return $scope.quote = response.data;
    });
    return $scope.nextQuote = function() {
      return $http.get("api/getNextRandom?previous_id=" + $scope.quote.id).then(function(response) {
        return $scope.quote = response.data;
      });
    };
  }).controller('CreateCtrl', function($scope, Quote) {
    return $scope.addQuote = function() {
      $scope.saving = true;
      return Quote.save($scope.quote, function() {
        return window.location = '/';
      });
    };
  });

}).call(this);

(function() {
  var apiPath, updatable;

  angular.module('Quotes').factory('Quote', function($resource) {
    return $resource(apiPath('quotes'), {
      id: '@id'
    }, updatable());
  });

  apiPath = function(entity, additional) {
    if (additional == null) {
      additional = '';
    }
    return ("/api/" + entity + "/") + (additional ? additional + '/' : '') + ":id";
  };

  updatable = function() {
    return {
      update: {
        method: 'PUT'
      }
    };
  };

}).call(this);

//# sourceMappingURL=app.js.map
