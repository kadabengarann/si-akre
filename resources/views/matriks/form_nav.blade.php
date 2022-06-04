                 @if (Auth::user()->level == 1 || Auth::user()->level == 5)
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $prev }}?id={{ $prodi->id }}"><i
                                 class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $next }}?id={{ $prodi->id }}">Selanjutnya <i
                                 class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @else
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $prev }}"><i class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $next }}">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @endif
