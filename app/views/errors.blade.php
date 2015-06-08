@if ($errors->any())
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
	      <strong>Por favor corrige los siguentes errores:</strong>
	      <ul>
		      @foreach ($errors->all() as $error)
		        <li><b>{{ $error }}</b></li>
		      @endforeach
	      </ul>
    </div>
@endif
