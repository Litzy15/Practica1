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
        var player1 = null;
        var player2 = null;
        var direccion = 'right';
        var score = 0;
        var speed = 10;
        
        function run(){
            cv = document.getElementById('mycanvas');
		    ctx = cv.getContext('2d');

            player1 = new Cuadro(250,250,40,40,"pink");
            player2 = new Cuadro(getRandomInt(400),getRandomInt(400),40,40,"purple");
            paint();
        }

        function paint()
        {

            window.requestAnimationFrame(paint)

			ctx.fillStyle = "lightblue";
			ctx.fillRect(0,0,800,800);

            ctx.fillStyle = "black";
            ctx.fillText("SCORE: " + score, 10,20);

			player1.pintar(ctx);
            player2.pintar(ctx);           

            update();


		}

        function update(){
			if(direccion == "up"){
				player1.y -=speed;
                if(player1.y < 0){
                    player1.y = 800;
                }
			}

			if(direccion == "down"){
				player1.y += speed;
                if(player1.y > 800){
                    player1.y = 0;
                }
			}
			
			if(direccion == "left"){
                player1.x -=speed;
                if(player1.x < 0){
                    player1.x = 800;
                }
                
			}
			
			
			if(direccion == "right" ){
                player1.x += speed;
                if(player1.x > 800){
                    player1.x = 0;
                }
                
			}

           if(player1.se_tocan(player2)){
                player2.x = getRandomInt(400);
                player2.y = getRandomInt(400);
                score +=10;
                speed +=5;
           }
        }   
        function Cuadro(x,y,w,h,c){
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.se_tocan = function (target) { 
                if(this.x < target.x + target.w &&
                    this.x + this.w > target.x && 
                    this.y < target.y + target.h && 
                    this.y + this.h > target.y)
                {
                    return true;
                }  
            };

            this.pintar = function(ctx){
                ctx.fillStyle = this.c;
			    ctx.fillRect(this.x,this.y,this.w,this.h);
			    ctx.strokeRect(this.x,this.y,this.w,this.h);
            }

        }        

        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());

        document.addEventListener('keydown',function(e){
			console.log(e)
			//arriba
			if(e.keyCode == 87 || e.keyCode == 38 ){
				//super_y -=10;
                direccion = "up";
			}

			//abajo
			if(e.keyCode == 83 || e.keyCode == 40 ){
				//super_y +=10;
                direccion = "down";
			}
			//izquierda
			if(e.keyCode == 65 || e.keyCode == 37 ){
            //super_x -=10;
                direccion = "left";
			}
			
			//derecha
			if(e.keyCode == 68 || e.keyCode == 39 ){
			//	super_x +=10;
                direccion = "right";
			}
			
			paint();
		})

        window.addEventListener('load', run, false);

        function getRandomColor(){
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }

	</script>
</body>
</html>