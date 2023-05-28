angular.module('netshaper.admin.moduleType.map', []).directive('nsModuleTypeMap', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/map/map.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $nsGlobal.getModuleConfig('map', {
					height: '300',
					lat: '55.76',
					lon: '37.64',
					mark: {
						lat: '',
						lon: '',
						label: ''
					},
					width: '',
					zoom: '7'
				});
			}
		}
	};
});
