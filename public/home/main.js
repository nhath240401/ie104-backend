// Ligh / Dark mode

const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});

const information = querySelectorAll(".information")

const btnFooter = querySelectorAll('.btn-footer')
btnFooter.addEventListener('click', () => {
	console.log("abc")
})

//Shopping Cart
const products = [
	{
		id: 1,
		name: 'The Coffee House Sữa Đá',
		image: './assets/images/products/cafe-1.jpg',
		tag: 'cafe-1',
		price: 39,
		inCart: 0
	},
	{
		id: 2,
		name: 'Cà Phê Sữa Đá',
		image: './assets/images/products/cafe-2.jpg',
		tag: 'cafe-2',
		price: 29,
		inCart: 0
	},
	{
		id: 3,
		name: 'Cà Phê Sữa Nóng',
		image: './assets/images/products/cafe-3.jpg',
		tag: 'cafe-3',
		price: 35,
		inCart: 0
	},
	{
		id: 4,
		name: 'Bạc Sỉu',
		image: './assets/images/products/cafe-4.jpg',
		tag: 'cafe-4',
		price: 29,
		inCart: 0
	},
	{
		id: 5,
		name: 'Cà Phê Sữa Đá Chai Fresh 250ML ',
		image: './assets/images/products/cafe-5.jpg',
		tag: 'cafe-5',
		price: 75,
		inCart: 0
	},
	{
		id: 6,
		name: 'Caramel Macchicano Đá',
		image: './assets/images/products/cafe-6.jpg',
		tag: 'cafe-6',
		price: 49,
		inCart: 0
	},
	{
		id: 1,
		name: 'Caramel Macchicano Nóng',
		image: './assets/images/products/cafe-7.jpg',
		tag: 'cafe-7',
		price: 49,
		inCart: 0
	},
	{
		id: 8,
		name: 'Latte Nóng',
		image: './assets/images/products/cafe-8.jpg',
		tag: 'cafe-8',
		price: 49,
		inCart: 0
	},
	{
		id: 9,
		name: 'Cà Phê Đen Đá',
		image: './assets/images/products/cafe-9.jpg',
		tag: 'cafe-9',
		price: 29,
		inCart: 0
	},
	{
		id: 10,
		name: 'Bạc Sỉu Nóng',
		image: './assets/images/products/cafe-10.jpg',
		tag: 'cafe-10',
		price: 35,
		inCart: 0
	},
	{
		id: 11,
		name: 'CloudFee Hạnh Nhân Nướng',
		image: './assets/images/products/cloudfee-1.jpg',
		tag: 'cloudfee-1',
		price: 49,
		inCart: 0
	},
	{
		id: 12,
		name: 'CloudFee Caramel',
		image: './assets/images/products/cloudfee-2.jpg',
		tag: 'cloudfee-2',
		price: 49,
		inCart: 0
	},
	{
		id: 13,
		name: 'CloudFee Classic',
		image: './assets/images/products/cloudfee-3.jpg',
		tag: 'cloudfee-3',
		price: 49,
		inCart: 0
	},
	{
		id: 14,
		name: 'CloudFee Hạnh Nhân Nướng',
		image: './assets/images/products/cloudfee-2.jpg',
		tag: 'cloudfee-4',
		price: 49,
		inCart: 0
	},
	{
		id: 15,
		name: 'CloudFee Hạnh Nhân Nướng',
		image: './assets/images/products/cloudfee-3.jpg',
		tag: 'cloudfee-5',
		price: 49,
		inCart: 0
	},
	{
		id: 16,
		name: 'CloudFee Hạnh Nhân Nướng',
		image: './assets/images/products/cloudfee-1.jpg',
		tag: 'cloudfee-6',
		price: 49,
		inCart: 0
	},
	{
		id: 17,
		name: 'CloudTea Hồng Trà Arabica',
		image: './assets/images/products/cloudtea-1.jpg',
		tag: 'cloudtea-1',
		price: 55,
		inCart: 0
	},
	{
		id: 18,
		name: 'CloudTea Oolong Nướng Đá Xay',
		image: './assets/images/products/cloudtea-2.png',
		tag: 'cloudtea-2',
		price: 55,
		inCart: 0
	},
	{
		id: 19,
		name: 'CloudTea Nướng Kem Dừa',
		image: './assets/images/products/cloudtea-3.jpg',
		tag: 'cloudtea-3',
		price: 55,
		inCart: 0
	},
	{
		id: 20,
		name: 'CloudTea Nướng Kem Dừa',
		image: './assets/images/products/cloudtea-1.jpg',
		tag: 'cloudtea-4',
		price: 55,
		inCart: 0
	},
	{
		id: 21,
		name: 'CloudTea Hồng Trà Arabica',
		image: './assets/images/products/cloudtea-2.png',
		tag: 'cloudtea-5',
		price: 55,
		inCart: 0
	},
	{
		id: 22,
		name: 'CloudTea Hồng Trà Arabica',
		image: './assets/images/products/cloudtea-3.jpg',
		tag: 'cloudtea-6',
		price: 55,
		inCart: 0
	},
	{
		id: 23,
		name: 'Hi - Tea Phúc Bồn Tử',
		image: './assets/images/products/hitea-1.jpg',
		tag: 'hitea-1',
		price: 49,
		inCart: 0
	},
	{
		id: 24,
		name: 'Hi - Tea Dâu Tây Aloe Vora',
		image: './assets/images/products/hitea-2.jpg',
		tag: 'hitea-2',
		price: 49,
		inCart: 0
	},
	{
		id: 25,
		name: 'Hi - Tea Xoài',
		image: './assets/images/products/hitea-3.jpg',
		tag: 'hitea-3',
		price: 49,
		inCart: 0
	},
	{
		id: 26,
		name: 'Hi - Tea Yuzu',
		image: './assets/images/products/hitea-4.jpg',
		tag: 'hitea-4',
		price: 49,
		inCart: 0
	},
	{
		id: 27,
		name: 'Hi - Tea Vải',
		image: './assets/images/products/hitea-5.jpg',
		tag: 'hitea-5',
		price: 49,
		inCart: 0
	},
	{
		id: 28,
		name: 'Hi - Tea Đào',
		image: './assets/images/products/hitea-6.jpg',
		tag: 'hitea-6',
		price: 49,
		inCart: 0
	},
	{
		id: 29,
		name: 'Hi - Tea Đá Tuyết Xào Bào',
		image: './assets/images/products/hitea-7.jpg',
		tag: 'hitea-7',
		price: 49,
		inCart: 0
	},
	{
		id: 30,
		name: 'Hi - Tea Đá Tuyết Yuzu Vải',
		image: './assets/images/products/hitea-8.jpg',
		tag: 'hitea-8',
		price: 49,
		inCart: 0
	},
]

