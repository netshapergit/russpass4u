angular.module('netshaper.admin.moduleType.plan', []).directive('nsModuleTypePlan', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/plan/plan.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $nsGlobal.getModuleConfig('plan', {
					x: 0,
					y: 0,
					width: 200,
					height: 110,
					sections: []
				});
			}

			scope.list = $nsGlobal.getList();

			angular.forEach(scope.config.sections, function(section) {
				if (!section.popover) {
					section.popover = {};
				}

				if (!section.label) {
					section.label = {};
				}

				if (!section.label.point) {
					section.label.point = [];
				}

				if (!section.link) {
					section.link = {};
				}

				if (!section.shape) {
					section.shape = {};
				}

				if (!section.shape.points) {
					section.shape.points = [];
				}
			});
		}
	};
});
