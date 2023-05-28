angular.module('netshaper.admin.moduleType.source', []).directive('nsModuleTypeSource', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/source/source.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $rootScope.request.inputPrev
					&& $rootScope.request.inputPrev.config
					&& $rootScope.request.inputPrev.config.source
					|| $rootScope.item
					&& $rootScope.item.config
					&& $rootScope.item.config.source
					|| {
						source: ''
					};
			}
		}
	};
});
