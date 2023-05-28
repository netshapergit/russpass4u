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
	
	new Vue({
		el: '#citysw',
		data: function() {
			return {
				isCitySwitcherShow: false,
				cities: [],
				citySwitcherFilter: '',
				selectedCity: ''
			}
		},
		computed: {
			citySwitcherFilteredList() {
				return this.cities.filter(e => e.city.toLowerCase().includes(this.citySwitcherFilter.toLowerCase()))
			}
		},
		methods: {
			citySwitchClose() {
				this.isCitySwitcherShow = false
			},
			setCity(cityObj) {
				window.localStorage.setItem('selectedCity', JSON.stringify(cityObj))
			}
		},
		mounted() {
			if(jQuery('.city-switcher__list').length > 0) {
				this.city = jQuery('.city-switcher__list').attr('data-cityalias')
				this.cities = JSON.parse(jQuery('.city-switcher__list').attr('data-json'))
			}
			
		}
	})
	
})