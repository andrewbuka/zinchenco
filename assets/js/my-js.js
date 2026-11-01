const slideHistory = document.querySelectorAll('.slide')

if(slideHistory) {
    slideHistory.forEach(slide => {
        const date = slide.querySelector('.date')

        const stageYear = slide.querySelector('.stage-year')

        date.textContent = stageYear.textContent
    })
}

const newsBlock = document.querySelectorAll('.news-block')
if(newsBlock) {
    newsBlock.forEach(news => {
        const day = news.querySelector('.day')
        const month = news.querySelector('.month')
        const year = news.querySelector('.year')

        const dayValue = news.querySelector('.day-value')
        const monthValue = news.querySelector('.month-value')
        const yearValue = news.querySelector('.year-value')

        day.textContent = dayValue.textContent
        month.textContent = monthValue.textContent
        year.textContent = yearValue.textContent
       
    })
}

let cath;

const prodLi = document.querySelectorAll('.prod-li');

const preserveBox = document.querySelector('.preserve-box');
const savingBox = document.querySelector('.saving-box');
const feedBox = document.querySelector('.feed-box');
const plantBox = document.querySelector('.plant-box');
const fishBox = document.querySelector('.fish-box');

prodLi.forEach(li => {
	li.addEventListener('click', () => {
		prodLi.forEach(li => {
			li.classList.remove('active')
		})
		li.classList.add('active');
		const att = li.getAttribute('data-cath');
		cath = att;
		setProdPage(cath)
	})
})

const resetProd = () => {
	preserveBox.classList.add('none')
	savingBox.classList.add('none')
	feedBox.classList.add('none')
	plantBox.classList.add('none')
	fishBox.classList.add('none')
}


const setProdPage = (cath) => {
	resetProd();
	if(cath === 'preserve-cath') {
		preserveBox.classList.remove('none')
	}
	if(cath === 'save-cath') {
		savingBox.classList.remove('none')
	}
	if(cath === 'feed-cath') {
		feedBox.classList.remove('none')
	}
	if(cath === 'plant-cath') {
		plantBox.classList.remove('none')
	}
	if(cath === 'fish-cath') {
		fishBox.classList.remove('none')
	}	
}

const searchIcon = document.querySelector('.search-icon');
const searchContainer = document.querySelector('.search-container');
const closeContainer = document.querySelector('.close-container');
const formSearch = document.querySelector('#searchwp-form-1')

formSearch.addEventListener('submit', (event) => {
    event.preventDefault();
})


searchIcon.addEventListener('click', () => {
    searchContainer.classList.add('search-visible');
})
closeContainer.addEventListener('click', () => {
    searchContainer.classList.remove('search-visible');
})

const ruBtn = document.querySelector('.ru-btn');
const belBtn = document.querySelector('.bel-btn');
const enBtn = document.querySelector('.en-btn');








