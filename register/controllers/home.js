angular.module('app')
  .controller('HomeCtrl', function($rootScope, $scope, $http) {      
        $http.get('api/allusers.php')
        .then(function(resp) {
            $scope.allusers=resp.data;
        })
     
      $scope.serachuser=function(){
          id=$scope.user_id;
        $http.get('api/serachuser.php?id='+id)
        .then(function(res) {
            $scope.searchuser=res.data;
        })
      };
      $scope.deleteuser=function(id,row){
        $http.delete('api/deleteuser.php?id='+id)
        .then(function(resp) {
          if(resp.status==200){
            $("#tr_"+row).remove();
          };
        })
      };
      $scope.createuser=function(){
        $http.post('api/createuser.php?first='+$scope.first+'&last='+$scope.last+'&department='+$scope.department)
        .then(function(resp) {
          console.log(resp);
          if(resp.status==200){
            $(".alert-success").css("display","block");
          }
        })
    };    
      $scope.updateuser=function(){
        $http.post('api/updateuser.php?id='+$scope.id1+'&first='+$scope.first1+'&last='+$scope.last1+'&department='+$scope.department1)
        .then(function(resp) {
          $(".alert-info").css("display","block");
        })
      };    
  });

  
