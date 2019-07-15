<div class="container">
  <div class="row">
        <div class="col-md-3 text-right">
          <h2 class="title-text">
            Peraturan
          </h2>
        </div>
        <div class="col-md-9 text-left" style="text-align: justify;">
          <div class="daftar-text">
            <ul class="daftar-list">
              @foreach($rules as $rule)
              <li><p>{{ $rule->aturan }}</p></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>