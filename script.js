'use strict'
var flag = 1;

function libri(){

    document.querySelector('.libri').style.transform = "scale(1.9)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.1)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.1)";

    document.querySelector('footer').style.marginTop = "730px";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */


    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar6").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: flex");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    document.querySelector(".searchbar2").style.marginLeft = "150px"
    document.querySelector(".searchbar2").style.marginTop = "35px"

    document.querySelector(".result").style.display = "block";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";
    document.querySelector(".result5").style.display = "none";
    document.querySelector(".result6").style.display = "none";

}


function autori(){

    document.querySelector('footer').style.marginTop = "730px";

    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.9)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.1)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.1)";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar6").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: flex");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    document.querySelector(".searchbar3").style.marginLeft = "150px"
    document.querySelector(".searchbar3").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "block";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";
    document.querySelector(".result5").style.display = "none";
    document.querySelector(".result6").style.display = "none";

}

function utenti(){

    document.querySelector('footer').style.marginTop = "730px";

    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.9)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.1)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.1)";
   /*  document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar6").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: flex");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    document.querySelector(".searchbar4").style.marginLeft = "150px"
    document.querySelector(".searchbar4").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "block";
    document.querySelector(".result4").style.display = "none";
    document.querySelector(".result5").style.display = "none";
    document.querySelector(".result6").style.display = "none";
}


function prestiti(){

    document.querySelector('footer').style.marginTop = "730px";

    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.9)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.1)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.1)";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: flex");
    document.querySelector(".searchbar6").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    document.querySelector(".searchbar5").style.marginLeft = "150px"
    document.querySelector(".searchbar5").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "block";
    document.querySelector(".result5").style.display = "none";
    document.querySelector(".result6").style.display = "none";
}

function statistiche(){

    document.querySelector('footer').style.marginTop = "730px";

    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.9)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.1)";


    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar6").setAttribute("style", "display: flex");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    document.querySelector(".searchbar6").style.marginLeft = "150px";
    document.querySelector(".searchbar6").style.marginTop = "35px";

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";
    document.querySelector(".result5").style.display = "block";
    document.querySelector(".result6").style.display = "none";
    
}

function statisticheAggiuntive(){

    document.querySelector('footer').style.marginTop = "730px";
    
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.statistiche').style.transform = "scale(1.1)";
    document.querySelector('.aggiuntive').style.transform = "scale(1.9)";


    //document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar6").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".messaggio").setAttribute("style", "display: none");

    /* document.querySelector(".searchbar6").style.marginLeft = "150px";
    document.querySelector(".searchbar6").style.marginTop = "35px"; */

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";
    document.querySelector(".result5").style.display = "none";
    document.querySelector(".result6").style.display = "block";


    $(document).ready(function(){
        var niente = 1;
        console.log(niente);
        //if(confirm("are you sure ?")){
        $.ajax({
            type:"POST",
            url:"project_esame.php",
            data:{niente:niente},
            success:function(response){
                console.log(response);
                $(".result6").html(response);                                   
                        
                },
            error:function(e){
                alert("Qualcosa è andato storto, Ricomminciare !");
                    
            }

            });
       // }
    })






}



function removeElementPrestiti(elt){
    document.getElementById(elt.id).remove(); 

    document.querySelector("#nolleggiare").style.display = "block";
    document.querySelector("#listanolleggi").style.display = "block";
    document.getElementById("ward1").remove();
    document.querySelector(".result4").innerHTML="";

}

function removeElement(elt){

    document.getElementById(elt.id).remove(); 
    document.querySelector("#inserimento").style.display = "block";
    document.querySelector("#ricerca").style.display = "block";
    document.getElementById("ward").remove();
    document.querySelector(".result3").innerHTML="";

}

