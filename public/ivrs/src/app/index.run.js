(function() {
  'use strict';

  angular
    .module('ivrs')
    .run(runBlock);

  /** @ngInject */
  function runBlock($log) {

    $log.debug('runBlock end');
  }

})();
