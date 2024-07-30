function changeView() {
    var signInBox = document.getElementById("signInBox");
    var signUpBox = document.getElementById("signUpBox");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

function signUp() {
    // alert("ok");
 
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var username = document.getElementById("username");
    var password = document.getElementById("password");
 
    //alert(fname.value);
 
    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("m", mobile.value);
    f.append("u", username.value);
    f.append("p", password.value);
 
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
     if (request.readyState == 4 & request.status == 200) {
         var response = request.responseText;
         
         if (response == "Success") {
             document.getElementById("msg").innerHTML = "Registration Success !";
             document.getElementById("msg").innerHTML = "alert alert-success";
             document.getElementById("msgdiv").className = "d-block";
         } else {
             document.getElementById("msg").innerHTML = response;
             document.getElementById("msgdiv").className = "d-block";
             SVGViewElement("Error", response, "error");
             
         }
         
        
        
     }
    }
 
   request.open("POST", "signUpProcess.php", true);
    request.send(f);
 }
 
 function signin() {
    //alert("ok");
    var un = document.getElementById("un");
    var pw = document.getElementById("pw");
    var rm = document.getElementById("rm");
 
    //alert(un.value);
    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);
    f.append("r", rm.checked);
 
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
           if (response == "Success") {
              window.location = "index.php";
           } else {
             document.getElementById("msg2").innerHTML = response;
             document.getElementById("msgdiv2").className = "d-block";
             SVGViewElement("Error", response, "error");
           }
        }
 
   
    };
 
    request.open("POST", "signInProcess.php", true);
    request.send(f);
    
 
 }

function adminSignIn() {

    var un = document.getElementById("un");
    var pw = document.getElementById("pw");

    // alert(un.value);

    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                window.location = "adminDashboard.php";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgDiv").className = "d-block";
            }
        }
    };

    request.open("POST", "adminSignInProcess.php", true);
    request.send(f);

}

function loadUser() {

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("tb").innerHTML = response;
        }
    };

    request.open("POST", "loadUserProcess.php", true);
    request.send();

}

function updateUserStatus() {
    var userid = document.getElementById("uid");
    //    alert(userid.value);

    var f = new FormData();
    f.append("u", userid.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Deactive") {
                document.getElementById("msg").innerHTML = "User Deactivate Successfully";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else if (response == "Active") {
                document.getElementById("msg").innerHTML = "User Activate Successfully";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgDiv").className = "d-block";
            }
        }
    };

    request.open("POST", "updateUserStatusProcess.php", true);
    request.send(f);

}

function reload() {
    location.reload();
}

function brandReg() {
    var brand = document.getElementById("brand");
    // alert(brand.value);

    var f = new FormData();
    f.append("b", brand.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg1").innerHTML = "Brand Registration Successfully";
                document.getElementById("msg1").className = "alert alert-success";
                document.getElementById("msgDiv1").className = "d-block";
                brand.value = "";
            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msgDiv1").className = "d-block";
            }
        }
    };

    request.open("POST", "brandRegisterProcess.php", true);
    request.send(f);

}

function categoryReg() {
    var cat = document.getElementById("cat");
    // alert(cat.value);

    var f = new FormData();
    f.append("c", cat.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg2").innerHTML = "Category Registration Successfully";
                document.getElementById("msg2").className = "alert alert-success";
                document.getElementById("msgDiv2").className = "d-block";
                cat.value = "";
            } else {
                document.getElementById("msg2").innerHTML = response;
                document.getElementById("msgDiv2").className = "d-block";
            }
        }
    };

    request.open("POST", "categoryRegisterProcess.php", true);
    request.send(f);
}

function colorReg() {
    var color = document.getElementById("color");
    // alert(color.value);

    var f = new FormData();
    f.append("c", color.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg3").innerHTML = "Color Registration Successfully";
                document.getElementById("msg3").className = "alert alert-success";
                document.getElementById("msgDiv3").className = "d-block";
                color.value = "";
            } else {
                document.getElementById("msg3").innerHTML = response;
                document.getElementById("msgDiv3").className = "d-block";
            }
        }
    };

    request.open("POST", "colorRegisterProcess.php", true);
    request.send(f);
}

function sizeReg() {
    var size = document.getElementById("size");
    // alert(size.value);

    var f = new FormData();
    f.append("s", size.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg4").innerHTML = "Size Registration Successfully";
                document.getElementById("msg4").className = "alert alert-success";
                document.getElementById("msgDiv4").className = "d-block";
                size.value = "";
            } else {
                document.getElementById("msg4").innerHTML = response;
                document.getElementById("msgDiv4").className = "d-block";
            }
        }
    };

    request.open("POST", "sizeRegisterProcess.php", true);
    request.send(f);

}

