(function() {
  'use strict';

  angular
    .module('ivrs')
    .config(routerConfig);

  /** @ngInject */
  function routerConfig($stateProvider, $urlRouterProvider) {
    $stateProvider
      .state('welcome', {
        url: '/',
          views: {
              'content@': {
                  templateUrl: 'ivrs/src/app/main/main.html',
                  controller: 'MainController',
                  controllerAs: 'main'
              }
          }
      });

    $urlRouterProvider.otherwise('/');
  }

})();
