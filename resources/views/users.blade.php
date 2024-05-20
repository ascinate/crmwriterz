<x-header/>
<body class="dahbo-dd">

    <div class="d-flex align-items-start bodyt">
        <x-sidebar/>
        <main class="float-start content-wrapper">
         <x-navigation/>
          <div class="contentoi">
            <x-taskcount/>
            <section class="top-sectioun d-inline-block w-100">

                    <div class="d-flex justify-content-between justify-content-lg-start top-boer-ali align-items-center">
                        <div class="left-texr">
                            <h2 class="text-white titels-01"> Members </h2>
                        </div>
                        <div class="right-serach-div col-lg-9 d-flex align-items-center ps-5">
                          <button type="button" class="btn btn-catrea ctre-2" data-bs-toggle="offcanvas" data-bs-target="#addnew">
                            Create
                          </button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center subnm-menu-div">
                        <div class="letfr-menus">
                          <ul class="d-flex align-items-center">
                            <li>
                              <a href="#" class="menu05 active-me"> List </a>
                            </li>
                            <li>
                              <a href="#" class="menu05"> Deadline </a>
                            </li>
                          </ul>
                        </div>
                    </div>
            </section>

            <section class="mail-sercotu d-inline-block w-100">
                  <div class="onisde d-inline-block w-100 amk position-relative">
                    <table id="examplee" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th style="text-align: center"><input type="checkbox" id="select_all_user" /></th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Designation</th>
                          <th>Role</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            foreach($datas as $data)
                            {
                        @endphp
                        <tr>
                          <td>
                                <div class="form-check nut">
                                  <input class="form-check-input m-0 checkBoxuser" type="checkbox" name="user[]" value="{{ $data['id'] }}"/>
                                </div>
                          </td>
                          <td>
                              <a href="editmember/{{ $data->id }}">
                                  <span class="txer08">  {{ $data['name'] }} </span>
                              </a>
                          </td>
                          <td>{{ $data['email'] }}</td>
                          <td>{{ $data['phone'] }}</td>
                          <td>{{ $data['designation'] }}</td>
                          <td>{{ $data['role'] }}</td>
                          <td>
                            @php
                                $ex = explode('-',$data['create_date']);
                                $dt = mktime(12,0,0, $ex[1],$ex[2],$ex[0]);
                                echo date('F j, Y',$dt);
                            @endphp
                         </td>

                         <td>
                          <a  href="editmember/{{ $data->id }}" class="btm ediet d-table">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="deletemember/{{ $data->id }}" class="btm ediet d-table ms-3">
                            <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>
                        @php
                             }
                        @endphp

                      </tbody>
                    </table>

                    <button id="btuser" type="button" class="btn btn-delect"> Delete </button>

                  </div>

            </section>

            <footer class="main-footer01">
              <div class="d-flex align-items-center justify-content-center">
                   <p class="text-white "> © {{ date('Y') }} Writerz Inc. All rights reserved. | <a href="#">Privacy</a> </p>
              </div>
           </footer>

          </div>
        </main>
      </div>

    <form name="frmadd" action="{{ URL::to('insertuser') }}" method="POST">
        @csrf
        <div class="offcanvas offcanvas-end addm-nu" id="addnew">
        <button type="button" class="btn-close nt-close text-reset" data-bs-dismiss="offcanvas">
            <span>
            <img alt="cloe" src="images/close.svg"/>
            </span> Contact
        </button>

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
                        <h2> Add new user
                        </h2>
                    </div>
                </div>
                <div class="test-block-div">
                    <div class="d-flex vort algign-items-center">
                        <input type="text" class="form-control" placeholder="Enter task name"/>
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            High Priority
                            </label>
                        </div>
                    </div>

                    <div class="adount">
                        <div class="form-add-fom">
                        <div class="row row-cols-1 row-cols-md-2 gy-4 g-lg-5 align-items-center">
                            <div class="col">
                                <div class="form-group">
                                    <label> Name </label>
                                </div>
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label> E-mail </label>
                                </div>
                                <input type="email" name="email" class="form-control" required/>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label> Phone </label>
                                </div>
                                <input type="text" name="phone" class="form-control" />
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label> Designation </label>
                                    <input type="text" name="designation" class="form-control"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label> Role </label>
                                <select name="role" class="form-select">
                                    <option value="Editor">Editor</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Writer">Writer</option>
                                </select>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-diuv-modal">
                <div class="d-flex align-items-center">
                    <button type="submit" name="btnadd" class="btn btn-aditext"> Add </button>
                    <button type="button" name="btncancel" class="btn btn-aditext ms-3"> Cancel </button>
                </div>
            </div>
        </div>
        </div>
   </form>

   <div class="offcanvas offcanvas-end addm-nu" id="accountui">
      <button type="button" class="btn-close nt-close text-reset" data-bs-dismiss="offcanvas">
        <span>
          <img alt="cloe" src="images/close.svg"/>
        </span>close
      </button>

      <div class="offcanvas-body position-relative">
          <div class="takyt-body ">
            <div class="d-block d-lg-none">
              <button type="button" class="btn-close top-btnh text-reset" data-bs-dismiss="offcanvas">
                <span>
                  <img alt="cloe" src="images/close.svg"/>
                </span>
              </button>
            </div>
              <div class="top-headr">
                  <div class="d-flex align-items-center justify-content-between">
                      <h2> Subrata Das </h2>
                  </div>
              </div>
              <div class="row">

               <div class="col-lg-8">
                   <div class="test-block-div ny">
                      <div class="cont-header">
                         <h2>  Contact information </h2>
                      </div>
                      <div class="proifle-pic-name">
                           <div class="row row-cols-1  gy-4 ">
                              <div class="col">
                                 <div class="form-group">
                                    <label> Name </label>
                                    <h5>  Mrs. Smith </h5>
                                 </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                   <label> E-mail </label>
                                   <h5>  exmpale@gmail.com </h5>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                   <label> Phone </label>
                                   <h5>  +91 2560256400 </h5>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                   <label> Designation</label>
                                   <h5>  Web Designer </h5>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                   <label> Role </label>
                                   <h5>  UI/UX </h5>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                   <label> Created </label>
                                   <h5>  exmpale@gmail.com </h5>
                                </div>
                              </div>
                           </div>
                      </div>
                   </div>
               </div>
              </div>
          </div>
          <div class="footer-diuv-modal">
             <div class="d-flex align-items-center">
                <a href="contact-details.html"  class="btn btn-aditext"> Edit </a>
                <button type="button" class="btn btn-aditext ms-3"> Cancel </button>
             </div>
          </div>
      </div>
    </div>

    <x-footer/>
