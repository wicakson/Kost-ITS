//jquery
$(document).ready(function(){
    $("#googleMap").hide();
    $("#pano").hide();
    $("#pac-input").hide();
    $("#clear_google_map").hide();
    $("#add_street_view").hide();
    $("#clear_street_view").hide();
    $("#add_google_map").click(function(){
        $("#googleMap").show();
        $("#pac-input").show();
        $("#clear_google_map").show();
        $("#add_street_view").show();
    });
    $("#clear_google_map").click(function(){
        $("#googleMap").hide();
        $("#pac-input").hide();
        $("#clear_google_map").hide();
        $("#add_street_view").hide();
        $("#clear_street_view").hide();
    });
    $("#add_street_view").click(function(){
        $("#pano").show();
        $("#clear_street_view").show();
    });
    $("#clear_street_view").click(function(){
        $("#pano").hide();
        $("#clear_street_view").hide();
    });

    $('#MySplitter').split({orientation: 'horizontal'});
});

'use strict';
//sidenav

var app = angular.module('sidenavDemo1', ['ngMaterial']);
app.controller('AppCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.toggleLeft = buildDelayedToggler('left');
    $scope.toggleRight = buildDelayedToggler('right');
    $scope.isOpenLeft = function(){
      return $mdSidenav('left').isOpen();
    };
    $scope.isOpenRight = function(){
      return $mdSidenav('right').isOpen();
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
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }, 200);
    }
    function buildToggler(navID) {
      return function() {
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }
    }
  })
  .controller('LeftCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      $mdSidenav('left').close()
        .then(function () {
          $log.debug("close LEFT is done");
        });
    };
  })
  .controller('RightCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      $mdSidenav('right').close()
        .then(function () {
          $log.debug("close RIGHT is done");
        });
    };
  })
  .controller('Checkbox', function($scope) {
    $scope.data = {};
    $scope.data.cb1 = false;
    $scope.data.cb2 = false;
    $scope.data.cb3 = false;
    $scope.data.cb4 = false;
    $scope.data.cb5 = false;
    $scope.data.cb6 = false;
    $scope.data.cb7 = false;
    $scope.data.cb8 = false;
    $scope.data.cb9 = false;
    $scope.data.cb10 = false;
    $scope.data.cb11 = false;
    $scope.data.cb12 = false;
    $scope.data.cb13 = false;
    $scope.data.cb14 = false;
    $scope.data.cb15 = false;
    $scope.data.cb16 = false;
    $scope.data.cb17 = false;
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
;

