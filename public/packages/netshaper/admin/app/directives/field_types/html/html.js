angular.module('netshaper.admin.fieldType.html', []).directive('nsHtml', function($window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/html/html.html?v=' + $window.V,
		scope: {
			alias: '@',
			default: '@',
			disabled: '@',
			item: '=',
			label: '@',
			property: '@',
			size: '@'
		},
		link: function(scope, element) {
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

			scope.setItemProperty = function() {
				var wysiwygScope = element.find('[ns-wysiwyg]').data('$isolateScopeNoTemplate');

				if (wysiwygScope && angular.isFunction(wysiwygScope.getValue)) {
					scope.item[scope.property] = wysiwygScope.getValue();
				}
			};

			// TODO angular way
			element.parents('form').submit(function() {
				scope.setItemProperty();
				scope.$apply();
			});

			// TODO dirty hack
			document.body.addEventListener('setWysiwyg', scope.setItemProperty);
		}
	};
});
