angular.module('netshaper.admin.listControls', []).directive('nsListControls', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/list_controls/list_controls.html?v=' + $window.V,
		scope: {
			create: '=',
			items: '=',
			label: '@'
		},
		link: function(scope) {
			scope.add = function() {
				if (!scope.items) {
					scope.items = [];
				}

				scope.items.push(scope.create());
			};
		}
	};
});
