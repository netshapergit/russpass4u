angular.module('netshaper.admin.formGroup', []).directive('nsFormGroup', function($rootScope, $window) {
	return {
		restrict: 'E',
		transclude: true,
		templateUrl: '/packages/netshaper/admin/app/directives/form_group/form_group.html?v=' + $window.V,
		scope: {
			alias: '@',
			label: '@',
			size: '@'
		},
		link: function(scope) {
			scope.$watch('size', function(value) {
				scope.size = value || 10;
			});

			scope.getErrors = function() {
				// TODO check nested alias
				return $rootScope.errors[scope.alias] || [];
			};

			scope.getControlOffset = function() {
				return scope.label ? 0 : 12 - scope.size;
			};
		}
	};
});
