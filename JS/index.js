function toggleDisplay(){
    const rectangle = document.getElementById('rectangle');
    if (rectangle.style.transform) {
        rectangle.style.transform=null
    } else {
        rectangle.style.transform="translateX(-300px)"
    }
}

async function displayProduct(productId){
    const request = await fetch(`/?accio=product&product=${productId}`)
    const data = await request.text()
    document.querySelector("html").innerHTML=data;
}

async function showProductList(){
    const request = await fetch(`/?accio=product_list`)
    const data = await request.text()
    document.querySelector("html").innerHTML=data;
}

function toggleAccount(){
    const element = document.querySelector(".auth-links")
    if(element.classList.contains("hidden")){
        $( ".auth-links" ).removeClass( "hidden" );
    } else {
        $( ".auth-links" ).addClass( "hidden" );
    }
}

async function showCategory(category){
    const request = await fetch(`/?accio=category&category=${category}`)
    const data = await request.text()
    document.querySelector("html").innerHTML=data;
}