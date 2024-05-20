<section class="top-tabsl-div w-100">
    <ul class="d-flex align-items-center">
      <li>
        <a href="{{ URL::to('tasks') }}" class="comoiu-main position-relative">
            Tasks
            <span class="cou06">
              @php
                  $data = \DB::table('tasks');
                  echo $data->count();
              @endphp
            </span>
        </a>
      </li>
      <li>
        <a href="{{ URL::to('ongoing') }}" class="comoiu-main position-relative">
            Ongoing
            <span class="cou06">
                @php
                    $data = \DB::table('tasks')->where('status','Ongoing');
                    echo $data->count();
                @endphp
            </span>
        </a>
      </li>

      <li>
        <a href="{{ URL::to('comments') }}" class="comoiu-main position-relative">
            Comments
            <span class="cou06">
               @php
                    $uid = session('userid');
                    $count = \DB::table('commentcounts')->where('userid', $uid)->count();
                    echo $count;
             @endphp
            </span>
        </a>
      </li>

    </ul>
</section>
