function toggleDisplay(){
    $("#rectangle").toggle()
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
    $(".auth-links").toggleClass("hidden")
}

async function showCategory(category){
    const request = await fetch(`/?accio=category&category=${category}`)
    const data = await request.text()
    document.querySelector("html").innerHTML=data;
}