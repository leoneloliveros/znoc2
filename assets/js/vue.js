const vm = new Vue({
    el:'#app',
    data:{
        idNumber:null,
        name: null,
        last_name: null,
        email: null,
        NC: null,
        rol: null,
        alert: [],
        bd:[]
    },
    methods:{
        validation(e){ 
            this.alert = [];
            if(this.name == null || this.name.length == 0 || /^\s+$/.test(this.name)){
                this.alert.push('Tu campo Nombre no tiene valores validos');
            }
            console.log(this.rol);

            if(this.last_name == null || this.last_name.length == 0 || /^\s+$/.test(this.last_name)){
                this.alert.push('Tu campo Apellido no tiene valores validos');
            }
            if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)/.test(this.email))){
                this.alert.push('Tu correo no es valido');
            }

            if((this.rol == '' || this.rol == null) || this.rol == 'ELIGE UN ROL'){
                this.alert.push('Escoje un rol');
            }
            if(!this.alert.length){
                return true;
            }
            console.log(this.alert);
            e.preventDefault();   
        },

    }
})
