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
	
	function throttle(fn, wait) {
	  let time = Date.now();
	  return function() {
		if ((time + wait - Date.now()) < 0) {
		  fn();
		  time = Date.now();
		}
	  }
	}
	
	
	
	const redrawMap = (data, fireEvent = true) => {
		//console.log(data)
		let filteredData = data.filter(e => e.field_coords.split(',').length == 2)
		let markers = filteredData.map((e, i) => {
			//if(e.field_coords && e.field_coords.split(',').length == 2) {
				let coords = e.field_coords.split(',').map(n => Number(n.trim()))
				if(coords.some(c => isNaN(c))) {
					console.log('Bad coords: id ', e.id, e.field_coords)
					coords = [53, 53]
				} 
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
						"balloonContentLayout": "idplace-baloon",
						"data": {
							"object_id": e.id
						}
					},
					"options": {
						"preset": e.field_prices ? 'islands#redStretchyIcon' : 'islands#redCircleDotIcon'
					}
				}
			//}
		})
		console.info(`%cMap is redrawed: ${markers.length} elements`, 'color: lightgreen;');
					
			let json = { 
			   "type":"FeatureCollection",
			   "features": markers
			}

			if(fireEvent) {
				let eventRedrawMap = new CustomEvent('redrawMap', {'detail': json})
				document.dispatchEvent(eventRedrawMap)
			}
			return json
	}
	
	const logMap = msg => console.log(`%cMap log: ${msg}`, 'color: lightskyblue;');
	
	if (!Object.fromEntries) {
		Object.fromEntries = function (entries){
			if (!entries || !entries[Symbol.iterator]) { throw new Error('Object.fromEntries() requires a single iterable argument'); }
			let obj = {}
			for (let [key, value] of entries) {
				obj[key] = value
			}
			return obj
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
	});
	
	const LS = window.localStorage
	
	const catFilters = {
		hotels: {
			types: [
				{
					name: 'хостел',
					value: 'хостел'
				},
				{
					name: 'гостиница',
					value: 'гостиница'
				},
				{
					name: 'Отель',
					value: 'Отель'
				},
				{
					name: 'гостевой дом',
					value: 'гостевой дом'
				},
				{
					name: 'Турбаза',
					value: 'Турбаза'
				}
			],
			food: [
				{
					name: 'ресторан',
					value: 'ресторан'
				},
				{
					name: 'бар',
					value: 'бар'
				},
				{
					name: 'завтрак',
					value: 'завтрак'
				},
				{
					name: 'шведский стол',
					value: 'шведский стол'
				}
			],
			stars: [
				{name: '1', value: '1'},
				{name: '2', value: '2'},
				{name: '3', value: '3'},
				{name: '4', value: '4'},
				{name: '5', value: '5'}
			]
		},
		restaurants: {
			types: [
				{name: 'кафе', value: 'кафе'},
				{name: 'ресторан', value: 'ресторан'},
				{name: 'бар', value: 'бар'}
			],
			food: [
				{name: 'Итальянская', value: 'Итальянская'},
				{name: 'Японская', value: 'Японская'},
				{name: 'Русская', value: 'Русская'}
			],
			other: [
				{name: 'Детская комната', value: 'Детская комната'},
				{name: 'Летняя терраса', value: 'Летняя терраса'},
				{name: 'Живая музыка', value: 'Живая музыка'}
			]
		},
		places: {
			types: [
				{name: 'Музей', value: 'Музей'},
				{name: 'Театр', value: 'Театр'},
				{name: 'Памятник', value: 'Памятник'},
				{name: 'Парк', value: 'Парк'}
			]
		},
		excursion: {
			types: [
				{name: 'Пешеходная', value: 'Пешеходная'},
				{name: 'Инклюзивные', value: 'Инклюзивные'},
				{name: 'Образование', value: 'Образование'},
				{name: 'Квест', value: 'Квест'},
				{name: 'В музее', value: 'В музее'}
			]
		},
		routes1: {
			types: [
				{name: 'Пешеходный', value: 'Пешеходный'},
				{name: 'На самокате', value: 'На самокате'},
				{name: 'Образование', value: 'Образование'},
				{name: 'Квест', value: 'Квест'},
				{name: 'Романтика', value: 'Романтика'},
				{name: 'В дождь', value: 'В дождь'}
			]
		},
		events: {
			types: [
				{name: 'Фестиваль', value: 'Фестиваль'},
				{name: 'Концерт', value: 'Концерт'}
			]
		}
	}
	
	const filtersVoc = {
		'Количество звезд': 'stars',
		'Тип': 'type',
		'Питание': 'food',
		'Другое': 'other',
		'Кухня': 'food',
		'Удобства': 'service'
	}
				
	const generateFilters = (data) => {
		let gen = data.map(e => {
			if(!e.field_prices || isNaN(Number(e.field_prices))) {
				e.field_prices = 0
			} else {
				e.field_prices = Number(e.field_prices)
			}
			if(e.field_filters) {
				let splittedFilters = e.field_filters.split(';')
				let arr = []
				let parsedFilters = splittedFilters.forEach(b => {
					let sp = b.split(':')
					
					if(sp.length == 2) {
						let og = [filtersVoc[sp[0].trim()], sp[1].split(',').map(n => n.trim())]
						arr.push(og)
					}
				})
				let obj = Object.fromEntries(arr)
				//console.log(obj)
				return Object.assign(e, {filters: obj})
			}
			return Object.assign(e, {filters: {}})
		})
		return gen
	}
				
	const nestedFilter = (targetArray, filters) => {
		
		let filterKeys = Object.keys(filters)
		return targetArray.filter(function(item) {
			return filterKeys.every(function(filterKey) {
				
				if (!item.filters.hasOwnProperty(filterKey) && filters[filterKey].items.length != 0) {
					return false
				}
				
				if (!filters[filterKey].items.length) {
					return true
				}
				
				switch(filters[filterKey].type) {
					case 'and': 
						return filters[filterKey].items.every(e => {
							let itemFilterItemsToLowerCase = item.filters[filterKey].map(n => n.toLowerCase())
							let filtersFilterItemToLowerCase = e.toLowerCase()
							return itemFilterItemsToLowerCase.includes(filtersFilterItemToLowerCase)
						})
						break;
					case 'or': 
						return filters[filterKey].items.some(e => {
							let itemFilterItemsToLowerCase = item.filters[filterKey].map(n => n.toLowerCase())
							let filtersFilterItemToLowerCase = e.toLowerCase()
							return itemFilterItemsToLowerCase.includes(filtersFilterItemToLowerCase)
						})
						break;
					default: 
						break;
				}
				
				
			})
		})
	}
	
	let LID = $('#v-search-root').attr('data-lid')
	
	let dataItems = window.SEARCH_ITEMS || []
	if(!Array.isArray(dataItems)) {
		dataItems = Object.values(dataItems)
	}
	
	let store = {
		items: []
	}
	
	let dataGal = dataItems.map(e => {
		let gl = e.item_data.field_gallery
		let regex = /\/medium\/(.*?)\.(jpg|png)/g;
		let matches_imgs = gl.match(regex);
		
		let items = []
		if(matches_imgs) {
			items = matches_imgs.map(m => m.replace('/medium/', ''))
		}
		return Object.assign(e.item_data, {field_gallery: items, city_id: e.item_city})
	})
	
	store.items = generateFilters(dataGal)
	
	let autocompleteItems = window.TAGS_CLOUD.map(e => ({text: e}))
	
	window.App = new Vue({
		el: '#v-search-root',
		data: function() {
			return {
				tag: '',
				tags: [],
				autocompleteItems,
				isSearchShowlist: true,
				isFullWidthLayout: LS.getItem('isFullWidthLayout') !== null ? JSON.parse(LS.getItem('isFullWidthLayout')).isFullWidthLayout : false,
				items: store.items,
				searchParams: {
					action: '/ajax',
					query: new URLSearchParams(window.location.search).get('query') || '',
					city: new URLSearchParams(window.location.search).get('city') || '',
					cat: new URLSearchParams(window.location.search).get('cat') || '',
					tags: new URLSearchParams(window.location.search).get('tags') || ''
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
				selectedCity: '',
				searchSelectedCat: new URLSearchParams(window.location.search).get('cat') || null,
				filteredItems: [],
				catFilters: catFilters,
				selectedCatFilters: {
					hotels: {
						type: {
							type: 'and',
							items: []
						},
						food: {
							type: 'and',
							items: []
						},
						stars: {
							type: 'or',
							items: []
						},
					},
					common: {
						price: {
							min: 0,
							max: 50000,
							range: [0, 50000],
							format: '{value} ₽'
						}
					},
					restaurants: {
						type: {
							type: 'and',
							items: []
						},
						food: {
							type: 'or',
							items: []
						},
						other: {
							type: 'and',
							items: []
						}
					},
					places: {
						type: {type: 'and', items: []}
					},
					excursion: {
						type: {type: 'and', items: []}
					},
					routes1: {
						type: {type: 'and', items: []}
					},
					events: {
						type: {type: 'and', items: []}
					}
				},
				isCatFiltersShow: false,
				isAppLoaded: false,
				isMapLoaded: false,
				pageItems: [],
				pageNumber: 1,
				radiusFilterIsActive: false,
				radiusFilterItems: [],
				geo: null,
				circleRadius: 1000,
				circleRadiusTooltipFormatter: '{value}м',
				myRouteItems: qstore.state.myRoute.items,
				myRoutePlanItems: qstore.state.myRoute.planItems
			}
		},
		components: {
		  	VueSlider: window['vue-slider-component']
		},
		watch: {
			radiusFilterIsActive: {
				handler(v) {
					console.log(v, 'ffffffff')
					if(v && !this.geo) {
						this.getGeo()
					} else if(v && this.geo) {
						this.showOnMap(this.geo.latitude + ',' + this.geo.longitude)
					}
					this.filterItems()
				}
			},
			circleRadius(v) {
				if(window.circleGeo) {
					window.circleGeo.geometry.setRadius(v)
					this.findInside(window.circleGeo)
				}
			},
			geo(v) {
				//console.log(v)
				ymaps.ready(function() {
					//console.log('geo')
					setGeo(v)
				})
			},
			radiusFilterItems(v) {
				this.filterItems()
			},
			isFullWidthLayout(v) {
				LS.setItem('isFullWidthLayout', JSON.stringify({isFullWidthLayout: this.isFullWidthLayout}))
			},
			selectedCity: {
				deep: true,
				handler(v) {
					this.filterItems()
					this.setCity(v)
					if(this.isMapLoaded) {
						if(v.city_item) {
							this.showOnMap(v.city_item.field_coords)
						}
					}
					//this.ftch(`query=${this.searchParams.query}&city=${v.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}`, this.searchParams.action)
				}
			},
			searchSelectedCat(v) {
				this.filterItems()
				//this.ftch(`query=${this.searchParams.query}&city=${this.selectedCity.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}`, this.searchParams.action)
			},
			selectedCatFilters: {
			  	deep: true,
				handler() {
					this.filterItems()
			  	}
			},
			pageItems(v) {
				this.setSliders()
			},
			filteredItems(v) {
				this.setPageItems()
				this.pageNumber = 1
				redrawMap(v)
			},
			pageNumber(v) {
				this.setPageItems()
				setPageNumberToLS(v)
			},
			tags(v) {
				this.filterItems()
			}
		},
		computed: {
			filteredTags() {
				return this.autocompleteItems.filter(i => {
					return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
				})
			},
			citySwitcherFilteredList() {
				return this.cities.filter(e => e.city.toLowerCase().includes(this.citySwitcherFilter.toLowerCase())).sort((a,b) => a.city.toLowerCase().localeCompare(b.city.toLowerCase()))
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
						return this.items
						break
				}
			}
		},
		methods: {
			isItemInRouteOrPlan(itemId) {
				const isItemInPlan = this.myRoutePlanItems.find(e => e.id == itemId)
				const isItemInRoute = this.myRouteItems.find(e => e.items.find(x => x.id == itemId))
				return isItemInPlan || isItemInRoute
			},
			addItemToMyRoutePlan(item) {
				qstore.addItemToMyRoutePlan(item)
			},
			addItemToMyRoute(item) {
				qstore.addItemToMyRoute(item)
			},
			removeItemFromMyRoutePlanByID(itemId) {
				qstore.removeItemFromMyRoutePlanByID(itemId)
			},
			removeItemFromMyRouteById(itemId) {
				qstore.removeItemFromMyRouteByID(itemId)
			},
			setPageItems() {
				this.pageItems = this.filteredItems.slice(0, 20 * this.pageNumber)
			},
			setCity(cityObj) {
				//window.localStorage.setItem('selectedCity', JSON.stringify(cityObj))
			},
			maxPrice() {
				let itemsWithPrice = this.items.filter(e => e.field_prices != '' && !isNaN(Number(e.field_prices)))
				let sortedItemsWithPrice = itemsWithPrice.sort((a,b) => Number(a.field_prices) - Number(b.field_prices))
				this.selectedCatFilters.common.price.max = sortedItemsWithPrice.length ? Number(sortedItemsWithPrice.reverse()[0].field_prices) : 10000
				if(this.$refs['filter-pricerange']) this.$refs['filter-pricerange'].setValue([0, this.selectedCatFilters.common.price.max])
			},
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			inputHandler: function() {
				const _this = this
				debounce(function() {
					_this.filterItems()
				}, 500)()
			},
			filterItems() {
				//console.log('f')
				const _this = this
				let q = _this.searchParams.query
				
				let nested = []
				
				switch(LID) {
					case '38':
						nested = nestedFilter(this.items, this.selectedCatFilters.events)
						break;
					case '37':
						nested = nestedFilter(this.items, this.selectedCatFilters.places)
						break;
					case '36':
						nested = nestedFilter(this.items, this.selectedCatFilters.restaurants)
						break;
					case '35': 
						nested = nestedFilter(this.items, this.selectedCatFilters.hotels)
						break;
					case '40': 
						nested = nestedFilter(this.items, this.selectedCatFilters.excursion)
						break;
					case '54': 
						nested = nestedFilter(this.items, this.selectedCatFilters.routes1)
						break;
					default:
						console.warn('Filters are not working! Layout ID is not found')
						nested = this.items
						break;
				}
				
				if(this.searchSelectedCat) {
					console.log('F: searchSelectedCat')
					nested = nested.filter(e => e.layout_id == this.searchSelectedCat)
				}
				
				if(this.selectedCity.city_id) {
					console.log('F: selectedCity')
					nested = nested.filter(e => e.city_id == this.selectedCity.city_id)
				} else if(this.searchParams.city) {
					console.log('F: searchParams.city')
					nested = nested.filter(e => e.city_id == this.searchParams.city)
				}
				
				if(this.tags.length > 0) {
					console.log('F: tags')
					nested = nested.filter(e => {
			
						let itemTags = e.field_tags.split(',').map(tag => tag.trim())
									
						return this.tags.every(n => {
							let itemTagsToLowerCase = itemTags.map(m => m.toLowerCase().trim())
							let tagToLowerCase = n.text.toLowerCase().trim()
							//console.log(e.field_header.toLowerCase(),'::', tagToLowerCase)
							return itemTagsToLowerCase.includes(tagToLowerCase) || e.field_header.toLowerCase().includes(tagToLowerCase)
						})
					})
				}
				
				if(this.radiusFilterIsActive) {
					nested = nested.filter(e => this.radiusFilterItems.includes(e.id))
				}
				
				_this.filteredItems = nested//.filter(e => Number(e.field_prices) >= this.selectedCatFilters.common.price.range[0] && Number(e.field_prices) <= this.selectedCatFilters.common.price.range[1])
				
				//redrawMap(_this.filteredItems)
			},
			ftch(s, a) {
				//console.log(a + '?' + s)
				this.isLoading = true
				console.log(a + '?' + s + '&json=yes')
				fetch(a + '?' + s + '&json=yes')
					.then(e => e.text())
					.then(r => {
						let data = (JSON.parse(jQuery(r).find('#ajax-answer').attr('data-answer'))).map(e => Object.assign(e, {concurency: 1, min_price: e.field_prices ? e.field_prices.split(',').map(e => Number(e)).sort()[0] : 0}))
						this.emptyAnswer = jQuery(r).find('#ajax-answer').attr('data-empty') ? true : false
						let dataGal = data.map(e => {
							let gl = jQuery(e.field_gallery)
							let items = []
							if (gl.length > 0) {
								for (let i = 0; i < gl.length; i++) {
									if (jQuery(gl[i]).is('img')) items.push(gl[i])
								}
							}
							return Object.assign(e, {field_gallery: items})
						})
						this.items = dataGal
						this.setSliders()
						const _this = this
						
						setTimeout(function() {_this.isLoading = false}, 300)
						//setTimeout(redrawMap(_this.items), 100)	
						//setTimeout(this.startScroll, 100)	
					})
			},
			setSliders() {
				setTimeout(function() {
					
					const sliders = jQuery('.search-card')
					for (let i = 0; i < sliders.length; i++) {/*
						let gal = jQuery(sliders[i]).find('.search-card__gallery')
						let wrapper = jQuery(sliders[i]).find('.splide__list')
						let href = jQuery(sliders[i]).find('a').attr('href')
						let ch = $(gal.attr('data-gallery'))
						let hoverArea = jQuery(sliders[i]).find('.search-card__hoverareas')
						
						for(let j = 0; j < ch.length; j++) {
							if($(ch[j]).is('img')) {
								let slide = $(`<a href="${href}" class="search-card__gallery-item splide__slide"></a>`).append(ch[j])
								//hoverArea.append(`<div class="search-card__hoverarea"></div>`)
								wrapper.append(slide)
							}
						}
						*/
						//if(jQuery(wrapper).find('.search-card__gallery-item').length > 1) {
							
							
							//new Splide( '.swiper-wrapper' ).mount();
							/*
							const swiper = new Swiper(".search-card__gallery", {
								navigation: {
							    	nextEl: ".swiper-button-next",
							    	prevEl: ".swiper-button-prev",
								},
						  	})
							*/
							/*
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
							*/
						//}
					}
					
				
					let elms = document.getElementsByClassName('splide');
				
					for(let i = 0, len = elms.length; i < len; i++ ) {
						
						if(jQuery(elms[i]).find('.search-card__gallery-item').length > 1) {
							new Splide(elms[i], {
								type   : 'loop',
								pagination: false
							}).mount()
						}
					}
				}, 100)
			},
			showOnMap(coords, zoom = 12) {
				if(!coords) {return false}
				let arrCoords = coords.split(',').map(e => Number(e.trim()))
				logMap('Event: setCenter; Coords:' + coords + '; Zoom: ' + zoom)
				window.myMap.setCenter(arrCoords, zoom)
				if($(window).width() < 768) {
					$('html, body').animate({
						scrollTop: 0
					}, 500)
				}
			},
			scrollToList() {
				$('html, body').animate({
					scrollTop: $(window).height() * 0.75
				}, 500)
			},
			scrollToMap() {
				$('html, body').animate({
					scrollTop: 0
				}, 500)
			},
			loadMore() {
				console.log('load more')
			},
			pageScrollBehavior() {
				let bottomOfWindow = document.documentElement.scrollTop + window.innerHeight > document.documentElement.offsetHeight - 300				
			 	if (bottomOfWindow) {
					console.log(this.filteredItems.length / 20, this.pageNumber)
					if(this.filteredItems.length / 20 > this.pageNumber) {
						this.pageNumber++
					}
			  	}
			},
			getGeo() {
				let options = {
					enableHighAccuracy: true,
					timeout: 5000,
					maximumAge: 0
				}
				const _this = this
				
				navigator.permissions.query({
					 name: 'geolocation'
				 }).then(function(result) {
					 if (result.state == 'granted') {
						 console.log('granted', result)
					 } else if (result.state == 'prompt') {
						 console.log('prompt', result)
					 } else if (result.state == 'denied') {
						 console.log('denied', result)
						 alert('Вы заблокировали опцию сайта определять ваше местоположение!')
					 }
				 });
				
				navigator.geolocation.getCurrentPosition(
					function(pos) {
						let crd = pos.coords
						//console.log('Ваше текущее местоположение:')
						//console.log(`Широта: ${crd.latitude}`)
						//console.log(`Долгота: ${crd.longitude}`)
						//console.log(`Плюс-минус ${crd.accuracy} метров.`)
						_this.geo = crd
						if(_this.radiusFilterIsActive) {
							_this.showOnMap(_this.geo.latitude + ',' + _this.geo.longitude)
						}
					},
					function(err) {
						console.warn(`ERROR(${err.code}): ${err.message}`);
						_this.radiusFilterIsActive = false
					}, options)
				
			},
			findInside(circle) {
				if(this.isMapLoaded) {
					let objects = ymaps.geoQuery(this.geoItems)
					//console.log(circle)
					let objectsInsideCircle = objects.searchInside(circle);
					let itemsInsideRadius = []
					objectsInsideCircle.each(e => itemsInsideRadius.push(e.properties._data.data.object_id))
					this.radiusFilterItems = itemsInsideRadius
					//console.log(objectsInsideCircle)
				}
				//
			},
			mouseOverHandler(objectID) {
				if(this.isMapLoaded) {
					
					let objects = ymaps.geoQuery(window.objectManager.objects)
					//console.log(circle)
					let searchResults = objects.search('properties.data.object_id == ' + objectID);
					console.log(searchResults)
					searchResults.setOptions('preset', 'islands#circleIcon')
					//let itemsInsideRadius = []
					//objectsInsideCircle.each(e => itemsInsideRadius.push(e.properties._data.data.object_id))
					//this.raduisFilterItems = itemsInsideRadius
					//console.log(objectsInsideCircle)
				}
			}
		},
		mounted() {
			if(jQuery('.city-switcher__list').length > 0) {
				this.cities = JSON.parse(jQuery('.city-switcher__list').attr('data-json'))
			}
			let _this = this
			_this.filterItems()
			ymaps.ready(function() {
				_this.isMapLoaded = true
				redrawMap(_this.filteredItems)
				if(_this.selectedCity) {
					_this.showOnMap(_this.selectedCity.city_item.field_coords)
				}
			})
			this.maxPrice()
			_this.setSliders()
			this.isAppLoaded = true
			
			window.addEventListener('scroll', throttle(_this.pageScrollBehavior, 100))
			
			this.geoItems = redrawMap(this.items, false)
			
			if(this.searchParams.tags) {
				this.tags = this.searchParams.tags.split(',').map(e => ({text: e}))
			}
			
			if(new URLSearchParams(window.location.search).get('city')) {
				let f = this.cities.find(e => e.city_id == new URLSearchParams(window.location.search).get('city'))
				if(f) {
					this.selectedCity = f
				}
			}
			
			if(window.localStorage.getItem('pageNumber')) {
				let pageNumberData = JSON.parse(window.localStorage.getItem('pageNumber'))
				let currentPage = pageNumberData.find(e => e.name == window.location.pathname)
				if(currentPage) {
					this.pageNumber = currentPage.value
				}
			}
			
			//this.getGeo()
			
		}
	})
	
	function setGeo(crd) {
		let placemark = new ymaps.Placemark([crd.latitude, crd.longitude], {}, {
			// Задаем стиль метки (метка в виде круга).
			preset: "islands#geolocationIcon",
			// Задаем цвет метки (в формате RGB).
			//iconColor: '#fbff00'
		});
		//console.log(placemark)
		myMap.geoObjects.add(placemark)
		
		window.circleGeo = new ymaps.Circle([[crd.latitude, crd.longitude], 2000], null, { 
			draggable: true,
			fillColor: "#14c5d0",
			fillOpacity: 0.2,
			// Цвет обводки.
			strokeColor: "#14c5d0",
			// Прозрачность обводки.
			strokeOpacity: 0.8,
			// Ширина обводки в пикселях.
			strokeWidth: 3
		})
		
		window.circleGeo.events.add('dragend', function() {
			window.App.findInside(window.circleGeo)
		})
		myMap.geoObjects.add(window.circleGeo);
		window.App.findInside(window.circleGeo)
	}
	
	function setPageNumberToLS(pageNumber) {
		let name = window.location.pathname
		if(window.localStorage.getItem('pageNumber')) {
			let pageNumberData = JSON.parse(window.localStorage.getItem('pageNumber'))
			let currentPage = pageNumberData.findIndex(e => e.name == name)
			if(currentPage != -1) {
				pageNumberData[currentPage].value = pageNumber
				LS.setItem('pageNumber', JSON.stringify(pageNumberData))
			} else {
				pageNumberData.push({name, value: pageNumber})
				LS.setItem('pageNumber', JSON.stringify(pageNumberData))
			}
		} else {
			LS.setItem('pageNumber', JSON.stringify([{name, value: pageNumber}]))
		}
	}
	
	
})