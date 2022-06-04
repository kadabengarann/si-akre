      <div class="float">
          <a href="/lkps{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn-float back-lkps">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard LKPS</p>
          </a>
          @unless (Auth::user()->level == 3 || Auth::user()->level == 4)
            @if (isset($lkps))
            <a href="/matriks/{{ $lkps }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                class="btn-float go-matriks">
                <i class="nav-icon fas fa-chart-line"></i>
                <p>Menuju ke halaman Matriks Matriks</p>
            </a>
            @endif  
          @endunless

          
      </div>
