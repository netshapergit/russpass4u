document.addEventListener('DOMContentLoaded', function() {
	
	const debounce = (f, t) => {
		return function (args) {
			let previousCall = this.lastCall;
			this.lastCall = Date.now();
			if (previousCall && ((this.lastCall - previousCall) <= t)) {
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
		console.log(data)
		let filteredData = data.filter(e => e.field_coords.split(',').length == 2)
		let markers = filteredData.map((e, i) => {
			//if(e.field_coords && e.field_coords.split(',').length == 2) {
				let coords = e.field_coords.split(',').map(e => Number(e.trim()))
				return {
					"type":"Feature",
					"id": e.created_at,
					"geometry": { 
						"type":"Point",
						"coordinates":coords
					},
					"properties":{ 
						"iconContent": `<strong>${e.field_prices.split(',')[0]}₽</strong>`,
						"balloonContentHeader":`<div class="baloon-header" style="font-family: 'Ubuntu', sans-serif; padding-left: 7px; max-width: 200px; margin: auto; text-transform: uppercase">${e.field_header.trim()}</div>`,
						"balloonContentBody": `<div class="baloon-body">${e.field_gallery[0] ? `<img style="object-fit: cover; border-radius: 4px; width: 200px; height: 140px;" src="${e.field_gallery[0].src}">` : ''}
													${e.field_prices ? `<p style="margin-top: 15px; display: flex; align-items: center">
														<span class="baloon-icon" style="margin-right: 5px; display: flex;">
															<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>
															</svg>
														</span>
														от ${e.field_prices.split(',')[0]}₽
													</p>` : ''}
												</div>`,
						"balloonContentFooter": `<div style="font-family: 'Ubuntu', sans-serif; padding-left: 17px;"><a class="mbtn" style="padding: 10px 20px; width: 200px; text-align: center" href="${e.path}">Подробнее</a></div>`,
						"clusterCaption":`${e.field_header.trim()}`,
						"balloonContentLayout": "idplace-baloon"
					},
					"options": {
						"preset": e.field_prices ? 'islands#redStretchyIcon' : 'islands#redCircleDotIcon'
					}
				}
			//}
		})
		console.log(markers)
					
			let json = { 
			   "type":"FeatureCollection",
			   "features": markers
			}


			let eventRedrawMap = new CustomEvent('redrawMap', {'detail': json})
			document.dispatchEvent(eventRedrawMap)
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
	
	let autocompleteItems = window.TAGS_CLOUD.map(e => ({text: e}))
	
	new Vue({
		el: '#v-search-root',
		data: function() {
			return {
				tag: '',
				tags: [],
				autocompleteItems,
				isSearchShowlist: true,
				isFullWidthLayout: LS.getItem('isFullWidthLayout') !== null ? JSON.parse(LS.getItem('isFullWidthLayout')).isFullWidthLayout : false,
				items: [],
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
				searchSelectedCat: new URLSearchParams(window.location.search).get('cat') || null
			}
		},
		watch: {
			tags(v) {
				this.tagsChangedHandler()
			},
			isFullWidthLayout(v) {
				LS.setItem('isFullWidthLayout', JSON.stringify({isFullWidthLayout: this.isFullWidthLayout}))
			},
			selectedCity(v) {
				this.ftch(`query=${this.searchParams.query}&city=${v.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}&tags=${this.searchParams.tags}`, this.searchParams.action)
			},
			searchSelectedCat(v) {
				this.ftch(`query=${this.searchParams.query}&city=${this.selectedCity.city_id || this.searchParams.city}&cat=${this.searchSelectedCat || this.searchParams.cat}&tags=${this.searchParams.tags}`, this.searchParams.action)
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
			tagsChangedHandler() {
				const _this = this
				_this.ftch(`query=${_this.searchParams.query}&city=${_this.selectedCity.city_id || _this.searchParams.city}&cat=${_this.searchSelectedCat || _this.searchParams.cat}&tags=${_this.tags.map(e => e.text).join(',')}`, _this.searchParams.action)
			},
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			inputHandler: function() {
				const _this = this
				debounce(function() {
					_this.ftch(`query=${_this.searchParams.query}&city=${_this.selectedCity.city_id || _this.searchParams.city}&cat=${_this.searchSelectedCat || _this.searchParams.cat}&tags=${_this.searchParams.tags}`, _this.searchParams.action)
				}, 500)()
			},
			ftch(s, a) {
				console.time('Get map items')
				this.isLoading = true
				console.log(a + '?' + s + '&json=yes')
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
						this.items = dataGal
						//this.setSliders()
						const _this = this
						console.timeEnd('Get map items')
						setTimeout(function() {_this.isLoading = false}, 300)
						setTimeout(redrawMap(_this.items), 100)	
						setTimeout(this.startScroll, 100)	
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
			scrollPage() {
				if($(window).width < 768) {
					if($(window).scrollTop() > $(window).height()) {
						$('.search-totop').show(200).css('display', 'flex')
					} else {
						$('.search-totop').hide(200)
					}
				}
				let itemName = location.pathname
				sessionStorage.setItem(itemName, window.scrollY)
			},
			startScroll() {
				let itemName = location.pathname
				let item = sessionStorage.getItem(itemName)
				let lastPage = sessionStorage.getItem('lastPage')
				if(item && lastPage && lastPage.includes(itemName)) {
					window.scrollTo({
						top: item
					});
					console.log('startScroll')
				}
				sessionStorage.setItem('lastPage', location.pathname)
				window.addEventListener('scroll', throttle(this.scrollPage, 100));
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
			}
		},
		mounted() {
			if(jQuery('.city-switcher__list').length > 0) {
				this.city = jQuery('.city-switcher__list').attr('data-cityalias')
				this.cities = JSON.parse(jQuery('.city-switcher__list').attr('data-json'))
			}
			this.searchParams.action = this.$el.dataset.findInset ? window.location.pathname : '/ajax'
			const _this = this
			ymaps.ready(function() {
				_this.ftch(`query=${_this.searchParams.query}&city=${_this.selectedCity.city_id || _this.searchParams.city}&cat=${_this.searchSelectedCat || _this.searchParams.cat}&tags=${_this.searchParams.tags}`, _this.searchParams.action)
				
				window.myMap.geoObjects.each(function(geoObject) {
					console.log(geoObject)
					if (geoObject.properties.get('type') == 'point') {
						console.log(geoObject)
					}
				})
			})
			
			if(jQuery(window).width() < 768) {
				let h1h = $('.search-top h1').height()
				console.log(h1h + 15)
				/*
				jQuery('#v-search-root').css('padding-top', $(window).height() - 155)
				*/
				/*
				$('html, body').scrollTop(h1h + 15)
				
				let st = setTimeout(function() {
					$('html, body').animate({
						scrollTop: 0
					}, 500)
				}, 3000)
				*/
			}
			
			if(new URLSearchParams(window.location.search).get('city')) {
				
				let f = this.cities.find(e => e.city_id == new URLSearchParams(window.location.search).get('city'))
				console.log('ss')
				if(f) {
					this.selectedCity = f
				}
			}
			
			
		}
	})
	
	
})