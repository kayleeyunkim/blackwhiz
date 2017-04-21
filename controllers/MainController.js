var index1;

Blackwhiz.controller('MainController', function($scope, artists) {
    $scope.artists = {};

    artists.getdata().then(function (response) {
        $scope.artists = response.data;
    });

    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
        // call .directive 'onFinishRender' in index.js
        // this is the last function gets called for directive method
        // to get the height of every description for main page
    });


    $scope.hello = function(index) {
//        var item = $scope.artists[index].name;
//        
//        console.log(item);
        
    }
    
    $scope.hello2 = function(index) {
        var item = $scope.artists[index].name;
        console.log($scope.artists[index].image);
        index1 = index;
        hello();
//        console.log(item);
//        console.log($scope.artists[index].image);
        
    }

});


function hello() {
    console.log(index1);
}