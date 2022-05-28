document.getElementById("Range").onclick = function() {
    let valore = document.getElementById("Range").value
    document.getElementById("QTPersone").innerHTML = valore
}


document.getElementById("caliPlus").onclick = function(){
    var qnt = document.getElementById("caliQnt").value
    alert("salve")
    qnt = qnt+1
    document.getElementById("caliQnt").innerHTML = qnt
}