<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
	 <link rel="stylesheet" type="text/css" href="attis.css">

    <title>Associated Transport Training and Industrial Safety Services</title>
  </head>

  <body>
    <div id="heading">
      <div id="logo">
        <img src="attislogo.jpg" height="125" width="135" TITLE="ATTIS Logo">
      </div>
      <div id="logoright">
        <img src="necclogo.jpg" height="125" width="200" TITLE="NECC Logo">
        <img src="rasmlogo.jpg" height="125" width="150" TITLE="RASM Logo">
     </div>
      <h1>Associated Transport Training and Industrial Safety Services</h1>
    </div>

<div id="nav">
<?include ("menu.php");?>
</div>

    <div id="mainBody">
      <marquee behavior="alternate">Quality Services for Professionals by Professionals</marquee>
      <h1>Services Form</h1>
      <p> To fill this form in just select the service you would like from the drop down menu in each section and then fill in your details at the bottom.After that just press the Submit button and your request will be sent to us, we will get back to you as soon as possible.</p> 

      <form action="emailForm.php" method="post">
        <p><b>Materials Handling</b></p>
        <select name="materialsHandling">
          <option value ="select">Please Select</option>
          <option value ="forkTruckTraining">Fork Truck Operator Training, and Testing & Certification</option>
          <option value ="OverheadGantry">Overhead Gantry Crane Operator and Slinger Training & Certification</option>
          <option value ="craneLoadSlinger">Crane Load Slinger/ Banksman Training & Certificationl</option>
          <option value ="manualHandlingOperations">Manual Handling Operations and Safe Lifting Technique Training</option>
          <option value ="forkLiftTruck">Fork Lift Truck Safety Awareness for Managers and Supervisors</option>
          <option value ="inHouseTrainers">Method of Instruction Training for 'In- House' Trainers</option>
          <option value ="liftingEquipmentInspections">Appointed Person for Lifting Equipment Inspection & Operations Training</option>
          <option value ="vehicleMarshallingTraining">Vehicle Marshalling Training</option>
          <option value ="noSelect">None</option>
        </select>
              
        <p><b>Health & Safety Services and Training</b></p>
        <select name="healthAndSafetyServicesAndTraining">
          <option value ="select">Please Select</option>
          <option value ="safetyPolicyCompilation">Company Safety Policy Compilation</option>
          <option value ="safetyReviewsAndAudits">Company Safety Reviews and Audits</option>
          <option value ="healthAndSafetySetup">Company Health & Safety Systems setup</option>
          <option value ="riskAssessmentMethodStatement">Risk Assessment & Method Statement Service</option>
          <option value ="riskAssessmentTraining">Risk Assessment Training</option>
          <option value ="safetyAwarenessTraining">Safety Awareness Training</option>
          <option value ="safetyManagementForAppointedPersons">Safety Management for Appointed Persons</option>
          <option value ="accidentInvestigationTraining">Accident Investigation Training</option>
          <option value ="asbestosAwareness">Asbestos Awareness and/ or Management Training</option>
          <option value ="heightFall">Working at Height Fall Arrester Training</option>
          <option value ="firstAid">First Aid at Work Training</option>
          <option value ="noSelect">None</option>
        </select>
              
        <p><b>Fire Safety</b></p>
        <select name="fireSafety">
          <option value ="select">Please Select</option>
          <option value ="fireSafetyTraining">Fire Safety Training</option>
          <option value ="fireWarden">Fire Warden/ Marshal Training</option>
          <option value ="fireAssessment">Company Fire Assessment Service</option>
          <option value ="fireRiskAssessment">Fire Risk Assessment Training</option>
          <option value ="noSelect">None</option>
        </select>
              
        <p><b>Quality Management Systems</b></p>
        <select name="qualityManagementSystems">
          <option value ="select">Please Select</option>
          <option value ="managementSystem">Guidance to/or Setting up an Accredited Quality Management System</option>
          <option value ="consultancyService">Quality Consultancy Service</option>
          <option value ="auditingService">Internal Auditing Service</option>
          <option value ="auditorTraining">Internal Auditor Training</option>
          <option value ="noSelect">None</option>
        </select>
        
        <p><b>Your details:</b></p>
        <p>
          Title:
          <select name="title">
          <option value ="select">Please Select</option>
          <option value ="mr">Mr</option>
          <option value ="mrs">Mrs</option>
          <option value ="miss">Miss</option>
          <option value ="dr">Dr</option>
          <option value ="other">Other</option>
        </select>
          Other:
         <input type="text" name="txtother">
        </p>
        <p>
          First Name:
          <input type="text" name="firstName">
        </p>
        <p>
          Surname:
          <input type="text" name="surname">
        </p>
        <p>
          Address Line 1:
          <input type="text" name="address1">
        </p>
        <p>
          Address Line 2:
          <input type="text" name="address2">
        </p>
        <p>
          Address Line 3:
          <input type="text" name="address3">
        </p>
        <p>
          Town:
          <input type="text" name="town">
        </p>
        <p>
          Post Code:
          <input type="text" name="postCode">
        </p>                                 
        <p>
          Email Address:
          <input type="text" name="emailAddress">
        </p>
        <p>
          Contact Number:
          <input type="text" name="contactNumber">
        </p>
        <p><input type="submit" value="Submit"></p>
      </form>
    </div>

    <div id="footer">
      <address>Cromer House, Morpeth Road, Guide Post, Northumberland NE62 5NP</address>
      <address>Telephone: 01670 829961</address>
      <address>Fax: 01670 822738</address>
      <address>E-mail: Richard@attis.co.uk</address>
    </div>
  </body>
</html>