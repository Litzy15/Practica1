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
        <form>
            <fieldset>
                <legend>
                    Acceso al panel
                </legend>

                <label>
                    Correo electronico
                </label>
                <input type="email" v-model="email" name="">

                <label>
                    Password
                </label>
                <input type="password" v-model="password" name="">

                <button @click = "login">
                    Acceder
                </button>
            </fieldset>
        </form>
        
    </div>


	<script type = "text/javascript">
        //vincular vue con el contenedor
        const {createApp} = Vue;


        const app = createApp({
            data(){ //se guardan los datos/variables de la app
                return{
                    users: null,
                    email: '',
                    password: ''
                }
            },
            methods:{
                
                login(e){
                    e.preventDefault();

                    var email_user = this.email;
                    var password_user = this.password;

                    var access = this.users.map(function(u){
                        if(email_user === u.email.toLowerCase() ){
                            if(password_user === u.password){
                                return true;
                                //alert("Acesso correcto")
                            }

                        }
                        
                    })
                    //alert("Datos incorrectos")
                    console.log(access)
                }
            },
            mounted(){
                fetch('users.json')
                    .then((res)=> res.json())
                    .then((json) => (this.users = json ))
                    .catch((err) => (console.log (err) ))
            }
        }).mount('#contenedor')


    </script>
</body>
</html>