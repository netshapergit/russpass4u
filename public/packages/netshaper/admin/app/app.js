angular
	.module('netshaper.admin', [
		'faf.datetime',
		'faf.range',
		// services
		'netshaper.admin.global',
		// directives
		'ngDraggable',
		'netshaper.admin.codeEditor',
		'netshaper.admin.fieldType.checkbox',
		'netshaper.admin.fieldType.code',
		'netshaper.admin.fieldType.color',
		'netshaper.admin.fieldType.date',
		'netshaper.admin.fieldType.datetime',
		'netshaper.admin.fieldType.double',
		'netshaper.admin.fieldType.email',
		'netshaper.admin.fieldType.file',
		'netshaper.admin.fieldType.html',
		'netshaper.admin.fieldType.image',
		'netshaper.admin.fieldType.integer',
		'netshaper.admin.fieldType.link',
		'netshaper.admin.fieldType.money',
		'netshaper.admin.fieldType.option',
		'netshaper.admin.fieldType.options',
		'netshaper.admin.fieldType.page',
		'netshaper.admin.fieldType.password',
		'netshaper.admin.fieldType.string',
		'netshaper.admin.fieldType.text',
		'netshaper.admin.fieldType.time',
		'netshaper.admin.formGroup',
		'netshaper.admin.formUpload',
		'netshaper.admin.incognito',
		'netshaper.admin.incognitoModuleType',
		'netshaper.admin.listControls',
		'netshaper.admin.listItemControls',
		'netshaper.admin.moduleType.announcement',
		'netshaper.admin.moduleType.banner',
		'netshaper.admin.moduleType.carousel',
		'netshaper.admin.moduleType.form',
		'netshaper.admin.moduleType.gallery',
		'netshaper.admin.moduleType.html',
		'netshaper.admin.moduleType.map',
		'netshaper.admin.moduleType.menu',
		'netshaper.admin.moduleType.plan',
		'netshaper.admin.moduleType.slideshow',
		'netshaper.admin.moduleType.slideshow2',
		'netshaper.admin.moduleType.source',
		'netshaper.admin.moduleType.text',
		//'netshaper.admin.moduleType.account',
		'netshaper.admin.target',
		'netshaper.admin.upload',
		'netshaper.admin.wysiwyg'
	])
	.controller('NetShaperAdminRootController', function($rootScope, $scope) {
		$scope.init = function(config, errors) {
			console.log(config, errors)

			angular.forEach(config, function(value, key) {
				$rootScope[key] = value;
			});

			$rootScope.errors = errors;

			angular.element(document).ready(function() {
				angular.element('#root').show();
				$rootScope.$apply();
			});
		};
	})
	.controller('NetShaperAdminFormController', function($rootScope, $scope) {
		$rootScope.item = $rootScope.item || {};

		// apply pivot after validation failed
		angular.forEach($rootScope.request.inputPrev, function(value, key) {
			var matches = /^pivot_(.+)$/.exec(key);

			if (matches) {
				var collection = $rootScope.request.inputPrev[matches[1]];

				for (var i = 0; i < collection.length; i++) {
					var pivot = {};

					angular.forEach(value, function(data, id) {
						if (id === collection[i]) {
							pivot = data;
						}
					});

					collection[i] = {
						id: collection[i],
						pivot: pivot
					};
				}
			}
		});

		angular.extend($rootScope.item, $rootScope.request.inputPrev);

		$scope.isNewItem = !$rootScope.item.id;

		$scope.getFormAction = function() {
			var url = $rootScope.url.admin + '/' + $rootScope.request.segments[1];

			if (!$scope.isNewItem) {
				url += '/' + $rootScope.item.id;
			}

			return url;
		};
/* для формы редактирования данных из личного кабинета пользователя*/		
		$scope.getFormActionUser = function() {
			var url = $rootScope.url.user + '/' + $rootScope.request.segments[1];

			if (!$scope.isNewItem) {
				url += '/' + $rootScope.item.id;
			}

			return url;
		};
/*--------------*/
		$scope.getFormMethod = function() {
			return $scope.isNewItem ? 'post' : 'put';
		};

		$scope.saveAs = function() {
			$scope.isNewItem = true;
		};
	})
	.controller('NetShaperAdminFormPagesController', function($scope) {
		$scope.isFieldShown = function(field) {
			var shown = false;

			angular.forEach(field.in_layouts, function(layout) {
				if (layout.id === $scope.item.layout_id) {
					shown = true;
				}
			});

			return shown;
		};

		$scope.$watch('item.layout_id', function() {
			$scope.list.fields.sort(function(a, b) {
				var orderA = 0;
				var orderB = 0;

				angular.forEach(a.in_layouts, function(layout) {
					if (layout.id === $scope.item.layout_id) {
						orderA = layout.pivot.order;
					}
				});

				angular.forEach(b.in_layouts, function(layout) {
					if (layout.id === $scope.item.layout_id) {
						orderB = layout.pivot.order;
					}
				});

				return orderA - orderB;
			});
		});
	})
	.controller('NetShaperAdminFormModulesController', function($scope) {
		// TODO dirty hack
		$scope.config = {
			fake: true
		};

		$scope.$watch('item.module_type_id', function(value) {
			$scope.moduleTypeLayouts = [];

			angular.forEach($scope.list.moduleTypeLayouts, function(layout) {
				if (layout.module_type_id === value) {
					$scope.moduleTypeLayouts.push(layout);
				}
			});
		});

		$scope.showBinding = function(bind) {
			return ['for', 'except'].indexOf(bind) >= 0;
		};
	})
	.controller('NetShaperAdminFormFieldsController', function($rootScope, $scope) {
		$scope.isFieldTypeAlias = function(aliases) {
			var is = false;

			angular.forEach($rootScope.list.fieldTypes, function(fieldType) {
				if (fieldType.id === $rootScope.item.field_type_id
					&& aliases.indexOf(fieldType.alias) >= 0
				) {
					is = true;
				}
			});

			return is;
		};

		$scope.needsSelects = function() {
			return $scope.isFieldTypeAlias([
				'option',
				'options'
			]);
		};

		$scope.needsLayouts = function() {
			return $scope.isFieldTypeAlias([
				'page',
				'pages'
			]);
		};
	})
	.controller('NetShaperAdminListPagesController', function($scope) {
		var collapsedPageIds = [];

		$scope.changed = [];

		$scope.calculateChanges = function(item) {
			angular.forEach($scope.getRow(item), function(rowItem, rowIndex) {
				var changedIndex = $scope.changed.indexOf(rowItem);

				var newOrder  =rowIndex + 1;
				var oldOrder = parseInt(rowItem.page.order, 10)

				if (newOrder === oldOrder) {
					if (changedIndex >= 0) {
						delete rowItem.order;
						$scope.changed.splice(changedIndex, 1);
					}
				} else {
					rowItem.order = newOrder;

					if (changedIndex < 0) {
						$scope.changed.push(rowItem);
					}
				}
			});
		};

		$scope.collapse = function(pageId) {
			if (collapsedPageIds.indexOf(pageId) < 0) {
				collapsedPageIds.push(pageId);
			}
		};

		$scope.down = function(index) {
			var item = $scope.items[index];

			if (!$scope.isLast(item)) {
				var length = $scope.getSubTree(item).length;
				var nextItem = $scope.items[index + length];
				var nextLength = $scope.getSubTree(nextItem).length;

				$scope.move(index, index + nextLength, length);
			}
		};

		$scope.expand = function(pageId) {
			var index = collapsedPageIds.indexOf(pageId);

			if (index >= 0) {
				collapsedPageIds.splice(index, 1);
			}
		};

		$scope.getPrevItem = function(item) {
			var prevItem = null;
			var found = false;

			angular.forEach($scope.items, function(listItem) {
				if (!found) {
					if (listItem === item) {
						found = true;
					} else if (listItem.level === item.level) {
						prevItem = listItem;
					} else if (listItem.level < item.level) {
						prevItem = null;
					}
				}
			});

			if (!found) {
				prevItem = null;
			}

			return prevItem;
		};

		$scope.getRow = function(item) {
			var row = [];
			var passed = false;
			var ready = false;

			angular.forEach($scope.items, function(listItem) {
				if (!ready) {
					if (listItem === item) {
						passed = true;
					}

					if (listItem.level === item.level) {
						row.push(listItem);
					}

					if (listItem.level < item.level) {
						if (passed) {
							ready = true;
						} else {
							row = [];
						}
					}
				}
			});

			return row;
		};

		$scope.getSubTree = function(item) {
			var subTree = [];
			var calculation = false;

			angular.forEach($scope.items, function(listItem) {
				if (listItem === item) {
					calculation = true;
				}

				if (calculation) {
					if (listItem.level > item.level || listItem === item) {
						subTree.push(listItem);
					} else {
						calculation = false;
					}
				}
			});

			return subTree;
		};

		$scope.isChanged = function(item) {
			return $scope.changed.indexOf(item) >= 0;
		};

		$scope.isCollapsed = function(pageId) {
			var isCollapsed = pageId && collapsedPageIds.indexOf(pageId) >= 0;

			if (pageId && !isCollapsed) {
				var collapsedLevels = [];

				angular.forEach($scope.items, function(item) {
					do {
						var lastCollapsedLevel = collapsedLevels.length > 0 ? collapsedLevels[collapsedLevels.length - 1] : null;

						if (item.level <= lastCollapsedLevel) {
							collapsedLevels.pop();
						}
					} while (collapsedLevels.length > 0 && item.level <= lastCollapsedLevel)

					if (collapsedPageIds.indexOf(item.page.id) >= 0) {
						collapsedLevels.push(item.level);
					}

					if (item.page.id === pageId) {
						isCollapsed = collapsedLevels.length > 0;
					}
				});
			}

			return isCollapsed;
		};

		$scope.isFirst = function(item) {
			var isFirst = false;
			var level = -1;

			angular.forEach($scope.items, function(listItem) {
				if (listItem === item && item.level > level) {
					isFirst = true;
				}

				level = listItem.level;
			});

			return isFirst;
		};

		$scope.isLast = function(item) {
			var isLast = true;
			var passed = false;

			angular.forEach($scope.items, function(listItem) {
				if (listItem === item) {
					passed = true;
				} else if (passed) {
					if (listItem.level === item.level) {
						isLast = false;
					} else if (listItem.level < item.level) {
						passed = false;
					}
				}
			});

			return isLast;
		};

		$scope.move = function(fromIndex, toIndex, opt_length) {
			opt_length = opt_length || 1;

			var maxIndex = $scope.items.length - 1;

			if (fromIndex >= 0 && toIndex >= 0 && fromIndex <= maxIndex && toIndex <= maxIndex) {
				var subTree = $scope.items.splice(fromIndex, opt_length);
				var args = [toIndex, 0].concat(subTree);
				$scope.items.splice.apply($scope.items, args);

				$scope.calculateChanges($scope.items[toIndex]);
			}
		};

		$scope.up = function(index) {
			var item = $scope.items[index];

			if (!$scope.isFirst(item)) {
				var length = $scope.getSubTree(item).length;
				var prevItem = $scope.getPrevItem(item);
				var prevLength = $scope.getSubTree(prevItem).length;

				$scope.move(index, index - prevLength, length);
			}
		};
	})
	.controller('NetShaperAdminGridController', function($http, $rootScope, $scope, $timeout) {
		$scope.ROW = 'row';
		$scope.COL = 'col';
		$scope.MODULE = 'module';
		$scope.MODULE_TYPE = 'moduleType';

		$scope.lastDrag = null;
		$scope.lastDragParent = null;

		$scope.rootPosition = {
			sub_positions: $rootScope.positions
		};

		$scope.dummyPosition = {
			modules: $rootScope.dummy
		};

		$scope.mode = null;
		$scope.editedParent = null;
		$scope.edited = null;
		$scope.editedErrors = [];
		$scope.editedConfig = {};

		$scope.moduleTypeLayouts = [];

		$scope.$watch('edited.module_type_id', function(value) {
			$scope.moduleTypeLayouts = [];

			angular.forEach($scope.list.moduleTypeLayouts, function(layout) {
				if (layout.module_type_id === value) {
					$scope.moduleTypeLayouts.push(layout);
				}
			});
		});

		$scope.redirect = function() {
			window.location = '/admin/grid/' + $rootScope.item.id + '/edit';
		};

		$scope.newPosition = function() {
			return {
				active: '1',
				alias: '',
				modules: [],
				sub_positions: []
			};
		};

		$scope.newModule = function(moduleType) {
			return {
				access_level: 'any',
				active: '',
				bind_layouts: 'all',
				bind_pages: 'all',
				config: {},
				id: null,
				layouts: [],
				module_type: moduleType,
				module_type_id: moduleType.id,
				module_type_layout_id: null,
				name: '',
				pages: [],
				show_name: ''
			};
		};

		$scope.onDrag = function(data, event, mode, parent) {
			$scope.lastDrag = mode;
			$scope.lastDragParent = parent;
		};

		// TODO refactor
		$scope.onDrop = function(data, event, mode, parent, before) {
			if ($scope.lastDrag === $scope.ROW || $scope.lastDrag === $scope.COL) {
				// TODO position to dummy
				if (parent && !parent.id && parent.modules) {
					return;
				}

				// TODO recursive
				var checkRecursive = function(position, parent) {
					var reset = position === parent;

					angular.forEach(position.sub_positions, function(subPosition) {
						if (subPosition === parent || checkRecursive(subPosition, parent)) {
							reset = true;
						}
					});

					return reset;
				};

				if (checkRecursive(data, parent)) {
					return;
				}
			}

			var lastDrag = $scope.lastDrag;
			var lastDragParent = $scope.lastDragParent;

			var collection = mode === $scope.MODULE
				? parent.modules
				: parent.sub_positions;

			// do it before splice lastDragCollectionIndex
			var index = collection.indexOf(before);

			if (lastDragParent) {
				var lastDragCollection = lastDrag === $scope.MODULE
					? lastDragParent.modules
					: lastDragParent.sub_positions;
				var lastDragCollectionIndex = lastDragCollection.indexOf(data);
				if (lastDragCollectionIndex >= 0) {
					lastDragCollection.splice(lastDragCollectionIndex, 1);
					if (lastDragParent === parent && lastDragCollectionIndex <= index) {
						index--;
					}
				}
			}

			var row;
			var col;
			var module;

			switch (lastDrag) {
				case $scope.ROW:
					row = data;
					break;

				case $scope.COL:
					col = data;
					break;

				case $scope.MODULE:
					module = data;
					break;

				case $scope.MODULE_TYPE:
					module = $scope.newModule(data);
					break;
			}

			switch (mode) {
				case $scope.ROW:
					if (!row) {
						row = $scope.newPosition();
					}

					if (index < 0) {
						collection.push(row);
					} else {
						collection.splice(index, 0, row);
					}

					if (module) {
						col = $scope.newPosition();
						col.modules.push(module);
					}

					if (col) {
						row.sub_positions.push(col);

						$scope.savePosition(row, parent, before, function(row) {
							$scope.savePosition(col, row, null, function(col) {
								if (module) {
									$scope.saveModule(module, col);
								}
							});
						});
					} else {
						$scope.savePosition(row, parent, before);
					}
					break;

				case $scope.COL:
					if (col) {
						$scope.savePosition(col, parent, before);
					} else {
						col = $scope.newPosition();

						if (row) {
							col.sub_positions.push(row);
						} else if (module) {
							col.modules.push(module);
						}

						$scope.savePosition(col, parent, before, function(col) {
							if (row) {
								$scope.savePosition(row, col);
							} else if (module) {
								$scope.saveModule(module, col);
							}
						});
					}

					if (index < 0) {
						collection.push(col);
					} else {
						collection.splice(index, 0, col);
					}
					break;

				case $scope.MODULE:
					if (row || col) {
						var modulesBefore = [];
						var modulesAfter = [];
						var rowBefore;
						var rowAfter;
						var colBefore;
						var colAfter;

						angular.forEach(parent.modules, function(module) {
							if (module === before || modulesAfter.length > 0) {
								modulesAfter.push(module);
							} else {
								modulesBefore.push(module);
							}
						});

						if (modulesBefore.length > 0) {
							colBefore = $scope.newPosition();
							colBefore.modules = modulesBefore;
						}

						if (modulesAfter.length > 0) {
							colAfter = $scope.newPosition();
							colAfter.modules = modulesAfter;
						}

						if (row) {
							if (colBefore) {
								rowBefore = $scope.newPosition();
								rowBefore.sub_positions = [colBefore];
								parent.sub_positions.push(rowBefore);
							}

							parent.sub_positions.push(row);

							if (colAfter) {
								rowAfter = $scope.newPosition();
								rowAfter.sub_positions = [colAfter];
								parent.sub_positions.push(rowAfter);
							}

							$scope.savePosition(row, parent, null, function(row) {
								if (rowBefore) {
									$scope.savePosition(rowBefore, parent, row, function(rowBefore) {
										$scope.savePosition(colBefore, rowBefore, null, function(colBefore) {
											angular.forEach(modulesBefore, function(moduleBefore) {
												$scope.saveModule(moduleBefore, colBefore);
											});
										});
									});
								}

								if (rowAfter) {
									$scope.savePosition(rowAfter, parent, null, function(rowAfter) {
										$scope.savePosition(colAfter, rowAfter, null, function(colAfter) {
											angular.forEach(modulesAfter, function(moduleAfter) {
												$scope.saveModule(moduleAfter, colAfter);
											});
										});
									});
								}
							});
						} else if (col) {
							var rowWrap = $scope.newPosition();

							if (colBefore) {
								rowWrap.sub_positions.push(colBefore);
							}

							rowWrap.sub_positions.push(col);

							if (colAfter) {
								rowWrap.sub_positions.push(colAfter);
							}

							parent.sub_positions.push(rowWrap);

							$scope.savePosition(rowWrap, parent, null, function(rowWrap) {
								$scope.savePosition(col, rowWrap, null, function(col) {
									if (colBefore) {
										$scope.savePosition(colBefore, rowWrap, col, function(colBefore) {
											angular.forEach(modulesBefore, function(moduleBefore) {
												$scope.saveModule(moduleBefore, colBefore);
											});
										});
									}

									if (colAfter) {
										$scope.savePosition(colAfter, rowWrap, null, function(colAfter) {
											angular.forEach(modulesAfter, function(moduleAfter) {
												$scope.saveModule(moduleAfter, colAfter);
											});
										});
									}
								});
							})
						}
					} else if (module) {
						if (index < 0) {
							collection.push(module);
						} else {
							collection.splice(index, 0, module);
						}

						$scope.saveModule(module, parent, before);
					}
					break;
			}
		};

		$scope.setUp = function(opt_event, opt_mode, opt_parent, opt_instance) {
			if (opt_event) {
				opt_event.stopPropagation();
			}

			if ($scope.edited && opt_instance !== $scope.edited) {
				var method;

				switch ($scope.mode) {
					case $scope.MODULE:
						method = 'updateModule';
						break;

					default:
						method = 'updatePosition';
						break;
				}

				document.body.dispatchEvent(new CustomEvent('setWysiwyg'));

				// TODO most dirty hack ever
				$timeout(function() {
					$scope.editedErrors = [];
					$scope[method]($scope.edited);
				}, 10);
			}

			// TODO most dirty hack ever
			$timeout(function() {
				if ($scope.editedErrors.length === 0) {
					$scope.mode = opt_mode;
					$scope.editedParent = opt_parent;
					$scope.edited = opt_instance;

					if ($scope.mode === $scope.MODULE) {
						opt_instance.layoutIds = opt_instance.layouts.map(function(layout) {
							return layout.id;
						});

						opt_instance.pageIds = opt_instance.pages.map(function(page) {
							return page.id;
						});

						angular.forEach($scope.editedConfig, function(value, key) {
							delete $scope.editedConfig[key];
						});

						angular.extend($scope.editedConfig, opt_instance.config[opt_instance.module_type.alias]);
					}
				}
			}, 100);
		};

		$scope.split = function(position) {
			var subPosition = $scope.newPosition();
			var grandSubPosition = $scope.newPosition();
			subPosition.sub_positions = [grandSubPosition];
			grandSubPosition.sub_positions = position.sub_positions;
			grandSubPosition.modules = position.modules;
			position.sub_positions = [subPosition];
			position.modules = [];
			$scope.setUp();

			$scope.savePosition(subPosition, position, null, function(subPosition) {
				$scope.savePosition(grandSubPosition, subPosition, null, function(grandSubPosition) {
					angular.forEach(grandSubPosition.modules, function(module) {
						$scope.saveModule(module, grandSubPosition);
					});
					angular.forEach(grandSubPosition.sub_positions, function(position) {
						$scope.savePosition(position, grandSubPosition);
					});
				});
			});
		};

		$scope.checkManagerRecursive = function(position) {
			var ok = !position.alias;

			angular.forEach(position.sub_positions, function(subPosition) {
				ok = $scope.checkManagerRecursive(subPosition);
			});

			return ok;
		};

		$scope.remove = function(mode, instance) {
			if (mode !== $scope.MODULE && $scope.isManager() && !$scope.checkManagerRecursive(instance)) {
				return;
			}

			if (confirm('Удалить без возможности восстановления?')) {
				var collection;

				if (mode === $scope.MODULE) {
					collection = $scope.editedParent.modules;
					$scope.removeModule(instance);
				} else {
					$scope.makeModulesDummy(instance);
					collection = $scope.editedParent.sub_positions;
				}

				var index = collection.indexOf(instance);
				if (index >= 0) {
					collection.splice(index, 1);
				}

				$scope.edited = null;

				$scope.setUp();
			}
		};

		$scope.makeModulesDummy = function(position) {
			angular.forEach(position.sub_positions, function(subPosition) {
				$scope.makeModulesDummy(subPosition);
			});

			angular.forEach(position.modules, function(module) {
				$rootScope.dummy.push(module);

				$scope.saveModule(module);
			});

			$scope.removePosition(position);
		};

		$scope.showBinding = function(bind) {
			return ['for', 'except'].indexOf(bind) >= 0;
		};

		$scope.isManager = function() {
			return !$rootScope.user || $rootScope.user.role === 'manager';
		};

		$scope.isError = function(alias) {
			return $scope.editedErrors.indexOf(alias) >= 0;
		};

		$scope.updatePosition = function(position) {
			var data = {
				active: position.active,
				alias: position.alias
			};

			$rootScope.errors.alias = [];
			if (!/^\s*[a-z\d_]*\s*$/.test(position.alias)) {
				$rootScope.errors.alias.push('Допустимые символы: a-z0-9_');
				$scope.editedErrors.push('alias');
			}

			if ($scope.editedErrors.length === 0) {
				$http
					.put($rootScope.url.admin + '/positions/' + position.id, data)
					.error($scope.errorHandler)
					.success(function(response) {
						position.active = response.item.active;
						position.alias = response.item.alias;
					});
			}
		};

		$scope.updateModule = function(module) {
			var keys = [
				'access_level',
				'active',
				'bind_layouts',
				'bind_pages',
				'config',
				'layouts',
				'module_type_id',
				'module_type_layout_id',
				'name',
				'pages',
				'show_name'
			];

			var data = {};

			angular.forEach(keys, function(key) {
				data[key] = module[key];
			});

			data.config = {};

			data.config[module.module_type.alias] = angular.copy($scope.editedConfig);

			// TODO most dirty hack ever part 2
			data.layouts = [];
			angular.element('.settings [name=layoutIds\\[\\]]').each(function(index, element) {
				data.layouts.push(element.value);
			});

			// TODO most dirty hack ever part 2
			data.pages = [];
			angular.element('.settings [name=pageIds\\[\\]]').map(function(index, element) {
				return data.pages.push(element.value);
			});

			$rootScope.errors.access_level = [];
			if (!module.access_level) {
				$rootScope.errors.access_level.push('Выберите уровень доступа');
				$scope.editedErrors.push('access_level');
			}

			$rootScope.errors.bind_layouts = [];
			if (!module.bind_layouts) {
				$rootScope.errors.bind_layouts.push('Выберите отображение для макетов');
				$scope.editedErrors.push('bind_layouts');
			}

			$rootScope.errors.bind_pages = [];
			if (!module.bind_pages) {
				$rootScope.errors.bind_pages.push('Выберите отображение для страниц');
				$scope.editedErrors.push('bind_pages');
			}

			$rootScope.errors.module_type_id = [];
			if (!module.module_type_id) {
				$rootScope.errors.module_type_id.push('Выберите тип модуля');
				$scope.editedErrors.push('module_type_id');
			}

			if ($scope.editedErrors.length === 0) {
				$http
					.put($rootScope.url.admin + '/modules/' + module.id, data)
					.error($scope.errorHandler)
					.success(function(response) {
						angular.forEach(keys, function(key) {
							module[key] = response.item[key];
						});
					});
			}
		};

		$scope.savePosition = function(position, opt_parent, opt_before, opt_callback) {
			var url = $rootScope.url.admin + '/positions';
			var method;
			var data = {};

			if (position.id) {
				url += '/' + position.id;
				method = 'put';
			} else {
				method = 'post';
				angular.extend(data, position);
				delete data.sub_positions;
				delete data.modules;
			}

			data.before_id = opt_before ? opt_before.id : null;
			data.parent_position_id = opt_parent && opt_parent.id || null;

			$http
				[method](url, data)
				.error($scope.errorHandler)
				.success(function(response) {
					position.id = response.item.id;
					position.parent_position_id = response.item.parent_position_id;
					position.order = response.item.order;

					if (opt_callback) {
						opt_callback(position);
					}
				});
		};

		$scope.saveModule = function(module, opt_parent, opt_before, opt_callback) {
			var url = $rootScope.url.admin + '/modules';
			var method;
			var data = {};

			if (module.id) {
				url += '/' + module.id;
				method = 'put';
			} else {
				method = 'post';
				angular.extend(data, module);
				delete data.module_type;
			}

			data.before_id = opt_before ? opt_before.id : null;
			data.position_id = opt_parent && opt_parent.id || null;

			$http
				[method](url, data)
				.error($scope.errorHandler)
				.success(function(response) {
					module.id = response.item.id;
					module.position_id = response.item.position_id;
					module.order = response.item.order;

					if (opt_callback) {
						opt_callback(module);
					}
				});
		};

		$scope.removePosition = function(position) {
			$http
				.delete($rootScope.url.admin + '/positions/' + position.id)
				.error($scope.errorHandler);
		};

		$scope.removeModule = function(module) {
			$http
				.delete($rootScope.url.admin + '/modules/' + module.id)
				.error($scope.errorHandler);
		};

		$scope.errorHandler = function(response) {
			if (response.error && response.error.message && response.error.message) {
				var data = JSON.parse(response.error.message);

				if (data.errors) {
					angular.forEach(data.errors, function(message, key) {
						alert(key + ': ' + message);
					});
				}
			} else {
				alert('Возникла ошибка');
			}
		};
	})
	.controller('NetShaperAdminFilesController', function($rootScope, $scope) {
		$scope.onComplete = function(type, response) {
			if (response.fileName) {
				type.files.push({
					extension: response.extension,
					id: response.fileName,
					name: response.name
				});

				type.files.sort(function(a, b) {
					if (a.name === b.name) {
						return 0;
					}

					return a.name > b.name ? 1 : -1;
				});
			} else {
				alert(response.error);
			}
		};

		$scope.onSubmit = function(type) {
			// TODO
		};
	});