function regProduct() {
    // alert("ok");
    var product = document.getElementById("pname");
    var brand = document.getElementById("brand");
    var category = document.getElementById("category");
    var color = document.getElementById("color");
    var size = document.getElementById("size");
    var description = document.getElementById("description");
    var imageUploader = document.getElementById("imageUploader");

    //alert(product.value);
    var f = new FormData();
    f.append("p", product.value);
    f.append("b", brand.value);
    f.append("c", category.value);
    f.append("co", color.value);
    f.append("s", size.value);
    f.append("d", description.value);
    f.append("i", imageUploader.files[0]);


   var request = new XMLHttpRequest();
   request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
        var response = request.responseText;
        if (response == "Success") {
            alert("Product Registration Successfully");
            location.reload();
        } else {
            alert(response);
        }
    }
   }

   request.open("POST", "productRegProcess.php", true);
   request.send(f);


    

}

function updateStock() {
    var pname = document.getElementById("selectProduct");
    var qty = document.getElementById("qty");
    var price = document.getElementById("uprice");

    var f = new FormData();
    f.append("p", pname.value);
    f.append("q", qty.value);
    f.append("up", price.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            alert(response);
            location.reload();
        }
    };

    request.open("POST", "updateStockProcess.php", true);
    request.send(f);



}

function printDiv(){
    var orginalContent = document.innerHTML;
    var printArea = document.getElementById("printArea").innerHTML;

    document.body.innerHTML = printArea;

    window.print();

    document.body.innerHTML = orginalContent;
}

function loadProduct(x) {

    var page = x;
    //alert(x);

    var f = new FormData();
    f.append("p", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };

    request.open("POST", "loadProductProcess.php", true);
    request.send(f);
}

function searchProduct(x) {

    var page = x;
    var product = document.getElementById("product");

    //alert(page);
    //alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };

    request.open("POST", "searchProductProcess.php", true);
    request.send(f);
}

function viewFilter() {
    document.getElementById("filterId").className = "d-block";
}

function advSearchProduct(x) {

    var page = x;
    var color = document.getElementById("color");
    var cat = document.getElementById("cat");
    var brand = document.getElementById("brand");
    var size = document.getElementById("size");
    var min = document.getElementById("min");
    var max = document.getElementById("max");

    //alert(cat.value);
    var f = new FormData();
    f.append("pg",page);
    f.append("co",color.value);
    f.append("cat",cat.value);
    f.append("b",brand.value);
    f.append("s",size.value);
    f.append("min",min.value);
    f.append("max",max.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            document.getElementById("pid").innerHTML = response;       
        }
    };

    request.open("POST", "advSearchProductProcess.php", true);
    request.send(f);


}

function uploadImg() {
   // alert("ok");
   var img = document.getElementById("imgUploader");

   var f = new FormData();
   f.append("i", img.files[0]);

   var request = new XMLHttpRequest();
   request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
        var response = request.responseText;
        //alert(response);
        if (response == "empty") {
            alert("Plese Select Your Profile Image");
        } else {
            document.getElementById("i").src = response;
            img.value = "";
        }
    }
   }

   request.open("POST", "profileImgUploadProcess.php", true);
   request.send(f);
}


function updateData() {
    //alert("ok");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var pw = document.getElementById("pw");
    var no = document.getElementById("no");
    var line1 = document.getElementById("line1");
    var line2 = document.getElementById("line2");
    //alert(fname.value);

    var f = new FormData();
    f.append("f",fname.value);
    f.append("l",lname.value);
    f.append("e",email.value);
    f.append("m",mobile.value);
    f.append("p",pw.value);
    f.append("n",no.value);
    f.append("l1",line1.value);
    f.append("l2",line2.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            alert(response);
        }
    };

    request.open("POST", "updateDataProcess.php", true);
    request.send(f);

}

function signOut () {
   // alert("ok");

   var request = new XMLHttpRequest();
   request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
        var response = request.responseText;
        alert(response);
        reload();
    }
   }

   request.open("POST", "signOutProcess.php");
   request.send();
}

function addtoCart(x) {

    var stockId = x;
    var qty = document.getElementById("qty");

    if (qty.value > 0) {
        
        var f = new FormData();
        f.append("s", stockId);
        f.append("q", qty.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                //alert(response);
                swal("Good job!", response, "success");
                qty.value = "";
               
                
               
            }
        };

        request.open("POST", "addtoCartProcess.php", true);
        request.send(f);

    } else {
        alert("Please Enter Your Valid Quantity")
    }
}

