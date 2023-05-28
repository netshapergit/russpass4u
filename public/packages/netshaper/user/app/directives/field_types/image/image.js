angular.module('netshaper.admin.fieldType.image', []).directive('nsImage', function($rootScope, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/user/app/directives/field_types/image/image.html?v=' + $window.V,
		scope: {
			alias: '@',
			default: '@',
			disabled: '@',
			item: '=',
			label: '@',
			property: '@',
			size: '@'
		},
		link: function(scope) {
			scope.url = $rootScope.url;

			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('property', function(value) {
				scope.property = value || scope.alias;

				scope.$watch('default', function(value) {
					if (value !== undefined && scope.item[scope.property] === undefined) {
						scope.item[scope.property] = value;
					}
				});
			});
		}
	};
});