function inserimento(){
    
    document.querySelector("#inserimento").style.display = "none";
    document.querySelector("#ricerca").style.display = "none";

    var backId = document.createElement("div");
    backId.setAttribute("id", "ward");
 

    var labNome = document.createElement("label");
    var labCognome = document.createElement("label");
    var labMat = document.createElement("label");
    var labTel = document.createElement("label");
    var labInd = document.createElement("label");
    var spazio = document.createElement("label");

    //create form
    var form0 = document.createElement("form");
    // class
    form0.setAttribute("id", "form0");
    form0.setAttribute("method", "post");
    form0.setAttribute("action", "project_esame.php");

    labNome.innerText = "Nome ";
    labCognome.innerText = "\nCognome ";
    labMat.innerText = "\n Matricola";
    labTel.innerText = "\n telefono";
    labInd.innerText = "\n Indirizzo";
    spazio.innerText = "\n";
    backId.innerHTML = '<img onclick = "removeElement('+form0.id+');" width="30px" heigth="40px" src="retour.png" alt="back"> ';

    // create input fields
     var nomeStudente = document.createElement("input");
     nomeStudente.setAttribute("type", "text");
     nomeStudente.setAttribute("name", "nomeStudente");
     nomeStudente.setAttribute("placeholder", "Nome");

    //cognome
     var cognomeStudente = document.createElement("input");
     cognomeStudente.setAttribute("type", "text");
     cognomeStudente.setAttribute("name", "cognomeStudente");
     cognomeStudente.setAttribute("placeholder", "cognome"); 

    //num matricola
     var matricola = document.createElement("input");
     matricola.setAttribute("type", "text");
     matricola.setAttribute("name", "matricola");
     matricola.setAttribute("placeholder", "matricola");

     //num telefono
     var telefono = document.createElement("input");
     telefono.setAttribute("type", "text");
     telefono.setAttribute("name", "telefono");
     telefono.setAttribute("placeholder", "telefono");

    //indirizzo
     var indirizzo = document.createElement("input");
     indirizzo.setAttribute("type", "text");
     indirizzo.setAttribute("name", "indirizzo");
     indirizzo.setAttribute("placeholder", "indirizzo");

    //submit
    var s = document.createElement("button");
    s.setAttribute("type", "submit");
    s.setAttribute("class", "insert");
    s.innerText = "Inserire";

     
     form0.appendChild(labNome);
     form0.appendChild(nomeStudente);
     form0.appendChild(labCognome);
     form0.appendChild(cognomeStudente);
     form0.appendChild(labMat);
     form0.appendChild(matricola);
     form0.appendChild(labTel);
     form0.appendChild(telefono);
     form0.appendChild(labInd);
     form0.appendChild(indirizzo);
     form0.appendChild(spazio);
     
     form0.appendChild(s);

     

     var x = document.querySelector('.searchbar4');
     x.appendChild(form0)
     document.querySelector('#form0').style.marginLeft = "28%";
     document.getElementById(form0.id).style.textAlign="center";
     x.appendChild(backId);



}


function ricerca(){
    document.querySelector("#inserimento").style.display = "none";
    document.querySelector("#ricerca").style.display = "none";

    var backId = document.createElement("div");
    backId.setAttribute("id", "ward");
 

    var labNome = document.createElement("label");
    var spazio = document.createElement("label");
    

    var form1 = document.createElement("form");
    form1.setAttribute("id", "form1");
    form1.setAttribute("method", "POST");
    form1.setAttribute("action", "project_esame.php");

    labNome.innerText = "Nome ";
    spazio.innerText = "\n";

    backId.innerHTML = '<img id ="back" onclick = "removeElement('+form1.id+');" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var nomeStudent = document.createElement("input");
     nomeStudent.setAttribute("type", "text");
     nomeStudent.setAttribute("name", "nomeStud");
     nomeStudent.setAttribute("placeholder", "Nome Studente");

     //submit button
     var s = document.createElement("button");
     s.innerText = "Ricerca";
     s.setAttribute("type", "submit");
     s.setAttribute("class", "ricerStudente");

    form1.appendChild(labNome);
    form1.appendChild(nomeStudent);
    form1.appendChild(spazio)
    form1.appendChild(s);

    

     var x = document.querySelector('.searchbar4');
     x.appendChild(form1)
     document.querySelector('#form1').style.marginLeft = "28%";
     x.appendChild(backId);

}

