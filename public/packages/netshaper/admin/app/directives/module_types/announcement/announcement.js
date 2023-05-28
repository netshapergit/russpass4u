angular.module('netshaper.admin.moduleType.announcement', []).directive('nsModuleTypeAnnouncement', function($nsGlobal, $window) {
	return {
		restrict: 'E',
		templateUrl: '/packages/netshaper/admin/app/directives/module_types/announcement/announcement.html?v=' + $window.V,
		scope: {
			config: '='
		},
		link: function(scope) {
			if (!scope.config || scope.config.fake) {
				scope.config = $nsGlobal.getModuleConfig('announcement', {
					limit: 3,
					order_by: 'id', // id,order,created_at,updated_at[,alias,title,field_*]
					order_direction: 'desc', // 'asc','desc'[,'random']
					parent_pages: []
				});
			}

			scope.list = $nsGlobal.getList();
		}
	};
});
