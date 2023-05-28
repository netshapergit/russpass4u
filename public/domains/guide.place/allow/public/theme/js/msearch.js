$(document).ready(function() {
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
	
	const filtersVoc = {
		'Количество звезд': 'stars',
		'Тип': 'type',
		'Питание': 'food',
		'Другое': 'other',
		'Кухня': 'food'
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
	
	let dataItems = JSON.parse(JSON.stringify(window.SEARCH_ITEMS)) || []
	/*
	dataItems = dataItems.map(e => {
		e.item_data.field_gallery = ''
		e.item_data.field_image = ''
		return e
	})
	*/
	if(!Array.isArray(dataItems)) {
		dataItems = Object.values(dataItems)
	}
	
	let store = {
		items: []
	}
	
	let dataGal = dataItems.map(e => {
		let gl = []//jQuery(e.item_data.field_gallery)
		let items = []
		if (gl.length > 0) {
			for (let i = 0; i < gl.length; i++) {
				if (jQuery(gl[i]).is('img')) items.push(gl[i])
			}
		}
		return Object.assign(e.item_data, {field_gallery: '', field_image: '', city_id: e.item_city})
	})
	
	store.items = generateFilters(dataGal)
	
	let autocompleteItems = window.TAGS_CLOUD.map(e => ({text: e}))
	
	window.VUE_MSEARCH = new Vue({
		el: '#msearch',
		name: 'mobile-search',
		data: function() {
			return {
				tag: '',
				tags: [],
				autocompleteItems,
				items: store.items,
				searchParams: {
					action: '/ajax',
					query: new URLSearchParams(window.location.search).get('query') || '',
					city: new URLSearchParams(window.location.search).get('city') || ''
				},
				isLoading: false,
				emptyAnswer: false,
				isCitySwitcherShow: false,
				cities: [],
				citySwitcherFilter: '',
				selectedCity: '',
				searchSelectedCat: null,
				isOpened: false
			}
		},
		watch: {
			selectedCity(v) {
				//this.ftch(`query=${this.searchParams.query}&city=${v.city_id || ''}&cat=${this.searchSelectedCat || ''}`, this.searchParams.action)
			},
			searchSelectedCat(v) {
				//this.ftch(`query=${this.searchParams.query}&city=${this.selectedCity.city_id || ''}&cat=${v}`, this.searchParams.action)
			}
		},
		computed: {
			filteredTags() {
				return this.autocompleteItems.filter(i => {
					return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
				})
			},
			citySwitcherFilteredList() {
				return this.cities.filter(e => e.city.toLowerCase().includes(this.citySwitcherFilter.toLowerCase()))
			},
			filteredItems() {
				
				let nested = this.items
				
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
				
				return nested
			},
			searchLink() {
				return `/search?query=${this.searchParams.query}&city=${this.selectedCity.city_id || ''}&cat=${this.searchSelectedCat || ''}&tags=${this.tags.map(e => e.text).join(',') || ''}`
			}
		},
		methods: {
			msearchClose() {
				
			},
			msearchToggle() {
				$('a[href="#open-search"]').toggleClass('active')
				this.isOpened = !this.isOpened
			},
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			inputHandler: function() {
				const _this = this
				debounce(function() {
					//_this.ftch(`query=${ _this.searchParams.query}${_this.selectedCity ? '&city=' + _this.selectedCity.city_id : ''}&cat=${this.searchSelectedCat || ''}`, _this.searchParams.action)
				}, 500)()
			},
			ftch(s, a) {
				//console.log(a + '?' + s)
				this.isLoading = true
				console.log(a + '?' + s + '&json=yes')
				fetch(a + '?' + s + '&json=yes')
					.then(e => e.text())
					.then(r => {
						let data = (JSON.parse(jQuery(r).find('#ajax-answer').attr('data-answer'))).map(e => (Object.assign(e, {concurency: 1, min_price: e.field_prices ? e.field_prices.split(',').map(e => Number(e)).sort()[0] : 0})))
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
						console.log(dataGal)
						this.items = dataGal
						const _this = this
						
						setTimeout(function() {_this.isLoading = false}, 300)
					})
			}
		},
		mounted() {
			if(jQuery('.city-switcher__list').length > 0) {
				//this.city = jQuery('.city-switcher__list').attr('data-cityalias')
				this.cities = JSON.parse(jQuery(this.$el).find('.city-switcher__list').attr('data-json'))
				
			}
			
			if(new URLSearchParams(window.location.search).get('city')) {
				let f = this.cities.find(e => e.city_id == new URLSearchParams(window.location.search).get('city'))
				if(f) {
					this.selectedCity = f
				}
			}
			
			if(this.searchParams.tags) {
				this.tags = this.searchParams.tags.split(',').map(e => ({text: e}))
			}
			
		}
	})
	
})