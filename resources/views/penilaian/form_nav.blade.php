                 @if (Auth::user()->level == 1)
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/penilaian/{{ $prev }}?id={{ $prodi->id }}"><i
                                 class="fas fa-arrow-circle-left"></i> Prev</a>
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/penilaian/{{ $next }}?id={{ $prodi->id }}">Next <i
                                 class="fas fa-arrow-circle-right"></i></a>
                     </div>

                 @else
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/penilaian/{{ $prev }}"><i class="fas fa-arrow-circle-left"></i> Prev</a>
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/penilaian/{{ $next }}">Next <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @endif
