function NetShaperPlan(id, config) {
	this.init = function() {
		this.id = id;
		this.element = $('#' + this.id + '_canvas');
		this.popover = $('#' + this.id + '_popover');
		this.width = null;
		this.height = null;
		this.ratio = null;

		this.config = config;

		$(window).resize(this.render.bind(this)).resize();
	};

	this.x = function(value) {
		return Math.round((value - this.config.x) * this.ratio);
	};

	this.y = function(value) {
		return Math.round((value - this.config.y) * this.ratio);
	};

	this.popoverPoint = function(points) {
		var maxX = null;
		var minX = null;
		var minY = null;

		for (var i = 0; i < points.length; i++) {
			if (minY === null || points[i][1] < minY) {
				maxX = parseInt(points[i][0], 10);
				minX = parseInt(points[i][0], 10);
				minY = parseInt(points[i][1], 10);
			} else if (parseInt(points[i][1], 10) === minY) {
				if (points[i][0] > maxX) {
					maxX = parseInt(points[i][0], 10);
				}

				if (points[i][0] < minX) {
					minX = parseInt(points[i][0], 10);
				}
			}
		}

		return [
			maxX === null ? null : Math.round((maxX + minX) / 2),
			minY
		];
	};

	this.newShape = function(shape) {
		var plan = this;

		var shapeConfig = {
			drawFunc: function(context) {
				if (shape.points.length > 2) {
					context.beginPath();
					context.moveTo(plan.x(shape.points[0][0]), plan.y(shape.points[0][1]));

					for (var i = 1; i < shape.points.length; i++) {
						context.lineTo(plan.x(shape.points[i][0]), plan.y(shape.points[i][1]));
					}

					context.closePath();
					context.fillStrokeShape(this);
				}
			}
		};

		if (shape.fill) {
			shapeConfig.fill = shape.fill;
		}

		if (shape.stroke) {
			shapeConfig.stroke = shape.stroke;
		}

		if (shape.size) {
			shapeConfig.strokeWidth = shape.size;
		}

		return new Kinetic.Shape(shapeConfig);
	};

	this.newText = function(label) {
		var textConfig = {
			x: this.x(label.point[0]),
			y: this.y(label.point[1]),
			text: label.text,
			fill: label.color
		};

		if (label.size) {
			textConfig.fontSize = Math.round(label.size * this.ratio);
		}

		if (label.rotation) {
			textConfig.rotation = label.rotation;
		}

		return new Kinetic.Text(textConfig);
	};

	// TODO refactor

	this.render = function() {
		this.width = this.element.innerWidth();
		this.ratio = this.width / this.config.width;
		this.height = Math.round(this.config.height * this.ratio);

		var stage = new Kinetic.Stage({
			container: this.id + '_canvas',
			width: this.width,
			height: this.height
		});

		var layer = new Kinetic.Layer();

		// show points
		layer.add(new Kinetic.Rect({x: 0, y: 0, width: this.width, height: this.height}));
		stage.on('mousemove', function(event) {
			console.log(
				Math.round(event.evt.layerX / this.ratio + parseInt(this.config.x, 10)),
				Math.round(event.evt.layerY / this.ratio + parseInt(this.config.y, 10))
			);
		}.bind(this));

		if (this.config.sections) {
			for (var i = 0; i < this.config.sections.length; i++) {
				var section = this.config.sections[i];

				if (section.shape) {
					var shape = this.newShape(section.shape);

					var label = section.label && section.label.text
						? this.newText(section.label)
						: null;

					layer.add(shape);

					if (label) {
						layer.add(label);
					}

					if (section.hover) {
						var objects = [shape];

						if (label) {
							objects.push(label);
						}

						for (var j = 0; j < objects.length; j++) {
							objects[j].on('mouseenter', this.onShapeMouseEnter.bind(this, section, shape, label, layer));
							objects[j].on('mouseleave', this.onShapeMouseLeave.bind(this, section, shape, label, layer));
							objects[j].on('click', this.onShapeClick.bind(this, section));
						}
					}
				}
			}
		}

		stage.add(layer);
	};

	this.onShapeMouseEnter = function(section, shape, label, layer) {
		shape.opacity(.5);
		if (label) {
			label.opacity(.5);
		}
		layer.batchDraw();

		if (section.link && section.link.has_target) {
			this.element.css('cursor', 'pointer');
		}

		if (section.popover && section.popover.title) {
			var popoverPoint = this.popoverPoint(section.shape.points);

			this.popover
				.prop('title', section.popover.title)
				.data('content', section.popover.content)
				.css({
					left: this.x(popoverPoint[0]),
					top: this.y(popoverPoint[1])
				})
				.popover('show');
		}
	};

	this.onShapeMouseLeave = function(section, shape, label, layer) {
		shape.opacity(1);
		if (label) {
			label.opacity(1);
		}
		layer.batchDraw();

		if (section.link && section.link.has_target) {
			this.element.css('cursor', 'default');
		}

		this.popover.popover('destroy');
	};

	this.onShapeClick = function(section) {
		if (section.link && section.link.has_target) {
			if (section.link.external) {
				// TODO target blank
				window.location.assign(section.link.url);
			} else if (section.link.page) {
				window.location.assign(section.link.page.path);
			}
		}
	};

	this.init();
}
