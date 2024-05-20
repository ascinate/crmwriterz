<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="marhansolutions.com" />
    <title>Writerz - Contact Details </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&family=Kanit:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600&family=Poppins:wght@500;600;700;800;900&family=Racing+Sans+One&family=Roboto+Condensed:wght@300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,700;1,900&display=swap" rel="stylesheet"/>

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"/>

  </head>

<body class="dahbo-dd">
<div class="d-flex align-items-start bodyt">

 <x-sidebar/>

  <main class="float-start content-wrapper">

    <x-navigation/>

    <div class="contentoi">
        <x-taskcount/>
      <section class="top-sectioun d-inline-block w-100">
        <div class="d-flex top-boer-ali align-items-center">
            <div class="left-texr">
                <h2 class="text-white titels-01"> {{ $data['name'] }} </h2>
            </div>
        </div>
      </section>

      <form name="frmedit" action="{{ URL::to('updateuser') }}" method="POST">
      <input type="hidden" name="id" value="{{ $data['id'] }}">
      @csrf
      <section class="mail-sercotu d-inline-block w-100">
            <div class="onisde details-projects d-inline-block w-100">
                <div class="boxu-body d-inline-block w-100">
                 <div class="row">
                    <div class="col-12">
                        <div class="comon-projetcs-details">
                            <div class="topi-head">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2> Edit Details </h2>
                                </div>
                            </div>
                            <div class="textt-div w-100">
                                <div class="show-details-content add-usert">
                                  <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-4">
                                      <div class="col">
                                        <div class="comoincont">
                                          <label> Name </label>
                                          <input type="text" name="name" class="form-control" value="{{ $data['name'] }}"/>
                                        </div>
                                      </div>

                                      <div class="col">
                                        <div class="comoincont">
                                          <label>E-mail </label>
                                          <input type="email" name="email" class="form-control" value="{{ $data['email'] }}"/>

                                        </div>
                                      </div>

                                      <div class="col">
                                        <div class="comoincont">
                                          <label>Phone </label>
                                          <input type="text" name="phone" class="form-control" value="{{ $data['phone'] }}"/>
                                        </div>
                                      </div>

                                      <div class="col">
                                        <div class="comoincont">
                                          <label>Designation </label>
                                          <input type="text" name="designation" class="form-control" value="{{ $data['designation'] }}"/>
                                        </div>
                                      </div>

                                      <div class="col">
                                        <div class="comoincont">
                                          <label>Role </label>
                                          <select name="role" class="form-select">
                                            <option value="Editor"@php
                                                if($data['role']=='Editor') { echo 'selected'; }
                                            @endphp>Editor</option>
                                            <option value="Writer"@php
                                            if($data['role']=='Writer') { echo 'selected'; }
                                        @endphp>Writer</option>
                                            <option value="Administrator"@php
                                            if($data['role']=='Administrator') { echo 'selected'; }
                                        @endphp>Administrator</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col">
                                        <div class="comoincont">
                                          <label>Password </label>
                                          <input type="text" name="password" class="form-control" value="{{ $data['password'] }}"/>
                                        </div>
                                      </div>

                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-5 svaed-divu">
                            <button type="submit" name="btnsubmit" class="btn btn-pause"> Save </button>
                            <button type="button" name="cancel" onclick="javascript:history.go(-1)" class="btn btn-pause cancel-btn ms-3"> Close </button>
                       </div>
                    </div>
                 </div>
                </div>

                 <footer class="main-footer01">
                  <div class="d-flex align-items-center justify-content-center">
                       <p class="text-white"> © {{ $data['Y'] }} Writerz Inc. All rights reserved. | <a href="#">Privacy</a> </p>
                  </div>
               </footer>
              </div>

      </section>
      </form>

    </div>
  </main>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src="https://unpkg.com/feather-icons"></script>

<script>
  feather.replace();
</script>

<script>
	 $(document).ready(function() {

      let table = $('#example').DataTable( {
        responsive: true,
        searching: false,
        info: false,
        columnDefs: [ {
          orderable: false,

          className: 'select-checkbox',
          targets:   0
        } ],
        select: {
          style:    'multi',
          selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
      });

          $('#example').on('click', '#select_all', function () {
        if ($('#select_all:checked').val() === 'on')
          table.rows().select();
        else
          table.rows().deselect();
      });
    });

</script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>

<script>
  var $dOut = $('#date'),
    $hOut = $('#hours'),
    $mOut = $('#minutes'),
    $sOut = $('#seconds'),
    $ampmOut = $('#ampm');
var months = [
  'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
];

var days = [
  'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
];

function update(){
  var date = new Date();

  var ampm = date.getHours() < 12
             ? 'AM'
             : 'PM';

  var hours = date.getHours() == 0
              ? 12
              : date.getHours() > 12
                ? date.getHours() - 12
                : date.getHours();

  var minutes = date.getMinutes() < 10
                ? '0' + date.getMinutes()
                : date.getMinutes();

  var seconds = date.getSeconds() < 10
                ? '0' + date.getSeconds()
                : date.getSeconds();

  var dayOfWeek = days[date.getDay()];
  var month = months[date.getMonth()];
  var day = date.getDate();
  var year = date.getFullYear();

  var dateString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year;

  $dOut.text(dateString);
  $hOut.text(hours);
  $mOut.text(minutes);
  $sOut.text(seconds);
  $ampmOut.text(ampm);
}

update();
window.setInterval(update, 1000);
</script>

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script>
  $(function() {
	$( "#datepicker" ).datepicker();
  });
</script>

<script>
  $(document).ready(function(){
    $(".navbar-toggler").click(function(){
      $(".dahbo-dd").toggleClass("full-main");
    });
  });
  $(document).ready(function(){
    $(".ctre-2").click(function(){
      $(".right-notifacition").addClass("whaite-gar");
    });
    $(".nt-close").click(function(){
      $(".right-notifacition").removeClass("whaite-gar");
    });

    $("#ediuet").click(function(){
      $("#show-dla2").show();
      $("#show-dla").hide();
      $("#ediuetsave").show();
      $("#ediuet").hide();

    });

    $("#ediuetsave").click(function(){
      $("#show-dla2").hide();
      $("#show-dla").show();
      $("#ediuetsave").hide();
      $("#ediuet").show();

    });



  });
</script>

<script>
  var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};

</script>


</body>
</html>
