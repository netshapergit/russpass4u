angular.module('netshaper.admin.fieldType.page', []).directive('nsPage', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/page/page.html?v=' + $window.V,
		scope: {
			alias: '@',
			default: '@',
			disabled: '@',
			empty: '@',
			item: '=',
			label: '@',
			layouts: '=',
			pages: '=',
			property: '@',
			size: '@'
		},
		link: function(scope) {
			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('empty', function(value) {
				scope.empty = value !== undefined && value !== false;
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
			scope.getPages = function() {
				var pages = {};

				// TODO group
				if (scope.layouts) {
					angular.forEach(scope.layouts, function(layout) {
						angular.forEach(layout.pages, function(page) {
							pages[page.id] = page.id + '. ' + page.title;
						});
					});
				} else {
					angular.forEach(scope.pages, function(page) {
						pages[page.id] = page.id + '. ' + page.title;
					});
				}

				return pages;
			};
		}
	};
});
