angular.module('netshaper.admin.fieldType.code', []).directive('nsCode', function($http, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/field_types/code/code.html?v=' + $window.V,
		scope: {
			alias: '@',
			default: '@',
			disabled: '@',
			item: '=',
			label: '@',
			method: '@',
			mode: '@',
			property: '@',
			size: '@',
			url: '@'
		},
		link: function(scope, element) {
			scope.DEFAULT_MODE = 'htmlmixed';

			scope.saving = 0;

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

			// TODO do it better
			scope.$watch('saving', function(saving, savingOld) {
				var saveButton = angular.element('#save_button');

				if (saveButton.length > 0) {
					var method = saving > 0 ? 'addClass' : 'removeClass';
					saveButton.find('.fa')[method]('fa-spin');

					if (saving === 0 && savingOld > 0) {
						saveButton.animate({ opacity: .5 }, function() {
							saveButton.animate({ opacity: 1 });
						});
					}
				}
			});

			scope.$watch('mode', function(value) {
				if (!value) {
					scope.mode = scope.DEFAULT_MODE;
				}
			});

			scope.setCode = function(code) {
				scope.item[scope.property] = code;
				scope.$apply();
			};

			scope.save = function(code) {
				if (scope.url) {
					scope.saving++;

					var data = {};
					data[scope.alias] = code;

					var method = scope.method || 'post';

					$http[method](scope.url, data)
						.success(function() {
							scope.saving--;
						})
						.error(function() {
							scope.saving--;

							alert('Error while saving');
						});
				} else {
					console.error('URL for save is not defined');
				}
			};
		}
	};
});
