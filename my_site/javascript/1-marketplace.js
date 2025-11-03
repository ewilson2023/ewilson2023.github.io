// itemGroup prototype
function ItemGroup(itemName, price, quantity) {
	this.itemName = itemName;
	this.price = price;
	this.quantity = quantity;
}


function Cart(){
    this.itemGroups = [];

	
	this.addItemGroup = function(itemGroup) {
		this.itemGroups.push(itemGroup);
	}
	this.getTotalPrice = function(){
		let totalPrice = 0;
		let i = 0;
		while ( i < this.itemGroups.length ) {
			totalPrice += (this.itemGroups[i].price * this.itemGroups[i].quantity);
			i++;
		}
		return totalPrice;
	}
    this.showTotalAmount = function(){
        if (this.itemGroups.length == 0){
            document.write(
				"<p> You have 0 items, for a total amount of 0$, in your cart! </p>");
        } else {
			let totalItems = 0;
			let i = 0;
			while ( i < this.itemGroups.length ) {
				totalItems += this.itemGroups[i].quantity;
				i++;
			}
			document.write("<p> You have "
				+ totalItems + " items, for a total amount of " 
				+ this.getTotalPrice() + "$, in your cart! </p>")
			
        }
    }
}


document.write("<h2> 1) Creating the cart </h2>")
let my_cart = new Cart()
my_cart.showTotalAmount();

document.write("<h2> 2) Adding 15 pants at 10.05$ each to the cart! </h2>")
let pants = new ItemGroup("pants", 10.05, 15);
my_cart.addItemGroup(pants)
my_cart.showTotalAmount();

document.write("<h2> 3) Adding 1 coat at 99.99$ to the cart! </h2>")
let coat = new ItemGroup("pants", 99.99, 1);
my_cart.addItemGroup(coat)
my_cart.showTotalAmount();