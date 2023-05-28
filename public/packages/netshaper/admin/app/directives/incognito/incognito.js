angular.module('netshaper.admin.incognito', []).directive('nsIncognito', function($compile, $timeout) {
	return {
		restrict: 'E',
		scope: {
			alias: '@',
			disabled: '@',
			empty: '@',
			fieldType: '@',
			item: '=',
			label: '@',
			layouts: '=',
			options: '=',
			pages: '=',
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

			scope.$watch('property', function(value) {
				scope.property = value || scope.alias;
			});

			scope.$watch('fieldType', function(value) {
				if (value) {
					$timeout(function() {
						var disabled = scope.disabled ? 'disabled ' : '';
						var empty = scope.empty ? 'empty ' : '';
						var template =
							'<ns-' + value + ' '
								+ 'alias="{{ alias }}" '
								+ disabled
								+ empty
								+ 'item="item" '
								+ 'label="{{ label }}" '
								+ 'layouts="layouts" '
								+ 'options="options" '
								+ 'pages="pages" '
								+ 'property="{{ property }}" '
								+ 'selects="selects" '
								+ 'size="{{ size }}"'
							+ '></ns-' + value + '>';
						var templateElement = angular.element(template);
						var html = $compile(templateElement)(scope);
						element.html(html);
					});
				}
			});
		}
	};
});