function listaNolleggi(){
    document.querySelector("#listanolleggi").style.display = "none";
    document.querySelector("#nolleggiare").style.display = "none";

    var backId = document.createElement("div");
    backId.setAttribute("id", "ward1");
 

    var labNome = document.createElement("label");
    var labFrom = document.createElement("label");
    var labTo= document.createElement("label");
    var spazio = document.createElement("label");
    

    var form2 = document.createElement("form");
    form2.setAttribute("id", "form2");
    form2.setAttribute("method", "post");
    form2.setAttribute("action", "project_esame.php");

    labNome.innerText = "Matricola ";
    labFrom.innerText = "\nfrom"
    labTo.innerText = " \t To"
    spazio.innerText = "\n";

    backId.innerHTML = '<img id ="back" onclick = "removeElementPrestiti('+form2.id+');" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var matSt = document.createElement("input");
     matSt.setAttribute("type", "text");
     matSt.setAttribute("name", "matSt");
     matSt.setAttribute("placeholder", "Matricola studente");

     //from
     var from = document.createElement("input");
     from.setAttribute("type", "date");
     from.setAttribute("name", "from");

    //to
    var to = document.createElement("input");
    to.setAttribute("type", "date");
    to.setAttribute("name", "to");

     //submit button
     var s = document.createElement("input");
     s.setAttribute("class", "sub2");
     s.setAttribute("type", "submit");
     s.setAttribute("value", "Submit");

    form2.appendChild(labNome);
    form2.appendChild(matSt);
    form2.appendChild(spazio);
    form2.appendChild(labFrom);
    form2.appendChild(from);
    form2.appendChild(spazio);
    form2.appendChild(labTo);
    form2.appendChild(to);
    form2.appendChild(spazio);
    form2.appendChild(s);

    var x = document.querySelector('.searchbar5');
    x.appendChild(form2);
    document.querySelector('#form2').style.marginLeft = "28%";
    x.appendChild(backId);
}


function nolleggiare(){

    document.querySelector("#listanolleggi").style.display = "none";
    document.querySelector("#nolleggiare").style.display = "none";

    var backId = document.createElement("div");
    backId.setAttribute("id", "ward1");
 

    var labMatricola = document.createElement("label");
    var labLibro = document.createElement("label");
    var dataPrestito = document.createElement("label");
    var spazio = document.createElement("label");
    

    var form3 = document.createElement("form");
    form3.setAttribute("id", "form3");
    form3.setAttribute("method", "post");
    form3.setAttribute("action", "project_esame.php");

    labMatricola.innerText = "Matricola ";
    labLibro.innerText = "\nLibro ";
    dataPrestito.innerText = "\nData prestito"
    spazio.innerText = "\n";

    backId.innerHTML = '<img id ="back" onclick = "removeElementPrestiti('+form3.id+');" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var matricola = document.createElement("input");
     matricola.setAttribute("type", "text");
     matricola.setAttribute("name", "matricolaStudente");
     matricola.setAttribute("placeholder", "Matricola");

     //nome libro input 
     var libro = document.createElement("input");
     libro.setAttribute("type", "text");
     libro.setAttribute("name", "titoloLibro");
     libro.setAttribute("placeholder", "Titolo libro");

     //data prestito
     var dataPrest = document.createElement("input");
     dataPrest.setAttribute("type", "date");
     dataPrest.setAttribute("name", "dataPrestito");

     //submit button
     var s = document.createElement("input");
     s.setAttribute("type", "submit");
     s.setAttribute("class", "sub1");
     s.setAttribute("value", "Submit");

    form3.appendChild(labMatricola);
    form3.appendChild(matricola);
    form3.appendChild(spazio);
    form3.appendChild(labLibro);
    form3.appendChild(libro);
    form3.appendChild(spazio);
    form3.appendChild(dataPrestito);
    form3.appendChild(dataPrest);
    form3.appendChild(spazio);
    form3.appendChild(spazio);
    form3.appendChild(s);

    var x = document.querySelector('.searchbar5');
    x.appendChild(form3)
    document.querySelector('#form3').style.marginLeft = "28%";
    x.appendChild(backId);
}
 
