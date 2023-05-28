angular.module('netshaper.admin.moduleType.banner', []).directive('nsModuleTypeBanner', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/banner/banner.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $rootScope.request.inputPrev
					&& $rootScope.request.inputPrev.config
					&& $rootScope.request.inputPrev.config.banner
					|| $rootScope.item
					&& $rootScope.item.config
					&& $rootScope.item.config.banner
					|| {
						external: '',
						image: '',
						page_id: null,
						url: ''
					};
			}

			scope.list = $rootScope.list;
		}
	};
});
