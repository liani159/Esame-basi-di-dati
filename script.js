'use strict'
var flag = 1;

function libri(){

    document.querySelector('.libri').style.transform = "scale(1.9)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */


    document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: flex");

    document.querySelector(".searchbar2").style.marginLeft = "150px"
    document.querySelector(".searchbar2").style.marginTop = "35px"

    document.querySelector(".result").style.display = "block";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";

}


function autori(){
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.9)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: flex");

    document.querySelector(".searchbar3").style.marginLeft = "150px"
    document.querySelector(".searchbar3").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "block";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "none";

}

function utenti(){
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.9)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.1)";
   /*  document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: none");
    document.querySelector(".searchbar4").setAttribute("style", "display: flex");

    document.querySelector(".searchbar4").style.marginLeft = "150px"
    document.querySelector(".searchbar4").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "block";
    document.querySelector(".result4").style.display = "none";
}


function prestiti(){
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.prestiti').style.transform = "scale(1.9)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    /* document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF"; */



    document.querySelector(".searchbar").setAttribute("style", "display: none");
    document.querySelector(".searchbar2").setAttribute("style", "display: none");
    document.querySelector(".searchbar3").setAttribute("style", "display: none");
    document.querySelector(".searchbar5").setAttribute("style", "display: flex");
    document.querySelector(".searchbar4").setAttribute("style", "display: none");

    document.querySelector(".searchbar5").style.marginLeft = "150px"
    document.querySelector(".searchbar5").style.marginTop = "35px"

    document.querySelector(".result").style.display = "none";
    document.querySelector(".result2").style.display = "none";
    document.querySelector(".result3").style.display = "none";
    document.querySelector(".result4").style.display = "block";
}

/* // backward
$(document).ready(function() {
    $('#back').click(function(event){    
        event.preventDefault();
        $('.searchbar4').removeChild("form");
    })
    //$('.searchbar4').removeChild("form");
});
 */

function removeElementPrestiti(){
    
    document.getElementById("form1").remove();
    document.querySelector("#nolleggiare").style.display = "block";
    document.querySelector("#listanolleggi").style.display = "block";
    document.getElementById("ward1").remove();
   
}

function removeElement(){
    
    document.getElementById("form").remove();
    document.querySelector("#inserimento").style.display = "block";
    document.querySelector("#ricerca").style.display = "block";
    document.getElementById("ward").remove();
   
}


function inserimento(elemento,search){
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
    var form = document.createElement("form");
    form.id = "form"
    form.setAttribute("method", "post");
    form.setAttribute("action", "project_esame.php");

    labNome.innerText = "Nome ";
    labCognome.innerText = "\nCognome ";
    labMat.innerText = "\n Matricola";
    labTel.innerText = "\n telefono";
    labInd.innerText = "\n Indirizzo";
    spazio.innerText = "\n";
    //backId.innerHTML = '<a onclick = "removeElement();" href="#"> back </a>';
    backId.innerHTML = '<img onclick = "removeElement();" width="30px" heigth="40px" src="retour.png" alt="back"> ';

    // create input fields
     var nome = document.createElement("input");
     nome.setAttribute("type", "text");
     nome.setAttribute("name", "nome");
     nome.setAttribute("placeholder", "Nome");

    //cognome
     var cognome = document.createElement("input");
     cognome.setAttribute("type", "text");
     cognome.setAttribute("name", "cognome");
     cognome.setAttribute("placeholder", "cognome"); 

    //num matricola
     var matricola = document.createElement("input");
     matricola.setAttribute("type", "text");
     matricola.setAttribute("name", "matricola");
     matricola.setAttribute("placeholder", "matricola");

     //num telefono
     var tel = document.createElement("input");
     tel.setAttribute("type", "text");
     tel.setAttribute("name", "tel");
     tel.setAttribute("placeholder", "tel");

    //indirizzo
     var indirizzo = document.createElement("input");
     indirizzo.setAttribute("type", "text");
     indirizzo.setAttribute("name", "indirizzo");
     indirizzo.setAttribute("placeholder", "indirizzo");

    //submit
    var s = document.createElement("input");
    s.setAttribute("type", "submit");
    s.setAttribute("value", "Submit");

     
     form.appendChild(labNome);
     form.appendChild(nome);
     form.appendChild(labCognome);
     form.appendChild(cognome);
     form.appendChild(labMat);
     form.appendChild(matricola);
     form.appendChild(labTel);
     form.appendChild(tel);
     form.appendChild(labInd);
     form.appendChild(indirizzo);
     form.appendChild(spazio);
     
     form.appendChild(s);

     

     var x = document.querySelector('.searchbar4');
     x.appendChild(form)
     document.getElementById("form").style.textAlign="center";
     //document.querySelector(".searchlist").appendChild(backId);
     x.appendChild(backId);



}


