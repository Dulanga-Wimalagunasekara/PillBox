function addTocart (pid) {
   const cartId = sessionStorage.getItem('cartId');
   const host = window.location.host;
   
   if (cartId == undefined) {
      var generatedId = Math.random();
      sessionStorage.setItem('cartId', generatedId);
      var url = "http://" + host + "/add_to_cart.php?addtoCart=true&id="+ pid + "&cartId=" + generatedId
   } else {
      var url = "http://" + host + "/add_to_cart.php?addtoCart=true&id="+ pid + "&cartId=" + cartId
   }

   fetch(url, {
      method: "GET"
   }).then(() => {
      console.log("Successfully  added! pid " + pid);
   }).catch(() => {
      console.log("Failed pid " + pid);
   });
   
}

function redirectCart () {

   const cartId = sessionStorage.getItem('cartId');
   const host = window.location.host;

   var urlLoadCart = "http://" + host + "/loadCart.php?cartId=" + cartId;

   fetch(urlLoadCart, {
      method: "GET"
   }).then(() => {
      console.log("Loaded Cart " + cartId);
      window.location = "../cart.php";
   }).catch(() => {
      console.log("Cart Loading Failed! " + cartId);
   });

}