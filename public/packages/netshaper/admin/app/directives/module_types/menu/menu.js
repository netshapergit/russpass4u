angular.module('netshaper.admin.moduleType.menu', []).directive('nsModuleTypeMenu', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/menu/menu.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			function init() {
				if (!scope.config || scope.config.fake) {
					scope.config = $nsGlobal.getModuleConfig('menu', {
						items: [
							scope.create()
						],
						nested: ''
					});
				}

				angular.forEach(scope.config.items, function(item) {
					if (!item.items) {
						item.items = [];
					}
				});

				scope.list = $nsGlobal.getList();
			}

			var editedItem = null;

			scope.editItem = function(item) {
				editedItem = editedItem === item ? null : item;
			};

			scope.getAlias = function(index, opt_name) {
				var alias = 'config[menu][items][' + index + ']';
				if (opt_name) {
					alias += '[' + opt_name + ']';
				}
				return alias;
			};

			scope.getItemLabel = function(item) {
				return item.label || (item.external ? item.url : scope.getPageLabel(item.page_id)) || '----------';
			};

			scope.getNestedAlias = function(parentIndex, index, opt_name) {
				var alias = 'config[menu][items][' + parentIndex + ']' + '[items][' + index + ']';
				if (opt_name) {
					alias += '[' + opt_name + ']';
				}
				return alias;
			};

			scope.getPageLabel = function(pageId) {
				var label = '';

				angular.forEach(scope.list.custom.menu.pages, function(page) {
					if (page.id === pageId) {
						label = page.title;
					}
				});

				return label;
			};

			scope.isEditedItem = function(item) {
				return item === editedItem;
			};

			scope.create = function() {
				var item = {
					active: '1',
					external: '',
					items: [],
					label: '',
					page_id: null,
					url: ''
				};

				scope.editItem(item);

				return item;
			};

			init();
		}
	};
});
