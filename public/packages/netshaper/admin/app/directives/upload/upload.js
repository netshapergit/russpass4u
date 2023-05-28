angular.module('netshaper.admin.upload', []).directive('nsUpload', function() {
	return {
		restrict: 'A',
		scope: {
			disabled: '@',
			nsUpload: '@',
			onComplete: '&',
			onSubmit: '&'
		},
		link: function(scope, element) {
			scope.initialized = false;

			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.isReady = function() {
				return element.outerHeight() > 0;
			};

			scope.initUpload = function() {
				if (!scope.initialized && scope.nsUpload && !scope.disabled && scope.isReady()) {
					scope.initialized = true;

					element.upload({
						action: scope.nsUpload,
						onComplete: function(responseRaw) {
							var response;

							try {
								response = JSON.parse(responseRaw)
							} catch (err) {
								console.error(err);
							}

							if (response) {
								scope.onComplete({
									response: response
								});
							}

							scope.$apply();
						},
						onSubmit: function() {
							scope.onSubmit();
							scope.$apply();
						}
					});
				}
			};

			scope.$watch(scope.isReady, scope.initUpload);
			scope.$watch('nsUpload', scope.initUpload);
		}
	};
});
