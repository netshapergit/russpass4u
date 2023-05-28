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
	
	const redrawMap = data => {
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
						"balloonContentLayout": "idplace-baloon"
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


			let eventRedrawMap = new CustomEvent('redrawMap', {'detail': json})
			document.dispatchEvent(eventRedrawMap)
	}
	
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
					value: 'турбаза'
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
				{name: 'Кафе', value: 'Кафе'},
				{name: 'Ресторан', value: 'Ресторан'},
				{name: 'Бар', value: 'Бар'}
			],
			food: [
				{name: 'Авторская', value: 'Авторская'},
				{name: 'Азиатская', value: 'Азиатская'},
				{name: 'Восточная', value: 'Восточная'},
				{name: 'Европейская', value: 'Европейская'},
				{name: 'Кавказская', value: 'Кавказская'},
				{name: 'Итальянская', value: 'Итальянская'},
				{name: 'Японская', value: 'Японская'},
				{name: 'Русская', value: 'Русская'}
			],
			other: [
				{name: 'Детская комната', value: 'Детская комната'},
				{name: 'Летняя терраса', value: 'Летняя терраса'},
				{name: 'Живая музыка', value: 'Живая музыка'},
				{name: 'Детское меню', value: 'Детское меню'},
				{name: 'Завтраки', value: 'Завтраки'},
				{name: 'Бизнес-ланч', value: 'Бизнес-ланч'},
				{name: 'Банкеты', value: 'Банкеты'},
				{name: 'Доставка', value: 'Доставка'},
				{name: 'Кейтеринг', value: 'Кейтеринг'}
			],
			stars: [
				{name: '1', value: '1'},
				{name: '2', value: '2'},
				{name: '3', value: '3'}
			]
		},
		places: {
			types: [
				{name: 'Музей', value: 'Музей'},
				{name: 'Театр', value: 'Театр'},
				{name: 'Детская площадка', value: 'Детская площадка'},
				{name: 'Зелёная зона', value: 'Зелёная зона'},
				{name: 'Инфоцентр', value: 'Инфоцентр'},
				{name: 'Остановка', value: 'Остановка'},
				{name: 'Мастерская', value: 'Мастерская'},
				{name: 'Павильон', value: 'Павильон'},
				{name: 'Пикник', value: 'Пикник'},
				{name: 'Пруд', value: 'Пруд'},
				{name: 'Развлечение', value: 'Развлечение'},
				{name: 'Спорт', value: 'Спорт'},
				{name: 'Прокат', value: 'Прокат'},
				{name: 'Сервис', value: 'Сервис'}
			],
			service: [
				{name: 'Wi-fi', value: 'Wi-fi'},
				{name: 'Оплата картой', value: 'Оплата картой'},
				{name: 'Программа лояльности RussPass', value: 'Программа лояльности'},
				{name: 'Зарядить телефон', value: 'Бери заряд'},
				{name: 'Комната матери и ребенка', value: 'Комната матери и ребенка'}
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
				{name: 'Концерты и шоу', value: 'Концерты и шоу'},
				{name: 'Выставка', value: 'Выставка'},
				{name: 'Кинопоказ', value: 'Кинопоказ'},
				{name: 'Выставка', value: 'Выставка'},
				{name: 'Кинопоказ', value: 'Кинопоказ'},
				{name: 'Образование', value: 'Образование'},
				{name: 'Лекции', value: 'Лекции'},
				{name: 'Мастер класс', value: 'Мастер класс'}
			],
			service: [
				{name: 'Wi-fi', value: 'Wi-fi'},
				{name: 'Оплата картой', value: 'Оплата картой'},
				{name: 'Программа лояльности RussPass', value: 'Программа лояльности'}
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
	
	let dataItems = JSON.parse($('.data-pages').attr('data-answer')) || []
	if(!Array.isArray(dataItems)) {
		dataItems = Object.values(dataItems)
	}
	let store = {
		items: []
	}
	
	let dataGal = dataItems.map(e => {
		let gl = e.field_gallery
		let regex = /\/medium\/(.*?)\.(jpg|png)/g;
		let matches_imgs = gl.match(regex);
		
		let items = []
		if(matches_imgs) {
			items = matches_imgs.map(m => m.replace('/medium/', ''))
		}
		return Object.assign(e, {field_gallery: items})
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
						}
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
						},
						stars: {
							type: 'or',
							items: []
						}
					},
					places: {
						type: {type: 'and', items: []},
						service: {type: 'or', items: []}
					},
					excursion: {
						type: {type: 'and', items: []}
					},
					routes1: {
						type: {type: 'and', items: []}
					},
					events: {
						type: {type: 'and', items: []},
						service: {type: 'or', items: []}
					}
				},
				isCatFiltersShow: false,
				isAppLoaded: false,
				pageItems: [],
				pageNumber: 1,
				isMapLoaded: false,
				myRouteItems: qstore.state.myRoute.items,
				myRoutePlanItems: qstore.state.myRoute.planItems
			}
		},
		components: {
		  	VueSlider: window['vue-slider-component']
		},
		watch: {
			isFullWidthLayout(v) {
				LS.setItem('isFullWidthLayout', JSON.stringify({isFullWidthLayout: this.isFullWidthLayout}))
			},
			selectedCity(v) {
				//this.ftch(`query=${this.searchParams.query}&city=${v.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}`, this.searchParams.action)
			},
			searchSelectedCat(v) {
				//this.ftch(`query=${this.searchParams.query}&city=${this.selectedCity.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}`, this.searchParams.action)
			},
			selectedCatFilters: {
			  	deep: true,
				handler() {
					this.filterItems()
			  	}
			},
			selectedCity: {
				deep: true,
				handler(v) {
					this.filterItems()
					this.setCity(v)
					if(this.isMapLoaded) {
						this.showOnMap(v.city_item.field_coords)
					}
					//this.ftch(`query=${this.searchParams.query}&city=${v.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}`, this.searchParams.action)
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
				//console.log('setPageItems', this.filteredItems.filter(e => e.field_header.toLowerCase().includes('павиль')))
			},
			setCity(cityObj) {
				window.localStorage.setItem('selectedCity', JSON.stringify(cityObj))
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
				/*
				const cards = jQuery('.search-card')
				for(let i = 0; i < cards.length; i++) {
					let title = jQuery(cards[i]).find('.search-card__title').text()

					if(title.toLowerCase().includes(q.toLowerCase())) {
						jQuery(cards[i]).show()
					} else {
						jQuery(cards[i]).hide()
					}
				}
				*/
				console.log(LID)
				let nested = []
				
				switch(LID) {
					case '38':
						nested = nestedFilter(this.items, this.selectedCatFilters.events)
						break;
					case '37':
						//console.log('filterItemsBeforeNested', this.items.filter(e => e.field_header.toLowerCase().includes('павиль')))
						nested = nestedFilter(this.items, this.selectedCatFilters.places)
						//console.log('filterItemsAfterNested', nested.filter(e => e.field_header.toLowerCase().includes('павиль')))
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
				
				//console.log(this.selectedCatFilters.common.price.range[0], this.selectedCatFilters.common.price.range[1])
				_this.filteredItems = nested.filter(e => e.field_header.toLowerCase().includes(q.toLowerCase()) && Number(e.field_prices) >= this.selectedCatFilters.common.price.range[0] && Number(e.field_prices) <= this.selectedCatFilters.common.price.range[1])
				//console.log('filterItems', this.filteredItems.filter(e => e.field_header.toLowerCase().includes('павиль')))
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
						if(!jQuery(elms[i]).hasClass('is-active')) {
							if(jQuery(elms[i]).find('.search-card__gallery-item').length > 1) {
								new Splide(elms[i], {
									type: 'loop',
									pagination: false//,
									//lazyLoad: 'sequential'
								}).mount()
							}
						}
					}
				}, 100)
			},
			showOnMap(coords) {
				let arrCoords = coords.split(',').map(e => Number(e.trim()))
				myMap.setCenter(arrCoords, 16)
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
			pageScrollBehavior() {
				let bottomOfWindow = document.documentElement.scrollTop + window.innerHeight > document.documentElement.offsetHeight - 300				
			 	if (bottomOfWindow) {
					console.log(this.filteredItems.length / 20, this.pageNumber)
					if(this.filteredItems.length / 20 > this.pageNumber) {
						this.pageNumber++
					}
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
			})
			this.maxPrice()
			_this.setSliders()
			this.isAppLoaded = true
			
			window.addEventListener('scroll', throttle(_this.pageScrollBehavior, 100))
			
			if(window.localStorage.getItem('pageNumber')) {
				let pageNumberData = JSON.parse(window.localStorage.getItem('pageNumber'))
				let currentPage = pageNumberData.find(e => e.name == window.location.pathname)
				if(currentPage) {
					this.pageNumber = currentPage.value
				}
			}
			
			if(this.searchParams.tags) {
				this.tags = this.searchParams.tags.split(',').map(e => ({text: e}))
			}
			
			if(new URLSearchParams(window.location.search).get('city')) {
				let f = this.cities.find(e => e.city_id == new URLSearchParams(window.location.search).get('city'))
				if(f) {
					this.selectedCity = f
				}
			}
			
		}
	})
	
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