// you need to create different button back
function ricerca(){
    document.querySelector("#inserimento").style.display = "none";
    document.querySelector("#ricerca").style.display = "none";

    var backId = document.createElement("div");
    backId.setAttribute("id", "ward");
 

    var labNome = document.createElement("label");
    var spazio = document.createElement("label");
    

    var form = document.createElement("form");
    form.id = "form"
    form.setAttribute("method", "post");
    form.setAttribute("action", "project_esame.php");

    labNome.innerText = "Nome ";
    spazio.innerText = "\n";

    //backId.innerHTML = '<a onclick = "removeElement();" href="#"> <img src="retour.png" alt="back"> </a>';
    backId.innerHTML = '<img id ="back" onclick = "removeElement();" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var nome = document.createElement("input");
     nome.setAttribute("type", "text");
     nome.setAttribute("name", "nome");
     nome.setAttribute("placeholder", "Nome Studente");

     var s = document.createElement("input");
     s.setAttribute("type", "submit");
     s.setAttribute("value", "Submit");

    form.appendChild(labNome);
    form.appendChild(nome);
    form.appendChild(spazio)
    form.appendChild(s);

     var x = document.querySelector('.searchbar4');
     x.appendChild(form)

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
    

    var form = document.createElement("form");
    form.id = "form1"
    form.setAttribute("method", "post");
    form.setAttribute("action", "project_esame.php");

    labNome.innerText = "Nome ";
    labFrom.innerText = "\nfrom"
    labTo.innerText = " \t To"
    spazio.innerText = "\n";

    //backId.innerHTML = '<a onclick = "removeElement();" href="#"> <img src="retour.png" alt="back"> </a>';
    backId.innerHTML = '<img id ="back" onclick = "removeElementPrestiti();" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var nome = document.createElement("input");
     nome.setAttribute("type", "text");
     nome.setAttribute("name", "Nome studente");
     nome.setAttribute("placeholder", "Nome studente");

     //from
     var from = document.createElement("input");
     from.setAttribute("type", "date");
     from.setAttribute("name", "Data prestito");

    //to
    var to = document.createElement("input");
    to.setAttribute("type", "date");
    to.setAttribute("name", "To");

     //submit button
     var s = document.createElement("input");
     s.setAttribute("type", "submit");
     s.setAttribute("value", "Submit");

    form.appendChild(labNome);
    form.appendChild(nome);
    form.appendChild(spazio);
    form.appendChild(labFrom);
    form.appendChild(from);
    form.appendChild(spazio);
    form.appendChild(labTo);
    form.appendChild(to);
    form.appendChild(spazio);
    form.appendChild(s);

    var x = document.querySelector('.searchbar5');
    x.appendChild(form)

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
    var dataRitorno = document.createElement("label");
    var spazio = document.createElement("label");
    

    var form = document.createElement("form");
    form.id = "form1"
    form.setAttribute("method", "post");
    form.setAttribute("action", "project_esame.php");

    labMatricola.innerText = "Matricola ";
    labLibro.innerText = "\nLibro ";
    dataPrestito.innerText = "\nData prestito"
    dataRitorno.innerText = "\nData prestito"
    spazio.innerText = "\n";

    //backId.innerHTML = '<a onclick = "removeElement();" href="#"> <img src="retour.png" alt="back"> </a>';
    backId.innerHTML = '<img id ="back" onclick = "removeElementPrestiti();" width="30px" heigth="40px" src="retour.png" alt="back">';

    // create input fields
     var matricola = document.createElement("input");
     matricola.setAttribute("type", "text");
     matricola.setAttribute("name", "matricola");
     matricola.setAttribute("placeholder", "Matricola");

     //nome libro input 
     var libro = document.createElement("input");
     libro.setAttribute("type", "text");
     libro.setAttribute("name", "libro");
     libro.setAttribute("placeholder", "libro");

     //data prestito
     var dataPrest = document.createElement("input");
     dataPrest.setAttribute("type", "date");
     dataPrest.setAttribute("name", "Data prestito");


     //data ritorno
    //data prestito
    var dataRit = document.createElement("input");
    dataRit.setAttribute("type", "date");
    dataRit.setAttribute("name", "Data ritorno");

     //submit button
     var s = document.createElement("input");
     s.setAttribute("type", "submit");
     s.setAttribute("value", "Submit");

    form.appendChild(labMatricola);
    form.appendChild(matricola);
    form.appendChild(spazio);
    form.appendChild(labLibro);
    form.appendChild(libro);
    form.appendChild(spazio);
    form.appendChild(dataPrestito);
    form.appendChild(dataPrest);
    form.appendChild(spazio);
    form.appendChild(dataRitorno);
    form.appendChild(dataRit);
    form.appendChild(spazio);
    form.appendChild(s);

    var x = document.querySelector('.searchbar5');
    x.appendChild(form)

    x.appendChild(backId);
}
 
