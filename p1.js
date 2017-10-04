   // window.onload=function(){alert('Pagina en pruebas');}

		// function contarBusqueda(){
		// 	 var numero = 0;
		// 	// var n= new Date();
		// 	 //var d= n.getDate();
  //            if (document.getElementById('checkbox1').checked)
  //               numero++;
  //            if (document.getElementById('checkbox2').checked)
  //               numero++;
  //            if (document.getElementById('checkbox3').checked)
  //               numero++;
  //            if (document.getElementById('checkbox4').checked)
  //               numero++;
  //             if (document.getElementById('checkbox5').checked)
  //               numero++;
  //             if (document.getElementById('checkbox6').checked)
  //               numero++;
  //            alert('La pelicula contiene ' + numero + ' géneros');
  //            return;
		// }
		function marcarTodos(){
			if(document.formulario.checkbox7.checked){
			document.formulario.checkbox1.checked = true;
			document.formulario.checkbox2.checked = true;
			document.formulario.checkbox3.checked = true;
			document.formulario.checkbox4.checked = true;
			document.formulario.checkbox5.checked = true;
			document.formulario.checkbox6.checked = true;
			return;
		}else{
			document.formulario.checkbox1.checked = false;
			document.formulario.checkbox2.checked = false;
			document.formulario.checkbox3.checked = false;
			document.formulario.checkbox4.checked = false;
			document.formulario.checkbox5.checked = false;
			document.formulario.checkbox6.checked = false;
			return;
		}
		}
		function Cero(i){
			if(i<10){
				i= "0" + i;

			}
			return i;
		}
		function comprobacion(){
			var fecha= new Date();
			var h= Cero(fecha.getHours());
			var m= Cero(fecha.getMinutes());
			var s= Cero(fecha.getSeconds());
			var hora = h+':'+m+':'+s;
			document.formulario.hora.value = hora;
			document.formulario.navegador.value= navigator.userAgent;

			if (document.formulario.destinophp[1].checked){
   				document.formulario.action="http://localhost:8080/p1.php";
   			}else{
   				document.formulario.action="http://193.146.210.123/phpinfo.php";
   			}
   			if(document.formulario.getpost[0].checked){
   				document.formulario.method="get";
   			}else{
   				document.formulario.method="post";
   			}
   			if(document.formulario.codificacion[0].checked){
   				document.formulario.enctype="application/x-www-form-urlencoded";
   			}else{
   				document.formulario.enctype="multipart/form-data";
   			}
   			if(document.formulario.getpost[0].checked && document.formulario.codificacion[1].checked){
   				alert('get no permite form-data');
   				return false;
   			}

			valor = document.getElementById("registro2").value;
			if(valor=== ''){
				return true;
			}
			if( !(/^\d{9}$/.test(valor)) ) {
		    alert("Numero incorrecto, debe tener 9 cifras seguidas");
 		    return false;
			}
			//alert("Numero correcto");
			return true;
		}
		

			//	var d= new Date();
			//  document.getElementById("hora").innerHTML("hola");
		

	