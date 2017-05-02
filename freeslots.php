<html>
<head>
  <?php
  include('connect.php');
  ?>
<title>FFCS - Free Slots</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-horizon/0.1.1/bootstrap-horizon.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/script.js"></script>
<style type="text/css">
a{
  text-decoration: none;
  color:#009688;
}
a:hover{
  
  text-decoration: none;
  
    color:firebrick;
}
    td{
        font-weight: bold;
    }
</style>
</head>
<body>
  <?php
   $tablename=$_GET['tab'];
   $slot=$_GET['x'];
   ?>
  <!--Header Begins-->
  <header class="container-fluid">
    
    <div class="row">
      <center><div class="col-sm-12 col-xs-12 text-center" id="site_heading"><h1>FFCS Time Table - Get Free Slots of your peers</h1></div></center>
      <div class="text-left col-xs-4 visible-xs">
        
      </div>
    </div>
  </header>
  <hr>
  <!-- buttons -->
  <div id="option_buttons" class="container">
    <div class="row text-center">
      <button type="button" id="getFreeSlots" class="btn btn-primary">Get Free Slots</button>
      <button type="button" id="resetButton" class="btn btn-success">Reset</button>
      <h5>Click on the slots below to get the free slots</h5>
    </div>
  </div>
  <div class="quick-selection row-horizon">
    <div class="container">

  <!--  timetable-->
  <div class="container-fluid text-center">
    <div class="row table-responsive">
      <table id="timetable" class="table table-bordered">
        <tr>
          <td class="ColumnOneDays">THEORY HOURS</td>
          <td class="TheoryHours">08:00 AM<br>to<br>08:50 AM</td>
          <td class="TheoryHours">09:00 AM<br>to<br>09:50 AM</td>
          <td class="TheoryHours">10:00 AM<br>to<br>10:50 AM</td>
          <td class="TheoryHours">11:00 AM<br>to<br>11:50 AM</td>
          <td class="TheoryHours">12:00 PM<br>to<br>12:50 PM</td>
          <td class="TheoryHours"></td>
          <td width="8px" rowspan="9" class="ColumnOneDays"><strong>L<br>U<br>N<br>C<br>H</strong></td>
          <td class="TheoryHours">02:00 PM<br>to<br>02:50 PM</td>
          <td class="TheoryHours">03:00 PM<br>to<br>03:50 PM</td>
          <td class="TheoryHours">04:00 PM<br>to<br>04:50 PM</td>
          <td class="TheoryHours">05:00 PM<br>to<br>05:50 PM</td>
          <td class="TheoryHours">05:50 PM<br>to<br>06:40 PM</td>
          <td class="TheoryHours"></td>
          <td class="TheoryHours">07:00 PM<br>to<br>07:50 PM</td>
          <td class="TheoryHours">08:00 PM<br>to<br>08:50 PM</td>
        </tr>
        <tr>
          <td class="ColumnOneDays">LAB HOURS</td>
          <td class="LabHours">08:00 AM<br>to<br>08:50 AM</td>
          <td class="LabHours">08:50 AM<br>to<br>09:40 AM</td>
          <td class="LabHours">10:00 AM<br>to<br>10:50 AM</td>
          <td class="LabHours">10:50 AM<br>to<br>11:40 AM</td>
          <td class="LabHours">11:50 AM<br>to<br>12:40 PM</td>
          <td class="LabHours">12:40 PM<br>to<br>01:30 PM</td>
          <td class="LabHours">02:00 PM<br>to<br>02:50 PM</td>
          <td class="LabHours">02:50 PM<br>to<br>03:40 PM</td>
          <td class="LabHours">04:00 PM<br>to<br>04:50 PM</td>
          <td class="LabHours">04:50 PM<br>to<br>05:40 PM</td>
          <td class="LabHours">05:50 PM<br>to<br>06:40 PM</td>
          <td class="LabHours">06:40 PM<br>to<br>07:30 PM</td>
          <td class="LabHours">07:30 PM<br>to<br>08:20 PM</td>
          <td class="LabHours">08:20 PM<br>to<br>09:10 PM</td>
        </tr>
        <tr>
         <td class="ColumnOneDays">MON</td>
          <td class="TimetableContent A1 L1"><a href="freeslots.php?tab=monday&x=0">A1 / L1<a/></td></form>
          <td class="TimetableContent F1 L2"><a href="freeslots.php?tab=monday&x=1">F1 / L2</a></td>
          <td class="TimetableContent D1 L3"><a href="freeslots.php?tab=monday&x=2">D1 / L3</a></td>
          <td class="TimetableContent TB1 L4"><a href="freeslots.php?tab=monday&x=3">TB1 / L4</a></td>
          <td class="TimetableContent TG1 L5"><a href="freeslots.php?tab=monday&x=4">TG1 / L5</a></td>
          <td class="TimetableContent L6"><a href="freeslots.php?tab=monday&x=5">L6<a/></td>
          <td class="TimetableContent A2 L31"><a href="freeslots.php?tab=monday&x=6">A2 / L31</a></td>
          <td class="TimetableContent F2 L32"><a href="freeslots.php?tab=monday&x=7">F2 / L32</a></td>
          <td class="TimetableContent D2 L33"><a href="freeslots.php?tab=monday&x=8">D2 / L33<a/></td>
          <td class="TimetableContent TB2 L34"><a href="freeslots.php?tab=monday&x=9">TB2 / L34</a></td>
          <td class="TimetableContent TG2 L35"><a href="freeslots.php?tab=monday&x=10">TG2 / L35</a></td>
          <td class="TimetableContent L36"><a href="freeslots.php?tab=monday&x=11">L36</a></td>
          <td class="TimetableContent L61"><a href="freeslots.php?tab=monday&x=12">H1 / L61</a></td>
          <td class="TimetableContent K1 L62"><a href="freeslots.php?tab=monday&x=13">K1 / L62</a></td>
        </tr>
        <tr>
          <td class="ColumnOneDays">TUE</td>
          <td class="TimetableContent B1 L7"><a href="freeslots.php?tab=tuesday&x=0">B1 / L7</td>
          <td class="TimetableContent G1 L8"><a href="freeslots.php?tab=tuesday&x=1">G1 / L8</td>
          <td class="TimetableContent E1 L9"><a href="freeslots.php?tab=tuesday&x=2">E1 / L9</td>
          <td class="TimetableContent TC1 L10"><a href="freeslots.php?tab=tuesday&x=3">TC1 / L10</td>
          <td class="TimetableContent TAA1 L11"><a href="freeslots.php?tab=tuesday&x=4">TAA1 / L11</td>
          <td class="TimetableContent L12"><a href="freeslots.php?tab=tuesday&x=5">L12</td>
          <td class="TimetableContent B2 L37"><a href="freeslots.php?tab=tuesday&x=6">B2 / L37</td>
          <td class="TimetableContent G2 L38"><a href="freeslots.php?tab=tuesday&x=7">G2 / L38</td>
          <td class="TimetableContent E2 L39"><a href="freeslots.php?tab=tuesday&x=8">E2 / L39</td>
          <td class="TimetableContent TC2 L40"><a href="freeslots.php?tab=tuesday&x=9">TC2 / L40</td>
          <td class="TimetableContent TAA2 L41"><a href="freeslots.php?tab=tuesday&x=10">TAA2 / L41</td>
          <td class="TimetableContent L42"><a href="freeslots.php?tab=tuesday&x=11">L42</td>
          <td class="TimetableContent L63"><a href="freeslots.php?tab=tuesday&x=12">H2 / L63</td>
          <td class="TimetableContent K2 L64"><a href="freeslots.php?tab=tuesday&x=13">K2 / L64</td>
        </tr>
        <tr>
         <td class="ColumnOneDays">WED</td>
            <td class="TimetableContent C1 L13"><a href="freeslots.php?tab=wednesday&x=0">C1 / L13</a></td>
          <td class="TimetableContent A1 L14"><a href="freeslots.php?tab=wednesday&x=1">A1 / L14<a/></td>
            <td class="TimetableContent F1"><a href="freeslots.php?tab=wednesday&x=2">F1</a></td>
          <td style="color: grey; background-color: #FFFFCC; cursor: default;" colspan="3">Extramural Hour</a></td>
      <td class="TimetableContent C2 L43"><a href="freeslots.php?tab=wednesday&x=5">C2 / L43</a></td>
      <td class="TimetableContent A2 L44"><a href="freeslots.php?tab=wednesday&x=6">A2 / L44</a></td>
      <td class="TimetableContent F2 L45"><a href="freeslots.php?tab=wednesday&x=7">F2 / L45</a></td>
      <td class="TimetableContent TD2 L46"><a href="freeslots.php?tab=wednesday&x=8">TD2 / L46</a>
      </td>
      <td class="TimetableContent TBB2 L47"><a href="freeslots.php?tab=wednesday&x=9">TBB2 / L47</a></td>
      <td class="TimetableContent L48"><a href="freeslots.php?tab=wednesday&x=10">L48</a></td>
      <td class="TimetableContent L65"><a href="freeslots.php?tab=wednesday&x=11">H3 / L65</a></td>
      <td class="TimetableContent K3 L66"><a href="freeslots.php?tab=wednesday&x=12">K3 / L66</a></td>
        </tr>
        <tr>
           <td class="ColumnOneDays">THU</td>
            <td class="TimetableContent D1 L19"><a href="freeslots.php?tab=thursday&x=0">D1 / L19</a></td>
            <td class="TimetableContent B1 L20"><a href="freeslots.php?tab=thursday&x=1">B1 / L20</a></td>
            <td class="TimetableContent G1 L21"><a href="freeslots.php?tab=thursday&x=2">G1 / L21</a></td>
            <td class="TimetableContent TE1 L22"><a href="freeslots.php?tab=thursday&x=3">TE1 / L22</a></td>
            <td class="TimetableContent TCC1 L23"><a href="freeslots.php?tab=thursday&x=4">TCC1 / L23</a></td>
            <td class="TimetableContent L24"><a href="freeslots.php?tab=thursday&x=5">L24</a></td>
            <td class="TimetableContent D2 L49"><a href="freeslots.php?tab=thursday&x=6">D2 / L49</a></td>
            <td class="TimetableContent B2 L50"><a href="freeslots.php?tab=thursday&x=7">B2 / L50</a></td>
            <td class="TimetableContent G2 L51"><a href="freeslots.php?tab=thursday&x=8">G2 / L51</a></td>
            <td class="TimetableContent TE2 L52"><a href="freeslots.php?tab=thursday&x=9">TE2 / L52</a></td>
            <td class="TimetableContent TCC2 L53"><a href="freeslots.php?tab=thursday&x=10">TCC2 / L53</a></td>
            <td class="TimetableContent L54"><a href="freeslots.php?tab=thursday&x=11">L54</a></td>
          <td class="TimetableContent L67">H4 / L67</td>
          <td class="TimetableContent K4 L68">K4 / L68</td>
        </tr>
        <tr>
          <td class="ColumnOneDays">FRI</td>
            <td class="TimetableContent E1 L25"><a href="freeslots.php?tab=friday&x=0">E1 / L25</a></td>
            <td class="TimetableContent C1 L26"><a href="freeslots.php?tab=friday&x=0">C1 / L26</a></td>
            <td class="TimetableContent TA1 L27"><a href="freeslots.php?tab=friday&x=0">TA1 / L27</a></td>
            <td class="TimetableContent TF1 L28"><a href="freeslots.php?tab=friday&x=0">TF1 / L28</a></td>
            <td class="TimetableContent TD1 L29"><a href="freeslots.php?tab=friday&x=0">TD1 / L29</a></td>
            <td class="TimetableContent L30"><a href="freeslots.php?tab=friday&x=0">L30</a></td>
            <td class="TimetableContent E2 L55"><a href="freeslots.php?tab=friday&x=0">E2 / L55</a></td>
            <td class="TimetableContent C2 L56"><a href="freeslots.php?tab=friday&x=0">C2 / L56</a></td>
            <td class="TimetableContent TA2 L57"><a href="freeslots.php?tab=friday&x=0">TA2 / L57</a></td>
            <td class="TimetableContent TF2 L58"><a href="freeslots.php?tab=friday&x=0">TF2 / L58</a></td>
            <td class="TimetableContent TDD2 L59"><a href="freeslots.php?tab=friday&x=0">TDD2 / L59</a></td>
            <td class="TimetableContent L60"><a href="freeslots.php?tab=friday&x=0">L60</a></td>
          <td class="TimetableContent L69">H5 / L69</td>
          <td class="TimetableContent K5 L70">K5 / L70</td>
        </tr>
        <tr>
          <td class="ColumnOneDays">SAT</td>
          <td class="TimetableContent L71">L71</td>
          <td class="TimetableContent L72">L72</td>
          <td class="TimetableContent L73">L73</td>
          <td class="TimetableContent L74">L74</td>
          <td class="TimetableContent L75">L75</td>
          <td class="TimetableContent L76">L76</td>
          <td class="TimetableContent L77">L77</td>
          <td class="TimetableContent L78">L78</td>
          <td class="TimetableContent L79">L79</td>
          <td class="TimetableContent L80">L80</td>
          <td class="TimetableContent L81">L81</td>
          <td class="TimetableContent L82">L82</td>
          <td class="TimetableContent"></td>
          <td class="TimetableContent"></td>
        </tr>
        <tr>
          <td class="ColumnOneDays">SUN</td>
          <td class="TimetableContent L83">L83</td>
          <td class="TimetableContent L84">L84</td>
          <td class="TimetableContent L85">L85</td>
          <td class="TimetableContent L86">L86</td>
          <td class="TimetableContent L87">L87</td>
          <td class="TimetableContent L88">L88</td>
          <td class="TimetableContent L89">L89</td>
          <td class="TimetableContent L90">L90</td>
          <td class="TimetableContent L91">L91</td>
          <td class="TimetableContent L92">L92</td>
          <td class="TimetableContent L93">L93</td>
          <td class="TimetableContent L94">L94</td>
          <td class="TimetableContent"></td>
          <td class="TimetableContent"></td>
        </tr>
      </table>
    </div>
  </div>
  <!-- quick selection evening slot -->
  <div class="quick-selection">
    <div class="container">
      <p>Here, the list of students will be shown who else are free now!</p>
    </div>
  </div>
  <!-- Slot selection area -->
  <div class="container">
    <div class="row" id="slot-sel-area">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h4>FFCS - Free Slots</h4>
        </div>
        <div class="panel-body">
          <!-- write free slots here-->
          <?php
          
  $qry="select * from $tablename";
  $rs=mysql_query($qry)
  or die(mysql_error());
  $count=mysql_num_fields($rs);
  if($count>0)
  {
    echo "<center></table>";
  echo "<table border='3'><tr><th>Name of the students</th></tr>";
  while($row=mysql_fetch_array($rs))
  {
    echo "<tr>";
    
    echo "<td>$row[$slot]</td>";
  }
  echo "</table></center>";

}
?>
        </div>
        <!-- panel-body -->
        <div id="courseList">
          <div class="screenshot_msg text-center">
            <div class="row">
              <div class="col-xs-11">
               <h1>Get Free Slots of Your Peers!</h1>
               <p>Click on the slots in the above shown time table to see the free slots</p>
              </div>
            </div>
          </div>
          </div>
          
        </div>
      </div>
      <!-- panel -->
    </div>
  </div>
  <!-- End of Slot selection area-->
  

  <footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-12">
        Made with love by Himanshu Singh
      </div>
    </div>
  </footer>
  <!-- jquery cdn -->
  
  
</body>

</html>
