document.addEventListener('DOMContentLoaded', function() {
	
	const debounce = (f, t) => {
		return function (args) {
			let previousCall = this.lastCall;
			this.lastCall = Date.now();
			if (previousCall && ((this.lastCall - previousCall) <= t)) {
				clearTimeout(this.lastCallTimer);
			}
			this.lastCallTimer = setTimeout(() => f(args), t);
		}
	}
	
	const redrawMap = data => {
		const mapIsRoute = window.PAGE_MAP_FIELD_ISROUTE
		if(mapIsRoute) {
			data = data.filter(e => e.field_dot_isinactive != '1')
		}
	
		let markers = data.map((e, i) => {
			if(e.field_coords) {
				let coords = e.field_coords.split(',').map(e => Number(e.trim()))
				
				return {
					"type":"Feature",
					"id": e.created_at,
					"geometry": { 
						"type":"Point",
						"coordinates":coords
					},
					"properties":{ 
						"iconContent": `<strong>${e.field_prices}₽</strong>`,
						"balloonContentHeader":``,
						"balloonContentBody": `<div class="baloon-body">${e.field_gallery[0] ? `<a href="${e.path}"><img style="object-fit: cover; border-radius: 4px; width: 200px; height: 140px;" src="/site/data/images/medium/${e.field_gallery[0]}"></a>` : ''}
													<div class="baloon-header" style="font-family: 'Ubuntu', sans-serif; padding: 0 30px 0px 7px; max-width: 200px; margin: 10px 0; text-transform: uppercase"><a href="${e.path}" style="color: #2D2727;">${e.field_header.trim()}</a></div>
													${e.field_prices ? `<p style="padding: 0 7px 7px 7px; margin-top: 15px; display: flex; align-items: center">
													<span class="baloon-icon" style="margin-right: 5px; display: flex;">
														<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>
														</svg>
													</span>
													от ${e.field_prices}₽
												</p>` : ''}
													
												</div>`,
						"balloonContentFooter": ``,
						"clusterCaption":`${e.field_header.trim()}`,
						"balloonContentLayout": "idplace-baloon"
					},
					"options": {
						"preset": e.field_dot_isinactive == '1' ? 'islands#grayCircleDotIcon' : 'islands#redCircleDotIcon'
					}
				}
			}
		})
		let json = { 
		   "type":"FeatureCollection",
		   "features": markers
		}
		
		let polyline = [
            ...data.map((e, i) => e.field_coords.split(',').map(e => Number(e.trim())))
        ]
		
		//console.log(polyline)
		
		if(markers.length > 0) {
			let eventRedrawMap = new CustomEvent('redrawMap', {'detail': {json, polyline}})
			document.dispatchEvent(eventRedrawMap)
		}
	}
	
	Vue.directive('click-outside', {
	  bind: function (el, binding, vnode) {
		el.clickOutsideEvent = function (event) {
		  // here I check that click was outside the el and his children
		  if (!(el == event.target || el.contains(event.target))) {
			// and if it did, call method provided in attribute value
			vnode.context[binding.expression](event);
		  }
		};
		document.body.addEventListener('click', el.clickOutsideEvent)
	  },
	  unbind: function (el) {
		document.body.removeEventListener('click', el.clickOutsideEvent)
	  },
	})
	
	const LS = window.localStorage
	
	const myRouteStartPointsList = [
		{coords: [55.826296, 37.637650], name: 'Арка Главного входа', address: 'Москва, ВДНХ, Арка Главного входа'},
		{coords: [], name: 'КПП «1-й Лихоборский»', address: 'Москва, ВДНХ, КПП «1-й Лихоборский»'},
		{coords: [], name: 'КПП «1-й Северный»', address: 'Москва, ВДНХ, КПП «1-й Северный»'},
		{coords: [], name: 'КПП «2-й Северный»', address: 'Москва, ВДНХ, КПП «2-й Северный»'},
		{coords: [], name: 'КПП «Совхозный»', address: 'Москва, ВДНХ, КПП «Совхозный»'},
		{coords: [], name: 'КПП «Хованский»', address: 'Москва, ВДНХ, КПП «Хованский»'},
		{coords: [], name: 'Арка Северного входа', address: 'Москва, ВДНХ, Арка Северного входа'},
		{coords: [], name: 'Арка Южного входа', address: 'Москва, ВДНХ, Арка Южного входа'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны Ботанической улицы', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны Ботанической улицы'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны Дворцового (Останкинского) пруда', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны Дворцового (Останкинского) пруда'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны остановки «Улица Академика Комарова»', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны остановки «Улица Академика Комарова»'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны телецентра', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны телецентра'},
		{coords: [], name: 'Главный вход в парк «Останкино» со стороны музея-усадьбы', address: 'Москва, ВДНХ, Главный вход в парк «Останкино» со стороны музея-усадьбы'}
	]
	
	new Vue({
		el: '#v-search-root',
		name: 'ROUTE PAGE',
		data: function() {
			return {
				isSearchShowlist: true,
				isFullWidthLayout: LS.getItem('isFullWidthLayout') !== null ? JSON.parse(LS.getItem('isFullWidthLayout')).isFullWidthLayout : false,
				items: [],
				searchParams: {
					action: '/ajax',
					query: new URLSearchParams(window.location.search).get('searchfor') || '',
					city: new URLSearchParams(window.location.search).get('city') || '',
					ids: ''
				},
				emptyAnswer: false,
				sortType: '0',
				clientsCount: isNaN(Number(new URLSearchParams(window.location.search).get('clientscount'))) ? 1 : Number(new URLSearchParams(window.location.search).get('clientscount')),
				range: {
					start: new Date(new URLSearchParams(window.location.search).get('dts')) || new Date(),
          			end: new Date(new URLSearchParams(window.location.search).get('dte')) || new Date(new Date().setDate(new Date().getDate() + 1))
				},
				isLoading: false,
				isCitySwitcherShow: false,
				cities: [],
				citySwitcherFilter: '',
				goodToKnow: [],
				helpfull: [],
				pageGallery: [],
				activeRoute: {
					paths: [],
					common: {
						duration: '',
						distance: ''
					}
				},
				myRouteStartPoint: null,
				myRouteStartPointsList: myRouteStartPointsList,
				isMyRouteStartPointsListActive: false,
				myRouteStartPoint: null,
			}
		},
		watch: {
			isFullWidthLayout(v) {
				LS.setItem('isFullWidthLayout', JSON.stringify({isFullWidthLayout: this.isFullWidthLayout}))
			},
			myRouteStartPoint: {
				deep: true,
				handler: function(v) {
					try {
						this.activeRoute = drawRoute(getRoutePoints(this.items, v), this.myRouteStartPoint)
					} catch(e) {
						console.log(e)
					}
				}
			}
		},
		computed: {
			myRoutePaidItems() {
				return this.items.filter(e => e.field_prices > 0)
			},
			myRoutePaidLink() {
				if(this.myRoutePaidItems.length > 0) {
					const baseURL = 'https://vdnh.ru/selections/kupit-bilet/?show_ticket_widget=Y&tickets='
					const ticketsIDs = this.myRoutePaidItems.map(e => e.field_vdnh_tickets).join()
					return baseURL + ticketsIDs
				}
				return '#'
			},
			citySwitcherFilteredList() {
				return this.cities.filter(e => e.city.toLowerCase().includes(this.citySwitcherFilter.toLowerCase()))
			},
			filteredList() {
				switch(this.sortType) {
					case 'priceUp':
						return this.items.sort((a, b) => a.min_price - b.min_price)
						break
					case 'priceDown':
						return this.items.sort((a, b) => b.min_price - a.min_price)
						break
					default:
						return this.items.filter(e => e.field_dot_isinactive != '1')
						break
				}
			},
			myRouteFullDurationText() {
				const myRouteItemsDuration = this.items.reduce((a, b) => a + (b.field_event_duration ? Number(b.field_event_duration) : 0), 0)
				if(this.activeRoute.common.duration.value) {
					const fullTime = (myRouteItemsDuration * 60 * 60 + this.activeRoute.common.duration.value) / 60 / 60
					const hours = Math.trunc(fullTime)
					const minutes = Math.round(((fullTime - hours) % 1) * 60)
					return hours > 0 ? `${hours}ч ${minutes}мин` : `${minutes}мин`
				}
				return myRouteItemsDuration
			},
			myRouteStartPointText() {
				if(this.myRouteStartPoint) return this.myRouteStartPoint.name
				return 'Откуда построить маршрут?'
			},
			myRoutePointsCountText() {
				let count = this.items.length
				if(count == 1) {
					return count + ' точка'
				}
				if(count > 1 && count < 5) {
					return count + ' точки'
				}
				if(count > 4) {
					return count + ' точек'
				}
				return count
			},
		},
		methods: {
			setMyRouteStartPoint(item) {
				this.myRouteStartPoint = item
				this.isMyRouteStartPointsListActive = false
			},
			myRouteStartPointsListActiveClickOutside() {
				if(this.isMyRouteStartPointsListActive) this.isMyRouteStartPointsListActive = false
			},
			myRouteItemImgSrc(item) {
				if(item && item.field_gallery && item.field_gallery.length > 0) return `/site/data/images/medium/${item.field_gallery[0]}`
				return `/site/data/images/medium/${item.field_image}`
			},
			myRouteItemPriceText(price) {
				if(price === 0) return 'бесплатно'
				if(price > 0) return `от ${price} ₽`
				return ''
			},
			myRouteItemWorkloadClass(percent) {
				if(percent) {
					let pc = Number(percent)
					if(pc > 0 && pc < 30) {
						return 'workload-icon--low'
					}
					if(pc >= 30 && pc < 70) {
						return 'workload-icon--md'
					}
					if(pc >= 70) {
						return 'workload-icon--high'
					}
				}
				return 'workload-icon--low'
			},
			myRouteItemWorkloadText(percent) {
				if(percent) {
					let pc = Number(percent)
					if(pc > 0 && pc < 30) {
						return 'свободно'
					}
					if(pc >= 30 && pc < 70) {
						return 'средняя загруженность'
					}
					if(pc >= 70) {
						return 'тесно'
					}
				}
				return 'свободно'
			},
			myRouteItemDurationText(duration) {
				if(!duration) return ''
				return `+ ${duration} ч.`
			},
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			inputHandler: function() {
				const _this = this
				debounce(function() {
					_this.ftch(`query=${ _this.searchParams.query}`, _this.searchParams.action)
				}, 500)()
			},
			getAjax(q, va) {
				this.isLoading = true
				//console.log(a + '?' + s + '&json=yes')
				fetch('/ajax?' + q + '&json=yes')
					.then(e => e.text())
					.then(r => {
						let data = (JSON.parse(jQuery(r).find('#ajax-answer').attr('data-answer'))).map(e => ({...e, concurency: 1, min_price: e.field_prices ? e.field_prices.split(',').map(e => Number(e)).sort()[0] : 0}))
						this.emptyAnswer = jQuery(r).find('#ajax-answer').attr('data-empty') ? true : false
						let dataGal = data.map(e => {
							let gl = jQuery(e.field_gallery)
							let items = []
							if (gl.length > 0) {
								for (let i = 0; i < gl.length; i++) {
									if (jQuery(gl[i]).is('img')) items.push(gl[i])
								}
							}
							return {...e, field_gallery: items}
						})
						console.log(dataGal)
						this[va] = dataGal //-----------------------------------
						
						const _this = this
						setTimeout(function() {
							_this.isLoading = false
							jQuery('.obj-cards__list').slick({
								slidesToShow: 2,
								slidesToScroll: 2
							})
						}, 300)
						
				})
			},
			ftch(s, a) {
				//console.log(a + '?' + s)
				this.isLoading = true
				//console.log(a + '?' + s + '&json=yes')
				fetch(a + '?' + s + '&json=yes')
					.then(e => e.text())
					.then(r => {
						let data = (JSON.parse(jQuery(r).find('#ajax-answer').attr('data-answer'))).map(e => ({...e, concurency: 1, min_price: e.field_prices ? e.field_prices.split(',').map(e => Number(e)).sort()[0] : 0}))
						this.emptyAnswer = jQuery(r).find('#ajax-answer').attr('data-empty') ? true : false
						let dataGal = data.map(e => {
							let gl = jQuery(e.field_gallery)
							let items = []
							if (gl.length > 0) {
								for (let i = 0; i < gl.length; i++) {
									if (jQuery(gl[i]).is('img')) items.push(gl[i])
								}
							}
							return {...e, field_gallery: items}
						})
						this.items = dataGal //-----------------------------------
						this.setSliders()
						const _this = this
						setTimeout(function() {_this.isLoading = false}, 300)
						//setTimeout(redrawMap(_this.items), 100)	//---------------------
						this.activeRoute = drawRoute(getRoutePoints(this.items, this.myRouteStartPoint), this.myRouteStartPoint)
					})
			},
			setSliders() {
				setTimeout(function() {
					const sliders = jQuery('.search-card')
					for (let i = 0; i < sliders.length; i++) {
						let gal = jQuery(sliders[i]).find('.search-card__gallery')
						if(jQuery(gal).children('.search-card__gallery-item').length > 1) {
							//console.log(jQuery(sliders[i]).find('.search-card__info').html(), jQuery(gal).children())
							gal.slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: true,
								swipe: false,
								dots: true,
								responsive: [
									{
										breakpoint: 768,
										settings: {
											swipe: true,
											
										}
									}
								]
							})
						}
					}
				}, 100)
			}
		},
		mounted() {
			const _this = this
			
			if(jQuery('.city-switcher__list').length > 0) {
				this.city = jQuery('.city-switcher__list').attr('data-cityalias')
				this.cities = JSON.parse(jQuery('.city-switcher__list').attr('data-json'))
			}
			this.searchParams.action = this.$el.dataset.findInset ? window.location.pathname : '/ajax'
			this.searchParams.ids = this.$el.dataset.ids.trim()
			
			let gtk = this.$el.dataset.gtk
			if(gtk) {
				_this.getAjax('ids=' + gtk, 'goodToKnow')
			}
			
			let hfull = this.$el.dataset.hfull
			if(hfull) {
				_this.getAjax('ids=' + hfull, 'helpfull')
			}
				
			let pageGallery = jQuery(this.$refs.galleryData).find('img')
			this.$refs.galleryData.remove()
			if (pageGallery.length > 0) {
				for (let i = 0; i < pageGallery.length; i++) {
					this.pageGallery.push(pageGallery[i].src)
				}
			}
			
			$('.route-images-nav').on('init', function(e) {
				
			})
			
			setTimeout(function() {
				
				let slideCount = 0
				$('.route-images').on('init reInit', function (event, slick, currentSlide, nextSlide) {
					slideCount = slick.slideCount
				})
									  
				$('.route-images').slick({
					arrows: false,
					//infinite: false,
					asNavFor: $('.route-images-nav')
				})
				
				$('.route-images-nav').slick({
					arrows: false,
					slidesToShow: 5,
					slidesToScroll: 1,
					asNavFor: $('.route-images'),
					infinite: true,
					centerMode: true
				})
				$('.route-image-nav').on('click', function() {
					let index = Number($(this).attr('data-slick-index'))
					let cIx = index < 0 && index < slideCount ? slideCount + index : index >= slideCount ? index % slideCount : index
					$('.route-images').slick('slickGoTo', index)
				})
				
			}, 100)
			
			
			ymaps.ready(function() {
				_this.ftch('ids=' + _this.searchParams.ids, _this.searchParams.action)
			})
			
		}
	})
	
	function drawRoute(points = [], isWithStartPoint = false) {
		try {
			if(!window.vdnhMap) {
				console.log('no map')
				initMap2()
			}

			let multiRoute = new ymaps.multiRouter.MultiRoute({
				referencePoints: points,
				params: {
					routingMode: 'pedestrian'
				}
			}, {
				//wayPointIconPreset: 'islands#redCircleIcon',
        		wayPointIconFillColor: "#f91942",
				wayPointStartIconFillColor: "#f91942",
				wayPointFinishIconFillColor: "#f91942",
				//viaPointIconFillColor: "#333333",
				//wayPointStartIconLayout: 'islands#blueCircleIcon',
				boundsAutoApply: true,
				routeActiveMarkerVisible: false,
				routeOpenBalloonOnClick: false
			})
 
			let routeData = {
				paths: [],
				common: {
					distance: '',
					duration: ''
				}
			}

			multiRoute.model.events.add('requestsuccess', function() {
				let activeRoute = multiRoute.getActiveRoute();
				let activeRoutePaths = activeRoute.getPaths(); 
				
				routeData.common.distance = activeRoute.properties.get("distance").text
				routeData.common.duration = activeRoute.properties.get("duration")
				
				activeRoutePaths.each(function(path) {
					//console.log(path.properties)
					routeData.paths.push({distance: path.properties.get("distance").text, duration: path.properties.get("duration")})
				})
				
				const walkPreset = {
					strokeWidth: 3,
					strokeColor: "#336af7",
					strokeStyle: "dot"
				}
				
				const startPreset = {
					strokeWidth: 3,
					strokeColor: "#f91942",
					strokeStyle: "dot"
				}
				
				for (let i = 0; i < activeRoute.getPaths().getLength(); i++) {
					const way = activeRoute.getPaths().get(i)
					const segments = way.getSegments()
					for (let j = 0; j < segments.getLength(); j++) {
						//console.log(i)
						if(!!isWithStartPoint && i == 0) {
							segments.get(j).options.set({ preset: startPreset })
						} else {
							segments.get(j).options.set({ preset: walkPreset })
						}
					}
				}
				
				const routePoints = multiRoute.getWayPoints()
				
				for(let i = 0; i < routePoints.getLength(); i++) {
					const wayPoint = routePoints.get(i)
					if(!!isWithStartPoint) {
						if(i == 0) {
							wayPoint.options.set({
								preset: "islands#redCircleIcon",
								iconContentLayout: ymaps.templateLayoutFactory.createClass(
									`<span class="vmap-point vmap-point--start" style="font-family: 'Rubik', sans-serif;">S</span>`
								)
							})
						} else {
							wayPoint.options.set({
								preset: "islands#blueCircleIcon",
								iconContentLayout: ymaps.templateLayoutFactory.createClass(
									`<span class="vmap-point vmap-point--${i}" style="font-family: 'Rubik', sans-serif;">${i}</span>`
								)
							})
						}
					} else {
						wayPoint.options.set({
							preset: "islands#blueCircleIcon",
							iconContentLayout: ymaps.templateLayoutFactory.createClass(
								`<span class="vmap-point vmap-point--${i + 1}" style="font-family: 'Rubik', sans-serif;">${i + 1}</span>`
							)
						})
					}
				}
				
			})

			vdnhMap.geoObjects.removeAll()
			vdnhMap.geoObjects.add(multiRoute)
			return routeData
		} catch(e) {
			console.log(e)
		}
	}
	
	async function initMap2() {
		console.log('map init2')
		window.vdnhMap = new ymaps.Map('vdnhmap', {
			center: [55.830572, 37.631125],
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		})
	}
	
	function getRoutePoints(items = [], start = null) {
		let res = []
		
		if(start) {
			if(start.coords.length == 2) {
				res.push(start.coords)
			} else {
				res.push(start.address)
			}
		}
		
		res = [...res, ...items
			.filter(e => {
				//nsole.log(e.id, e.field_coords)
				if(e.field_coords) return true
				console.log('No coords: ', e.id)
			})
			.map(e => {
				return e.field_coords.split(',').map(x => Number(x.trim()))
			})
		]
		//console.log(res)
		return res
	}
	
})