Blackwhiz.service('artists', function($http) {
    this.getdata = function () {
        return $http.get('artists.json');
    }
});