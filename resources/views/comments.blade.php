<x-header/>
<body class="dahbo-dd">
    <div class="d-flex align-items-start bodyt">
        <x-sidebar/>

        <main class="float-start content-wrapper">
          <x-navigation/>
          <div class="contentoi">
            <div class="boxu-body d-inline-block w-100">
              <x-taskcount/>
              <section class="top-sectioun d-inline-block w-100">
                      <div class="d-flex top-boer-ali align-items-center">
                          <div class="left-texr">
                              <h2 class="text-white titels-01"> My tasks </h2>
                          </div>
                      </div>
                      <div class="d-flex align-items-center subnm-menu-div">
                          <div class="letfr-menus">
                            <ul class="d-flex align-items-center">
                              <li>
                                <a href="{{ URL::to('tasks') }}" class="menu05 active-me"> List </a>
                              </li>
                              <li>
                                <a href="{{ URL::to('deadlines') }}" class="menu05"> Deadline </a>
                              </li>
                            </ul>
                          </div>
                      </div>
              </section>

              <section class="mail-sercotu d-inline-block w-100">
                <div class="onisde d-inline-block w-100 position-relative">
                  <table id="comments" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th style="text-align: center"><input type="checkbox" id="select_all" /></th>
                        <th>Name</th>
                        <th>Active</th>
                        <th>Deadline</th>
                        <th>Created by</th>
                        <th>Responsible Person</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     @php
                       //$pending = \DB::table('tasks')->where('status', 'Ongoing')->get();
                       //$datas = \DB::table('commentcounts')->distinct('taskid')->get();
                       $uid = session('userid');
                       foreach($datas as $data)
                       {
                          $task = \DB::table('tasks')->where('id', $data->taskid)->get();
                          $count = \DB::table('commentcounts')->where('userid', $uid)->where('taskid', $data->id)->count();
                     @endphp
                     <tr>
                       <td>
                        <div class="form-check nut">
                            <input class="form-check-input m-0 checkBoxClass" value="{{ $task[0]->id }}" type="checkbox" name="task[]">
                        </div>
                       </td>
                       <td>
                        <div class="dropdown crmo-drp dropend">
                            <a class="btn thum-pin" href="edittask/{{ $task[0]->id }}">
                                {{ substr($task[0]->task_name,0,50) }}
                                @php if($count > 0) { @endphp
                                    <span class="noti5">{{ $count }}</span>
                                @php } @endphp
                            </a>
                         </div>
                       </td>
                       <td>{{ $task[0]->create_date }}</td>
                       <td>{{ $task[0]->deadline }}</td>
                       <td>
                         <a href="#" class="active-men">
                            <span class="txer08">
                                @php
                                    $create = \DB::table('members')->where('id', $task[0]->created_by)->get();
                                    echo @$create[0]->name;
                                @endphp
                            </span>
                          </a>
                      </td>
                       <td>
                        <span class="txer08">
                          @php
                              $val =  trim($task[0]->responsible_person);
                              $person = explode(",",trim($task[0]->responsible_person));
                              $cnt = count($person);

                              for($x=0;$x<=count($person);$x++) {
                                   $val = \DB::table('members')->where('id', @$person[$x])->get();
                                   echo $name =  @$val[0]->name.' ';
                              }
                            @endphp
                         </span>
                       </td>
                       <td>{{ $task[0]->status }}</td>

                     </tr>
                      @php
                        }
                      @endphp
                    </tbody>
                  </table>
                  <button type="button" id="btu" class="btn btn-delect"> Delete </button>
                </div>
          </section>
            </div>

            <footer class="main-footer01">
               <div class="d-flex align-items-center justify-content-center">
                    <p class="text-white "> © {{ date('Y') }} Writerz Inc. All rights reserved. | <a href="#">Privacy</a> </p>
               </div>
            </footer>
          </div>
        </main>
      </div>

<x-footer/>
