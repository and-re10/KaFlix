<!-- Modal -->
<div class="modal fade" id="modalmyVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form id="addVideo">
            @csrf
            <div class="form-group">
              <label for="">Nome do Video</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="">Tempo de Video</label>
              <input type="text" name="heure" id="heure" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="">Filtro</label>
              <input type="text" name="filtro" id="filtro" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="">Video</label>
              <input type="text" name="video" id="video" class="form-control mb-2" placeholder="" aria-describedby="helpId">
              <span class="text-dark border border-dark">Rajouter une class w-100 a l'iframe</span>
            </div>
        
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>