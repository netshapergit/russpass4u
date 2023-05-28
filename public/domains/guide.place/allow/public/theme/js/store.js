window.qstore = { 
	state: {
		myRoute: {
			items: [],
			planItems: [],
			startPoint: null,
			routeItems: [],
			dates: {
				start: null,
				end: null
			},
			title: 'Маршрут'
		},
	},
	setMyRouteTitle(newTitle) {
		if(newTitle) {
			this.state.myRoute.title = newTitle
			updateLS()
		}
	},
	setMyRouteDates({start, end}) {
		this.state.myRoute.dates.start = start
		this.state.myRoute.dates.end = end
		updateLS()
	},
	setMyRouteDaysObj(days, isFullReset = false) {
		
		
		const newDays = Array(days)
		  	.fill()
		  	.map((_, i) => {
				const D = new Date(this.state.myRoute.dates.start)
				D.setDate(D.getDate() + i)
				const dayObj = {
					date: D,
					date_id: D.toLocaleDateString(),
					items: [],
					budget: [
						{
							category: 'tickets',
							price: 0,
							text: 'Билеты',
							isBlocked: true
						}
					]
				}
				return dayObj 
		  	})
		console.log({newDays})
		console.log('routeItems', this.state.myRoute.routeItems)
		
		if(!isFullReset) {
			if(this.state.myRoute.routeItems.length) {
				newDays.forEach((e,i) => {
					if(this.state.myRoute.routeItems[i]) {
						e.items = this.state.myRoute.routeItems[i].items
					}
				})
			}

			if(this.state.myRoute.routeItems.length > newDays.length) {
				//console.log({rl: this.state.myRoute.routeItems.length, nl: newDays.length})
				const uItems = this.state.myRoute.routeItems.splice(newDays.length, this.state.myRoute.routeItems.length - 1)
				if(uItems.length) {
					uItems.forEach(u => {
						this.state.myRoute.planItems.push(...u.items)
					})
				}
				//console.log(newDays.length - 1, uItems)
			}
		}
		/*
		this.state.myRoute.routeItems.forEach((e, i) => {
			newDays[i].items.push(...e.items)
			console.log({e, ndi: newDays[i].items})
		})
		*/
		console.log({newDays})
		this.state.myRoute.routeItems.splice(0, this.state.myRoute.routeItems.length)
		this.state.myRoute.routeItems.push(...newDays)
																						   
		console.log(this.state.myRoute.routeItems)
		updateLS()
	},
	setMyRouteDays(days) {
		console.log('setMyRouteDays', days)
		if(this.state.myRoute.items.length < days) {
			const newDays = days - this.state.myRoute.items.length
			for(let i = 0; i < newDays; i++) {
				this.state.myRoute.items.push([])
			}
		} else if(this.state.myRoute.items.length > days) {
			console.log('fawwfwwfa')
			this.state.myRoute.items.length = days
		}
		updateLS()
	},
	addItemToMyRoutePlan(item) {
		let itemInMyRoute = this.state.myRoute.planItems.find(e => e.id === item.id)
		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			this.state.myRoute.planItems.push(Object.assign(item, {isDayListOpened: false}))
			updateLS()
		}
	},
	moveItemToDay(item, fromDay, dayId) {
		let fromDayObj = this.state.myRoute.routeItems.find(e => e.date_id == fromDay)
		let dayItems = this.state.myRoute.routeItems.find(e => e.date_id == dayId)
		if(dayItems) {
			if(item.field_gallery && !Array.isArray(item.field_gallery)) {
				let gl = item.field_gallery
				let regex = /\/medium\/(.*?)\.(jpg|png)/g;
				let matches_imgs = gl.match(regex);

				let items = []
				if(matches_imgs) {
					items = matches_imgs.map(m => m.replace('/medium/', ''))
				}
				item.field_gallery = items
			}
			dayItems.items.push(item)
			const itemToDeleteIndex = fromDayObj.items.findIndex(e => e.id == item.id)
			if(itemToDeleteIndex != -1) {
				fromDayObj.items.splice(itemToDeleteIndex, 1)
			}
			updateLS()
		}
		
	},
	addItemToMyRouteForced(item, dayId) {
		const itemInMyRoute = this.state.myRoute.routeItems.find(e => e.items.find(x => x.id == item.id))
		const itemInMyRoutePlan = this.state.myRoute.planItems.find(e => e.id == item.id)

		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			let dayItems = this.state.myRoute.routeItems.find(e => e.date_id == dayId)
			if(dayItems) {
				if(item.field_gallery && !Array.isArray(item.field_gallery)) {
					let gl = item.field_gallery
					let regex = /\/medium\/(.*?)\.(jpg|png)/g;
					let matches_imgs = gl.match(regex);

					let items = []
					if(matches_imgs) {
						items = matches_imgs.map(m => m.replace('/medium/', ''))
					}
					item.field_gallery = items
				}
				dayItems.items.push(item)
			} else {
				this.setMyRouteDates({start: new Date(), end: new Date()})
				this.setMyRouteDaysObj(1)
				this.state.myRoute.routeItems[0].items.push(item)
			}
			if(itemInMyRoutePlan) this.removeItemFromMyRoutePlanByID(item.id)
			updateLS()
		}
	},
	addItemToMyRouteFromPlan(item, dayId) {
		const itemInMyRoute = this.state.myRoute.routeItems.find(e => e.items.find(x => x.id == item.id))
		const itemInMyRoutePlan = false//this.state.myRoute.planItems.find(e => e.id == item.id)
		console.log({itemInMyRoute, itemInMyRoutePlan})
		if(itemInMyRoute || itemInMyRoutePlan) {
			alert('Уже добавлено в маршрут')
		} else {
			//this.state.myRoute.routeItems
			console.log(itemInMyRoute)
			let dayItems = this.state.myRoute.routeItems.find(e => e.date_id == dayId)
			if(dayItems) {
				dayItems.items.push(item)
			} else {
				//this.setMyRouteDaysObj(1)
				console.log('no dates')
				this.setMyRouteDates({start: new Date(), end: new Date()})
				this.setMyRouteDaysObj(1)
				console.log(this.state.myRoute.routeItems)
				this.state.myRoute.routeItems[0].items.push(item)
			}
			
			this.removeItemFromMyRoutePlanByID(item.id)
			updateLS()
		}
	},
	addItemToMyRoute(item) {
		//return 
		let itemInMyRoute = this.state.myRoute.items.find(e => e.id === item.id)
		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			if(this.state.myRoute.items.length) {
				this.state.myRoute.items[0].push(item)
			} else {
				this.state.myRoute.items.push([item])
			}
			
			updateLS()
		}
	},
	removeItemFromMyRoutePlanByID(id) {
		let itemIndex = this.state.myRoute.planItems.findIndex(e => e.id == id)
		if(itemIndex !== -1) {
			console.log('removeItemFromMyRoutePlanByID')
			this.state.myRoute.planItems.splice(itemIndex, 1)
			updateLS()
		}
	},
	removeItemFromMyRouteByID(id) {
		let dayIndex = this.state.myRoute.routeItems.findIndex(e => e.items.find(x => x.id == id))
		console.log(id, dayIndex)
		if(dayIndex !== -1) {
			let itemIndex = this.state.myRoute.routeItems[dayIndex].items.findIndex(e => e.id == id)
			console.log({itemIndex})
			if(itemIndex !== -1) {
				const removedItem = this.state.myRoute.routeItems[dayIndex].items.splice(itemIndex, 1)
				this.state.myRoute.planItems.push(removedItem[0])
				updateLS()
			}
			//
			//
		}
	},
	replaceMyRouteItems(items = []) {
		//this.state.myRoute.items.slice(0, this.state.myRoute.items.length)
		this.state.myRoute.items.length = 0
		this.state.myRoute.items.push(...items.map(e => {
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
			return e
		}))
		updateLS()
	},
	setMyRouteItems(items = []) {
		//console.log(items)
		this.state.myRoute.items = items
		updateLS()
	},
	setMyRouteStartPoint(point) {
		this.state.myRoute.startPoint = point
		updateLS()
	},
	setState(state) {
		this.state = state
	},
	updateLS() {
		updateLS()
	}
}

const LS = window.localStorage

if(LS.getItem('store')) {
	qstore.setState(JSON.parse(LS.getItem('store')))
}

function updateLS() {
	console.log('ls updated', qstore.state)
	LS.setItem('store', JSON.stringify(qstore.state))
}

window.addEventListener('storage', function(e) {
	//console.log(e)
})

function createGallery(e) {
	console.log(e)
	let gl = e.field_gallery
	let regex = /\/medium\/(.*?)\.jpg/g;
	let matches_imgs = gl.match(regex);

	let items = []
	if(matches_imgs) {
		items = matches_imgs.map(m => m.replace('/medium/', ''))
	}
	return Object.assign(e, {field_gallery: items})
}