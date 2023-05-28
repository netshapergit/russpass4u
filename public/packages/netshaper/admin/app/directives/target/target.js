angular.module('netshaper.admin.target', []).directive('nsTarget', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/target/target.html?v=' + $window.V,
		scope: {
			alias: '@',
			disabled: '@',
			item: '=',
			pages: '=',
			targetRequired: '@'
		},
		link: function(scope) {
			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('targetRequired', function(value) {
				scope.targetRequired = value !== undefined && value !== false;
			});
		}
	};
});
