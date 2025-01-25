@if (session()->get('leaf.flash'))
  <script>
    let errores = `{{!! json_encode($errores) !!}}`
    errores = errores.substring(1, errores.length - 1)
    errores = JSON.parse(errores)

    for (const error of Object.values(errores)) {
      new Noty({
        type: 'error',
        text: `<i class="bx bx-message-error"></i> ${error}`
      }).show()
    }
  </script>
@endif
