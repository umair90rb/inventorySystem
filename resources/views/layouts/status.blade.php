@if (session('status'))
    <div class="row animated lightSpeedIn">
      <div class="alert alert-success ">
          {{ session('status') }}
      </div>
    </div>
@endif
