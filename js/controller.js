var app = angular.module('app',[]);
app.controller('baseCtrl',function ($scope, $http, $interval) {
    $scope.addMessage = function (newMessage) {
        $http.get('sendEmail.php', {
            params: {
                subject: newMessage.subject,
                email: newMessage.email,
                message: newMessage.message
            }
        }).then(function (response) {
            $scope.addMessage = 'Message was sent!';
        })
    };

    $scope.getLikes = function () {
        $http.get('DataBaseGet.php',{}
        ).then(function (response) {
            $scope.likes = response.data;
            console.log($scope.likes);
            $scope.likes1 = $scope.likes[0];
            $scope.likes2 = $scope.likes[1];
        })
    };

    $scope.addLike = function (id) {
        $http.get('PHP/addLike.php',{params:{id: id}}).then(function (response) {
            $scope.getLikes();
        });
    }
});