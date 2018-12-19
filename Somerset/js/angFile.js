var app = angular.module("somtown",[]);
              app.controller("view_nae", function($scope,$http){
                $scope.score=0;
                $scope.starval = function(num) {
                  $scope.score = num;
                  var doc = document.getElementsByClassName('inp');
                  for (var i = 0; i < num; i++) {
                    doc[i].setAttribute("class","fa fa-star inp checked");
                  }
                  for (var i = num; i < 5; i++) {
                    doc[i].setAttribute("class","fa fa-star inp");
                  }
                }

                $scope.clickHua = function() {
                  console.log($scope.name);
                  $http({
                    method:'post',
                    url:'sendreview.php',
                    data: {'name':$scope.name,'phone':$scope.phone,'score':$scope.score}
                  })
                  .success(function(data) {
                    console.log(data.response);
                    alert("Thank you for your review");
                  })
                }
              })
