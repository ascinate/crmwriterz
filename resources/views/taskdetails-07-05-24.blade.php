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
                          <h2 class="text-white titels-01"> {{ $data['task_name'] }} </h2>
                      </div>
                  </div>
          </section>

          <section class="mail-sercotu d-inline-block w-100">
                <div class="onisde details-projects d-inline-block w-100">

                    <div class="row">
                        <div class="col-lg-8">
                            <form name="frmtask" action="{{ URL::to('updatetask') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="taskid" value="{{ $data['id'] }}">
                            <input type="hidden" name="created_by" value="{{ $data['created_by'] }}">
                            @csrf
                                <div class="w-100">
                                    <div class="comon-projetcs-details bg-white position-relative anew">
                                        <div class="topi-head">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <input type="text" name="task_name" class="title1 form-control" value="{{ $data['task_name'] }}"/>
                                            </div>
                                        </div>
                                        <div class="textt-div w-100" style="padding:10px;">
                                            <textarea name="task_description" id="newtask" class="form-control">{{ $data['task_description'] }}</textarea>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="group-btnyiu upload__box ms-3 pb-4">
                                            <div class="btcd-f-input">
                                                <div class="btcd-f-wrp">
                                                    <button class="btcd-inpBtn" type="button"> <img src="" alt=""> <span> Attach File</span></button>
                                                    <span class="btcd-f-title">No File Chosen</span>
                                                    <input multiple type="file" name="attachments[]">
                                                </div>
                                                <div class="btcd-files"></div>
                                                <div>
                                                    @php
                                                        if($data['attachments']!='')
                                                        {
                                                          $file = json_decode(@$data['attachments']);

                                                        foreach ($file as $value)
                                                        {
                                                            $con1 = strpos(@$value, "docx");
                                                            $con2 = strpos(@$value, "pdf");
                                                            $con3 = strpos(@$value, "xlsx");

                                                     @endphp
                                                    <p>
                                                        <a href="../uploads/{{ @$value }}" style="color: blueviolet; line-height: 15px;">
                                                           @php if($con1!=0) { @endphp
                                                            <img src="{{ asset('images/docx.png') }}" width="18" height="18">
                                                           @php } else if($con2!=0) { @endphp
                                                            <img src="{{ asset('images/pdf.png') }}" width="18" height="18">
                                                           @php } else if($con3!=0) { @endphp
                                                            <img src="{{ asset('images/excel.png') }}" width="18" height="18">
                                                           @php } else { @endphp
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                           @php } @endphp
                                                          {{ @$value }}
                                                        </a>
                                                    </p>
                                                     @php
                                                         }
                                                       }
                                                  @endphp
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-list02">
                                        <div class="d-flex align-items-center">
                                            <button type="submit" id="btupdate" name="btnupdate" class="btn btn-pause"> Update </button>
                                            <button type="button" id="bfinish" name="btnfinish" class="btn btn-pause ms-3" @php
                                            if($data['status']=='Completed') {echo 'disabled'; }
                                        @endphp> Finish </button>
                                         <button type="button" id="bresume" name="btnresume" class="btn btn-pause ms-3" @php
                                            if($data['status']!='Completed') {echo 'disabled'; }
                                        @endphp> Resume </button>
                                        <button type="button" onClick="javascript:history.go(-1)" class="btn btn-pause cancel-btn ms-3"> Cancel </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                                <div class="w-100">
                                    <div class="right-details-projects05 mt-5 mt-lg-0">
                                        <div class="topi-head">
                                            <h2 class="text-white"> In Progress since {{ $data['create_date'] }} </h2>
                                        </div>

                                        <div class="robud-text">
                                            <ul class="lsiu-you">
                                                <li>
                                                    <span> Deadline: </span>
                                                    <form name="frmD" action="{{ URL::to('updatedate') }}" method="POST">
                                                    <input type="hidden" name="id" value="{{ $data['id'] }}">
                                                    @csrf
                                                    <div class="dropdown nyte-div">
                                                    <button class="btn protxrt dropdown-toggle close-dp" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                        {{ $data['deadline'] }}
                                                    </button>
                                                    <ul class="dropdown-menu smuy " id="date_clio" aria-labelledby="dropdownMenuClickableInside">
                                                        <li>
                                                        <a id="clio" class="clois"> <i class="fas fa-times"></i> </a>
                                                        </li>
                                                        <li class="mt-top">
                                                        <input id="datetimepicker" name="deadline" class="form-control" placeholder="Select Date" type="text">
                                                        </li>
                                                        <li>
                                                        <button type="submit" name="btndeadline" class="btn btn-save"> Save Change </button>
                                                        </li>
                                                    </ul>
                                               </div>
												</form>
                                                </li>

                                                <li>
                                                    <span> Created on: </span>
                                                    <span class="protxrt">
                                                        {{ $data['create_date'] }}
                                                    </span>
                                                </li>
                                            </ul>

                                            <div class="creatre-divu">
                                            <form name="frmC" action="{{ URL::to('updatecreate') }}" method="POST">
                                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                                            @csrf
                                            <div class="d-flex bort-t justify-content-between align-items-center w-100">
                                                <h4> Created by </h4>
                                                <div class="dropdown">
                                                <button class="btn bnhu btn-chat dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                    Change
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shou05" aria-labelledby="dropdownMenuButton1">
                                                    <li class="new-sl">
                                                    <select class="js-example-basic-multipleedti2 " name="created_by">
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
                                                    </li>
                                                    <li>
                                                    <button type="submit" name="btncreate" id="btnFilter" class="btn btn-sm btn-success01">Save Change</button>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
											</form>

                                             <div class="comonil-user my-4">
                                                    <a href="#" class="d-flex align-items-center w-100">
                                                        <div class="imgpiu">
                                                            <img alt="su" src="{{ asset('images/chatpi.svg') }}"/>
                                                        </div>
                                                        <span>
                                                            @php
                                                                $create = \DB::table('members')->where('id',$data['created_by'])->get();
                                                                echo @$create[0]->name;
                                                            @endphp
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="creatre-divu">
                                            <form name="frmC" action="{{ URL::to('updateresponsible') }}" method="POST">
                                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                                            @csrf
                                            <div class="d-flex bort-t justify-content-between align-items-center w-100">
                                                <h4> Responsible Person </h4>
                                                <div class="dropdown">
                                                <button class="btn bnhu btn-chat dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                    Change
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shou05" aria-labelledby="dropdownMenuButton1">
                                                    <li class="new-sl">
                                                    <select class="form-select" name="responsible_person">
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
                                                    </li>
                                                    <li>
                                                    <button type="submit" name="btnresponsible" id="btnFilter" class="btn btn-sm btn-success01">Save Change</button>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
											</form>

                                             <div class="comonil-user my-4">
                                                    <a href="#" class="d-flex align-items-center w-100">
                                                        <div class="imgpiu">
                                                            <img alt="su" src="{{ asset('images/chatpi.svg') }}"/>
                                                        </div>
                                                        <span>
                                                            @php
                                                                $create = \DB::table('members')->where('id',$data['responsible_person'])->get();
                                                                echo @$create[0]->name;
                                                            @endphp
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="creatre-divu">
                                             <form name="frmp" action="{{ URL::to('updateparticipants') }}" method="POST">
                                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                                            @csrf
                                                <div class="d-flex bort-t justify-content-between align-items-center w-100">
                                                <h4> Participants </h4>
                                                <div class="dropdown">
                                                    <button class="btn bnhu btn-chat dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                    Change
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end shou05" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <select class="js-example-basic-multipleedti2" name="participants[]" multiple="multiple">
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
                                                    </li>
                                                    <li>
                                                        <button type="submit" name="btnpart" id="btnFilter2" class="btn btn-sm btn-success01">Save Change</button>
                                                    </li>

                                                    </ul>
                                                </div>
                                                </div>
                                                </form>

                                                <div class="comonil-user my-4">
                                                    <a href="#" class="d-flex align-items-center w-100">
                                                        <div class="imgpiu">
                                                            <img alt="su" src="{{ asset('images/chatpi.svg') }}"/>
                                                        </div>
                                                        <span>
                                                            @php
                                                                $participant = explode(",",$data['participants']);

                                                                for($x=0;$x<=count($participant);$x++) {
                                                                $val = \DB::table('members')->where('id', @$participant[$x])->get();
                                                                  $name[] =  @$val[0]->name;
                                                                }

                                                                $responsible = @implode(", ", $name);
                                                                echo rtrim($responsible," ,");
                                                            @endphp
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                <form name="frmcomment" action="{{ URL::to('addcomment') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="{{ $data['id'] }}">
                @csrf
                    <div class="row">
                        <div class="col-lg-8">
                          <div class="stop-margin">
                            <div class="tab-utsy w-100 d-inline-block mt-0">
                                @php
                                   $comments = \DB::table('comments')->where('task_id',$data['id'])->get();
                                @endphp
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="home-tab"
                                          data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                          aria-selected="true">Comments <span class="nuoi08">{{ count($comments) }}</span> </button>
                                        </li>
                                     </ul>

                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                            <div class="comooments-ser">
                                             <!-------------  start comments loop ----------->
                                              @php
                                                  foreach($comments as $comment)
                                                  {
                                                     $sender = \DB::table('members')->where('id', $comment->sender)->get();
                                                     if($comment->postdate!= '0000-00-00 00:00:00')
                                                     {
                                                        $postdate = $comment->postdate;
                                                     }
                                                     else {
                                                        $postdate = '';
                                                     }
                                             @endphp
                                              <div id="comiuy" class="comment-hsow w-100">
                                                <div class="d-flex align-items-start">
                                                  <figure class="m-0">
                                                      <img alt="chat" src="{{ asset('images/chatpi.svg') }}"/>
                                                    </figure>
                                                    <div class="right-houw ms-3 position-relative">
                                                      <div class="indoi">
                                                          <h5 class="nametxe"> {{ $sender[0]->name }} <small>{{ $postdate }}</small></h5>
                                                          <p> @php echo $comment->comment @endphp </p>
                                                          <p>
                                                               @php
                                                                if($comment->files!='')
                                                                {
                                                                $file = json_decode(@$comment->files);

                                                                foreach ($file as $val)
                                                                {
                                                                    $con1 = strpos(@$val, "docx");
                                                                    $con2 = strpos(@$val, "pdf");
                                                                    $con3 = strpos(@$val, "xlsx");

                                                            @endphp
                                                    <p>
                                                        <a href="../uploads/{{ @$val }}" style="color: blueviolet; line-height: 15px;">
                                                           @php if($con1!=0) { @endphp
                                                            <img src="{{ asset('images/docx.png') }}" width="18" height="18">
                                                           @php } else if($con2!=0) { @endphp
                                                            <img src="{{ asset('images/pdf.png') }}" width="18" height="18">
                                                           @php } else if($con3!=0) { @endphp
                                                            <img src="{{ asset('images/excel.png') }}" width="18" height="18">
                                                           @php } else { @endphp
                                                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                           @php } @endphp
                                                          {{ @$val }}
                                                        </a>
                                                    </p>
                                                                @php
                                                                    }
                                                                 }
                                                            @endphp
                                                            </p>
                                                      </div>
                                                        <ul class="d-flex rplyt-group align-items-center mt-2">
                                                          <li class="d-flex lign-items-center">
                                                            <a id="rery" class="ms-3">Reply</a>
                                                          </li>
                                                          <li class="dropdown ms-3">
                                                            <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                              More
                                                            </button>
                                                            <ul class="dropdown-menu spoicola" aria-labelledby="dropdownMenuButton1">
                                                              <li><a href="{{ URL::to('editcomment') }}/{{ $comment->id }}" class="dropdown-item" id="deit11{{ $comment->id }}">Edit</a></li>
                                                              <li>
                                                                <a href="javascript:void(0)" class="dropdown-item" id="del{{ $comment->id }}">
                                                                    Delete
                                                                </a>
                                                             </li>
                                                            </ul>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                              </div>
  												@php
                                                   }
                                                @endphp
                                              <!-------------  end comments loop ----------->

                                              <!-- edit text area -->
                                              <div id="edit-reply-main" class="messge-chat mb-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="chat-boxu05 ms-3 rluyio">
                                                      <div class="cht">
                                                        <div class="height-spoui">
                                                          <textarea id="reply_comment21" name="editcomment" class="form-control msui">

                                                          </textarea>
                                                        </div>
                                                        <div class="group-btnyiu upload__box">
                                                          <label class="btn upload__btn btn-cmonuy d-flex align-items-center position-relative">
                                                            <span>
                                                              <i data-feather="paperclip"></i>
                                                            </span>
                                                            File
                                                            <input name="editfiles[]" type="file" multiple class="upload__inputfile filter">
                                                          </label>
                                                          <div class="show-opi mt-3">
                                                            <div class="upload__img-wrap"></div>
                                                          </div>
                                                      </div>
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center group-send01">
                                                    <button type="submit" id="btnreply" name="btnreply" class="btn btn-send"> Send </button>
                                                    <button id="calent2" type="button" class="btn btn-send2"> Cancel </button>
                                                </div>
                                              </div>

                                              <!-- reply text area -->
                                              <div id="reply-main" class="messge-chat">
                                                <div class="d-flex align-items-start">
                                                    <figure class="m-0">
                                                        <img alt="chat" src="{{ asset('images/chatpi.svg') }}"/>
                                                    </figure>
                                                    <div class="chat-boxu05 ms-3">
                                                      <div class="cht">
                                                        <textarea class="form-control msui" id="reply_comment" name="comment" value="Subhojit Adhikary"></textarea>
                                                        <div class="group-btnyiu upload__box ms-3 pb-0">
                                                          <div class="btcd-f-input">
                                                              <div class="btcd-f-wrp">
                                                                  <button class="btcd-inpBtn bg-white" type="button"> <img src="" alt=""> <span> File </span></button>
                                                                  <span class="btcd-f-title">No File Chosen</span>
                                                                  <input multiple type="file" name="files[]" class="upload__inputfile filter">
                                                              </div>
                                                              <div class="btcd-files"></div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex align-items-center group-send01">
                                                    <button type="submit" name="btnsend" class="btn btn-send"> Send </button>
                                                    <button id="calent" type="button" class="btn btn-send2"> Cancel </button>
                                                </div>
                                              </div>

                                              <!-- comment and reply button show hide filed -->
                                                <div id="commnt-main" class="messge-chat">
                                                    <div class="d-flex align-items-center">
                                                        <figure class="m-0"><img alt="chat" src="{{ asset('images/chatpi.svg') }}"/></figure>
                                                        <div class="chat-boxu05 com-ment position-relative ms-3">
                                                            <input type="text" id="clickg" class="form-control" placeholder="Add Comment" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="d-flex align-items-center mt-5">
                                    <button name="btnsave" type="submit" class="btn btn-pause"> Save </button>
                                    <button type="button" onClick="javascript:history.go(-1)" class="btn btn-pause cancel-btn ms-3"> Cancel </button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </form>
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
