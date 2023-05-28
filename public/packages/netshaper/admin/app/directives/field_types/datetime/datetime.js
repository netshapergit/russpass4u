angular.module('netshaper.admin.fieldType.datetime', []).directive('nsDatetime', function($filter, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/datetime/datetime.html?v=' + $window.V,
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
			// needs object to pass through another directive
			scope.model = {
				localValue: null
			};

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

				if (value) {
					scope.$watch('item.' + value, function(datetime) {
						if (datetime) {
							datetime = datetime.replace(/^(\d{4}\-\d{2}\-\d{2}) (\d{2}:\d{2}:\d{2})$/, '$1T$2Z');
							scope.model.localValue = $filter('date')(datetime, 'yyyy-MM-dd HH:mm:ss');
						}
					});
				}
			});

			scope.$watch('model.localValue', function(value) {
				if (value) {
					var date = new Date(value);
					date = new Date(date.getTime() + date.getTimezoneOffset() * 60 * 1000);
					scope.item[scope.property] = $filter('date')(date, 'yyyy-MM-dd HH:mm:ss');
				}
			});
		}
	};
});
