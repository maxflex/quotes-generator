angular.module('Quotes')
    .factory 'Quote', ($resource) ->
        $resource apiPath('quotes'), {id: '@id'}, updatable()

apiPath = (entity, additional = '') ->
    "/api/#{entity}/" + (if additional then additional + '/' else '') + ":id"

updatable = ->
    update:
        method: 'PUT'
