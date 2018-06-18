

<style>

.nav-tabs,
.nav-pills {
  position: relative;
}
.tabdrop{
  width: 120px;
  margin-top: .5rem;
}

.nav-tabs li li i{
  visibility: hidden;
}

.hide {
  display: none;
}

.input-group-addon {
  position: absolute;
  right: 10px;
  bottom: 13px;
  z-index: 2;
}

.contact-search-1 {
  padding: 50px;
  border-bottom: 1px solid #eee;
  padding-left: 0px;
}

.responstable th {
  display: none;
  border: 1px solid transparent;
  background-color: lightslategray;
  color: #FFF;
  padding: 1em;
}

#reportable{
  overflow: auto;
  margin: 0em auto 3em;
}
.responstable {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #1f5cb2;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}

.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 0.3em;
  }
}

.tabdrop .dropdown-menu a{
  padding: 20px;
}
</style>


<!--advance Search starts-->
<div class="container ">
    <div class="contact-search-1">
	<div class="row">
    <div class="col-sm-12 text-center">
        <div class="row no-gutters">
          <div class="col">
            <input class="form-control border-secondary border-right-0 rounded-0" type="search" placeholder="Search For.." id="myInput" onkeyup="myFunction()">
          </div>
          <div class="col-auto">
            <button class="btn btn-secondary border-left-0 rounded-0 rounded-right" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
<!--advance Search ends-->

