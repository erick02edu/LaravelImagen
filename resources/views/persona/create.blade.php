AQUI SE CREA UN REGISTRO

<form action="{{ url("persona") }}" method="post" enctype="multipart/form-data">

    @csrf
    <br>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"><br><br>
    
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo"><br><br>

    <label for="Foto">Foto</label>
    <input type="file" name="Foto" id="Foto"><br><br>

    <input type="submit" value="ENVIODEDOCUMENTO">

</form>