angular.module('netshaper.admin.moduleType.gallery', []).directive('nsModuleTypeGallery', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/gallery/gallery.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			function init() {
				if (!scope.config || scope.config.fake) {
					scope.config = $nsGlobal.getModuleConfig('gallery', {
						image_size: 'large',
						items: [
							scope.create()
						],
						preview_size: 'small'
					});
				}

				scope.list = $nsGlobal.getList();
			}

			scope.getAlias = function(index, opt_name) {
				var alias = 'config[gallery][items][' + index + ']';
				if (opt_name) {
					alias += '[' + opt_name + ']';
				}
				return alias;
			};

			scope.create = function() {
				return {
					active: '1',
					image: '',
					label: ''
				};
			};

			init();
		}
	};
});
