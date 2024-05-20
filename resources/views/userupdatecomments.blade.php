<x-header/>
<body class="dahbo-dd">

<div class="d-flex align-items-start bodyt">
    <x-sidebar/>

  <main class="float-start content-wrapper">

    <x-navigation/>

    <div class="contentoi">
      <div class="boxu-body d-inline-block w-100">
        <x-taskcount/>

         <section class="mail-sercotu d-inline-block w-100">
                <div class="onisde details-projects d-inline-block w-100">

                    <div class="row">
                        <div class="col-lg-12">
                            <form name="frmtask" action="{{ URL::to('updateusercomment') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                            @csrf
                                <div class="w-100">
                                    <div class="comon-projetcs-details bg-white position-relative anew">
                                        <div class="textt-div w-100" style="padding:10px;">
                                            <textarea name="comment" id="newtask" class="form-control">{{ $data['comment'] }}</textarea>
                                        </div>
                                    </div>

                                    <div class="footer-list02">
                                        <div class="d-flex align-items-center">
                                        <button type="submit" id="btupdate" name="btnupdate" class="btn btn-pause"> Update </button>
                                        <button type="button" onClick="javascript:history.go(-1)" class="btn btn-pause cancel-btn ms-3"> Cancel </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

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
