angular.module('netshaper.admin.incognitoModuleType', []).directive('nsIncognitoModuleType', function($compile) {
	return {
		restrict: 'E',
		scope: {
			config: '=',
			moduleType: '@'
		},
		link: function(scope, element) {
			scope.$watch('moduleType', function(value) {
				if (value) {
					var template = '<ns-module-type-' + value + ' config="config"></ns-module-type-' + value + '>';
					var templateElement = angular.element(template);
					var html = $compile(templateElement)(scope);
					element.html(html);
				}
			});
		}
	};
});
