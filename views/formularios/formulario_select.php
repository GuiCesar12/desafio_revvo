<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-action="0">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes do Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <button type="button" class="btn btn-secondary" id="editModal">Edit</button>
      </div>
      <div class="modal-body">
        <form id="courseForm">
          <input type="hidden" id="courseId" name="id" value="">
          <div class="mb-3">
            <label for="courseTitle" class="form-label">Título</label>
            <input type="text" class="form-control" id="courseTitle" name="title" placeholder="Digite o título do curso" required>
          </div>
          <div class="mb-3">
            <label for="courseDescription" class="form-label">Descrição</label>
            <textarea class="form-control" id="courseDescription" name="description" rows="4" placeholder="Digite a descrição do curso" required></textarea>
          </div>
          <div class="mb-3">
            <label for="courseDuration" class="form-label">Duração</label>
            <input type="text" class="form-control" id="courseDuration" name="duration" placeholder="Ex.: 4 semanas, 40 horas" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" id="saveModal" form="courseForm">Salvar</button>
      </div>
    </div>
  </div>
</div>
