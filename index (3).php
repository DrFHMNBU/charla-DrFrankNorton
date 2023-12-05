<meta charset="utf-8">
<title>Charla de DrFrankNorton.</title>
<h1>Charla de DrFrankNorton.</h1>
<textarea id="demo"style="width:100%;height:50%;overflow:hidden"></textarea>
<div id="fecha"style="width:100%"></div>
<form method="POST"action="index.php">
    <textarea name="mensaje"class="enviarmensaje"style="width:100%;height:25%"required="required"></textarea>
    <br>
	<input type="submit"name="submit"value="Enviar mensaje."class="enviarmensaje"style="width:100%">
</form>
<?php
if(
	isset($_POST['submit'])
){
    $contenidoPrevio=file_get_contents("./datos/mensajes.txt");

    $mensaje = "Invitado/a:\n".$_POST["mensaje"];

    $testmsg = strtolower($_POST["mensaje"]);
        
    if(!(
            str_contains($testmsg,'put')
            ||
            str_contains($testmsg,'gil')
            ||
            str_contains($testmsg,'pendej')
            ||
            str_contains($testmsg,'suck')
            ||
            str_contains($testmsg,'inhabil')
            ||
            str_contains($testmsg,'inhábil')
            ||
            str_contains($testmsg,'tarad')
            ||
            str_contains($testmsg,'stup')
            ||
            str_contains($testmsg,'xcrement')
            ||
            str_contains($testmsg,'caca')
            ||
            str_contains($testmsg,'shit')
            ||
            str_contains($testmsg,'mor')
            ||
            str_contains($testmsg,'negr')
            ||
            str_contains($testmsg,'nigg')
            ||
            str_contains($testmsg,'gitan')
            ||
            str_contains($testmsg,'gitan')
            ||
            str_contains($testmsg,'dont like')
            ||
            str_contains($testmsg,'dislike')
            ||
            str_contains($testmsg,'disgust')
            ||
            str_contains($testmsg,'jod')
            ||
            str_contains($testmsg,'horc')
            ||
            str_contains($testmsg,'suicid')
            ||
            str_contains($testmsg,'mierd')
            ||
            str_contains($testmsg,'rat')
    )){
		file_put_contents("./datos/mensajes.txt", $contenidoPrevio ."\n\n". $mensaje);
    }else{
   		file_put_contents("./datos/mensajes.txt", $contenidoPrevio ."\n\nPlz, moderate your language.");
    }
}
?>
<script type="module">
const render=()=>{
	setTimeout(render,500)
    if(location.href!=="http://charladrfranknortongl.atwebpages.com/"){
    	location.replace("http://charladrfranknortongl.atwebpages.com/")
    }
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	       // Typical action to be performed when the document is ready:
 	       document.getElementById("demo").innerHTML = xhttp.responseText;
 	    }
	};
	xhttp.open("GET", "./puentear.php", true);
	xhttp.send();
}
render()
</script>
<style>
        textarea {
        		resize: none;
        }
        body{
        		font-family:consolas;
        }
        #fecha{
                background-color:#004488;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        #fecha:hover{
                background-color:#0066bb;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        #demo{
                background-color:#004488;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        #demo:hover{
                background-color:#0066bb;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        ::placeholder{
                color:#fff;
        }
        ::placeholder:hover{
                color:#fff;
        }

        input[type=range] {
                size: 100px;
                height: 38px;
                width: 400px;
                -webkit-appearance: none;
                margin: 10px 0;
                box-shadow:8px 8px 8px #000;
                text-shadow:8px 8px 8px #000;
        }
        input[type="range"]::-webkit-slider-thumb {
                -webkit-appearance: none; /* Override default look */
                appearance: none;
                background-color: #5cd5eb;
                height: 4rem;
                width: 2rem;
                border:8px solid #000000;
                box-shadow:8px 8px 4px #000;
                text-shadow:8px 8px 4px #000;
        }

        a:focus{
                outline: none;
        }
        a{
                text-decoration: none;
                display:inline-block;
        }
        a:hover{
                text-decoration: none;
                display:inline-block;
        }
        form{
                margin:0;
        }
        input:focus{
                outline: none;
        }
        .enviarmensaje{
                background-color:#004488;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        .enviarmensaje:hover{
                background-color:#0066bb;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:20px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:4px 4px 4px #000;
                color: #fff;
                transition:1s;
        }
        input{
                background-color:#004488;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:15px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:8px 8px 4px #000;
                color: #fff;
        }
        input:hover{
                background-color:#0066bb;
                border:8px solid #000000;
                color:#000000;
                font-weight:bold;
                text-decoration: none;
                font-size:15px;
                word-wrap: nowrap;
                white-space: nowrap;
                display:inline-block;
                box-shadow:8px 8px 4px #000;
                text-shadow:8px 8px 4px #000;
                color: #fff;
        }
        body{
                background-color:#0088ff;
                color:#fff;
                font-weight:bold;
                text-decoration:none;
                font-size:15px;
                overflow:hidden;
        }

        h1{
                background-color:#0088ff;
                color:#fff;
                font-weight:bold;
                text-decoration:none;
                font-size:15px;
                overflow:hidden;
                text-shadow:8px 8px 8px #000;
        }

        #tablero{
                border-collapse:collapse;
                float: left;
                width: 60%;
                box-shadow:8px 8px 8px #000;
                text-shadow:8px 8px 8px #000;
        }

        #log{
                border-collapse:collapse;
                float: left;
                width: 20%;
                height: 400px;
                margin-left: 5%;
                border: 4px solid #000;
                overflow:scroll;
        }

        #tablero td, #tablero th{
                border: 16px solid #000;			
                width:100px;
                height:100px;
                text-align: center;
                margin: 0;
                background: #048;
                font-size: 2em;
        }

        .clear{
                clear: both;
        }

        #log{
                padding: 1em;
        }

        #log p:nth-child(1){
                font-weight: bold;
        }

        button {
                margin-top: 1em;
        }

        .j1{
                color: red;
        }

        .j2{
                color: blue;
        }

        h1{
                font-size:50px;
                text-align:center;
        }
</style>