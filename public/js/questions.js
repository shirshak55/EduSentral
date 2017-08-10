var app = angular.module('questionApp',['ngRoute','ngResource']);

app.service('questionService',['$resource',function($resource){
    this.questions = function()
    {
        var slug = document.head.querySelector("[name=slug]").content;
        var questions = $resource("/api/quiz/sets/"+slug);
        return questions.get();
    }
}]);

app.controller('questions',[ '$scope', '$timeout', 'questionService' ,function($scope, $timeout, questionService){
    $scope.questions = questionService.questions();
    console.log($scope.questions);
}]);