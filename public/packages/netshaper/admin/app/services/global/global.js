angular.module('netshaper.admin.global', []).factory('$nsGlobal', function($rootScope) {
	return {
		getModuleConfig: function(alias, opt_default) {
			if (opt_default === undefined) {
				opt_default = {};
			}

			return $rootScope.request.inputPrev
				&& $rootScope.request.inputPrev.config
				&& $rootScope.request.inputPrev.config[alias]
				|| $rootScope.item
				&& $rootScope.item.config
				&& $rootScope.item.config[alias]
				|| opt_default;
		},

		getList: function() {
			return $rootScope.list;
		}
	};
});
