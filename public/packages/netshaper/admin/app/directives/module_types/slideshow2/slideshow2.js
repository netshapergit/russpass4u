angular.module('netshaper.admin.moduleType.slideshow2', []).directive('nsModuleTypeSlideshow2', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/slideshow2/slideshow2.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			function init() {
				if (!scope.config || scope.config.fake) {
					scope.config = $nsGlobal.getModuleConfig('slideshow2', {
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
				var alias = 'config[slideshow2][items][' + index + ']';
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
