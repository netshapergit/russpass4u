angular.module('netshaper.admin.moduleType.text', []).directive('nsModuleTypeText', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/text/text.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $rootScope.request.inputPrev
					&& $rootScope.request.inputPrev.config
					&& $rootScope.request.inputPrev.config.text
					|| $rootScope.item
					&& $rootScope.item.config
					&& $rootScope.item.config.text
					|| {
						content: ''
					};
			}
		}
	};
});
