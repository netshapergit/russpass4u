angular.module('netshaper.admin.formUpload', []).directive('nsFormUpload', function($window) {
	return {
		restrict: 'E',
		transclude: true,
		templateUrl: '/packages/netshaper/admin/app/directives/form_upload/form_upload.html?v=' + $window.V,
		scope: {
			alias: '@',
			disabled: '@',
			item: '=',
			label: '@',
			path: '@',
			property: '@',
			size: '@',
			uploadUrl: '@'
		},
		link: function(scope) {
			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('property', function(value) {
				scope.property = value || scope.alias;
			});

			scope.getLink = function() {
				return scope.item[scope.property] ? scope.path + '/' + scope.item[scope.property] : '';
			};

			scope.onComplete = function(response) {
				if (response.fileName) {
					scope.item[scope.property] = response.fileName;
				} else {
					alert(response.error);
				}
			};

			scope.onSubmit = function() {
				// TODO
			};

			scope.remove = function() {
				if (!scope.disabled && confirm('Удалить файл?')) {
					scope.item[scope.property] = '';
				}
			};
		}
	};
});
