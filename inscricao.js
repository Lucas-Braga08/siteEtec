document.addEventListener('DOMContentLoaded', function() {
    const formInscricao = document.getElementById("formInscricao");
    
    if (formInscricao) {
        formInscricao.addEventListener("submit", function(e){
            e.preventDefault();

            let dados = new FormData(this);
            
            if(dados.get("nome") && dados.get("email") && dados.get("termos")){
                document.getElementById("msgErro").style.display = "none";
                document.getElementById("msgOk").style.display = "block";
                document.getElementById("msgOk").scrollIntoView({behavior: 'smooth'});
                this.reset();
                
                setTimeout(() => {
                    document.getElementById("msgOk").style.display = "none";
                }, 6000);
            } else {
                document.getElementById("msgOk").style.display = "none";
                document.getElementById("msgErro").style.display = "block";
                document.getElementById("msgErro").scrollIntoView({behavior: 'smooth'});
            }
        });
    }
});