// Inserire uno studente

$(document).ready(function(){

    $(".searchbar4").on('click', '.insert', function(event){  
        event.preventDefault();
        var nomeStudente= $("input[name=nomeStudente]").val() ;
        console.log(nomeStudente);
        var cognomeStudente = $("input[name=cognomeStudente").val() ;
        var matricola = $("input[name=matricola").val() ;
        var telefono = $("input[name=telefono").val() ;
        var indirizzo = $("input[name=indirizzo").val() ;
        

        var formStudent = {nomeStudente:nomeStudente, cognomeStudente:cognomeStudente,
             matricola:matricola,
            telefono:telefono, indirizzo:indirizzo};

        console.log(formStudent);
        $.ajax({
            type:"POST",
            data:formStudent,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");            
                console.log(response);

                document.querySelector(".result3").style.display = "block";
                document.querySelector(".result3").innerHTML = response;
        
            },
            error:function(e){
                $(".result3").html("Error occurred !"+
                "Forse quello studente esiste gia nella database !");
            }
            });
        })
})


//Ricerca Studente 

$(document).ready(function(){ 
    $(".searchbar4").on('click', '.ricerStudente', function(event){    
        event.preventDefault();
        var nomeStud= $("input[name=nomeStud]").val() ;

        var formRicerca = {nomeStud:nomeStud};

        console.log(formRicerca);
        $.ajax({
            type:"POST",
            data:formRicerca,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");
              
                console.log(response);
                document.querySelector(".result3").style.display = "block";
                document.querySelector(".result3").innerHTML = response;
        
            },
            error:function(e){
                $(".result3").html("Error occurred");
            }
            });
        })
}) 



//Parte libri
$(document).ready(function(){
    $('.search2').click(function(event){    
        event.preventDefault();
        var titolo= $("input[name=titolo]").val() ;
        var nome = $("input[name=autore").val() ;
        

        var formData = {titolo:titolo, nome:nome};

        console.log(formData);
        $.ajax({
            type:"POST",
            data:formData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");
                console.log(response);
                document.querySelector(".result").innerHTML = response;
        
            },
            error:function(e){
                $(".result").html("Error occurred");
            }
            });
        })
})


/* //libri 2
$(document).ready(function(){
    $("#titolo").typeahead({
        source:function(query, result){
            $.ajax({
                url:"autosuggest.php",
                method:"POST",
                data:{query:query},
                dataType:"json",
                success:function(data){
                    result($.map(data, function(item){
                        return item;
                    }));
                }

            })
        }
    });


}) */



// Parte Autori
$(document).ready(function(){
    $('.search3').click(function(event){    
        event.preventDefault();
        var author= $("input[name=author]").val() ;
        //console.log(author);

        var authorData = {author:author}

        console.log(authorData);
        $.ajax({
            type:"POST",
            data:authorData,
            url:"project_esame.php",
            success:function(response){
                
                console.log("data submitted correctly");

                console.log(response);
                document.querySelector(".result2").innerHTML = response;
        
            },
            error:function(e){
                $(".result2").html("Error occurred");
            }
            });
        })
})




//Parte Nolleggiare
$(document).ready(function(){
        $(".searchbar5").on('click', '.sub1', function(event){    
        event.preventDefault();
        var matricolaStudente = $("input[name=matricolaStudente]").val() ;
        var titoloLibro = $("input[name=titoloLibro]").val() ;
        var dataPrestito = $("input[name=dataPrestito]").val() ;
        console.log(matricolaStudente, titoloLibro, dataPrestito);
        var nolleggiaData = {matricolaStudente:matricolaStudente, 
            titoloLibro:titoloLibro, dataPrestito:dataPrestito}

        $.ajax({
            type:"POST",
            data:nolleggiaData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                console.log(response);
                document.querySelector(".result4").innerHTML = response;
        
            },
            error:function(e){
                $(".result4").html("Error occurred, Registrati prima.")
                 alert("E importante Notare che non si puo prendere in prestito un libro"+
                " uno studente non registrato all universita!"+
                "Registrati e riprova");
            }
            });
        })
}) 


