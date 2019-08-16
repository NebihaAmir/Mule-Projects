angular.module('app')
  .factory('Excel',function($window){
  var uri='data:application/vnd.ms-excel;base64,',
      template='<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
      base64=function(s){return $window.btoa(unescape(encodeURIComponent(s)));},
      format=function(s,c){return s.replace(/{(\w+)}/g,function(m,p){return c[p];})};
  return {
      tableToExcel:function(tableId,worksheetName){
          var table=$(tableId),
              ctx={worksheet:worksheetName,table:table.html()},
              href=uri+base64(format(template,ctx));
          return href;
      }
  };
})
  .controller('HomeCtrl', function($rootScope, $scope, $http,$window,Excel,$timeout,$rootScope,$location) {   
    $http.get('api/allusers.php')
        .then(function(resp) {
            // var arr=[];
            // var arr_item={};
            // for (i = 1; i<resp.data.length; i++){
            //     for(j = 0; j<resp.data[i].length; j++){
            //       arr_item[resp.data[0][j]]=resp.data[i][j];
            //     }
            //    arr.push(arr_item) ;
            // }
            $scope.allusers=resp.data;
        })
      $scope.login=function(){
        if($scope.email && $scope.pass){
          if($scope.email=="admin@outlook.com" && $scope.pass=="admin" ){
            $rootScope.globals = {
              currentUser: {
                  email: $scope.email,
                  password: $scope.pass
                }
            };
              $location.path('/alluser');
          }else{
            alert("Incorrect email or password!");
          }
         
        }      
     
    };
    $scope.logout=function(){    
          $rootScope.globals = {};
          $location.path('/');
   
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
        if(	$scope.first && 
			$scope.middle && 
			$scope.last && 
			$scope.phone && 
			$scope.email && 
			$scope.state && 
			$scope.reference && 
			$scope.university && 
			$scope.fieldofStudy &&
			$scope.yearofGraduation && 
			$scope.interest && 
			$scope.relocation && 
			$scope.budget && 
			$scope.futurePlan &&
			$scope.itTraining	){
          $http.get('api/createuser.php?first='+$scope.first+
										'&middle='+$scope.middle+
										'&last='+$scope.last+
										'&phone='+$scope.phone+
										'&email='+$scope.email+
										'&state='+$scope.state+
										'&reference='+$scope.reference+
										'&university='+$scope.university+
										'&fieldofStudy='+$scope.fieldofStudy+
										'&yearofGraduation='+$scope.yearofGraduation+
										'&interest='+$scope.interest+
										'&relocation='+$scope.relocation+
										'&budget='+$scope.budget+
										'&futurePlan='+$scope.futurePlan+
										'&itTraining='+$scope.itTraining	)
			.then(function(resp) {
            if(resp.statusText=="OK"){
            $rootScope.globals = {
              currentUser: {
                  email: $scope.email,
                  phone: $scope.phone
                }
            };           
            $location.path('/confirmation');                    
            }         
          }) 
        }       
     };     
     $scope.export_csv=function(tableId){ 
     var exportHref=Excel.tableToExcel(tableId,'WireWorkbenchDataExport');
     console.log(exportHref);
      $timeout(function(){location.href=exportHref;},100); 
    }
         
  });

  
