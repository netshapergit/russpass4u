angular.module('netshaper.admin.moduleType.form', []).directive('nsModuleTypeForm', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/form/form.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $rootScope.request.inputPrev
					&& $rootScope.request.inputPrev.config
					&& $rootScope.request.inputPrev.config.form
					|| $rootScope.item
					&& $rootScope.item.config
					&& $rootScope.item.config.form
					|| {
						forme_id: null
					};
			}

			scope.list = $rootScope.list;
		}
	};
});
