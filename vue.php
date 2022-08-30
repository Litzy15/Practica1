<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		vue js
	</title>
    
    <script src="https://unpkg.com/vue@3"></script> 
<body>
    <div id="contenedor"> 
        <h1>
            {{ name }}
        </h1>
        <h2>
            {{ lastname }}
        </h2>
        <input type="text" v-model="name" name="">
        
        <button @click ="hola">
            Click me!
        </button>
        
        <hr>
        <input type="text" v-model="num1" name="">
        <input type="text" v-model="num2" name="">
        <button @click ="suma">
            Suma
        </button>
        <h1>
            {{ resultado }}
        </h1>

        <hr>
        <input type="text" v-model ="age" name="">
        <h1 v-if ="age < 18">
            No Pase
        </h1>
        <h1 v-if ="age >= 18">
            Pase
        </h1>

        <hr>
        <ol>
            <li v-for ="item in chamacos">
                {{ item.name }} : <span>{{item.role}}</span>
            </li>
        </ol>
        <input type="text" v-model ="chamaco_name" name="">
        <input type="text" v-model ="role" name="">
        <button @click = "save">
            Save Chamaco
        </button>
        
        
    </div>

	<script type = "text/javascript">
        //vincular vue con el contenedor
        const {createApp} = Vue;

        const app = createApp({
            data(){ //se guardan los datos/variables de la app
                return{
                    name: "Litzy ",
                    lastname:"Escalera",
                    num1 : 0,
                    num2 : 0,
                    resultado: 0,
                    age: 0,
                    chamacos : [{name:'Pedro', role:'front'},{name:'Juan', role:'backend'},{name:'Alberto', role:'movil'}],
                    chamaco_name:"",
                    role: ""
                }
            },
            methods:{
                hola(){
                    alert('hola ' + this.name)
                },
                suma(){
                    this.resultado = parseInt(this.num1) + parseInt(this.num2)
                },
                save(){
                    this.chamacos.push({name:this.chamaco_name, role:this.role})
                }

            }
        }).mount('#contenedor')


    </script>
</body>
</html>