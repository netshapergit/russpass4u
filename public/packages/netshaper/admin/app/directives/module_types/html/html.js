angular.module('netshaper.admin.moduleType.html', []).directive('nsModuleTypeHtml', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/html/html.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $rootScope.request.inputPrev
					&& $rootScope.request.inputPrev.config
					&& $rootScope.request.inputPrev.config.html
					|| $rootScope.item
					&& $rootScope.item.config
					&& $rootScope.item.config.html
					|| {
						content: ''
					};
			}
		}
	};
});
