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
	
	let autocompleteItems = window.TAGS_CLOUD.map(e => ({text: e}))

	window.VUE_COMPONENT_TAGSSEARCH = new Vue({
		el: '#hero-search',
		name: 'Tags search',
		data() {
			return {
				tag: '',
				tags: [],
				autocompleteItems,
				isCitySwitcherShow: false,
				cities: [],
				citySwitcherFilter: '',
				selectedCity: '',
				isCatSelectShow: false,
				searchCat: '' 
			}
		},
		computed: {
			filteredItems() {
				return this.autocompleteItems.filter(i => {
					return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
				})
			},
			searchLink() {
				let tags = []
				let query = []
					
				this.tags.forEach(e => {
					if(this.autocompleteItems.findIndex(n => n.text == e.text) != -1) {
						tags.push(e)
					} else {
						query.push(e)
					}
				})
				return `/search?tags=${tags.map(e => e.text).join(',')}&query=${query.map(e => e.text).join(',')}${this.selectedCity ? '&city=' + this.selectedCity.city_id : ''}${this.searchCat ? '&cat=' + this.searchCat.value : ''}`
			},
			citySwitcherFilteredList() {
				return this.cities.filter(e => e.city.toLowerCase().includes(this.citySwitcherFilter.toLowerCase())).sort((a,b) => a.city.toLowerCase().localeCompare(b.city.toLowerCase()))
			}
		},
		methods: {
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			catSelectClose(v) {
				this.isCatSelectShow = false
			},
			setSearchCat(v) {
				console.log(v)
				this.searchCat = v
			}
		},
		mounted() {
			if(jQuery('.city-switcher__list').length > 0) {
				this.cities = JSON.parse(jQuery('.city-switcher__list').attr('data-json'))
			}
		}
	})

})