
<script src="{{asset('bootstrap/js/jquery.js')}}"></script>
<script src="{{asset('bootstrap/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script> <!--verificar incompatibilidad versiones-->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('panel/js/jquery.dcjqaccordion.2.7.js')}}" class="include" type="text/javascript" ></script>
<script src="{{asset('panel/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('panel/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('panel/js/jquery.sparkline.js')}}"></script>
<script src="{{asset('panel/js/common-scripts.js')}}"></script>
<script src="{{asset('panel/js/gritter/js/jquery.gritter.js')}}" type="text/javascript" ></script>
<script src="{{asset('panel/js/gritter-conf.js')}}" type="text/javascript" ></script>
<script src="{{asset('panel/js/sparkline-chart.js')}}"></script>    
<script src="{{asset('panel/js/zabuto_calendar.js')}}"></script>	
<script src="{{asset('panel/js/listas.js')}}"></script>



<!--<script type="application/javascript">
  $(document).ready(function () {
  $("#date-popover").popover({html: true, trigger: "manual"});
  $("#date-popover").hide();
  $("#date-popover").click(function (e) {
  $(this).hide();
  });

  $("#my-calendar").zabuto_calendar({
  action: function () {
  return myDateFunction(this.id, false);
  },
  action_nav: function () {
  return myNavFunction(this.id);
  },
  ajax: {
  url: "show_data.php?action=1",
  modal: true
  },
  legend: [
  {type: "text", label: "Special event", badge: "00"},
  {type: "block", label: "Regular event", }
  ]
  });
  });


  function myNavFunction(id) {
  $("#date-popover").hide();
  var nav = $("#" + id).data("navigation");
  var to = $("#" + id).data("to");
  console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
  }
</script>-->


</body>
</html>