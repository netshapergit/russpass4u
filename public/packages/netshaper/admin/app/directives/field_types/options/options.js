angular.module('netshaper.admin.fieldType.options', []).directive('nsOptions', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/options/options.html?v=' + $window.V,
		scope: {
			alias: '@',
			disabled: '@',
			item: '=',
			key: '@',
			label: '@',
			layouts: '=',
			options: '=',
			order: '@',
			pages: '=',
			property: '@',
			require: '@',
			selects: '=',
			size: '@'
		},
		link: function(scope) {
			scope.available = [];
			
			scope.selected = [];

			scope.required = [];

			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('order', function(value) {
				scope.order = value !== undefined && value !== false;
			});

			scope.$watch('require', function(value) {
				scope.require = value !== undefined && value !== false;
			});

			scope.$watch('key', function(value) {
				scope.key = value || 'name';
			});

			scope.$watch('options', function(value) {
				if (angular.isArray(value)) {
					angular.forEach(value, function(option) {
						scope.available.push(option);
					});
				}
			});

			scope.$watch('selects', function(value) {
				if (angular.isArray(value)) {
					angular.forEach(value, function(select) {
						angular.forEach(select.options, function(option) {
							scope.available.push(option);
						});
					});
				}
			});

			scope.$watch('pages', function(value) {
				if (angular.isArray(value)) {
					angular.forEach(value, function(page) {
						scope.available.push(page);
					});
				}
			});

			scope.$watch('layouts', function(value) {
				if (angular.isArray(value)) {
					angular.forEach(value, function(layout) {
						angular.forEach(layout.pages, function(page) {
							scope.available.push(page);
						});
					});
				}
			});

			scope.$watch('property', function(value) {
				scope.property = value || scope.alias;

				// TODO do it better
				scope.$watch(
					function() {
						return scope.item && scope.item[scope.property]
							? JSON.stringify(scope.item[scope.property])
							: '';
					},
					function(value) {
						if (scope.item && angular.isArray(scope.item[scope.property])) {
							scope.selected = [];

							if (scope.order) {
								scope.item[scope.property].sort(function(a, b) {
									return a.pivot.order === b.pivot.order ?
										0 : (a.pivot.order > b.pivot.order ? 1 : -1);
								});
							}

							angular.forEach(scope.item[scope.property], function(option) {
								var optionId = angular.isObject(option) ? option.id : option;

								angular.forEach(scope.available, function(listOption) {
									if (listOption.id === optionId) {
										scope.attach(listOption);

										if (scope.require && option.pivot.required > 0) {
											scope.setRequired(listOption, true);
										}
									}
								});
							});
						}
					}
				);
			});

			scope.setProperty = function() {
				if (!scope.order && !scope.require) {
					scope.item[scope.property] = scope.selected.map(function(option) {
						return option.id;
					});
				}
			};

			scope.attach = function(option) {
				if (!scope.isSelected(option)) {
					scope.selected.push(option);
					scope.setProperty();
				}
			};

			scope.detach = function(option) {
				if (scope.isSelected(option)) {
					scope.selected.splice(scope.getIndex(option), 1);
					scope.setProperty();
				}
			};

			scope.down = function(option) {
				var index = scope.getIndex(option);
				scope.move(index, index + 1);
			};

			scope.getIndex = function(option) {
				return scope.selected.indexOf(option);
			};

			scope.getLabel = function(option) {
				var isPages = scope.pages
					|| scope.layouts
					&& (!scope.selects || scope.layouts.length > scope.selects.length);

				return isPages  ? option.id + '. ' + option.title : option[scope.key];
			};

			scope.isFirst = function(option) {
				return scope.getIndex(option) === 0;
			};

			scope.isLast = function(option) {
				return scope.getIndex(option) === scope.selected.length - 1;
			};

			scope.isSelected = function(option) {
				return scope.getIndex(option) >= 0;
			};

			scope.isRequired = function(option) {
				return scope.required.indexOf(option) >= 0;
			};

			scope.move = function(fromIndex, toIndex) {
				var maxIndex = scope.selected.length - 1;

				if (fromIndex >= 0 && toIndex >= 0 && fromIndex <= maxIndex && toIndex <= maxIndex) {
					scope.selected.splice(toIndex, 0, scope.selected.splice(fromIndex, 1)[0]);
				}
			};

			scope.setRequired = function(option, isRequire) {
				var index = scope.required.indexOf(option);

				if (isRequire && index < 0) {
					scope.required.push(option);
				} else if (!isRequire && index >= 0) {
					scope.required.splice(index, 1);
				}
			};

			scope.up = function(option) {
				var index = scope.getIndex(option);
				scope.move(index, index - 1);
			};
		}
	};
});
