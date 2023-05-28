new Vue({
	el: '#finder',
	data: function() {
		return {
			query: '',
			range: {
				start: new Date(),
				end: new Date(new Date().setDate(new Date().getDate() + 1))
			}
		}
	},
	methods: {
		submitHandler() {
			window.location.href = `${window.location.origin}/search?searchfor=${this.query}&dts=${this.range.start.toISOString()}&dte=${this.range.end.toISOString()}`
		}
	}
})