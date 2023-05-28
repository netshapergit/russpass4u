angular.module('netshaper.admin.wysiwyg', ['netshaper.admin.upload']).directive('nsWysiwyg', function($compile, $rootScope, $timeout) {
	return {
		restrict: 'A',
		scope: {
			disabled: '@',
			nsWysiwyg: '@'
		},
		controller: function($scope) {
			this.getValue = $scope.getValue;
		},
		link: function(scope, element, attrs) {
			var imageLiTemplate = '';

			angular.forEach(
				{
					small: 'Малое',
					medium: 'Среднее',
					large: 'Большое'
				},
				function(label, imageSize) {
					imageLiTemplate +=
						'<li role="presentation">' +
							'<a ' +
								'href="#" ' +
								'ns-upload="' + $rootScope.url.admin + '/upload_images" ' +
								'on-complete="onComplete(response, \'' + imageSize + '\')" ' +
								'role="menuitem" ' +
								'tabindex="-1" ' +
							'>' +
								label +
							'</a>' +
						'</li>';
				}
			);

			var imageButtonTemplate =
				'<div style="display: inline-block;">' +
					'<div class="dropdown">' +
						'<button ' +
							'class="btn btn-default btn-sm btn-small dropdown-toggle" ' +
							'data-original-title="Картинка" ' +
							'data-toggle="dropdown" ' +
							'ng-click="onClick()"' +
							'tabindex="-1" ' +
							'title="Картинка" ' +
							'type="button" ' +
						'>' +
							'<i class="fa fa-picture-o icon-picture"></i>' +
						'</button>' +
						'<ul class="dropdown-menu" role="menu">' +
							imageLiTemplate +
						'</ul>' +
					'</div>' +
				'</div>';

			scope.initialized = false;

			scope.$watch('disabled', function(value) {
				scope.disabled = value !== undefined && value !== false;
			});

			scope.$watch('nsWysiwyg', function(value) {
				if (scope.initialized) {
					element.code(scope.nsWysiwyg);
				} else {
					element.html(scope.nsWysiwyg);

					if (!scope.disabled) {
						scope.initialized = true;

						element.summernote({
							height: 150,
							lang: 'ru-RU',
							toolbar: [
								['color', ['color']],
								['style', ['style', 'bold', 'italic', 'underline', 'clear']],
								['insert', [/* 'picture',*/ 'link', 'video']],
								['table', ['table']],
								['layout', ['ul', 'ol']],
								['paragraph', ['paragraph']],
								['height', ['height']],
								['codeview', ['codeview']],
								['fullscreen', ['fullscreen']]
							]
						});

						var imageButtonElement = angular.element(imageButtonTemplate);
						var imageButtonHtml = $compile(imageButtonElement)(scope);

						element.next().find('.note-toolbar .note-insert').append(imageButtonHtml);
					}
				}
			});

			scope.onClick = function() {
				$timeout(function() {
					scope.$apply();
				})
			};

			scope.onComplete = function(response, imageSize) {
				if (response.fileName) {
					if (response['path_' + imageSize]) {
						var popup = imageSize === 'large' || !response.path_large ? ''
							: 'data-popup="' + response.path_large + response.fileName + '" data-rel="' + attrs.rel + '"';
						var html = '<img ' + popup + ' src="' + response['path_' + imageSize] + response.fileName + '"></a>';

						// TODO insert at cursor position
						element.code(element.code() + html);
					}
				} else {
					alert(response.error);
				}
			};

			scope.getValue = function() {
				return scope.initialized ? element.code() : scope.nsWysiwyg;
			};
		}
	};
});
