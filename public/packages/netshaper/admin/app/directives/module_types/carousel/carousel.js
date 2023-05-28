angular.module('netshaper.admin.moduleType.carousel', []).directive('nsModuleTypeCarousel', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/carousel/carousel.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			function init() {
				if (!scope.config || scope.config.fake) {
					scope.config = $nsGlobal.getModuleConfig('carousel', {
						image_size: 'small',
						items: [
							scope.create()
						]
					});
				}

				scope.list = $nsGlobal.getList();
			}

			scope.getAlias = function(index, opt_name) {
				var alias = 'config[carousel][items][' + index + ']';
				if (opt_name) {
					alias += '[' + opt_name + ']';
				}
				return alias;
			};

			scope.create = function() {
				return {
					active: '1',
					external: '',
					page_id: null,
					url: ''
				};
			};

			init();
		}
	};
});
