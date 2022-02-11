function clipboard() {

    var copyText = document.getElementById("inputToken");

    copyText.select();
    copyText.setSelectionRange(0, 99999); 

    navigator.clipboard.writeText(copyText.value);

    alert("Token copiado com sucesso!: " + copyText.value);
}