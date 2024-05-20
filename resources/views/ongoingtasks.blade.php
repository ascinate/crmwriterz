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
                          @php
                              if(session('role')=='Administrator')
                              {
                          @endphp
                          <div class="right-serach-div col-lg-9 d-flex align-items-center ps-5">
                              <button type="button" class="btn btn-catrea ctre-2" data-bs-toggle="offcanvas" data-bs-target="#addnew">
                                Create
                              </button>
                          </div>
                          @php
                              }
                          @endphp
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
                  <table id="ongoing" class="display" style="width:100%">
                    <thead>
                      <tr>
                        @php if(session('role')=='Administrator') { @endphp
                         <th style="text-align: center"><input type="checkbox" id="select_all" /></th>
                        @php } @endphp
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
                       $pending = \DB::table('tasks')->where('status', 'Ongoing')->get();
                       foreach($pending as $data) {
                    @endphp
                      <tr>
                        <td>
                           <div class="form-check nut">
                            <input class="form-check-input m-0 checkBoxClass" value="{{ $data->id }}" type="checkbox" name="task[]">
                            </div>
                        </td>
                        <td>
                          <div class="dropdown crmo-drp dropend">
                            @php if(session('role')=='Administrator') { @endphp
                            <a class="btn thum-pin" href="edittask/{{ $data->id }}">
                                {{ substr($data->task_name,0,50) }}
                            </a>
                            @php } else { @endphp
                            <a class="btn thum-pin" href="viewtask/{{ $data->id }}">{{ substr($data->task_name,0,50) }}</a>
                            @php } @endphp
                          </div>
                        </td>
                        <td>{{ $data->create_date }}</td>
                        <td>{{ $data->deadline }}</td>
                        <td>
                          <a href="#" class="active-men">
                            <span class="txer08">
                            @php
                                 $create = \DB::table('members')->where('id', $data->created_by)->get();
                                 echo @$create[0]->name;
                            @endphp
                            </span>
                          </a>
                        </td>
                        <td>
                          <span class="txer08">
                            @php
                              $val =  trim($data->responsible_person);
                              $person = explode(",",trim($data->responsible_person));
                              $cnt = count($person);

                              for($x=0;$x<=count($person);$x++) {
                                   $val = \DB::table('members')->where('id', @$person[$x])->get();
                                   echo $name =  @$val[0]->name.' ';
                              }
                                /*$person = explode(",",trim($data['responsible_person']));

                                for($x=0;$x<=count($person);$x++) {
                                   $val = \DB::table('members')->where('id', @$person[$x])->get();
                                   $name[] =  @$val[0]->name;
                                }

                                $responsible = @implode(", ", $name);
                                echo rtrim($responsible," ,");*/
                            @endphp
                         </span>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-sm">{{ $data->status }}</button>
                        </td>

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

<div class="offcanvas offcanvas-end addm-nu" id="addnew">
  <button type="button" class="btn-close nt-close text-reset" data-bs-dismiss="offcanvas">
    <span>
      <img alt="cloe" src="images/close.svg"/>
    </span> Task
  </button>

<form name="frmadd" action="{{ URL::to('inserttask') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="offcanvas-body position-relative">
      <div class="takyt-body">
        <div class="d-block d-lg-none">
          <button type="button" class="btn-close top-btnh text-reset" data-bs-dismiss="offcanvas">
            <span>
              <img alt="cloe" src="images/close.svg"/>
            </span>
          </button>
        </div>

          <div class="top-headr">
              <div class="d-flex align-items-center justify-content-between">
                  <h2> New task </h2>
              </div>
          </div>
          <div class="test-block-div">
              <div class="d-flex vort algign-items-center">
                  <input type="text" class="form-control" name="task_name" placeholder="Enter task name"/>
                  <div class="form-check m-0">
                    <input class="form-check-input" name="priority" type="checkbox" value="Y" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      High Priority
                    </label>
                  </div>
              </div>

              <div class="textre-block">
                 <textarea class="form-control" name="task_description" placeholder="Write here..."></textarea>
              </div>
              <div class="group-btnyiu upload__box">

                  <div class="btcd-f-input">
                      <div class="btcd-f-wrp">
                          <button class="btcd-inpBtn" type="button"> <img src="" alt=""> <span> Attach File</span></button>
                          <span class="btcd-f-title">No File Chosen</span>
                          <input multiple type="file" name="attachments[]">
                      </div>
                      <div class="btcd-files">
                      </div>
                  </div>

              </div>

              <div class="minku-div">
                  <div class="comoniut-listr d-md-flex align-items-center w-100">
                    <div class="form-group boeder-top d-md-flex align-items-center">
                        <label> Responsible person </label>
                        <div class="selet-douvi">
                          <select class="js-example-basic-multiple" name="responsible_person[]">
                            @php
                                $members = \DB::table('members')->where('is_active','Y')->get();
                                foreach($members as $user)
                                {
                            @endphp
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @php
                                }
                            @endphp
                          </select>
                        </div>
                        <!--<a id="crate-btn" class="cert-by"> Created by </a>-->
                        <a id="participants-btn" class="cert-by"> Participants </a>
                    </div>
                  </div>

                  <!--<div id="ctar-div">
                      <div class="comoniut-listr d-md-flex align-items-center w-100">
                        <div class="form-group boeder-top d-md-flex align-items-center">
                            <label> Created by </label>
                            <div class="selet-douvi">
                              <select class="js-example-basic-multiplect" name="states[]" multiple="multiple">
                                <option value="AL" selected>Alabama Due</option>
                                <option value="WY">Rose Marry</option>
                                <option value="WY">James Jone</option>
                              </select>
                            </div>
                        </div>
                      </div>
                  </div>-->

                  <div id="ctar-div-pt">
                    <div class="comoniut-listr d-md-flex align-items-center w-100">
                      <div class="form-group boeder-top d-md-flex align-items-center">
                          <label> Participants
                          </label>
                          <div class="selet-douvi">
                            <select class="js-example-basic-multiplept" name="participants[]" multiple>
                                @php
                                    $members = \DB::table('members')->where('is_active','Y')->get();
                                    foreach($members as $user)
                                    {
                                @endphp
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @php
                                     }
                                @endphp
                            </select>
                          </div>
                      </div>
                    </div>
                </div>

                  <div class="comoniut-listr d-md-flex align-items-center w-100">
                    <div class="form-group boeder-top d-md-flex align-items-center">
                        <label> Deadline </label>
                        <div class="selet-douvi">
                          <input id="datetimepickerdeas" name="deadline" class="form-control" placeholder="DD/MM/YYYY" type="text">
                        </div>
                        <!--<a href="#" class="cert-by"> Time planning  </a>
                        <a href="#" class="cert-by"> Options </a>-->
                    </div>
                  </div>

                  <!--<div class="comoniut-listr d-md-flex align-items-center w-100">
                    <div class="form-group boeder-top d-md-flex align-items-center">
                        <label> Task status summary </label>
                        <div class="form-check poyut">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Task status summary is required
                          </label>
                        </div>
                    </div>
                  </div>-->
              </div>
          </div>

      </div>
      <div class="footer-diuv-modal">
         <div class="d-flex align-items-center">
            <button type="submit" name="btnadd" class="btn btn-aditext"> Add task </button>
            <!--<button type="button" class="btn btn-aditext ms-3"> Add task and create another one </button>-->
            <button type="button" name="cancel" onClick="javascript:history.go(-1)" class="btn btn-aditext ms-3"> Cancel </button>
         </div>
      </div>
  </div>
</form>

</div>

<x-footer/>
