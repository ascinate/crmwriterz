<x-header/>
<body class="dahbo-dd">
    <div class="container-fluid px-lg-0 m-lgod-vi">
        <div class="row  g-lg-0 align-items-center justify-content-between">
            <div class="col-lg-5  position-relative">
                <div class="left-divu position-relative">

                    <div class="como-left-divut d-inline-block w-100">
                        <div class="top-logo-ui">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="clogo">
                                <a href="index.html">
                                    <img alt="ser" src="images/logobi.png"/>
                                </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="login-text05">
                             <h2 class="text-white"> Your Unlimited Workplace </h2>
                             <figure>
                               <img src="images/shapre-01.png" alt="shape"/>
                             </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="right-divu-login p-lg-0">
                    <div class="logo-divu">
                      <a href="#" class="logo-login text-center mx-auto mb-5 w-100 d-table">
                        <img alt="lt" src="images/mob-logo.png"/>
                      </a>
                    </div>
                      
                      <p class="text-center col-12 px-0 col-lg-7 mx-auto" style="color:red; margin:20px;">{{ session('error') }}</p>
                     <form name="frmlogin" action="{{ URL::to('memberlogin') }}" method="POST">
                        @csrf
                     <div class="texr-login col-12 px-0 px-lg-5 col-lg-8 mx-auto d-table">
                          <h2> Login
                            <span class="mt-2 d-block"> Enter your Account details </span>
                          </h2>

                          <div class="form-group cm-fild">
                            <label>Your Email / Phonenumber </label>
                            <input type="email" name="email" class="form-control" required/>
                          </div>
                          <div class="form-group cm-fild">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required/>
                          </div>

                          <div class="diuy-div d-sm-flex align-items-center justify-content-between">
                            <button type="submit" name="btnlogin" class="btn btn-left-btn w-100"> Login </button>
                          </div>
                     </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
<x-footer/>
