@extends('cv.page')

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
  <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
    <header>
      <h2>Messeage</h2>       
    </header>
    <div>

    <div id="content">
      <div class="inbox-nav-bar no-content-padding">
        <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> Inbox</h1>
        <div class="inbox-checkbox-triggered">
          <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-default"><strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong></a>
            <a href="javascript:void(0);" class="btn btn-default"><strong><i class="fa fa-folder-open fa-lg"></i></strong></a>
            <a href="javascript:void(0);" class="deletebutton btn btn-default"><strong><i class="fa fa-trash-o fa-lg"></i></strong></a>
          </div>
        </div>
      </div>
      <div id="inbox-content" class="inbox-body no-content-padding">
        <div class="inbox-side-bar">
          <a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block"> 
            <strong>Compose</strong> 
          </a>
          <ul class="inbox-menu-lg">
            <li class="active"><a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a></li>
            <li><a href="#">Sent</a></li>
            <li><a href="#">Draft</a></li>
            <li><a href="#">Trash</a></li>
          </ul>
        </div>
        <div class="table-wrap custom-scroll animated fast fadeInRight">
          <script>
            $("#inbox-table [rel=tooltip]").tooltip();

            $("#inbox-table input[type='checkbox']").change(function() {
              $(this).closest('tr').toggleClass("highlight", this.checked);
            });

            $("#inbox-table .inbox-data-message").click(function() {
              $this = $(this);
              getMail($this);
            })
            $("#inbox-table .inbox-data-from").click(function() {
              $this = $(this);
              getMail($this);
            })
            function getMail($this) {
              console.log($this.closest("tr").attr("id"));
              loadURL("ajax/email-opened.html", $('#inbox-content > .table-wrap'));
            }


            $('.inbox-table-icon input:checkbox').click(function() {
              enableDeleteButton();
            })

            $(".deletebutton").click(function() {
              $('#inbox-table td input:checkbox:checked').parents("tr").rowslide();
              //$(".inbox-checkbox-triggered").removeClass('visible');
              //$("#compose-mail").show();
            });

            function enableDeleteButton() {
              var isChecked = $('.inbox-table-icon input:checkbox').is(':checked');

              if (isChecked) {
                $(".inbox-checkbox-triggered").addClass('visible');
                //$("#compose-mail").hide();
              } else {
                $(".inbox-checkbox-triggered").removeClass('visible');
                //$("#compose-mail").show();
              }
            }
            
          </script>
        </div>
</div>

<script type="text/javascript">
  pageSetUp();
  var pagefunction = function() {
    tableHeightSize();
    $(window).resize(function() {
      tableHeightSize()
    })
    function tableHeightSize() {
      if ($('body').hasClass('menu-on-top')) {
        var menuHeight = 68;
        var tableHeight = ($(window).height() - 224) - menuHeight;
        if (tableHeight < (320 - menuHeight)) {
          $('.table-wrap').css('height', (320 - menuHeight) + 'px');
        } else {
          $('.table-wrap').css('height', tableHeight + 'px');
        }

      } else {
        var tableHeight = $(window).height() - 224;
        if (tableHeight < 320) {
          $('.table-wrap').css('height', 320 + 'px');
        } else {
          $('.table-wrap').css('height', tableHeight + 'px');
        }

      }

    }
    loadInbox();
    function loadInbox() {
      loadURL("ajax/email/email-list.html", $('#inbox-content > .table-wrap'))
    }
    $(".inbox-load").click(function() {
      loadInbox();
    });
    $("#compose-mail").click(function() {
      loadURL("ajax/email-compose.html", $('#inbox-content > .table-wrap'));
    });
    
  };
  loadScript("js/plugin/delete-table-row/delete-table-row.min.js", pagefunction);
  
</script>
</div>
    </div>
  </div>
</div>
</div>


@stop