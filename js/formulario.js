class formulario {
    Nombre;
    Apellido;
    Email;
    Rut;
    Telefono;
    Mensaje;

    setNombre(nom) {
       this.nombre = nom;
    }
    setApellido(ape){
       this.apellido=ape;
    }
    setEmail(mail) {
        this.mail = mail;
    }
    setRut(rut) {
        this.rut = rut;
    }
    setTelefono(tel) {
        this.telefono =tel;
    }
    setMensaje(men) {
        this.mensaje =men;
    }
    
    getNombre() {
        return this.nombre;
    }
    getApellido() {
        return this.apellido;
    }
    getEmail() {
        return this.email;
    }
    getRut(){
        return this.rut;
    }
    getTelefono(){
        return this.telefono;
    }
    getMensaje(){
        return this.mensaje;
    }
}