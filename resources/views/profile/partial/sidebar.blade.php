<div class="col-3">
    <div>
      <div class="row" style="width: 100%;">
        <img class="col-4 profileimg" src="{{ asset("/assets/img/blueprofile.png") }}" alt="no image">
        <h5 class="col-1 py-3">{{ auth()->user()->name }}</h5>
      </div>
    </div>
    <img src="{{ asset("/assets/img/underline-profle.png") }}" alt="">
    <div>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="/profile/{{ auth()->user()->id }}" class="nav-link {{  ($title === "profile") ? 'active' : '' }}" aria-current="page" style=" text-align: center !important; {{  ($title === "profile") ? '' : 'color:black !important;' }}">
            <img src="{{ asset("/assets/img/profile_username.png") }}" alt="" style="float: left !important; width: 8%;">
            Profil
          </a>
        </li>
        <li>
          <a href="/profile/{{ auth()->user()->id }}/alamat" class="nav-link {{  ($title === "alamat") ? 'active text-white' : 'text-dark' }}" style=" {{  ($title === "alamat") ? '' : 'color:black !important;' }}; text-align: center !important;">
            <img src="{{ asset("/assets/img/location.png") }}" alt="" style="float: left !important; width: 8%;">
            Alamat
          </a>
        </li>
        <li>
          <a href="/profile/{{ auth()->user()->id }}/pesanan" class="nav-link {{  ($title === "pesanan") ? 'active' : '' }}" style="text-align: center !important;  {{  ($title === "pesanan") ? '' : 'color:black !important;' }}">
            <img src="{{ asset("/assets/img/pesanan.png") }}" alt="" style="float: left !important; width: 8%;">
            Pesanan
          </a>
        </li>
        <li>
          <a href="/profile/{{ auth()->user()->id }}/ubah-password" class="nav-link {{  ($title === "ubah-password") ? 'active' : '' }}" style=" text-align: center !important;  {{  ($title === "ubah-password") ? '' : 'color:black !important;' }}">
            <img src="{{ asset("/assets/img/change_password.png") }}" alt="" style="float: left !important; width: 8%;">
            Ubah Password
          </a>
        </li>
        <li>
          <button class="pill-button mt-2 mb-5" style="width: 100% !important;">Keluar</button>
        </li>
      </ul>
    </div>  
</div>