angular.module('netshaper.admin.codeEditor', []).directive('nsCodeEditor', function($timeout) {
	return {
		restrict: 'A',
		scope: {
			disabled: '@',
			mode: '@',
			nsCodeEditor: '@',
			onChange: '&',
			onSave: '&'
		},
		controller: function($scope) {
			this.getValue = $scope.getValue;
		},
		link: function(scope, element) {
			scope.DEFAULT_THEME = 'ambiance';
			scope.DEFAULT_HEIGHT = 500;

			scope.editor = null;

			scope.initialized = false;

			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('nsCodeEditor', function(value) {
				if (!scope.initialized) {

					if (scope.disabled) {
						element.text(value);
					} else {
						scope.initialized = true;

						$timeout(function() {
							scope.editor = CodeMirror(element.get(0), {
								extraKeys: {
									Esc: function(cm) {
										if (cm.getOption('fullScreen')) {
											cm.setOption('fullScreen', false);
										}
									},
									F11: function(cm) {
										cm.setOption('fullScreen', !cm.getOption('fullScreen'));
									}
								},
								indentUnit: 4,
								indentWithTabs: true,
								lineNumbers: true,
								mode: scope.mode,
								theme: scope.DEFAULT_THEME,
								value: value
							});

							scope.editor.setSize(null, scope.DEFAULT_HEIGHT);

							scope.editor.on('change', function() {
								scope.onChange({
									code: scope.editor.getValue()
								});
							});

							CodeMirror.commands.save = function() {
								scope.onSave({
									code: scope.editor.getValue()
								});
							};
						});
					}
				}
			});
		}
	};
});
