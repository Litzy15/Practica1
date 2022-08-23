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

	<script type="text/javascript">
		var cv = null;
		var ctx = null;
        
        var press = false;
        var super_x=150, super_y=150;
        
        function run(){
            cv = document.getElementById('mycanvas');
		    ctx = cv.getContext('2d');
            paint();
        }

        function paint(){

            window.requestAnimationFrame(paint)

			ctx.fillStyle = "white";
			ctx.fillRect(0,0,800,800);
			ctx.fillStyle = getRandomColor();
			ctx.fillRect(super_x,super_y,55,55);
			ctx.strokeRect(super_x,super_y,55,55);
            
            super_x +=5;
            if(super_x>800){
                super_x =0;
            }

		}

  /*      document.addEventListener('keydown',function(e){
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
*/
        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());

        window.addEventListener('load', run, false);

        function getRandomColor(){
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

		
		
		

	</script>
</body>
</html>