<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
  }

  h1 {
    text-align: center;
    color: #343a40;
  }

  table {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
  }

  td:first-child {
    font-weight: bold;
    width: 40%;
  }

  input[type="text"] {
    width: calc(100% - 24px);
    padding: 8px;
    margin: 4px 0;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin: 5px;
    color: #ffffff;
  }

  .btn-primary {
    background-color: #007bff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .btn-danger {
    background-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  input[type="submit"],
  input[type="reset"] {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  input[type="reset"] {
    background-color: #dc3545;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  input[type="reset"]:hover {
    background-color: #c82333;
  }
</style>


<form name="form1" id="formID" method="post" action="Vendors_Details_insert.php">
<h1>
      User Details Form</h1>
<table width="67%" height="471" border="1">
  <tr>
    <td width="241">User_name:</td>
    <td width="1440"><input name="User_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="User_name"></td>
  </tr>
  <tr>
    <td>User_address:</td>
    <td><input name="User_address" class="validate[required] form-control" type="text" id="User_address"></td>
  </tr>
  <tr>
    <td>Email_id:</td>
    <td><input name="email" class="validate[required,custom[email]] form-control" type="text" id="email"></td>
  </tr>
  <tr>
    <td>Contact_no: </td>
    <td><input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no"></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password" class="validate[required] form-control"type="text" id="password"></td>
  </tr>
</table>
      
 

      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
</p>
</form>
