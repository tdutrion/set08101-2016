var phonecatApp = angular.module('myApp', []);

phonecatApp.controller('eventsCtrl', function ($scope, $http) {
    $scope.events = [];
    var url = 'https://www.googleapis.com/calendar/v3/calendars/j0js43u21s8tu9j2s1q9bhhrtk%40group.calendar.google.com/events?key=';
    $http.get(url)
        .success(function(data) {
            $scope.events = data.items;
        })
        .error(function(data) {
            console.log(data);
            alert('Unable to retrieve data at the time, please read the logs');
        });
});