let carts = document.querySelectorAll('.add-cart')

for(let i = 0; i < carts.length; i++){
	carts[i].addEventListener('click', () => {
		cartNumber(products[i])
		totalCost(products[i])
	})
}

const onLoadCart = () => {
	let productNumbers = localStorage.getItem('cartNumbers')

	if(productNumbers){
		document.querySelector('.cart span').textContent = productNumbers;
	}
}

const cartNumber = (product) => {
	let productNumbers = localStorage.getItem('cartNumbers')
	productNumbers = parseInt(productNumbers)

	if(productNumbers){
		localStorage.setItem("cartNumbers", productNumbers + 1);
		document.querySelector('.cart span').textContent = productNumbers + 1;
	}else {
		localStorage.setItem("cartNumbers", 1)
		document.querySelector('.cart span').textContent = 1;
	}

	setItems(product);
}

const setItems = (product) => {
	let cartItems = localStorage.getItem('productsInCart');
	cartItems = JSON.parse(cartItems);

	if(cartItems != null){
		if(cartItems[product.tag] == undefined){
			cartItems = {
				...cartItems,
				[product.tag] : product
			}
		}
		cartItems[product.tag].inCart += 1;
	}else{
		product.inCart = 1;
		cartItems = {
			[product.tag] : product
		}
	}

	localStorage.setItem("productsInCart", JSON.stringify(cartItems))
}

const totalCost = (product) => {
	let cartCost = localStorage.getItem('totalCost');
	
	if(cartCost != null){
		cartCost = parseInt(cartCost);
		localStorage.setItem("totalCost", cartCost + product.price);
	}else{
		localStorage.setItem("totalCost", product.price)
	}
}

const displayCart = () => {
	let cartItems = localStorage.getItem("productsInCart");
	let cartCost = localStorage.getItem("totalCost");
	cartItems = JSON.parse(cartItems);
	let productContainer = document.querySelector(".products");

	console.log(cartItems)
	if(cartItems && productContainer){
		productContainer.innerHTML = '';
		Object.values(cartItems).map(item => {
			productContainer.innerHTML += `
				<div class="product-cart">
					<i class="fa fa-circle-xmark"></i>
					<img src=${item.image}>
					<span>${item.name}</span> 
					<div class="quantity">
						<i class="fa-solid fa-plus"></i>
						<span>${item.inCart}</span>
						<i class="fa-solid fa-minus"></i>
					</div>
					<div class="total">
						${item.inCart * item.price}.000 vnd
					</div>
				</div>
			`
		});

		productContainer.innerHTML += 
		`
			<div class="total-container">
				<h4 class="total-title">TOTAL</h4>
				<h4 class="total-price">
					${cartCost}.000 vnd
				</h4>
			</div>
		`
	}
}


onLoadCart()
displayCart()