<!-- table List -->
<div class="container" id="emergency_no">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">Health Institutions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Emergency Responders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Security</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">NGOs and INGOs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">DRR Volunteers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Municipality Personnel</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">Members of Municipal Assemblysss</a>
    </li>
  </ul>


    <div class="col-sm-12 " style="margin: 10px auto;">
          <a href="#" class="btn btn-" role="button">Download</a>
    </div>


  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
      <div class="row" id="reportable">
       <!-- responsive table for displaying contact directory -->
       <table class="responstable">
        <tr>
          <th><span>S.N</span></th>
          <th data-th="Health Institutions"><span>Organization</span></th>
          <th><span>Address</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Alternate Phone No.</span></th>
          <th><span>Contact Person</span></th>
          <th><span>Post</span></th>
          <th><span>Phone No.</span></th>
          <th><span>Email</span></th>
          <th><span>Website</span></th>
        </tr>


       <?php foreach ($health as  $health) {

        ?>

        <tr class="tr_tbl">
          <td id="<?php echo $health['id'] ?>idhealth"><?php echo $health['id'] ?></td>
          <td id="<?php echo $health['id'] ?>organizationhealth"><?php echo $health['organization'] ?></td>
          <td id="<?php echo $health['id'] ?>addresshealth"><?php echo $health['address'] ?></td>
          <td id="<?php echo $health['id'] ?>phone_nohealth"><?php echo $health['phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>alternate_phone_nohealth"><?php echo $health['alternate_phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['contact_person'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['post'] ?></td>
          <td id="<?php echo $health['id'] ?>personal_nohealth"><?php echo $health['personal_no'] ?></td>
          <td id="<?php echo $health['id'] ?>emailhealth"><?php echo $health['email'] ?></td>
          <td id="<?php echo $health['id'] ?>websitehealth"><?php echo $health['website'] ?></td>

        </tr>
 <?php } ?>

      </table>
    </div>
  </div>

  <div class="tab-pane fade show" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
    <div class="row" id="reportable">
     <!-- responsive table for displaying contact directory -->
     <table class="responstable">
      <tr>
        <th><span>S.N</span></th>
        <th data-th="Emergency Responders"><span>Organization</span></th>
        <th><span>Address</span></th>
        <th><span>Phone No.</span></th>
        <th><span>Alternate Phone No.</span></th>
        <th><span>Contact Person</span></th>
        <th><span>Post</span></th>
        <th><span>Phone No.</span></th>
        <th><span>Email</span></th>
        <th><span>Website</span></th>
      </tr>

  <?php foreach ($responders as $responders) {
    // code...
   ?>

      <tr class="tr_tbl">
        <td id="<?php echo $responders['id'] ?>idresponders"><?php echo $responders['id'] ?></td>
        <td id="<?php echo $responders['id'] ?>organizationresponders"><?php echo $responders['organization'] ?></td>
        <td id="<?php echo $responders['id'] ?>addressresponders"><?php echo $responders['address'] ?></td>
        <td id="<?php echo $responders['id'] ?>phone_noresponders"><?php echo $responders['phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>alternate_phone_noresponders"><?php echo $responders['alternate_phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>contact_personresponders"><?php echo $responders['contact_person'] ?></td>
        <td id="<?php echo $responders['id'] ?>personal_noresponders"><?php echo $responders['personal_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>emailresponders"><?php echo $responders['email'] ?></td>
        <td id="<?php echo $responders['id'] ?>websiteresponders"><?php echo $responders['website'] ?></td>

      </tr>

 <?php } ?>

    </table>
  </div>
</div>

<div class="tab-pane fade show" id="security" role="tabpanel" aria-labelledby="security-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Security"><span>Organization</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Alternate Phone No.</span></th>
      <th><span>Contact Person</span></th>
      <th><span>Post</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
      <th><span>Website</span></th>
    </tr>


    <?php foreach ($security as $security) {
      // code...
    } ?>
    <tr class="tr_tbl">
    <td id="<?php echo $security['id'] ?>idSecurity"><?php echo $security['id'] ?></td>
    <td id="<?php echo $security['id'] ?>organizationSecurity"><?php echo $security['organization'] ?></td>
    <td id="<?php echo $security['id'] ?>addressSecurity"><?php echo $security['address'] ?></td>
    <td id="<?php echo $security['id'] ?>phone_noSecurity"><?php echo $security['phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>alternate_phone_noSecurity"><?php echo $security['alternate_phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>contact_personSecurity"><?php echo $security['contact_person'] ?></td>
    <td id="<?php echo $security['id'] ?>personal_noSecurity"><?php echo $security['personal_no'] ?></td>
    <td id="<?php echo $security['id'] ?>emailSecurity"><?php echo $security['email'] ?></td>
    <td id="<?php echo $security['id'] ?>websiteSecurity"><?php echo $security['website'] ?></td>
  </tr>

  </table>
</div>
</div>

<div class="tab-pane fade show" id="ngo" role="tabpanel" aria-labelledby="ngo-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="NGOs and INGOs"><span>Organization</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Alternate Phone No.</span></th>
      <th><span>Contact Person</span></th>
      <th><span>Post</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
      <th><span>Website</span></th>
    </tr>
    <?php foreach ($ngo as $ngo) {
      // code...
     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $ngo['id'] ?>idngo"><?php echo $ngo['id'] ?></td>
          <td id="<?php echo $ngo['id'] ?>organizationngo"><?php echo $ngo['organization'] ?></td>
          <td id="<?php echo $ngo['id'] ?>addressngo"><?php echo $ngo['address'] ?></td>
          <td id="<?php echo $ngo['id'] ?>phone_nongo"><?php echo $ngo['phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>alternate_phone_nongo" ><?php echo $ngo['alternate_phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>contact_personngo"><?php echo $ngo['contact_person'] ?></td>
          <td id="<?php echo $ngo['id'] ?>personal_nongo"><?php echo $ngo['personal_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>emailngo"><?php echo $ngo['email'] ?></td>
          <td id="<?php echo $ngo['id'] ?>websitengo"><?php echo $ngo['website'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="volunter" role="tabpanel" aria-labelledby="volunter-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="DRR Volunteers"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($ddr as $ddr) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $ddr['id'] ?>idddr"><?php echo $ddr['id'] ?></td>
       <td id="<?php echo $ddr['id'] ?>photoddr" ><img src="<?php echo $ddr['photo']?>" height="50" width="50"></td>
       <td id="<?php echo $ddr['id'] ?>nameddr"><?php echo $ddr['name'] ?></td>
       <td id="<?php echo $ddr['id'] ?>organizationddr"><?php echo $ddr['organization'] ?></td>
       <td id="<?php echo $ddr['id'] ?>postddr"><?php echo $ddr['post'] ?></td>
       <td id="<?php echo $ddr['id'] ?>addressddr"><?php echo $ddr['address'] ?></td>
       <td id="<?php echo $ddr['id'] ?>phone_noddr"><?php echo $ddr['phone_no'] ?></td>
       <td id="<?php echo $ddr['id'] ?>emailddr"><?php echo $ddr['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Municipality Personnel"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($personnel as $personnel) {

     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $personnel['id'] ?>idpersonnel"><?php echo $personnel['id'] ?></td>
       <td id="<?php echo $personnel['id'] ?>photopersonnel"><img src="<?php echo $personnel['photo']?>" height="50" width="50"></td>
       <td id="<?php echo $personnel['id'] ?>namepersonnel"><?php echo $personnel['name'] ?></td>
       <td id="<?php echo $personnel['id'] ?>organizationpersonnel"><?php echo $personnel['organization'] ?></td>
       <td id="<?php echo $personnel['id'] ?>postpersonnel"><?php echo $personnel['post'] ?></td>
       <td id="<?php echo $personnel['id'] ?>addresspersonnel"><?php echo $personnel['address'] ?></td>
       <td id="<?php echo $personnel['id'] ?>phone_nopersonnel"><?php echo $personnel['phone_no'] ?></td>
       <td id="<?php echo $personnel['id'] ?>emailpersonnel"><?php echo $personnel['email'] ?></td>

     </tr>

   <?php } ?>
  </table>
</div>
</div>

<div class="tab-pane fade show" id="member" role="tabpanel" aria-labelledby="member-tab">
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
      <th><span>S.N</span></th>
      <th data-th="Members of Municipal Assembly"><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
    <?php foreach ($members as $members) {

     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $members['id'] ?>idmembers"><?php echo $members['id'] ?></td>
          <td id="<?php echo $members['id'] ?>photomembers"><img src="<?php echo $members['photo']?>" height="50" width="50"></td>
          <td id="<?php echo $members['id'] ?>namemembers"><?php echo $members['name'] ?></td>
          <td id="<?php echo $members['id'] ?>organizationmembers"><?php echo $members['organization'] ?></td>
          <td id="<?php echo $members['id'] ?>postmembers"><?php echo $members['post'] ?></td>
          <td id="<?php echo $members['id'] ?>addressmembers"><?php echo $members['address'] ?></td>
          <td id="<?php echo $members['id'] ?>phone_nomembers"><?php echo $members['phone_no'] ?></td>
          <td id="<?php echo $members['id'] ?>emailmembers"><?php echo $members['email'] ?></td>

        </tr>

   <?php } ?>
  </table>
</div>
</div>
</div>

</div>

<script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script>
<script type="text/javascript">
 $(".nav-tabs").tabdrop();




  function myFunction() {
    // Declare variables
   var  input, filter, div, tr, i ,j;
    input = document.getElementById('myInput');

    filter = input.value.toUpperCase();

  //
     div = document.getElementsByClassName("tab-pane");
  //
     // td = document.getElementsByTagName('td');
     tr = document.getElementsByClassName('tr_tbl');
      // console.log(td);
  //   console.log(h5);
  //   console.log(div);
  //   console.log(filter);
  //   console.log(input);
  //
  //   // Loop through all list items, and hide those who don't match the search query
 // var ab='Juddha Barun Yantra Karyalaya'
 // console.log(ab.toUpperCase().indexOf(filter));
console.log(tr);
 for(j = 0; j < tr.length; j++){
   //console.log(tr);
   var closeit = 0;
    for (i = 0; i < tr[j].children.length; i++) {
        var td = tr[j].children[i];
        //console.log(td);
        // a = h5[i].getElementsByTagName("a")[0];
         //console.log(td[i].innerHTML.toUpperCase().indexOf(filter));

        if(closeit == 0){
          $("#"+td.id).parent().css('display','none');
          //console.log("not found on"+td[i].id);

        }

        if ((td.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
        // console.log("found on"+td.id);
        // console.log(closeit);

            $("#"+td.id).parent().css('display','');
            closeit = 1;


        }

    }
    //console.log("row");
}

  }


</script>
