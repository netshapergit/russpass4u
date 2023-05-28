$(document).ready(function() {
	
	const LS = window.localStorage
	
	const catsVoc = {
		'35': {name: 'Отель', content_id: '11'},
		'36': {name: 'Ресторан', content_id: '20'},
		'37': {name: 'Место', content_id: '24'},
		'38': {name: 'Событие', content_id: '26'},
		'39': {name: 'Кемпинг', content_id: '44'},
		'40': {name: 'Экскурсия', content_id: '45'},
		'21': {name: 'Маршрут', content_id: '22'},
		'16': {name: 'Статья', content_id: '17'}
	}
	
	new Vue({
		el: '#import-app',
		name: 'Import App',
		data() {
			return {
				citiesData,
				catsVoc,
				isAppLoaded: false,
				importData: {
					city: null,
					objType: null,
					title: '',
					galSize: 0
				}
			}
		},
		computed: {
			translitedTitle() {
				return translit(this.importData.title)
			},
			imgPath() {
				if(this.importData.objType) {
					return this.importData.objType.path.slice(1).replace('/', '-') + '-' + this.translitedTitle 
				}
				return ''
			},
			gal() {
				if(this.importData.galSize) {
					let gal = ''
					for(let i = 0; i < this.importData.galSize.length; i++) {
						console.log(this.imgPath)
						gal += this.imgPath + '-' + Number(Date.now().toString().slice(-4)) + (i + 1)
					}
					return gal
				}
				return ''
			}
		},
		methods: {
			cityChange() {
				this.importData.objType = null
			}
		},
		mounted() {
			this.isAppLoaded = true
		}
	})
	
	function translit(word){
		let answer = '';
		let converter = {
			'а': 'a',    'б': 'b',    'в': 'v',    'г': 'g',    'д': 'd',
			'е': 'e',    'ё': 'e',    'ж': 'zh',   'з': 'z',    'и': 'i',
			'й': 'y',    'к': 'k',    'л': 'l',    'м': 'm',    'н': 'n',
			'о': 'o',    'п': 'p',    'р': 'r',    'с': 's',    'т': 't',
			'у': 'u',    'ф': 'f',    'х': 'h',    'ц': 'c',    'ч': 'ch',
			'ш': 'sh',   'щ': 'sch',  'ь': '',     'ы': 'y',    'ъ': '',
			'э': 'e',    'ю': 'yu',   'я': 'ya',

			'А': 'A',    'Б': 'B',    'В': 'V',    'Г': 'G',    'Д': 'D',
			'Е': 'E',    'Ё': 'E',    'Ж': 'Zh',   'З': 'Z',    'И': 'I',
			'Й': 'Y',    'К': 'K',    'Л': 'L',    'М': 'M',    'Н': 'N',
			'О': 'O',    'П': 'P',    'Р': 'R',    'С': 'S',    'Т': 'T',
			'У': 'U',    'Ф': 'F',    'Х': 'H',    'Ц': 'C',    'Ч': 'Ch',
			'Ш': 'Sh',   'Щ': 'Sch',  'Ь': '',     'Ы': 'Y',    'Ъ': '',
			'Э': 'E',    'Ю': 'Yu',   'Я': 'Ya'
		};

		for (let i = 0; i < word.length; ++i ) {
			if (converter[word[i]] == undefined){
				answer += word[i];
			} else {
				answer += converter[word[i]];
			}
		}

		return answer.replace(' ', '-')
	}
	
})