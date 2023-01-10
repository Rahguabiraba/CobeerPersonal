<style>
    <?php include __DIR__ . '/template.css'; ?>
</style>

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form>
            <label for="chk" aria-hidden="true" class="label-articulo">Creacion Articulo</label>
            <input type="text" name="txt" placeholder="Titulo" required class="input-articulo">
            <input type="text" name="tag" placeholder="Tag" required class="input-articulo">
            <textarea name="Descripcion" cols="30" rows="10" class="input-articulo"></textarea>
            <input type="file" name="fichero" placeholder="Password" required class="input-articulo">
            <button class="button-articulo">Crear</button>
        </form>
    </div>
</div>