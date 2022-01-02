<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTEC</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="semantic.min.css">
</head>
<body>

    <div class="ui header">
        <img class="logo" alt="logo" src="logo.png"></img>
        <h1>Admission Form</h1>
        </div>
        <div class="ui main">
            <form class="ui form" action="insert.php" method="POST" >
                <div class="field">
                    <label>Name</label>
                    <input type="text"  placeholder="Full Name" required
                    name="name"
                    ></input>
                    </div>
                    <div class="field">
                    <label>Father Name</label>
                    <input type="text"  placeholder="Father Name" required
                    name="fname"
                    ></input>
                    </div>
                    <div class="field">
                    <label>Mother Name</label>
                    <input type="text"  placeholder="Mother Name" required
                    name="mname"
                    ></input>
                    </div>
                    <div class="field">
                      <label>Father/Mother occupation</label>
                      <input type="text"  placeholder="occupation" required
                      name="occupation"
                      ></input>
                      </div>
                    <div class="field">
                        <label>DOB</label>
                        <input type="date"
                        name="dob" required
                        ></input>
                        </div>
                        <div class="field">
                        <label>AGE</label>
                        <input type="number"
                        placeholder="age"
                        name="age" required
                        ></input>
                        </div>
                        <div class="field">
                    <div class="field">
                    <label>Gender</label>
                    <input type="radio" value="Male" name="gender" /> Male
                    <input type="radio" value="Female" name="gender" /> Female
                    </div>
                    <div class="field">
                    <label>Religion</label>
                    <select id="religion" name="religion" required>
                      <option value="">SELECT</option>
                      <option value="hindu">Hindu</option>
                      <option value="christian">Christian</option>
                      <option value="muslim">Muslim</option>
                      <option value="others">others</option>
                    </select>
                    </div>
                    <div class="field">
                      <label>community</label>
                      <select id="community" name="community" required>
                        <option value="">SELECT</option>
                        <option value="OC">OC</option>
                        <option value="MBC">MBC</option>
                        <option value="BC">BC</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option></select>
                      </div>
                    <div class="field">
                    <label>Blood Group</label>
                    <input type="text"  placeholder="Blood Group" name="blood" style="text-transform:uppercase;"></input>
                    </div>
                    <div class="field">
                    <label>Address</label>
                    <textarea type="text"  placeholder="Address" name="address" required></textarea>
                    </div>
                    <div class="field">
                    <label>Phone No</label>
                    <input type="number"  placeholder="Phone Number" class="ui field"
                    name="phone" required
                    ></input>
                    </div>
                    <div class="field">
                    <label>Email</label>
                    <input type="email"  placeholder="yourid@mtec.ac.in"
                    name="email" required
                    ></input>
                    </div>
                    <div class="field">
                    <label>Select Department</label>
                    <select id="department" name="department" required>
                      <option value="">SELECT</option>
  <option value="CSE">CSE</option>
  <option value="MECH">MECH</option>
  <option value="EEE">EEE</option>
  <option value="EC">EC</option>
  <option value="CIVIL">CIVIL</option>
</select></div>
<h1>Education qualification</h1>
<table>
  <tr>
  <th>std</th>
    <th>Year of passing</th>
    <th>previous school or college</th>
    <th>Mark in percentage(%)</th>
  </tr>
  <tr>
    <td>10th Mark</td>
    <td><input type="number"  placeholder="year of passing" required
                    name="yopten" min="2000" max="2020"
                    ></input></td>
    <td><input type="text"  placeholder="school/college" required
                    name="school"
                    ></input></td>
                    <td><input type="number"  placeholder="Mark" name="tenmark" required></td> </tr>
  <tr>
    <td>12th Mark</td>
    <td><input type="number"  placeholder="year of passing" 
      name="yoptwel" min="2000" max="2020"
      ></input></td>
<td><input type="text"  placeholder="school/college" 
      name="twelschool"
      ></input></td>
      <td><input type="number"  placeholder="Mark" 
        name="twelmark" ></td>
  </tr>
  <tr>
    <td>Diplomo</td>
    <td><input type="number"  placeholder="year of passing" 
      name="yopdip" min="2000" max="2020"
      ></input></td>
<td><input type="text"  placeholder="school/college" 
      name="polytecnic"
      ></input></td>
      <td><input type="number"  placeholder="Mark" name="diploma" ></td>
  </tr>
</table>
<div class="field">
  <label>Residentalt</label>
  <select id="residental" name="residental" required>
<option value="Day Scholar">Day Scholar</option>
<option value="Hostel">Hostel</option>
</select></div>
<div class="field">
  <label>Admission Type</label>
  <select id="admission" name="atype" required>
<option value="management">Management</option>
<option value="government">Government</option>
<option value="NRI">NRI</option>
</select></div>
<div class="field">
  <label>Entry Level</label>
  <select id="level" name="elevel" required>
<option value="first year">First Year</option>
<option value="lateral">Lateral</option>
</select></div>
<div class="field">
  <label>Extracurricular Activities</label>
  <input type="text"  placeholder="Activities" required
  name="activity"
  ></input>
  </div>
<button class="ui button blue" type="submit">
submit</button>
            </form>
</body>
</html>