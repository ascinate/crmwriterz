<section class="top-tabsl-div w-100">
    <ul class="d-flex align-items-center">
      <li>
        <a href="{{ URL::to('usertasks') }}" class="comoiu-main position-relative">
            Tasks
            <span class="cou06">
            @php
                 $id = session('userid');
                 $data = \DB::table('tasks')->where('responsible_person', $id)->orwhereIN('participants', array($id))->get();
                 echo $data->count();
            @endphp
            </span>
        </a>
      </li>
      <li>
        <a href="{{ URL::to('ongoingtasks') }}" class="comoiu-main position-relative">
            Ongoing
            <span class="cou06">
                @php
                 $id = session('userid');
                 $data = \DB::table('tasks')->where('responsible_person', $id)->orwhereIN('participants', array($id))->where('status','Ongoing')->get();
                 echo $data->count();
              @endphp
            </span>
        </a>
      </li>

      <li>
        <a href="{{ URL::to('user/comments') }}" class="comoiu-main position-relative">
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