function loadCart() {
   // alert("ok");
   var request = new XMLHttpRequest();
   request.onreadystatechange = function () {
    if (request.readyState == 4 & request.status == 200) {
        var response = request.responseText;
        //alert(response);
        document.getElementById("cartBody").innerHTML = response;
    }
   }

   request.open("POST", "loadCartProcess.php", true);
   request.send();
}

function incrementCartQty(x) {
    
    var cartId = x;
    var qty = document.getElementById("qty" + x);
    var newQty = parseInt(qty.value) + 1;
    //alert(newQty);

    var f = new FormData();
    f.append("c",cartId);
    f.append("q",newQty);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                qty.value = parseInt(qty.value) + 1;
                //loadCart();
            } else {
                alert(response);
            }
        }
    }

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);


}

function decrementCartQty(x) {
   
    var cartId = x;
    var qty = document.getElementById("qty" + x);
    var newQty = parseInt(qty.value) - 1;
    //alert(newQty);

    var f = new FormData();
    f.append("c",cartId);
    f.append("q",newQty);

    if (newQty > 0) {
        var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                qty.value = parseInt(qty.value) + 1;
                loadCart();
            } else {
                alert(response);
            }
        }
    }

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
        
    }

}

function removeCart(x) {
    
    if (confirm("Are You sure deleting this item?")) {
        var f = new FormData();
        f.append("c", x);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                alert(response);
                reload();
            }
        }

        request.open("POST", "removeCartProcess.php", true);
        request.send(f);
        
    }
}

function checkout() {
    //alert("ok");
    var f = new FormData();
    f.append("cart", true);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            var payment = JSON.parse(response);
            doCheckout(payment, "checkoutProcess.php");
            
        }
    }

    request.open("POST", "paymentProcess.php");
    request.send(f);
}

function doCheckout(payment, path) {
    // Payment completed. It can be a successful failure.
    payhere.onCompleted = function onCompleted(orderId) {
        console.log("Payment completed. OrderID:" + orderId);
        // Note: validate the payment and show success or failure page to the customer
        
        var f = new FormData();
        f.append("payment", JSON.stringify(payment));

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                //alert(response);
                var order = JSON.parse(response);

                if (order.resp == "Success") {
                    window.location = "invoice.php?orderId=" + order.order_id;
                } else {
                    alert(response);
                }
            }
        }

        request.open("POST", path, true);
        request.send(f);

    };

    // Payment window closed
    payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
    };

    // Error occurred
    payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:"  + error);
    };

   
    

    // Show the payhere.js popup, when "PayHere Pay" is clicked
  // document.getElementById('payhere-payment').onclick = function (e) {
    payhere.startPayment(payment);
 //};
}

function buyNow(stockId) {
    // alert(stockId);
    var qty = document.getElementById("qty");

    if (qty.value > 0) {
        
        var f = new FormData();
        f.append("cart", false);
        f.append("stockId", stockId);
        f.append("qty", qty.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
               //alert(response);
               var payment = JSON.parse(response);
               payment.stock_id = stockId;
               payment.qty = qty.value;
               doCheckout(payment, "buynowProcess.php");
               
              
            }
        }

        request.open("POST", "paymentProcess.php", true);
        request.send(f);

    } else {
        alert("Plece Enter Valid Quantity");
    }
}

function forgetPassword() {
    var email = document.getElementById("e");

    if (email.value != "") {
        
        var f = new FormData();
        f.append("e", email.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                document.getElementById("msg").innerHTML = "Email Sent! Plese Check Your Mail Box";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                email.value = "";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msg").className = "alert alert-danger";
                document.getElementById("msgDiv").className = "d-block";
            }
           
     
            
        }
    };


        request.open("POST", "forgetPasswordProcess.php", true);
        request.send(f);

    } else {
        alert("Please enter your valid Email");
    }
}

function resetPassword() {
    var vcode = document.getElementById("vcode");
    var np = document.getElementById("np");
    var np2 = document.getElementById("np2");

    var f = new FormData();
    f.append("vcode",vcode.value);
    f.append("np",np.value);
    f.append("np2",np2.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                window.location = "signin.php";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msg").className = "alert alert-danger";
                document.getElementById("magDiv").className = "d-block";
            }
        }
    }

    request.open("POST", "resetPasswordProcess.php", true);
    request.send(f);

}

function loadChart() {
    var ctx = document.getElementById('myChart').getContext('2d');

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;

            var data = JSON.parse(response);

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: '# of Votes',
                        data: data.data,
                        borderWidth: 2
                    }]
                },
                options: {
                    // Add any options you need for the doughnut chart here
                }
            });
        }
    }

    request.open("POST", "loadChartProcess.php", true);
    request.send();
}
