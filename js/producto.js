class producto {
    titulo;
    descripcion;
    precio;

    setTitulo(tit) {
        if (tit=='') {
            alert('titulo no puede estar vacio');
            return null;
        }else{this.titulo = tit;}
        
    }
    setDescripcion(desc) {
        this.descripcion = desc;
    }
    setPrecio(pre) {
        this.precio = pre;
    }
    getTitulo() {
        return this.titulo;
    }
    getDescripcion() {
        return this.descripcion;
    }
    getPrecio() {
        return this.precio;
    }
}