/* document.querySelector("#inserimento").style.heigth = "150px";
document.querySelector("#inserire").style.backgroundColor ="#E1FFEE";
document.querySelector("#inserire").style.width ="150px";
document.querySelector("#ricerca").style.backgroundColor ="blue"; */
//Da fare
/* function Statistiche(){


} */



// xhtmlrequest 
/*
function getEmployees() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
    
      var xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            //document.querySelector(".result").innerHTML = xmlhttp.responseText;
            $(".result").load( "project_esame.php" );
        }
    };
    xmlhttp.open("GET","project_esame.php",true);
    xmlhttp.send();

 }*/



//Parte libri
$(document).ready(function(){
    //document.querySelector(".search2").addEventListener("click", function(){
    $('.search2').click(function(event){    
        event.preventDefault();
        var titolo= $("input[name=titolo]").val() ;
        var nome = $("input[name=autore").val() ;
        

        var formData = {titolo:titolo, nome:nome};

        console.log(formData);
        $.ajax({
            type:"POST",
            //data:formData,
            data:formData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");
                //test
                //var res = JSON.parse(response);
                //console.log(res);
                /*if(res.success == true){
                    getEmployees();
                }
                else{
                    document.querySelector(".result").innerHTML = "An error occured";
                }*/
                console.log(response);
                //$(".result").html(response);
                document.querySelector(".result").innerHTML = response;
                //getEmployees();
        
            },
            error:function(e){
                $(".result").html("Error occurred");
            }
            });
        })
})


// Parte Autori
$(document).ready(function(){
    //document.querySelector(".search2").addEventListener("click", function(){
    $('.search3').click(function(event){    
        event.preventDefault();
        var author= $("input[name=author]").val() ;
        

        var authorData = {author:author}

        console.log(authorData);
        $.ajax({
            type:"POST",
            data:authorData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                console.log(response);
                //$(".result").html(response);
                document.querySelector(".result2").innerHTML = response;
                //getEmployees();
        
            },
            error:function(e){
                $(".result2").html("Error occurred");
            }
            });
        })
})



