angular.module('netshaper.admin.moduleType.slideshow', []).directive('nsModuleTypeSlideshow', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/slideshow/slideshow.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			function init() {
				if (!scope.config || scope.config.fake) {
					scope.config = $nsGlobal.getModuleConfig('slideshow', {
						arrows: '1',
						bullets: '1',
						image_size: 'large',
						items: [
							scope.create()
						]
					});
				}

				scope.list = $nsGlobal.getList();
			}

			scope.getAlias = function(index, opt_name) {
				var alias = 'config[slideshow][items][' + index + ']';
				if (opt_name) {
					alias += '[' + opt_name + ']';
				}
				return alias;
			};

			scope.create = function() {
				return {
					active: '1',
					external: '',
					label: '',
					page_id: null,
					url: ''
				};
			};

			init();
		}
	};
});
