//jquery
$(document).ready(function(){
});

'use strict';
//sidenav
var app = angular.module('sidenavDemo1', ['ngMaterial'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
app.controller('AppCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');
    $scope.keepOpen = false;
    function toggleRight(){
      $mdSidenav('right').toggle().then(function () {
        $("body").css({ position: 'static' });
        $scope.keepOpen = !$scope.keepOpen;
        if ($scope.keepOpen)
          angular.element('md-backdrop.md-sidenav-backdrop-custom').removeClass('disabled');
        else
          angular.element('md-backdrop.md-sidenav-backdrop-custom').addClass('disabled');
        });   
    };
    $scope.checkClosingForm = function(){
      toggleRight();
    };
    /**
     * Supplies a function that will continue to operate until the
     * time is up.
     */
    function debounce(func, wait, context) {
      var timer;
      return function debounced() {
        var context = $scope,
            args = Array.prototype.slice.call(arguments);
        $timeout.cancel(timer);
        timer = $timeout(function() {
          timer = undefined;
          func.apply(context, args);
        }, wait || 10);
      };
    }
    /**
     * Build handler to open/close a SideNav; when animation finishes
     * report completion in console
     */
    function buildDelayedToggler(navID) {
      return debounce(function() {
        $("body").css({ position: 'fixed' });
        $("body").css({ width: '100%' });
        $mdSidenav(navID).toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }, 200);
    }
    function buildToggler(navID) {
      return function() {
        $("body").css({ position: 'fixed' });
        $("body").css({ width: '100%' });
        $mdSidenav(navID).toggle()
          .then(function () {
            if(navID=='right') {
              $scope.keepOpen = !$scope.keepOpen;
              if ($scope.keepOpen)
                  angular.element('md-backdrop.md-sidenav-backdrop-custom').removeClass('disabled');
              else
                  angular.element('md-backdrop.md-sidenav-backdrop-custom').addClass('disabled');
            }
            $log.debug("toggle " + navID + " is done");
          });
      }
    }
    $scope.getMyLastName = function() {
       facebookService.getMyLastName() 
         .then(function(response) {
           $scope.last_name = response.last_name;
         }
       );
    };
  })
  .factory('facebookService', function($q) {
      return {
          getMyLastName: function() {
              var deferred = $q.defer();
              FB.api('/me', {
                  fields: 'last_name'
              }, function(response) {
                  if (!response || response.error) {
                      deferred.reject('Error occured');
                  } else {
                      deferred.resolve(response);
                  }
              });
              return deferred.promise;
          }
      }
  })
  .controller('LeftCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      $("body").css({ position: 'static' });
      $mdSidenav('left').close()
        .then(function () {
          $log.debug("close LEFT is done");
        });
    };
  })
  .controller('RightCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      $("body").css({ position: 'static' });
      $mdSidenav('right').close()
        .then(function () {
          $log.debug("close RIGHT is done");
        });
    };
  })
  .controller('Checkbox', function($scope) {
    $scope.fasilitas = [
      {
        name:'Air Conditioner',
        value:'true'
      },
      {
        name:'TV',
        value:'false'
      },
      {
        name:'TV Kabel',
        value:'false'
      },
      {
        name:'Kamar Mandi Dalam',
        value:'false'
      },
      {
        name:'Internet',
        value:'true'
      },
      {
        name:'Meja dan Kursi',
        value:'false'
      },
      {
        name:'Kipas Angin',
        value:'false'
      },
      {
        name:'Lemari',
        value:'false'
      },
      {
        name:'Kulkas',
        value:'false'
      },
      {
        name:'Air Panas',
        value:'false'
      }];
  })
  .controller('Radio', function($scope) {
    $scope.data = {};
    $scope.data.rd1 = "search";
    $scope.data.rd2 = "pl";
    $scope.data.rd3 = "t";
  })
  .controller('SelectOptGroupController', function($scope) {
      $scope.listkecamatan = [
          "small (12-inch)",
          "medium (14-inch)",
          "large (16-inch)",
          "insane (42-inch)"
      ];
      $scope.listkelurahan = [
          "small (12-inch)",
          "medium (14-inch)",
          "large (16-inch)",
          "insane (42-inch)"
      ];
  })
  .controller('CardCtrl', function($scope) {
    $scope.listKost = [
          {title:'Kost Exclusive Kemang Eleven Di Kemang Cilandak Bangka Jakarta',description:'Nyaman, Aman, Exclusive',
           address:'Jl Kemang Raya No 11 Jakarta Selatan',price:'Rp. 4.000.000 s/d 9.500.000 *Bulanan',
           imagePath:'kamar1.jpg'},
          {title:'Kost Dekat Itc Fatmawati Madrasah/24 Cilandak Jakarta Selatan',description:'Nyaman, Aman, Exclusive',
           address:'Jl Kemang Raya No 11 Jakarta Selatan',price:'Rp. 200.000 * Harian Rp. 1.800.000 s/d 2.500.000 * Bulanan',
           imagePath:'kamar2.jpg'},
          {title:'Koi Residence Exclusive Kost Jl Tanah Kusir 2/18 Gandaria Utara Jakarta',description:'Nyaman, Aman, Exclusive',
           address:'Jl. Tanah Kusir 2 No 18, Jakarta Selatan Dekat Gandaria City Pondok Indah Mal',price:'Rp. 2.200.000 s/d 3.800.000 * Bulanan',
           imagePath:'kamar3.jpg'},
          {title:'Kost Exclusive Kemang Eleven Di Kemang Cilandak Bangka Jakarta',description:'Nyaman, Aman, Exclusive',
           address:'Jl Kemang Raya No 11 Jakarta Selatan',price:'Rp. 4.000.000 s/d 9.500.000 *Bulanan',
           imagePath:'kamar1.jpg'},
          {title:'Kost Dekat Itc Fatmawati Madrasah/24 Cilandak Jakarta Selatan',description:'Nyaman, Aman, Exclusive',
           address:'Jl Kemang Raya No 11 Jakarta Selatan',price:'Rp. 200.000 * Harian Rp. 1.800.000 s/d 2.500.000 * Bulanan',
           imagePath:'kamar2.jpg'},
          {title:'Koi Residence Exclusive Kost Jl Tanah Kusir 2/18 Gandaria Utara Jakarta',description:'Nyaman, Aman, Exclusive',
           address:'Jl. Tanah Kusir 2 No 18, Jakarta Selatan Dekat Gandaria City Pondok Indah Mal',price:'Rp. 2.200.000 s/d 3.800.000 * Bulanan',
           imagePath:'kamar3.jpg'}
                      ];
  })
  .controller('DemoCtrl', DemoCtrl);
  function DemoCtrl ($timeout, $q, $log) {
    var self = this;
    self.simulateQuery = false;
    self.isDisabled    = false;
    // list of `state` value/display objects
    self.states        = loadAll();
    self.querySearch   = querySearch;
    self.selectedItemChange = selectedItemChange;
    self.searchTextChange   = searchTextChange;
    self.newState = newState;
    function newState(state) {
      alert("Sorry! You'll need to create a Constituion for " + state + " first!");
    }
    // ******************************
    // Internal methods
    // ******************************
    /**
     * Search for states... use $timeout to simulate
     * remote dataservice call.
     */
    function querySearch (query) {
      var results = query ? self.states.filter( createFilterFor(query) ) : self.states,
          deferred;
      if (self.simulateQuery) {
        deferred = $q.defer();
        $timeout(function () { deferred.resolve( results ); }, Math.random() * 1000, false);
        return deferred.promise;
      } else {
        return results;
      }
    }
    function searchTextChange(text) {
      $log.info('Text changed to ' + text);
    }
    function selectedItemChange(item) {
      $log.info('Item changed to ' + JSON.stringify(item));
    }
    /**
     * Build `states` list of key/value pairs
     */
    function loadAll() {
      var allStates = 'Alabama, Alaska, Arizona, Arkansas, California, Colorado, Connecticut, Delaware,\
              Florida, Georgia, Hawaii, Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana,\
              Maine, Maryland, Massachusetts, Michigan, Minnesota, Mississippi, Missouri, Montana,\
              Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Carolina,\
              North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina,\
              South Dakota, Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia,\
              Wisconsin, Wyoming';
      return allStates.split(/, +/g).map( function (state) {
        return {
          value: state.toLowerCase(),
          display: state
        };
      });
    }
    /**
     * Create filter function for a query string
     */
    function createFilterFor(query) {
      var lowercaseQuery = angular.lowercase(query);
      return function filterFn(state) {
        return (state.value.indexOf(lowercaseQuery) === 0);
      };
    }
  }
;

