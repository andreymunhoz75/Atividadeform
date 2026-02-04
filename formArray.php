<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Cadastro de Interesse</h1>
        </div>
    </div>
    <div class="row">
        <form action="respform.php" method="post">
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="nome">
            </div>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="InputEmail1" name="email">
            </div>
            <div class="mb-3">
                <label for="InputTelefone" class="form-label">Telefone</label>
                <input type="telefone" class="form-control" id="Inputtelefone" name="telefone">
            </div>
            <select class="form-select" aria-label="Default select example" name="periodo">
                <option selected>Curso</option>
                <option value="Ténico em Informática">Ténico em Informática</option>
                <option value="Ténico em Computação Gráfica">Ténico em Computação Gráfica</option>
                <option value="Ténico em Disign Gráfico">Ténico em Disign Gráfico</option>
            </select>
            <div class="mb-3 form-check">
                <h3>Cursos de Interesse</h3>
                <input type="checkbox" class="form-check-input" id="checkTI" name="cursos[]" value="Manhã">
                <label class="form-check-label" for="checkTI">Manhã</label><br>
                <input type="checkbox" class="form-check-input" id="checkTCG" name="cursos[]" value="Tarde">
                <label class="form-check-label" for="checkTCG">Tarde</label><br>
                <input type="checkbox" class="form-check-input" id="checkDesign" name="cursos[]" value="Noite">
                <label class="form-check-label" for="checkDesign">Noite</label><br>
                <input type="checkbox" class="form-check-input" id="checkDesign" name="cursos[]" value="Sábado(manhã)">
                <label class="form-check-label" for="checkDesign">Sábado(manhã)</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>