$("#cep").mask("00000-000");

var cep = document.getElementById("cep");

cep.addEventListener("keyup", function (e) {
    if (cep.value.length == 9) {
        autoComplete(cep.value);
    }
});

function autoComplete(cep){
    // let url = `https://webmaniabr.com/api/1/cep/${cep}/?app_key=H3dh6zauiS2fRxZbxmn258vCPAqP5GFE&app_secret=kYW359Z6iEzJmQwSrKm8O7I3Yrv5cTxGnCSlDY8hvOiKF4ec`
    let url = `http://127.0.0.1:8000/cep/${cep}`;

    fetch(url).then(function(response){
        if (response.ok){
            response.json().then(function(endereco){
                
                document.getElementById("logradouro").value = endereco.endereco;
                document.getElementById("bairro").value = endereco.bairro;
                document.getElementById("estado").value = endereco.uf;
                // document.getElementById("cidade").value = endereco.cidade;
            });
        }
    });
}