//Parte Visulizza i Prestiti
$(document).ready(function(){
        $(".searchbar5").on('click', '.sub2', function(event){     
        event.preventDefault();
        var matSt = $("input[name=matSt]").val() ;
        var from = $("input[name=from]").val() ;
        var to = $("input[name=to]").val() ;
        console.log(from);
        var visualizzaData = {matSt:matSt, from:from, to:to}
        $.ajax({
            type:"POST",
            data:visualizzaData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");
                console.log(response);
                document.querySelector(".result4").innerHTML = response;
        
            },
            error:function(e){
                $(".result4").html("Error occurred");
            }
            });
        })
}) 



// Parte statistiche
$(document).ready(function(){
    
    $('.visualizza').click(function(event){    
        event.preventDefault();

        var annoPub = $("input[name=annoPub]").val() ;
        var numPrestiti = $(".numPrestiti option:selected").val() ;
        console.log(numPrestiti, annoPub);

        var visualizzaData = {numPrestiti:numPrestiti, annoPub:annoPub}
        $.ajax({
            type:"POST",
            data:visualizzaData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                //console.log(response);
                document.querySelector(".result5").innerHTML = response;
        
            },
            error:function(e){
                $(".result5").html("Error occurred");
            }
            });
        })
}) 

// delete a student
function deleteAjax(matricule){
    $(document).ready(function(){
        console.log(matricule);
        if(confirm("are you sure ?")){
            $.ajax({
                type:"POST",
                url:"delete.php",
                data:{delete_mat:matricule},
                success:function(response){
                    console.log(response);
                    alert("Cancellazione avvenuta con successo !");
                    $("#delete"+matricule).hide();   
                    console.log("#delete"+matricule);                                 
                        
                    },
                error:function(e){
                    alert("Impossibile di cancellare quello studente, forse ha fatto un nolleggio ultimamente\n"
                    +"devi cancellare il Nollegio fatto prima");
                    
                }

            });
        }
    })
}

// delete a rent
function deleteNolleggio(matricola, cu, idBib, isbnId){
    $(document).ready(function(){
        console.log(matricola);
        if(confirm("are you sure ?")){
            $.ajax({
                type:"POST",
                url:"delete.php",
                data:{mat:matricola, cu:cu, idBib:idBib, isbnId:isbnId},
                success:function(response){
                    console.log(response);
                    alert("Cancellazione avvenuta con successo !");
                    $("#delNol"+cu).hide();                                    
                        
                    },
                error:function(e){
                    alert("Qualcosa è andato storto, Ricomminciare !");
                    
                }

            });
        }
    })
}


/* only autocomplete
$( function() {
    
    $("#autocomplete" ).autocomplete({
        
        source: function( request, response ) {
            console.log("salutation");
            $.ajax({
                url: "autosuggest.php",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function( data ) {
                    response( data );
                    console.log("salutation");
                },
                error: function (xhr, textStatus, errorThrown){
                    console.log("error: " + errorThrown+ " " + textStatus);
                }
            });
        },
        select: function (event, ui) {
            //console.log("salutation");
            $('#autocomplete').val(ui.item.label); 
            //$('#autocomplete').tokenInput(ui.item.label);// display the selected text
            return false;
        },
        focus: function(event, ui){
            $( "#autocomplete" ).val( ui.item.label);
            return false;
        },
    });
}); */

// autocomplete with many parameter.
//Sugerisce i nomi degli autori cominciando con i carateri inseriti nell input field

$('#autocomplete').tokenfield({
    
    autocomplete: {

        source: function( request, response ) {
            $.ajax({
                url: "autosuggest.php",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function( data ) {
                    response( data );
                },
                error: function (xhr, textStatus, errorThrown){
                    console.log("error: " + errorThrown+ " " + textStatus);
                }
            })
        },

      delay: 100   

    },

    showAutocompleteOnFocus: false, 

}); 