// Parte Utenti/Studenti
$(document).ready(function(){
    //document.querySelector(".search2").addEventListener("click", function(){
    $('.search4').click(function(event){    
        event.preventDefault();
        var studente = $("input[name=studente]").val() ;
        var select = document.getElementById('biblio');
        var value = select.options[select.selectedIndex].value;
        //console.log(studente); // en
        if(!studente){
            alert("You have to specify the name of the student");
        }
        else{

        var studentData = {studente:studente, value:value};

        console.log(studentData);
        $.ajax({
            type:"POST",
            data:studentData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                console.log(response);
                //$(".result").html(response);
                document.querySelector(".result3").innerHTML = response;
                //getEmployees();
        
            },
            error:function(e){
                $(".result3").html("Error occurred");
            }
            });}
        })
    
})


//Parte storico
$(document).ready(function(){
    //document.querySelector(".search2").addEventListener("click", function(){
    $('.search5').click(function(event){    
        event.preventDefault();
        var from= $("input[name=from]").val() ;
        var to= $("input[name=to]").val() ;

        var dateData = {from:from, to:to}

        console.log(dateData);
        $.ajax({
            type:"POST",
            data:dateData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                console.log(response);
                //$(".result").html(response);
                document.querySelector(".result4").innerHTML = response;
                //getEmployees();
        
            },
            error:function(e){
                $(".result4").html("Error occurred");
            }
            });
        })
}) 


//Parte Statistica
$(document).ready(function(){
    //document.querySelector(".search2").addEventListener("click", function(){
    $('.stat').click(function(event){    
        event.preventDefault();
        var stat= $("input[name=statistiche]").val() ;
        console.log(stat);
        var statsData = {stat:stat}

        console.log(statsData);
        $.ajax({
            type:"POST",
            data:statsData,
            url:"project_esame.php",
            success:function(response){
                console.log("data submitted correctly");

                console.log(response);
                //$(".result").html(response);
                document.querySelector(".result4").innerHTML = response;
                //getEmployees();
        
            },
            error:function(e){
                $(".result4").html("Error occurred");
            }
            });
        })
}) 






/* document.querySelector(".search2").addEventListener("click", function(){
    var titolo= $("input[name=titolo]").val() ;
    /*var nome = $("input[name=autore").val() ;
    var data = $("input[name=data").val() ;
    var lingua = $("input[name=lingua").val() ; /////

    $.ajax({
        type:"post",
        data:titolo,
        url:"project_esame.php",
        success:function(response){
            console.log("data submitted correctly");
            console.log(response);
            $(".result").html("Form submitted");

        },
        error:function(e){
            $(".result").html("Error occurred");
        }
    });
}) */


