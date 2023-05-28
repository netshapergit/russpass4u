angular.module('netshaper.admin.fieldType.option', []).directive('nsOption', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/option/option.html?v=' + $window.V,
		scope: {
			alias: '@',
			default: '@',
			disabled: '@',
			empty: '@',
			item: '=',
			key: '@',
			label: '@',
			options: '=',
			property: '@',
			selects: '=',
			size: '@'
		},
		link: function(scope, element) {
			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('empty', function(value) {
				scope.empty = value !== undefined && value !== false;
			});

			scope.$watch('key', function(value) {
				scope.key = value || 'name';
			});

			scope.$watch('property', function(value) {
				scope.property = value || scope.alias;

				scope.$watch('default', function(value) {
					if (value !== undefined && scope.item[scope.property] === undefined) {
						scope.item[scope.property] = value;
					}
				});
			});

			// TODO do not use it
			scope.getOptions = function() {
				var options = {};

				// TODO group
				if (scope.selects) {
					angular.forEach(scope.selects, function(select) {
						angular.forEach(select.options, function(option) {
							if (angular.isObject(option)) {
								options[option.id] = option[scope.key];
							} else {
								options[option] = option;
							}
						});
					});
				} else {
					angular.forEach(scope.options, function(option) {
						if (angular.isObject(option)) {
							options[option.id] = option[scope.key];
						} else {
							options[option] = option;
						}
					});
				}

				return options;
			};
		}
	};
});
