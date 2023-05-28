angular.module('netshaper.admin.listItemControls', []).directive('nsListItemControls', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/list_item_controls/list_item_controls.html?v=' + $window.V,
		scope: {
			index: '@',
			items: '='
		},
		link: function(scope) {
			scope.$watch('index', function(value) {
				scope.index = parseInt(value, 10);
			});

			scope.down = function(index) {
				scope.move(index, index + 1);
			};

			scope.move = function(fromIndex, toIndex) {
				var maxIndex = scope.items.length - 1;

				if (fromIndex >= 0 && toIndex >= 0 && fromIndex <= maxIndex && toIndex <= maxIndex) {
					scope.items.splice(toIndex, 0, scope.items.splice(fromIndex, 1)[0]);
				}
			};

			scope.remove = function(index) {
				if (scope.items.length > 1 && confirm('Удалить элемент?')) {
					scope.items.splice(index, 1);
				}
			};

			scope.up = function(index) {
				scope.move(index, index - 1);
			};
		}
	};
});