/* $(document).ready(function() {
    $("form").submit(function(event){
        event.preventDefault()
        
        //if(docu)

        var architettura = document.getElementById("architettura").value
        /*var eco= document.getElementById("eco").value
        var fisica = document.getElementById("fisica").value
        var giurisprudenza = document.getElementById("giurisprudenza").value
        var matif = document.getElementById("matinf").value
        var vita = document.getElementById("vita").value
        var mediche= document.getElementById("mediche").value
        var biomediche= document.getElementById("biomediche").value
        var umanistici= document.getElementById("umanistici").value
        var chimiche = document.getElementById("chimiche").value
        var ingegneria = document.getElementById("ingegneria").value
        var morfo = document.getElementById("morfologia").value //

        $.post("Project_esame.php", { architettura:architettura},function(data){
            console.log(architettura);
        })

    })
}) */
/*
document.querySelector('.surcusale').addEventListener('click', function(ev) {
    $('input').removeClass("visited");
    if (ev.target.matches('input')) {
         ev.preventDefault();
         if (!!document.querySelector('.visited')) {
             document.querySelector('.visited').className = '';
         }
         ev.target.parentNode.classList.add('visited');
    }
    
});



/*if a library is selected
now we check wich element of the menu has been also clicked






/*
function libri(){

    document.querySelector('.libri').style.transform = "scale(1.9)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF";
    
    //create form
    var f = document.createElement("form");
    f.setAttribute("method", "post");
    f.setAttribute("action", "project_esame.php");

    //button submit
    var sub = document.createElement("input");
    sub.setAttribute("type","submit");
    sub.setAttribute("value", "Search");

    var lab = document.createElement("LABEL");
    var lab2 = document.createElement("LABEL");
    var inp = document.createElement("INPUT");
    var data = document.createElement("INPUT");
    var lab3 = document.createElement("LABEL");
    var lingua = document.createElement("INPUT");

    //document.querySelector(".searchbar").removeChild(".inp");
    //label
    lab.innerText = "titolo  ";
    lab2.innerText = "\n\nAnno publicazione  ";

    //input
    inp.setAttribute("type", "text");
    inp.placeholder = "Titolo";

    // date
    data.setAttribute("type", "date");
    
    //lingua
    lab3.innerText = "\n\nLingua  ";
    lingua.setAttribute("type", "text");
    lingua.placeholder = "Lingua";

    //aggiungo i pezzi al form

    f.appendChild(lab);
    f.appendChild(inp);
    f.appendChild(lab2);
    f.appendChild(data);
    f.appendChild(lab3);
    f.appendChild(lingua);
    f.appendChild(sub);
   
    var x = document.querySelector('.searchbar');

    if(flag){
        flag = 0;
        document.querySelector(".inp").remove();
        document.querySelector(".ico").remove();
    }
    

    // attaco il form alla class searchbar
    x.appendChild(f);
    //x.removeChild(f);


}



function autori(){
   
    document.querySelector(".searchbar").setAttribute("style", "display: none");

    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.9)";
    document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF";
    //create form

    var g = document.createElement("form");
    g.setAttribute("method", "post");
    g.setAttribute("action", "project_esame.php");

    //button submit
    var sub = document.createElement("input");
    sub.setAttribute("type","submit");
    sub.setAttribute("value", "Search");

    var label = document.createElement("LABEL");
    var label2 = document.createElement("LABEL");
    var inpu = document.createElement("INPUT");
    var dati = document.createElement("INPUT");
    var label3 = document.createElement("LABEL");
    var langue = document.createElement("INPUT");

    //ocument.querySelector(".searchbar").removeChild(".inp");
    //label
    label.innerText = "Nome Autore ";
    label2.innerText = "\n\nData Nascita  ";

    //input
    inpu.setAttribute("type", "text");
    inpu.placeholder = "Nome";

    // date
    dati.setAttribute("type", "date");
    
    //lingua
    label3.innerText = "\n\nLuogo Nascita  ";
    langue.setAttribute("type", "text");
    langue.placeholder = "Luogo";

    //aggiungo i pezzi al form

    g.appendChild(label);
    g.appendChild(inpu);
    g.appendChild(label2);
    g.appendChild(dati);
    g.appendChild(label3);
    g.appendChild(langue);
    g.appendChild(sub);
   
    var p = document.querySelector('.searchbar');
    
    
    if(flag){
        flag = 0;
        document.querySelector(".inp").remove();
        document.querySelector(".ico").remove();
    };

    // attaco il form alla class searchbar
    p.appendChild(g);
}*/

/*
document.querySelector('.libri').addEventListener('click',
function(){
    document.querySelector('.libri').style.transform = "scale(1.9)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF";

   
});


document.querySelector('.autori').addEventListener('click',
function(){
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.9)";
    document.querySelector('.libri').style.borderRadius = "5px";
    document.querySelector('.libri').style.color = "#fff"
    document.querySelector('.libri').style.backgroundColor = "#1E90FF";

});

document.querySelector('.utenti').addEventListener('click',
function(){
    document.querySelector('.libri').style.transform = "scale(1.1)";
    document.querySelector('.autori').style.transform = "scale(1.1)";
    document.querySelector('.utenti').style.transform = "scale(1.9)";
    document.querySelector('.autori').style.borderRadius = "5px";
    document.querySelector('.autori').style.color = "#fff"
    document.querySelector('.autori').style.backgroundColor = "#1E90FF";
});*/


// test

