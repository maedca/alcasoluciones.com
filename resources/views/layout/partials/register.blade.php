<div id="register" class="modal">
    <div class="modal-content">
        <img src="{{asset('img/logo_sombra.png')}}" alt="" class="img img-responsive col s12">
    <div id="message-error" class="card-panel red lighten-2 white-text" style="display: none;">Hubo un error al enviar el formulario</div>
            
         <div class="row">
    <form id="register-form" class="col s12" onsubmit="event.preventDefault();onSubmit();" method="post">

        <div class="input-field col s12 l6">
          <input id="first_name" type="text" class="validate" required>
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s12 l6">
          <input id="last_name" type="text" class="validate" required>
          <label for="last_name">Apellido</label>
        </div>
      
      
        <div class="input-field col s12">
          <input id="email_person" type="email" class="validate" required>
          <label for="email_person">Email</label>
        </div>


        <div class="col s12 l6">
          <div class="input-field">
            <input id="city" type="text" class="validate" required>
            <label for="city">Ciudad</label>
          </div>
        </div>


        <div class="col s12 l6">
          <div class="input-field">
            <input id="phone" type="text" class="validate" required>
            <label for="phone">Teléfono</label>
          </div>  
        </div>
        <button type="submit" style="display: none;"></button>
    </form>
  </div>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
        <a class="modal-action waves-effect waves-green btn-flat" onclick="onSubmit()">Registrar</a>
    </div>
</div>

<script>
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#register').modal();
    $('#register').modal('open');
  });

  function onSubmit() {
    let elem = document.getElementById('message-error');
    let data = {
      name: document.getElementById('first_name').value,
      last_name: document.getElementById('last_name').value,
      city: document.getElementById('city').value,
      phone: document.getElementById('phone').value,
      email: document.getElementById('email_person').value,
    };
    
    $.ajax({
      method: 'POST',
      data: data,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      url: '{{ route('public.registro') }}'
    }).done(function() {
        elem.style.display = 'none';
        $('#register').modal('close');
        swal({
              title: 'Gracias!!!',
              message: 'Envio exitoso',
              type: 'success',
              timer: 3000
            });
      })
      .fail(function() {
      elem.style.display = 'block';
      $('#register').scrollTop(0);
    })

  }
</script>