
<div class="offcanvas offcanvas-end addm-nu" id="accountui">
    <button type="button" class="btn-close nt-close text-reset" data-bs-dismiss="offcanvas">
      <span>
        <img alt="cloe" src="images/close.svg"/>
      </span>close
    </button>

    <div class="offcanvas-body position-relative">
        <div class="takyt-body position-relative">
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


    </div>
  </div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src="https://unpkg.com/feather-icons"></script>

<script>
  feather.replace();
</script>

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
      $("#rery").click(function(){
        $("#reply-main").show();
        $("#commnt-main").hide();
      });
      $("#del01").click(function(){
        $("#comiuy").hide();
      });

      $("#calent").click(function(){
        $("#reply-main").hide();
        $("#commnt-main").show();
      });

      $("#deit1").click(function(){
        $("#reply-main").hide();
        $("#edit-reply-main").show();
      });

      $("#calent2").click(function(){
        $("#edit-reply-main").hide();
      });

      $("#rery").click(function(){
        $("#edit-reply-main").hide();
      });

      $("#clickg").click(function(){
        $("#reply-main").show();
        $("#commnt-main").hide();

      });


    });
  </script>

<script>
      $(document).ready(function() {

            new DataTable('#example', {
                  responsive: true,
                  searching: false,
                  info: false,
                   pageLength: 50,
            });
      });

      $(document).ready(function() {

        new DataTable('#examplee', {
              responsive: true,
              searching: true,
              info: false,
              pageLength: 50,
        });
      });

      $(document).ready(function() {

            new DataTable('#utask', {
                responsive: true,
                searching: true,
                info: false,
                pageLength: 50,
            });
        });

      $(document).ready(function() {

            new DataTable('#ongoing', {
                responsive: true,
                searching: true,
                info: false,
                pageLength: 50,
            });
        });

        $(document).ready(function() {

            new DataTable('#comments', {
                responsive: true,
                searching: true,
                info: false,
                pageLength: 50,
            });
        });

        $(document).ready(function() {

            new DataTable('#comments2', {
                responsive: true,
                searching: true,
                info: false,
                pageLength: 50,
            });
            });

</script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    $('.js-example-basic-multiplect').select2();
    $('.js-example-basic-multiplept').select2();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>




<script>
  $(function() {
	$( "#datepicker" ).datepicker();
  $( "#datepicker2" ).datepicker();
  });
</script>

<script>

  $(document).ready(function(){
    $("#crate-btn").click(function(){
      $("#ctar-div").toggle();
    });
    $("#participants-btn").click(function(){
      $("#ctar-div-pt").toggle();
    });
    $("#clio").click(function(){
      $("#date_clio").removeClass("show");
      $("#dropdownMenuClickableInside").removeClass("show");
    });
   });
</script>

<!-- <script>
  jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script> -->

<script>
  $(document).ready(function () {
    $('#select_all').change(function () {
      $('#btu').prop("disabled", !$("#select_all").prop("checked"));
    })
    $('.select-checkboxgh').click(function () {
      $('#btu').prop("disabled", !$("#select_all").prop("checked"));
    })

  });
</script>

<script>
  var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script>
  $(document).ready(function() {
     $('#datetimepicker').datetimepicker();
     $('#datetimepickerbu').datetimepicker();
     $('#datetimepickerdeas').datetimepicker();
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>


<!-- 24-02-2024 -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="https://unpkg.com/create-file-list@1.0.1/dist/create-file-list.min.js"></script>
<script src="{{ asset('js/create-file-list.min.js') }}"></script>
<script src="{{ asset('js/create-file-clist.min.js') }}"></script>
<script src="{{ asset('js/create-file-dlist.min.js') }}"></script>
<script src="{{ asset('js/filejs.js') }}"></script>
<script src="{{ asset('js/filejs-d.js') }}"></script>
<script src="{{ asset('js/filejs-c.js') }}"></script>
<script>
  $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
      $('.js-example-basic-multiplect').select2();
      $('.js-example-basic-multiplept').select2();
      $('.js-example-basic-multipleedti1').select2();
      $('.js-example-basic-multipleedti2').select2();


  });
</script>

