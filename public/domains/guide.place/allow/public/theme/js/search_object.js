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
						"iconContent": `<strong>${e.field_prices.split(',')[0]}₽</strong>`,
						"balloonContentHeader":`<div class="baloon-header" style="font-family: 'Ubuntu', sans-serif; padding-left: 7px; max-width: 200px; margin: auto; text-transform: uppercase"><a href="${e.path}">${e.field_header.trim()}</a></div>`,
						"balloonContentBody": `<div class="baloon-body">${e.field_gallery[0] ? `<img style="object-fit: cover; border-radius: 4px; width: 200px; height: 140px;" src="${e.field_gallery[0].src}">` : ''}
												${e.field_prices ? `<p style="margin-top: 15px; display: flex; align-items: center">
														<span class="baloon-icon" style="margin-right: 5px; display: flex;">
															<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>
															</svg>
														</span>
														от ${e.field_prices.split(',')[0]}₽/сутки
													</p>` : ''}
												</div>`,
						"balloonContentFooter": `<div style="font-family: 'Ubuntu', sans-serif; padding-left: 17px;"><a class="mbtn" style="padding: 10px 20px; width: 200px; text-align: center" href="${e.path}">Подробнее</a></div>`,
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
	});
	
	const LS = window.localStorage
	
	function parseObject(str, d = {}) {
		try {
			if(str) {
				return JSON.parse(str)
			}
			return d
		} catch(e) {
			console.log(e)
			return d
		}
	}
	
	const generateGallery = e => {
		let gl = e.field_gallery
		let regex = /\/medium\/(.*?)\.jpg/g;
		let matches_imgs = gl.match(regex);
		
		let items = []
		if(matches_imgs) {
			items = matches_imgs.map(m => m.replace('/medium/', ''))
		}
		return Object.assign(e, {field_gallery: items})
	}
	
	const pageData = parseObject(document.querySelector('#v-search-root').dataset.pageitem)
	document.querySelector('#v-search-root').dataset.pageitem = null
	const pageItem = generateGallery(pageData)
	
	new Vue({
		el: '#v-search-root',
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
				pageItem: pageItem,
				myRouteItems: qstore.state.myRoute.items
			}
		},
		watch: {
			isFullWidthLayout(v) {
				LS.setItem('isFullWidthLayout', JSON.stringify({isFullWidthLayout: this.isFullWidthLayout}))
			}
		},
		computed: {
			pageItemTicketsLink() {
				if(this.pageItem.field_vdnh_tickets) {
					const baseURL = 'https://vdnh.ru/selections/kupit-bilet/?show_ticket_widget=Y&tickets='
					return baseURL + this.pageItem.field_vdnh_tickets
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
			}
		},
		methods: {
			addItemToMyRoute() {
				if(this.pageItem) {
					qstore.addItemToMyRoute(this.pageItem)
				}
			},
			removeItemFromMyRouteById() {
				if(this.pageItem) {
					qstore.removeItemFromMyRouteByID(this.pageItem.id)
				}
			},
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			inputHandler: function() {
				const _this = this
				debounce(function() {
					//_this.ftch(`query=${ _this.searchParams.query}`, _this.searchParams.action)
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
						setTimeout(redrawMap(_this.items), 100)	//---------------------
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
					infinite: false,
					asNavFor: $('.route-images-nav')
				})
				
				$('.route-images-nav').slick({
					arrows: false,
					slidesToShow: 5,
					slidesToScroll: 1,
					asNavFor: $('.route-images'),
					infinite: false,
					centerMode: true
				})
				$('.route-image-nav').on('click', function() {
					let index = Number($(this).attr('data-slick-index'))
					let cIx = index < 0 && index < slideCount ? slideCount + index : index >= slideCount ? index % slideCount : index
					$('.route-images').slick('slickGoTo', index)
				})
				
			}, 100)
			
			
			ymaps.ready(function() {
				//_this.ftch('ids=' + _this.searchParams.ids, _this.searchParams.action)
			})
			
		}
	})
	
})