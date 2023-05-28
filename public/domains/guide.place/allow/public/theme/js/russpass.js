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
	
	const chartOptions = {
		responsive: true,
		maintainAspectRatio: false,
		title: {
			//display: true,
			//text: 'Chart.js Line Chart'
		},
		legend: {
            display: false
        },
		tooltips: {
			mode: 'index',
			intersect: false,
			callbacks: {
				title: function(tooltipItem, data) {
				  	return ''
				},
				label: function(tooltipItem, data) {
					let val = tooltipItem.yLabel
					let res = 'свободно'
					if(val > 30 && val < 70) {
						res = 'средняя загруженность'
					}
					if(val >= 70) {
						res = 'тесно'
					}
					return res
				}
			}
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
			  display: true,
			  categoryPercentage: 0.9,
			  scaleLabel: {
				display: true,
				labelString: 'Часы посещения'
			  }
			}],
			yAxes: [
				{
					display: false,
					scaleLabel: {
						display: true,
						labelString: 'Value'
					},
					ticks: {
						beginAtZero: true
					}
				}
			]
		}
	}
	
	Vue.component('my-bar-chart', {
        extends: VueChartJs.Bar,
        props: ['barData', 'chartOptions'],
        mounted() {
          this.renderChart(this.barData, this.chartOptions);
        },
        watch: {
          barData () {
            console.log('bar data changed')
            this.renderChart(this.barData, this.chartOptions);
        },
          chartOptions () {
            this.renderChart(this.barData, this.chartOptions);
         }
        }
	}, {
        responsive: true,
        maintainAspectRatio: false
 	})
	
	const barsSampleData = [
		{
			name: 'ПН',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'ВТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'СР',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'ЧТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'ПТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'СБ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		},
		{
			name: 'ВС',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					}
				]
			}
		}
	]
	
	const generateRouteQuizQuestions = [
		/*{
			order: 0,
			id: 'stime',
			title: 'Сколько времени',
			type: 'or',
			variants: [
				{
					title: '2 часа',
					value: 2
				},
				{
					title: '3 часа',
					value: 3
				},
				{
					title: '4 часа',
					value: 4
				}
			]
		},
		{
			order: 1,
			id: 'paid',
			title: 'Платные объекты',
			type: 'or',
			variants: [
				{
					title: 'Да',
					value: 1
				},
				{
					title: 'Нет',
					value: 0
				},
				{
					title: 'Не важно',
					value: null
				}
			]
		},*/
		{
			order: 2,
			id: 'count',
			title: 'С кем?',
			type: 'or',
			variants: [
				{
					title: 'Один',
					value: 1
				},
				{
					title: 'Вдвоем',
					value: 2
				},
				{
					title: 'С детьми',
					value: 3
				}
			]
		},
		{
			order: 5,
			id: 'food',
			title: 'Покушать в перерыве',
			type: 'or',
			variants: [
				{
					title: 'Да',
					value: 1
				},
				{
					title: 'Нет',
					value: 0
				}
			]
		},
		{
			order: 6,
			id: 'inoutdoor',
			title: 'Зона проведения',
			type: 'or',
			variants: [
				{
					title: 'В помещении',
					value: 1
				},
				{
					title: 'На улице',
					value: 2
				},
				{
					title: 'Не важно',
					value: null
				}
			]
		},
		{
			order: 3,
			id: 'tags',
			title: 'Что интересно?',
			type: 'and',
			variants: [
				{
					title: 'Лекция',
					value: 'Лекция'
				},
				{
					title: 'Образование',
					value: 'Образование'
				},
				{
					title: 'Концерты и шоу',
					value: 'Концерты и шоу'
				},
				{
					title: 'Выставка',
					value: 'Выставка'
				},
				{
					title: 'Экскурсия',
					value: 'Экскурсия'
				},
				{
					title: 'Природа',
					value: 'Природа'
				},
				{
					title: 'Прогулка',
					value: 'Прогулка'
				},
				{
					title: 'Рыбки',
					value: 'Рыбки'
				},
				{
					title: 'Космос',
					value: 'Космос'
				}
			]
		}
	]
	
	let autocompleteItems = window.TAGS_CLOUD.map(e => ({text: e}))
	
	Vue.component('vselect-move', {
		props: {
			items: {
				default: () => ([])
			},
			day_id: {}
		},
		data: function () {
			return {
				isListOpen: false,
				//myRouteItems: this.items
			}
		},
		template: `
		<div class="vselect vselect--move">
			<div v-if="items.length" class="vselect-trigger vselect-trigger--move" @click.stop="isListOpen = true">
				<div class="vselect-trigger__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z" fill="black"/>
					</svg>
				</div>
			</div>
			<div v-else class="vselect-trigger vselect-trigger--move" @click.stop="addItemToMyRouteFromPlan">
				<div class="vselect-trigger__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z" fill="black"/>
					</svg>
				</div>
			</div>
			<div class="vselect-list" :class="{'vselect-list--active': isListOpen}" v-click-outside="closeList">
				<div class="vselect-list__item" v-for="day in datesList" :key="day.date_id" @click.stop="addItemToMyRouteFromPlan(day.date_id)">
					{{ getDayDate(day.date) }}
				</div>
			</div>
		</div>
		`,
		methods: {
			closeList() {
				this.isListOpen = false
			},
			addItemToMyRouteFromPlan(dayId = false) {
				console.log('vselect addItemToMyRouteFromPlan')
				this.$emit('move-item', dayId)
				this.isListOpen = false
			},
			getDayDate(date) {
				return new Date(date).toLocaleString('default', { month: 'long', day: 'numeric' })
			}
		},
		computed: {
			datesList() {
				if(this.day_id) return this.items.filter(e => e.date_id != this.day_id)
				return this.items
			}
		}
	})
	
	Vue.component('day-add-object', {
		data: function () {
			return {
			  	query: ''
			}
		},
		template: `
		<div class="search-day-add">
			<div class="search-day-add__input">
				<input v-model="query" type="text" class="search-day-add-input" placeholder="Добавить место">
				<button class="search-day-add__input-reset" @click.stop="query = ''" v-show="query">
					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none"><path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#2D2727"></path></svg>
				</button>
			</div>
			<div class="search-day-add-list" :class="{'search-day-add-list--active': list.length}">
				<div class="search-day-add-list__item" v-for="sdai in list">
					{{ sdai.item_data.field_header }}
					<button @click.stop="$emit('add-day-object', sdai.item_data)" class="search-day-add-list__item-btn rbtn">+</button>
				</div>
			</div>
		</div>
		`,
		computed: {
			list() {
				let list = window.SEARCH_ITEMS
				if(this.query) {
					list = list.filter(e => e.item_data.field_header.toLowerCase().includes(this.query.toLowerCase()))
					list.length = list.length > 20 ? 20 : list.length
					return list
				}
				return []
			}
		}
	})
	
	Vue.component('dropdown-select', {
		props: {
			cat: {}
		},
		data: function () {
			return {
				isListOpened: false,
			  	query: '',
				categories: [
					{title: 'билеты', value: 'tickets', isPickable: false},
					{title: 'продукты', value: 'food', isPickable: true},
					{title: 'рестораны', value: 'restaurants', isPickable: true}
				]
			}
		},
		computed: {
			getCategory() {
				const category = this.categories.find(e => e.value == this.cat)
				return category ? category.title : 'Выберите категорию'
			},
			pickableCategories() {
				return this.categories.filter(e => e.isPickable)
			}
		},
		methods: {
			closeList() {
				this.isListOpened = false
			},
			setBudgetItemCat(value) {
				this.$emit('set-budget-item-cat', value)
				this.closeList()
			}
		},
		template: `
			<div class="ddown">
				<div class="ddown-trigger" @click.stop="isListOpened = !isListOpened">
					{{ getCategory }}
				</div>
				<div class="ddown-list" :class="{'ddown-list--active': isListOpened}" v-click-outside="closeList">
					<div @click.stop="setBudgetItemCat(dd.value)" class="ddown-list__item" v-for="dd in pickableCategories">
						{{ dd.title }}
					</div>
				</div>
			</div>
		`
	})
	
	Vue.component('route-budget-day', {
		props: {
			item: {}
		},
		data: function () {
			return {
			  	query: '',
				categories: [
					{title: 'билеты', value: 'tickets', isPickable: false},
					{title: 'продукты', value: 'food', isPickable: true},
					{title: 'рестораны', value: 'restaurants', isPickable: true}
				]
			}
		},
		template: `
		<div class="route-budget-day">
			<div class="route-budget-day__date">{{ getDateText }}</div>
			<div class="route-budget__list" v-if="filteredBudgetItems(item.budget)">
				<div class="route-budget__listitem" :class="{'route-budget__listitem--blocked': budgetItem.isBlocked}" v-for="(budgetItem, budgetItemIndex) in filteredBudgetItems(item.budget)">
					<div class="route-budget__listitem-main">
						<div class="route-budget__listitem__block route-budget__listitem__block--left">
							<div class="route-budget__listitem__main">
								<div class="route-budget__listitem__icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
										<path d="M19.6562 31.2188H12.7188C10.8788 31.2188 9.11423 30.4878 7.8132 29.1868C6.51216 27.8858 5.78125 26.1212 5.78125 24.2812V12.7188C5.78125 10.8788 6.51216 9.11423 7.8132 7.8132C9.11423 6.51216 10.8788 5.78125 12.7188 5.78125H24.2812C26.1212 5.78125 27.8858 6.51216 29.1868 7.8132C30.4878 9.11423 31.2188 10.8788 31.2188 12.7188V19.6562C30.0625 23.125 23.125 30.0625 19.6562 31.2188Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M19.6562 31.2188V26.5938C19.6562 24.7538 20.3872 22.9892 21.6882 21.6882C22.9892 20.3872 24.7538 19.6563 26.5938 19.6562H31.2188" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M10.4509 20.1152C10.3763 20.1152 10.3063 20.0872 10.2409 20.0312C10.1849 19.9752 10.1569 19.9052 10.1569 19.8212C10.1569 19.7839 10.1663 19.7419 10.1849 19.6952L13.5589 10.6652C13.5869 10.5719 13.6383 10.4926 13.7129 10.4272C13.7969 10.3526 13.9089 10.3152 14.0489 10.3152H15.5749C15.7149 10.3152 15.8223 10.3526 15.8969 10.4272C15.9716 10.4926 16.0276 10.5719 16.0649 10.6652L19.4389 19.6952C19.4483 19.7419 19.4529 19.7839 19.4529 19.8212C19.4529 19.9052 19.4249 19.9752 19.3689 20.0312C19.3129 20.0872 19.2476 20.1152 19.1729 20.1152H17.9549C17.8243 20.1152 17.7263 20.0872 17.6609 20.0312C17.6049 19.9659 17.5676 19.9052 17.5489 19.8492L16.8909 18.1412H12.7329L12.0749 19.8492C12.0563 19.9052 12.0143 19.9659 11.9489 20.0312C11.8929 20.0872 11.7996 20.1152 11.6689 20.1152H10.4509ZM13.2229 16.5312H16.4009L14.8049 12.2052L13.2229 16.5312Z" fill="black"/>
									</svg>
								</div>
								<div class="route-budget__listitem__texts">
									<div class="route-budget__listitem__type" v-if="budgetItem.isBlocked">
										{{ getCategory(budgetItem.category) }}
									</div>
									<div class="route-budget__listitem__type" v-else>
										<dropdown-select @set-budget-item-cat="(cat) => setBudgetItemCat(cat, budgetItem)" :cat="budgetItem.category"></dropdown-select>
									</div>
									<div class="route-budget__listitem__text">
										<template v-if="budgetItem.isBlocked">
											{{ budgetItem.text }}
										</template>
										<template v-else>	
											<input v-model="budgetItem.text" type="text">
										</template>
									</div>
								</div>
							</div>
						</div>
						<div class="route-budget__listitem__block route-budget__listitem__block--right">
							<div class="route-budget__listitem__price">
								<template v-if="budgetItem.isBlocked">
									{{ getPrice(budgetItem) }} ₽
								</template>
								<template v-else>
									<div class="route-budget__listitem__price-edit">
										<input v-model="budgetItem.price" type="text"> ₽
									</div>
								</template>
							</div>
						</div>
					</div>
					<div class="route-budget__listitem-actions">
						<button v-if="!budgetItem.isBlocked" @click.stop="deleteBudgetItem(budgetItemIndex)" class="rbtn rbtn--flat">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none"><path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#E85768"></path></svg>
						</button>
					</div>
				</div>
			</div>
			<div class="route-budget__additem">
				<button class="rbtn rbtn--text rbtn--size-s" @click.stop="createNewBudgetItem">
					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
						<path d="M7.79 17.01C7.59 17.01 7.42 16.95 7.28 16.83C7.16 16.69 7.1 16.52 7.1 16.32V10.08H0.95C0.75 10.08 0.58 10.02 0.44 9.9C0.32 9.76 0.26 9.59 0.26 9.39V8.43C0.26 8.23 0.32 8.07 0.44 7.95C0.58 7.81 0.75 7.74 0.95 7.74H7.1V1.68C7.1 1.48 7.16 1.32 7.28 1.2C7.42 1.06 7.59 0.989999 7.79 0.989999H8.84C9.04 0.989999 9.2 1.06 9.32 1.2C9.46 1.32 9.53 1.48 9.53 1.68V7.74H15.71C15.91 7.74 16.07 7.81 16.19 7.95C16.33 8.07 16.4 8.23 16.4 8.43V9.39C16.4 9.59 16.33 9.76 16.19 9.9C16.07 10.02 15.91 10.08 15.71 10.08H9.53V16.32C9.53 16.52 9.46 16.69 9.32 16.83C9.2 16.95 9.04 17.01 8.84 17.01H7.79Z" fill="black"/>
					</svg>
					Расход
				</button>
			</div>
		</div>
		`,
		computed: {
			getDateText() {
				return new Date(this.item.date).toLocaleString('default', { month: 'long', day: 'numeric' })
			},
			getTicketsFullPrice() {
				const dayTicketsFullPrice = this.item.items.reduce((a, b) => {
					a += b.field_prices ? Number(b.field_prices) : 0
					return a
				}, 0)
				return dayTicketsFullPrice
			}
		},
		methods: {
			filteredBudgetItems(items) {
				return items.filter(e => {
					if(e.category == 'tickets' && this.getTicketsFullPrice == 0) return false
					return true
				})
			},
			getPriceValue(budgetItem) {
				if(budgetItem.category == 'tickets') return 'от ' + this.getTicketsFullPrice
				return budgetItem.price
			},
			getPrice(budgetItem) {
				if(budgetItem.category == 'tickets') return 'от ' + this.getTicketsFullPrice
				return budgetItem.price
			},
			setBudgetItemCat(cat, budgetItem) {
				//console.log({cat, budgetItem})
				budgetItem.category = cat
			},
			onBudgetItemInput: debounce(function(event, budgetItem) {
				console.log(arguments)
			}, 1000),
			deleteBudgetItem(budgetItemIndex) {
				this.item.budget.splice(budgetItemIndex, 1)
			},
			getCategory(cat) {
				const category = this.categories.find(e => e.value == cat)
				return category ? category.title : 'Выберите категорию'
			},
			createNewBudgetItem() {
				const newBudgetItem = {
					category: '',
					price: 0,
					text: 'Заголовок',
					isBlocked: false
				}
				
				this.item.budget.push(newBudgetItem)
				//this.$emit('create-new')
			}
		}
	})
	
	window.VUE_VDNH = new Vue({
		el: '#v-search-root',
		name: 'VDNH',
		data: function() {
			return {
				drag: false,
				tag: '',
				tags: [],
				autocompleteItems,
				isAppLoaded: true,
				isFullWidthLayout: false,
				isSearchShowlist: true,
				myRouteDates: qstore.state.myRoute.dates,
				pageItems: [],
				myRouteTitle: qstore.state.myRoute.title,
				myRoutePlanItems: qstore.state.myRoute.planItems,//[],
				myRouteItems: [],
				myRouteSelectedDay: null,
				myRouteRecommendations: [],
				activeRoute: {
					paths: [],
					common: {
						duration: '',
						distance: ''
					}
				},
				myRouteStartPointsList: myRouteStartPointsList,
				isMyRouteStartPointsListActive: false,
				myRouteStartPoint: qstore.state.myRoute.startPoint,
				myRouteCurrentDay: 0,
				isPageItemsLoaded: false,
				isHeatmapShowed: false,
				workLoadItems: barsSampleData,
				selectedWorkLoadItem: {name: 'ПН'},
				chartOptions,
				chartData: {
					labels: [
						'8',
						'9',
						'10',
						'11',
						'12',
						'13',
						'14',
						'15',
						'16',
						'17',
						'18',
						'19',
						'20',
						'21',
						'22'
					],
					datasets: [
					  	{
							//label: 'Data One',
						 	backgroundColor: '#336af7',
							data: [5, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 25, 10]
					  	}
					]
				},
				mapRouteMode: 'pedestrian',
				isGenerateRouteQuizShowed: false,
				generateRouteQuizQuestions: generateRouteQuizQuestions,
				generateRouteQuizSelectedOptions: {
					stime: {type: 'or', items: []},
					paid: {type: 'or', items: []},
					count: {type: 'or', items: []},
					tags: {type: 'and', items: []},
					food: {type: 'or', items: []},
					inoutdoor: {type: 'or', items: []},
					price: {
						min: 0,
						max: 50000,
						range: [0, 50000],
						format: '{value} ₽'
					},
					dates: {
						start: new Date(),
						end: new Date()
					}
				},
				dayRouteItems: []
			}
		},
		components: {
		  	VueSlider: window['vue-slider-component']
		},
		watch: {
			myRouteTitle: {
				handler: function(v) {
					console.log(v)
					//qstore.updateLS()
				}
			},
			myRouteSelectedDay: {
				handler: function(v) {
					this.drawMap()
				}
			},
			myRouteDates: {
				deep: true, 
				handler: function(v) {
					if(!v.start || !v.end) return
					const diffInMs = new Date(v.end) - new Date(v.start)
					const diffInDays = diffInMs / (1000 * 60 * 60 * 24)
					console.log(diffInDays + 1)
					//qstore.setMyRouteDates({start: v.start, end: v.end})
					//qstore.setMyRouteDaysObj(diffInDays + 1)
				}
			},
			mapRouteMode(v) {
				try {
					this.drawMap()
					//this.activeRoute = drawRoute(getRoutePoints(this.pageItems, this.myRouteStartPoint), this.myRouteStartPoint, v)
				} catch(e) {
					console.log(e)
				}
			},
			myRoutePlanItems: {
				handler: function(v) {
					qstore.updateLS()
				},
				deep: true
			},
			myRouteItems: {
				deep: true,
				handler: function(v) {
					qstore.updateLS()
				}
			},
			itemsToWatch: {//myRouteItems
				deep: true,
				handler: function(v, ov) {
					console.log({v, ov})
					try {
						if(this.isPageItemsLoaded) {
							const itemsInfo = []
							v.forEach(async function(e) {
								//console.log('drawitem', {e})
								const itemsToDraw = e.items
								const data = await drawRoute(getRoutePoints(itemsToDraw, this.myRouteStartPoint), this.myRouteStartPoint, this.mapRouteMode, true)
								itemsInfo.push({...data, date_id: e.date_id})
								
							})
							
							this.dayRouteItems = itemsInfo
							console.log('route log', this.dayRouteItems)
							this.drawMap()
							//qstore.updateLS()
							//this.activeRoute = drawRoute(getRoutePoints(itemsToDraw, this.myRouteStartPoint), this.myRouteStartPoint, this.mapRouteMode)
							//qstore.setMyRouteItems(v)
						}
					} catch(e) {
						console.log(e)
					}
				}
			},
			myRouteStartPoint: {
				deep: true,
				handler: function(v) {
					try {
						qstore.setMyRouteStartPoint(v)
						this.drawMap()
						//this.activeRoute = drawRoute(getRoutePoints(this.pageItems, v), this.myRouteStartPoint, this.mapRouteMode)
					} catch(e) {
						console.log(e)
					}
				}
			}
		}, 
		methods: {
			generateRouteQuizDateFormat(inputValue) {
				let dateText = ' Дата/время'
				return dateText
				if(inputValue.start && inputValue.end) {
					dateText = new Date(inputValue.start).toLocaleString('default', { month: '2-digits', day: 'numeric' }) + '/' + new Date(inputValue.end).toLocaleString('default', { month: '2-digits', day: 'numeric' })
				}
				return dateText
			},
			generateMyRouteRecommendations() {
				const planRecsIds = this.myRoutePlanItems.reduce((a, b) => {
					if(b.field_recommendations) {
						const bRecs = b.field_recommendations.split(',').map(e => e.trim())
						if(bRecs.length) a.push(...bRecs)
					}
					return a
				}, [])
				
				const uniquePlanRecsIds = Array.from(new Set(planRecsIds))
				const recsItems = window.SEARCH_ITEMS.filter(e => {
					return uniquePlanRecsIds.includes(e.item_data.id)
				}).map(e => e.item_data)
				
				if(recsItems.length) {
					this.myRouteRecommendations = recsItems
					this.$nextTick().then(() => {
						new Splide('.vsearch-recs-slider-main', {
						  	type: 'loop',
						  	perPage: 2,
							pagination: false,
						  gap: '8px',
						  autoHeight: true
						}).mount();			  
					})
				}
				console.log('generateMyRouteRecommendations', recsItems)
			},
			setMyRouteTitle: debounce(function(evt) {
				qstore.setMyRouteTitle(evt.target.value)
			},1000),
			moveItemToDay(item, fromDay, toDay = false) {
				qstore.moveItemToDay(item, fromDay, toDay)
			},
			myRouteDayAddItem(item, dayId = false) {
				//console.log(dayId, item)
				qstore.addItemToMyRouteForced(item, dayId)
			},
			getMyRouteDayDuration(dayItems = [], dayRouteDuration = 0) {
				const myRouteItemsDuration = dayItems.reduce((a, b) => a + (b.field_event_duration ? Number(b.field_event_duration) : 0), 0)
				if(this.activeRoute.common.duration.value) {
					const fullTime = (myRouteItemsDuration * 60 * 60 + dayRouteDuration) / 60 / 60
					const hours = Math.trunc(fullTime)
					const minutes = Math.round(((fullTime - hours) % 1) * 60)
					return `${hours}ч ${minutes}мин` 
				}
				return myRouteItemsDuration
			},
			dayRouteInfoOnMount() {
				const itemsInfo = []
				this.myRouteItems.forEach(async function(e) {
					const itemsToDraw = e.items
					const data = await drawRoute(getRoutePoints(itemsToDraw, this.myRouteStartPoint), this.myRouteStartPoint, this.mapRouteMode, true)
					itemsInfo.push({...data, date_id: e.date_id})

				})
				this.dayRouteItems = itemsInfo
				this.drawMap()
			},
			getDayRouteInfo(day, isNeedPaths = false) {
				//console.log(day)
				const data = {
					distance: 0,
					items: day.items.length,
					durationText: '',
					fullText: ''
				}
				
				const item = this.dayRouteItems.find(e => e.date_id == day.date_id)
				if(item) {
					if(isNeedPaths) {
						const paths = item.paths.map(m => {
							m.fullText = `${m.distance}, ${m.duration.text}`
							return m
						})
						return item.paths
					} else {
						data.distance = item.common.distance
						data.durationText = this.getMyRouteDayDuration(day.items, item.common.duration.value)
						data.fullText = `${this.getMyRouteDayDuration(day.items, item.common.duration.value)}, ${data.distance}`
					}
				}
				//console.log(this.drawMap(false))
				return data
			},
			setMyRouteSelectedDay(dayIndex) {
				if(this.myRouteSelectedDay == dayIndex) {
					this.myRouteSelectedDay = null
				} else {
					this.myRouteSelectedDay = dayIndex
				}
			},
			drawMap(dontDraw = false) {
				try {
					this.activeRoute = drawRoute(getRoutePoints(this.itemsToDraw, this.myRouteStartPoint), this.myRouteStartPoint, this.mapRouteMode, dontDraw)
				} catch(e) {
					console.log(e)
				}
			},
			resetMyRouteDates() {
				qstore.setMyRouteDates({start: null, end: null})
			},
			openPlanItemDayList(item) {
				item.isDayListOpened = true
				console.log(item)
			},
			closePlanItemDayList(event, item = null) {
				console.log(event, item)
				//console.log('closePlanItemDayList')
				//const item = this.myRoutePlanItems.find(e => e.isDayListOpened == true)
				if(item) {
					//item.isDayListOpened = false
				}
			},
			setMyRouteDays() {
				if(!this.myRouteDates.start || !this.myRouteDates.end) return
				const diffInMs = new Date(this.myRouteDates.end) - new Date(this.myRouteDates.start)
				const diffInDays = diffInMs / (1000 * 60 * 60 * 24)
				//console.log(diffInDays + 1)
				qstore.setMyRouteDates(this.myRouteDates)
				qstore.setMyRouteDaysObj(diffInDays + 1)
			},
			getDateText(date) {
				return new Date(date).toLocaleString('default', { month: 'long', day: 'numeric' })
			},
			myRouteItemWorkLoadBarData(item) {
				return item.field_event_workload_graph.find(e => e.name == item.field_event_workload_selected_day).chartData
			},
			myRouteItemSetWorkLoadBarDay(item, wlObj) {
				item.field_event_workload_selected_day = wlObj.name
			},
			setMyRouteStartPoint(item) {
				this.myRouteStartPoint = item
				this.isMyRouteStartPointsListActive = false
			},
			addItemToMyRoutePlan(item) {
				console.log('addItemToMyRoutePlan')
				qstore.addItemToMyRoutePlan(item)
			},
			addItemToMyRouteFromPlan(item, dateId) {
				console.log('addItemToMyRouteFromPlan')
				qstore.addItemToMyRouteFromPlan(item, dateId)
				item.isDayListOpened = false
			},
			removeItemFromMyRoutePlanByID(itemId) {
				console.log('removeItemFromMyRoutePlanByID')
				qstore.removeItemFromMyRoutePlanByID(itemId)
			},
			removeItemFromMyRouteByID(itemId) {
				console.log('removeItemFromMyRouteByID')
				qstore.removeItemFromMyRouteByID(itemId)
			},
			myRouteStartPointsListActiveClickOutside() {
				if(this.isMyRouteStartPointsListActive) this.isMyRouteStartPointsListActive = false
			},
			myRouteItemImgSrc(item) {
				//console.log(item.field_gallery)
				if(item && Array.isArray(item.field_gallery) && item.field_gallery.length > 0) return `/site/data/images/medium/${item.field_gallery[0]}`
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
			switchHeatmap() {
				if(window.heatmap) {
					if(this.isHeatmapShowed) {
						window.heatmap.options.set('opacity', 0)
						this.isHeatmapShowed = false
					} else {
						window.heatmap.options.set('opacity', 1)
						this.isHeatmapShowed = true
					}
				}
			},
			myRouteItemSwitchWorkLoad(item) {
				item.field_event_workload_show_graph = !item.field_event_workload_show_graph
			},
			scrollToList() {
				jQuery('html, body').animate({
					scrollTop: jQuery(window).height() * 0.75
				}, 500)
			},
			generateFakeRoute() {
				const _this = this
				
				let res = window.SEARCH_ITEMS
				let days = 1
				
				const badLayouts = ['17', '51']
				
				res = res.filter(e => {
					let isItemGenerated = !!Number(e.item_data.field_is_not_generated)
					return e.item_data.layout_id != '17' && e.item_data.layout_id != '51' && e.item_data.path.includes('/vdnh') && !isItemGenerated
				})
				
				if(this.generateRouteQuizSelectedOptions.tags.items.length) {
					res = res.filter(e => {
						return e.item_data.field_tags.split(',').map(t => t.trim().toLowerCase()).some(x => {
							return _this.generateRouteQuizSelectedOptions.tags.items.map(a => {
								return a.trim().toLowerCase()
							}).includes(x)
						})
					})
				}
				
				if(this.generateRouteQuizSelectedOptions.dates.start && this.generateRouteQuizSelectedOptions.dates.end) {
					const diffInMs = new Date(this.generateRouteQuizSelectedOptions.dates.end) - new Date(this.generateRouteQuizSelectedOptions.dates.start)
					const diffInDays = diffInMs / (1000 * 60 * 60 * 24)
					days = diffInDays + 1
				}
				
				
				
				qstore.setMyRouteDates(this.generateRouteQuizSelectedOptions.dates)
				qstore.setMyRouteDaysObj(days, true)
				
				const shuffledRes = res.sort(() => Math.random() > 0.5 ? true : false)
				console.log('shuffledRes', shuffledRes.length)
				this.myRouteItems.forEach(function(day, dayIndex) {
					try {
						const itemsToAdd = shuffledRes.splice(dayIndex * 5, 5).map(e => e.item_data)
						itemsToAdd.forEach(item => {
							qstore.addItemToMyRouteForced(item, day.date_id)
						})
					} catch(e) {
						console.log(e)
					}
				})
				
				this.isGenerateRouteQuizShowed = false
				
				
			},
			generateRoute() {
				const _this = this
				//let res = nestedFilter(window.SEARCH_ITEMS.map(e => e.item_data), this.generateRouteQuizSelectedOptions)
				
				let res = window.SEARCH_ITEMS
				
				const badLayouts = ['17', '51']
				
				res = res.filter(e => {
					let isItemGenerated = !!Number(e.item_data.field_is_not_generated)
					return e.item_data.layout_id != '17' && e.item_data.layout_id != '51' && e.item_data.path.includes('/vdnh') && !isItemGenerated
				})
				//console.log('init', res)
				
				if(this.generateRouteQuizSelectedOptions.tags.items.length) {
					res = res.filter(e => {
						return e.item_data.field_tags.split(',').map(t => t.trim().toLowerCase()).some(x => {
							return _this.generateRouteQuizSelectedOptions.tags.items.map(a => {
								return a.trim().toLowerCase()
							}).includes(x)
						})
					})
				}
				//console.log('tags', res)
				
				if(this.generateRouteQuizSelectedOptions.paid.items.length) {
					if(this.generateRouteQuizSelectedOptions.paid.items[0] === 0) {
						res = res.filter(e => {
							return Number(e.item_data.field_prices) == 0
						})
					}
					if(this.generateRouteQuizSelectedOptions.paid.items[0] === 1) {
						res = res.filter(e => {
							return Number(e.item_data.field_prices) > 0
						})
					}
				}
				
				if(this.generateRouteQuizSelectedOptions.stime.items.length) {
					res = findRouteCombs(res, this.generateRouteQuizSelectedOptions.stime.items[0], this.generateRouteQuizSelectedOptions.tags.items)
				}
				
				if(this.generateRouteQuizSelectedOptions.food.items.length) {
					if(this.generateRouteQuizSelectedOptions.food.items[0] === 1) {
						const restaurants = window.SEARCH_ITEMS.filter(e => e.item_data.layout_id == 51 && e.item_data.path.includes('/vdnh') && !e.item_data.field_is_not_generated)
						res.splice(1, 0, restaurants[Math.floor(Math.random() * restaurants.length)])
					}
				}
				
				console.log('gen', res.map(e => e.item_data))
				
				//qstore.replaceMyRouteItems(res.map(e => e.item_data))
				/*
				this.$nextTick(() => {
					_this.pageItems.forEach(e => {
					    console.log(e)
						const sampleWorkLoadData = JSON.parse(JSON.stringify(barsSampleData))
						e.field_event_workload_show_graph = false
						e.field_event_workload_selected_day = 'ПН'
						e.field_event_workload_graph = randomizeBarData(sampleWorkLoadData)
						
					})
				
				})
				*/
				
				//this.isGenerateRouteQuizShowed = false
			}
		},
		computed: {
		  	myRouteTitleInputSize() {
				console.log(this.myRouteTitle)
				return this.myRouteTitle ? this.myRouteTitle.length : 5
			},
			totalBudget() {
				return this.myRouteItems.reduce((a, b) => {
					const budget = b.budget.reduce((ba, bb) => {
						ba += bb.price ? Number(bb.price) : 0
						return ba
					}, 0)
					const tickets = b.items.reduce((ba, bb) => {
						ba += bb.field_prices ? Number(bb.field_prices) : 0
						return ba
					}, 0)
					a += tickets + budget
					return a
				}, 0)
			},
		  	itemsToWatch() {
				return this.myRouteItems.map(e => ({items: e.items, date_id: e.date_id}))
			},
		    itemsToDraw() {
				let myRouteItems = this.myRouteItems
				if(this.myRouteSelectedDay !== null) {
					myRouteItems = myRouteItems.filter((e,i) => i == this.myRouteSelectedDay)
				}
				return myRouteItems.reduce((a,b) => {
					a.push(...b.items)
					return a
				}, [])
			},
			filteredTags() {
				return this.autocompleteItems.filter(i => {
					return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
				})
			},
			isRouteGenerationEnabled() {
				return true
				if(this.generateRouteQuizSelectedOptions.stime.items.length && this.generateRouteQuizSelectedOptions.tags.items.length > 0) return true
				return false
			},
			myRouteFullDurationText() {
				const myRouteItemsDuration = this.pageItems.reduce((a, b) => a + (b.field_event_duration ? Number(b.field_event_duration) : 0), 0)
				if(this.activeRoute.common.duration.value) {
					const fullTime = (myRouteItemsDuration * 60 * 60 + this.activeRoute.common.duration.value) / 60 / 60
					const hours = Math.trunc(fullTime)
					const minutes = Math.round(((fullTime - hours) % 1) * 60)
					return `${hours}ч ${minutes}мин` 
				}
				return myRouteItemsDuration
			},
			myRoutePaidItems() {
				return this.pageItems.filter(e => e.field_prices > 0)
			},
			myRoutePaidLink() {
				if(this.myRoutePaidItems.length > 0) {
					const baseURL = 'https://vdnh.ru/selections/kupit-bilet/?show_ticket_widget=Y&tickets='
					const ticketsIDs = this.myRoutePaidItems.map(e => e.field_vdnh_tickets).join()
					return baseURL + ticketsIDs
				}
				return '#'
			},
			myRouteStartPointText() {
				if(this.myRouteStartPoint) return this.myRouteStartPoint.name
				return 'Откуда построить маршрут?'
			},
			myRoutePointsCountText() {
				let count = this.pageItems.length
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
			pointList: {
				get() {
					//console.log(qstore.state.myRoute.items)
					//return qstore.state.myRoute.items
				},
				set(value) {
					//console.log(value.map(e => e.field_header))
					//qstore.setMyRouteItems(value)
				}
			}
		},
		async mounted() {
			
			const vm = this
		
			this.pageItems = qstore.state.myRoute.items
			//this.myRoutePlanItems = qstore.state.myRoute.planItems.map(e => {
			//	return Object.assign(e, {isDayListOpened: false})
			//})
			this.myRoutePlanItems.forEach(e => {
				e.isDayListOpened = false
			})
			this.myRouteItems = qstore.state.myRoute.routeItems
			//this.myRouteDates = qstore.state.myRoute.dates
			this.generateMyRouteRecommendations()
			
			this.pageItems.forEach(e => {
				const sampleWorkLoadData = JSON.parse(JSON.stringify(barsSampleData))
				e.field_event_workload_show_graph = false
				e.field_event_workload_selected_day = 'ПН'
				e.field_event_workload_graph = randomizeBarData(sampleWorkLoadData)
				if(!Array.isArray(e.field_gallery)) {
					let gl = e.field_gallery ? e.field_gallery : ''
					let regex = /\/medium\/(.*?)\.(jpg|png)/g;
					let matches_imgs = gl.match(regex);

					let items = []
					if(matches_imgs) {
						items = matches_imgs.map(m => m.replace('/medium/', ''))
					}
					e.field_gallery = items
				}
			})
			this.$nextTick(() => vm.isPageItemsLoaded = true)
		
			await ymaps.ready(['Heatmap'])
			initMap2()
			this.drawMap()
			this.dayRouteInfoOnMount()
			//this.activeRoute = drawRoute(getRoutePoints([], this.myRouteStartPoint), this.myRouteStartPoint, this.mapRouteMode)
			//drawRoute([[55.830572, 37.631125], 'ВДНХ, Сиреневая аллея'])
		}
	})

	function getRandomItem(items = [], r) {
		const badIds = r.map(e => e.item_data.id)
		const arr = items.filter(e => !badIds.includes(e.item_data.id))
		console.log(arr)
		if(arr.length > 0) {
			const res = arr[Math.floor(Math.random() * items.length)]
			//if(r.find(e => e.item_data.id == res.item_data.id)) getRandomItem(items, r)
			return res
		}
		return false
	}

	function findRouteCombs(items, time, tags = []) {
		const r = []
		
		if(items.length) {
			const chunks = {}
			
			tags.forEach(t => {
				const chunk = items.filter(e => {
					const itemTags = e.item_data.field_tags.split(',').map(t => t.trim().toLowerCase())
					const selectedTag = t.toLowerCase()
					return itemTags.some(x => x == selectedTag)
				})
				
				chunks[t] = chunk
			})
			
			const timeChunks = []
			const chunksKeys = Object.keys(chunks)
			
			for(let i = 0; i < time; i++) {
				if(i >= chunksKeys.length) {
					timeChunks.push(shuffleArray(chunksKeys)[0])
				} else {
					timeChunks.push(chunksKeys[i])
				}
			}
			
			console.log({timeChunks})
			
			for(let key of timeChunks) {
				if(chunks[key].length) {
					const randomItem = getRandomItem(chunks[key], r)
					if(randomItem) {
						const timeSum = r.reduce((acc, b) => {
							return acc += Number(b.item_data.field_event_duration)
						}, 0) + Number(randomItem.item_data.field_event_duration)
						
						r.push(randomItem)
					}
				}
			}
		}
		
		return r
	}

	function feefee(items = []) {
		const f = (n, s, c, r=[], i=0)=>{for(s?0:c[r.join()]=r;i<n.length;)f(n,s-n[i],c,[n[i],...r].sort(),++i)}
		let res = {}
		f([1,2,3,4,5,6,7,8,9,10], 12, res)
		console.log('feefee', res)
	}

	feefee()

	function filterItemsByUniqueLayout(items) {
		return items.filter((value, index, self) => {
		  	return self.findIndex(v => v.actor.name === value.actor.name) === index;
		})
	}

	function nestedFilter(targetArray, filters) {
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

	function generateFilters(data) {
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

	function shuffleArray(arr) {
		return arr.sort((a,b) => 0.5 - Math.random());
	}

	function randomizeBarData(chartData) {
		const newData = [...chartData].map(e => {
			e.chartData.datasets[0].data = shuffleArray(e.chartData.datasets[0].data)
			
			e.chartData.datasets[0].backgroundColor = []
			
			e.chartData.datasets[0].data.forEach(x => {
				let color = '#99D31E'
				if(x > 30 && x < 70) {
					color = '#ffb800'
				}
				if(x >= 70) {
					color = '#f91942'
				}
				e.chartData.datasets[0].backgroundColor.push(color)
			})
			
			return e
		})
		//console.log(newData)
		return newData
	}
	
	function drawRoute(points = [], isWithStartPoint = false, routeMode = 'pedestrian', dontDraw = false) {
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
			
			multiRoute.model.setParams({ routingMode: routeMode }, true);
 
			let routeData = {
				paths: [],
				common: {
					distance: '',
					duration: ''
				}
			}

			multiRoute.model.events.add('requestsuccess', function() {
				try {
					let activeRoute = multiRoute.getActiveRoute();
					let activeRoutePaths = activeRoute.getPaths(); 

					console.log({activeRoute})
					
					routeData.common.distance = activeRoute.properties.get("distance") ? activeRoute.properties.get("distance").text : ''
					routeData.common.duration = activeRoute.properties.get("duration")

					activeRoutePaths.each(function(path) {
						console.log(path.properties)
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
				} catch(e) {
					console.log(e)
				}
				
			})
			if(!dontDraw) {
				console.log()
				vdnhMap.geoObjects.removeAll()
				vdnhMap.geoObjects.add(multiRoute)
			}
			return routeData
		} catch(e) {
			console.log(e)
		}
	}
	/*
	ymaps.modules.require(['Heatmap'], function (Heatmap) {
		 var data = {
			  type: 'FeatureCollection',
			  features: [{
				  id: 'id1',
				  type: 'Feature',
				  geometry: {
					  type: 'Point',
					  coordinates: [37.782551, -122.445368]
				  }
			  }, {
				  id: 'id2',
				  type: 'Feature',
				  geometry: {
					  type: 'Point',
					  coordinates: [37.782745, -122.444586]
				  }
			  }]
		  },
		 heatmap = new Heatmap(data);
		 heatmap.setMap(vdnhMap);
	});
	*/
	
	async function initMap2() {
		console.log('map init2')
		window.vdnhMap = new ymaps.Map('vdnhmap', {
			center: [55.830572, 37.631125],
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		})
		
		const data = [[53.201445,50.100463],[53.206859,50.126356],[53.187634,50.091078],[53.192819,50.104424],[53.188804,50.089531],[53.208222,50.114417],[53.199811,50.10473],[53.191514,50.107246],[53.188087,50.099061],[53.188303,50.097615],[53.188426,50.098038],[53.199978,50.105987],[53.199978,50.105987],[53.204773,50.117782],[53.209812,50.138558],[53.20076,50.098603],[53.191611,50.107317],[53.192301,50.094866],[53.192123,50.095423],[53.187494,50.089225],[53.188471,50.089881],[53.202621,50.112491],[53.202228,50.142652],[53.220016,50.16297],[53.194102,50.096349],[53.19549,50.10217],[53.312146,50.180613],[53.19369,50.078326],[53.25194,50.166633],[53.401735,50.119008],[53.344943,50.144201],[53.419151,50.053281],[53.19549,50.10217],[53.210164,50.11834],[53.212677,50.145232],[53.216569,50.135042],[53.200575,50.099878],[53.193786,50.095995],[53.189906,50.090904],[53.204058,50.111039],[53.189791,50.082047],[53.215904,50.132277],[53.205966,50.117959],[53.186435,50.095572],[53.204463,50.111429],[53.251052,50.222563],[53.192922,50.094373],[53.202746,50.103302],[53.19364,50.095622],[53.205533,50.144545],[53.188117,50.110105],[53.189782,50.09197],[53.18887,50.103292],[53.198745,50.113149],[53.193553,50.110488],[53.473311,49.912102],[53.209255,50.115653],[53.277942,50.237488],[53.205889,50.110191],[55.746209,37.580435],[55.789562,37.74772],[55.7916,37.748208],[55.78507,37.623982],[55.789875,37.749397],[55.741842,37.56686],[55.790489,37.747047],[55.791744,37.748619],[55.753926,37.556422],[55.822391,37.647131],[55.838925123039,37.626190461722],[55.82907903,37.62834299],[55.82907903,37.62834299],[55.835078576371,37.621895312114],[55.832749492873,37.626987220951],[53.415605,50.017765],[53.415605,50.017765],[53.415605,50.017765],[55.815852,37.676688],[55.835098,37.621829],[55.82907903,37.62834299],[55.828720332498,37.631385818836],[55.831002217649,37.63258820582],[55.832749492873,37.626987220951],[55.828733661367,37.629502906771],[55.827716323755,37.626822175131],[55.838925123039,37.626190461722],[55.83926941,37.6222626],[55.837848191914,37.615467007219],[55.835744980485,37.614349056786],[55.833072293919,37.611642572749],[55.83397258,37.62657005],[55.832978260687,37.619370996031],[55.831339981478,37.618995127147],[55.83533326,37.62579238],[55.82720148192,37.637284093589],[55.833972559488,37.628077720867],[55.828429238045,37.626500581967],[55.834580023783,37.613752187742],[55.82805480654,37.627645343893],[55.83851434,37.62668806],[55.832575359725,37.631631507874],[55.8379641,37.62566328],[55.830984577153,37.633852604368],[55.834797189359,37.62052202741],[55.836458768369,37.622419468747],[55.835307674463,37.621499812052],[55.836993699953,37.624312498133],[55.829974021782,37.61993294266],[55.836178555765,37.614897389018]];

		
		window.heatmap = new ymaps.Heatmap(data, {
			// Радиус влияния.
			radius: 50,
			// Нужно ли уменьшать пиксельный размер точек при уменьшении зума. False - не нужно.
			dissipating: false,
			// Прозрачность тепловой карты.
			opacity: 0.8,
			// Прозрачность у медианной по весу точки.
			intensityOfMidpoint: 0.2,
			// JSON описание градиента.
			gradient: {
				0.1: 'rgba(128, 255, 0, 0.7)',
				0.2: 'rgba(255, 255, 0, 0.8)',
				0.7: 'rgba(234, 72, 58, 0.9)',
				1.0: 'rgba(162, 36, 25, 1)'
			}
		});
		heatmap.options.set('opacity', 0)
		heatmap.setMap(vdnhMap);
		
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
				if(e.field_coords && e.field_coords.split(',').map(x => Number(x.trim())).length == 2) return true
				console.log('No coords: ', e.id)
				return false
			})
			.map(e => {
				return e.field_coords.split(',').map(x => Number(x.trim()))
			})
		]
		//console.log(res)
		return res
	}
	
	function initMap() {
		console.log('map init')
		// Задаём точки мультимаршрута.
		var pointA = [55.830572, 37.631125],
			pointB = 'ВДНХ, Сиреневая аллея',//[55.834322, 37.630242],
			pointC = [55.835515, 37.623168]
			/**
			 * Создаем мультимаршрут.
			 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
			 */
		let multiRoute = new ymaps.multiRouter.MultiRoute({
			referencePoints: [
				pointA,
				pointB,
				pointC
			],
			params: {
				//Тип маршрутизации - пешеходная маршрутизация.
				routingMode: 'pedestrian'
			}
		}, {
			// Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
			boundsAutoApply: true
		});

		// Создаем кнопку.

		// Создаем карту с добавленной на нее кнопкой.
		window.vdnhMap = new ymaps.Map('vdnhmap', {
			center: [55.830572, 37.631125],
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		});

		// Добавляем мультимаршрут на карту.
		vdnhMap.geoObjects.add(multiRoute);
	}
	
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
	
})