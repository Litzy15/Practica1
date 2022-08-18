<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<style type="text/css">
			canvas{
				background-color: rgb(138, 138, 209);
			}
		</style>
	</title>
</head>
<body>
	<canvas id="mycanvas" width="800" height="800">
		Hola tu navegador no funciona
	</canvas>
    
    <img id=imagen src="fresa.jpg" style="display: none">

	<script type="text/javascript">
		var cv = document.getElementById('mycanvas');
		var ctx = cv.getContext('2d');
        
        var color ="red";
        var fig = 'arc';
        var press = false;
        var super_x=0, super_y=0;

		//tres cuadrados encimados
/*		ctx.fillStyle = "rgb(200,0,0)"; //funcion
		ctx.fillRect (10,10,55,50); //atributo

		ctx.fillStyle = "rgba(0,0,200)";
		ctx.fillRect (55,50,55,50);	
      */  
	//	ctx.fillStyle = "rgb(255,0,128,0.5)";
		//ctx.fillRect (100,90,55,50);	
/*
		//linea
		ctx.moveTo(0,0); //punto/coordenada incial
		ctx.lineTo(200,100); //punto final
		ctx.stroke(); //para dibujarse el contorno
	
		//triangulo
		ctx.moveTo(100,150); 
		ctx.lineTo(50,50);
		ctx.lineTo(200,150);
		ctx.lineTo(100,150);
		//ctx.strokeStyle = "blue"; //colorear borde
		ctx.stroke();
		ctx.fill(); para rellenar la figura

		//circulo - arc
		ctx.beginPath();
		ctx.arc(250,250,100,0, 2*Math.PI);
		ctx.stroke();

		ctx.beginPath();
		ctx.arc(500,250,100,0, 2*Math.PI);
		ctx.stroke();
		ctx.fill();

		//texto
		ctx.font = "30px Arial";
   	 	ctx.fillText("Hola mundo", 130, 50);
   	 	ctx.strokeText("Hola mundo", 130, 90);

		//gradiante
		var grd = ctx.createLinearGradient(0,0,200,0);
		grd.addColorStop(0,"purple");
        //grd.addColorStop(0.3,"blue"); se pueden agregar mas colores pero entre 0-1
		grd.addColorStop(1,"pink");
		ctx.fillStyle = grd;
		ctx.fillRect(50,50,160,80);

        
	   //radialgradiant
        grd = ctx.createRadialGradient(75,50,5,100,70,100);
        grd.addColorStop(0,"white");
		grd.addColorStop(1,"purple");
        ctx.fillStyle = grd;
        ctx.fillRect(0,0, 250,250);

		//imagen
        var img = document.getElementById('imagen');
        ctx.drawImage(img, 100,100);

        //eventos
        //cv.addEventListener('click', function(){}) funcion anonima
        cv.addEventListener('click', doClick)
        function doClick(){
            alert("hola")
            //console.log("hola")
        }
*/
 /*       cv.addEventListener('click', function(e){

          //  console.log(e);
          	ctx.fillStyle = color;
          	if(fig=='arc'){
          		ctx.beginPath();
		    	ctx.arc(e.offsetX,e.offsetY,50,0, 2*Math.PI);
           		ctx.stroke();
            	
		    	ctx.fill();
          	}else{
          		ctx.fillRect(e.offsetX-25,e.offsetY-25,50,50);
          		ctx.strokeRect(e.offsetX-25,e.offsetY-25,50,50);
          	}

            ctx.beginPath();
		    ctx.arc(e.offsetX,e.offsetY,50,0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = color;
		    ctx.fill();
            //ctx.fillRect(e.offsetX-25,e.offsetY-25,50,50);
       
        })

        cv.addEventListener('mouseover',function(e){
            //console.log(e);
            color = getRandomColor(); 
        })  

        cv.addEventListener('mouseout',function(e){
        	//console.log(e);
        	fig = (fig =='arc')? 'rec' : 'arc';
        })   

        cv.addEventListener('mousemove',function(e){
        	if(press){
        		ctx.fillStyle = "black";
        	ctx.fillRect(e.offsetX-2.5,e.offsetY-2.5,5,5); 
        	} 
        	
        })	

        cv.addEventListener('mousedown',function(e){
        	press = true;
        })
        cv.addEventListener('mouseup',function(e){

        	press = false;
        })


        function getRandomColor(){
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
*/

		document.addEventListener('keydown',function(e){
			console.log(e)
			//arriba
			if(e.keyCode == 87 || e.keyCode == 38 ){
				super_y -=10;
			}

			//abajo
			if(e.keyCode == 83 || e.keyCode == 40 ){
				super_y +=10;
			}
			//izquierda
			if(e.keyCode == 65 || e.keyCode == 37 ){
				super_x -=10;
			}
			
			//derecha
			if(e.keyCode == 68 || e.keyCode == 39 ){
				super_x +=10;
			}
			
			paint();
		})
		
		function paint(){
			ctx.fillStyle = "white";
			ctx.fillRect(0,0,800,800);
			ctx.fillStyle = "red";
			ctx.fillRect(super_x,super_y,40,40);
			ctx.strokeRect(super_x,super_y,40,40);

		}

	</script>
</body>
</html>