<script>
    $(document).ready(function(){


        $("#bfinish").click(function(){

            var taskid = $("#taskid").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "https://www.writerzcentercrm.in/taskstatus",
                type: 'POST',
                data: {id:taskid},
                success: function(data)
                {
                    //location.href='https://www.writerzcentercrm.in/tasks';
                   // alert(data);
                   alert("Task status changed succesfully!");

                    setTimeout(function() {
                        location.reload();
                    }, 500);
                }
            });
        });

    });
    </script>

<script>
  $(document).ready(function(){
      $("#bresume").click(function(){

          var taskid = $("#taskid").val();

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "https://www.writerzcentercrm.in/taskresume",
              type: 'POST',
              data: {id:taskid},
              success: function(data)
              {
                  //location.href='https://www.writerzcentercrm.in/tasks';
                 // alert(data);
                 alert("Task resumed succesfully!");

                 setTimeout(function() {
                    location.reload();
                 }, 500);
              }
          });
      });

  });
</script>

<script>
     $(document).ready(function () {
        $("#select_all").click(function () {
            $(".checkBoxClass").attr('checked', this.checked);
        });
    });

    $(document).ready(function () {
       $("#select_all_user").click(function () {
           $(".checkBoxuser").attr('checked', this.checked);
       });
   });
</script>

<script>
$(document).ready(function(){

$("#btu").click(function()
{
    var arr = [];
    $.each($('input[name="task[]"]:checked'), function(){
        arr.push($(this).val());
    });

    var items = arr.join(",");
    //alert(items);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "https://www.writerzcentercrm.in/tasks/multidelete",
        type: 'POST',
        data: {id:items},
        success: function(data)
        {
            if(data='Succesful')
            {
                alert("Records removed succesfully!");
                //alert(data);

                setTimeout(function() {
                    location.reload();
                }, 500);
            }
        }
    });
});

});
</script>

<script>
    $(document).ready(function()
    {
        $("#btuser").click(function()
        {
            var arr = [];
            $.each($('input[name="user[]"]:checked'), function(){
                arr.push($(this).val());
            });

            var items = arr.join(",");
            //alert(items);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "https://www.writerzcentercrm.in/users/multidelete",
                type: 'POST',
                data: {id:items},
                success: function(data)
                {
                    if(data='Succesful')
                    {
                        alert("Records removed succesfully!");
                        //alert(data);

                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    }
                }
            });
        });
 });

 </script>

 <script>
    $(document).ready(function(){

        $('a[id^="del"]').click(function(){

        var id = this.id;
        var cid = id.replace('del','');

        var taskid = $("#taskid").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://www.writerzcentercrm.in/comment/delete",
            type: 'POST',
            data: {id:cid},
            success: function(data)
            {
                if(data='Succesful')
                {
                    alert("Records removed succesfully!");
                    //alert(data);

                    setTimeout(function() {
                        location.reload();
                    }, 500);
                }
            }
        });
    });

   /* $('a[id^="deit1"]').click(function(){

        var id = this.id;
        var cid = id.replace('deit1','');

        $("#editcomment").modal('show');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://www.writerzcentercrm.in/editcomment",
            type: 'POST',
            data: {id:cid},
            success: function(data)
            {
                $("#reply_comment2").val(data);
                $("#cid").val(cid);
            }
        });
    });

    $('#btnu').click(function(){

        var id = $("#cid").val();
        var comment = $("#reply_comment2").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://www.writerzcentercrm.in/updatecomment",
            type: 'POST',
            data: {id:id,editcomment:comment},
            success: function(data)
            {
                setTimeout(function() {
                            location.reload();
                        }, 500);
            }
        });
    });*/

    $("#calent2").click(function(){
        $("#commnt-main").show();
    });

    });
 </script>

<!--<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
<script>
        var editor = new FroalaEditor('#newtask');
</script>-->

<script>
    ClassicEditor
        .create( document.querySelector( '#newtask' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#reply_comment' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script src="https://unpkg.com/feather-icons"></script>
<script>
      feather.replace();
</script>

<div class="modal fade" id="editcomment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Comment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <form action="{{ URL::to('updatecomment') }}" method="POST" name="frmupdate">
        <input type="hidden" name="id" value="" id="cid">
        <div class="modal-body">
            <textarea id="reply_comment2" name="editcomment" class="form-control msui">

            </textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" name="btn" id="btnu" class="btn btn-primary">Save changes</button>
        </div>
     </form>
      </div>
    </div>
  </div>

  <script>
    ClassicEditor
        .create( document.querySelector( '#reply_comment22' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
</html>
