<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/subnet_css.css') }}" rel="stylesheet" type="text/css" >
    <title>Subnet Calculator</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Subnet Calculator</a>
        </div>
    </nav>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="back">
                <center><h1>Subnet Calculator</h1></center>
                <div class="col-lg-12 row g-3 oct">
                    <h5 for="octet1"> Enter your IP Address:</h5>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet1" placeholder="1-255">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet2" placeholder="1-255">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet3" placeholder="1-255">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet4" placeholder="1-255">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="no_of_subnet" placeholder="no of subnet">
                    </div>
                    <center>
                    <div class="select-subnet">
                        <select id="subnet_mask" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Subnet Mask</option>
                            <option value="24" class="op">24</option>
                            <option value="25" class="op">25</option>
                            <option value="26" class="op">26</option>
                            <option value="27" class="op">27</option>
                            <option value="28" class="op">28</option>
                            <option value="29" class="op">29</option>
                            <option value="30" class="op">30</option>
                            <option value="31" class="op">31</option>
                            <option value="32" class="op">32</option>
                        </select>
                    </div></center>
                </div>
                <center>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-warning" type="button" aria-current="page" data-bs-toggle="modal" data-bs-target="#viewTable">View Table</button>
                        <button class="btn btn-success" type="button" onclick="calculate();">Calculate</button>
                        <a href="" class="btn btn-danger">Clear</a>
                    </div>
                </center>
            </div>
        </div>
            
            <table>
                <tr>
                    <th>Network ID</th>
                    <th>Subnet Mask</th>
                    <th>Host ID Range</th>
                    <th>No. of Usable Host</th>
                    <th>Broadcast ID</th>
                </tr>
                <tr>
                    <td>
                        <span class="value" id="netID"></span>
                    </td>
                    <td>
                        <span class="value" id="subMask"></span>
                    </td>
                    <td>
                        <span class="value" id="hostID"></span>
                    </td>
                    <td>
                        <span class="value" id="usableHost"></span>
                    </td>
                    <td>
                        <span class="value" id="broadID"></span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="viewTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/img/table.jpg" alt="table">
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal fade" id="inputIPAddress" tabindex="-1" aria-labelledby="inputIPAddress" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Error! You Need to Input your IP Address</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="invalidInput" tabindex="-1" aria-labelledby="invalidInput" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Error! Invalid Input</h3>
                </div>
            </div>
        </div>
    </div>

    <center><br>
    <div>
            <p class="about">Copyright 2021<br>
            <a href="https://reymundvirtus.pythonanywhere.com/" target="_blank" class="about">About the Developer</a></p>
    </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

<script type="text/javascript">

// JS To Compute Subnet
function calculate(){
    let octet1 = document.getElementById('octet1').value;
    let octet2 = document.getElementById('octet2').value;
    let octet3 = document.getElementById('octet3').value;
    let octet4 = document.getElementById('octet4').value;
    let subnet_mask = document.getElementById('subnet_mask').value;
    let no_of_subnet = document.getElementById('no_of_subnet').value;

    // Validating input
    if ((octet1 >= 0 && octet1 <= 255) && (octet2 >= 0 && octet2 <= 255) && (octet3 >= 0 && octet3 <= 255) && (octet4 >= 0 && octet4 <= 255)) {

        let subnet = [1, 2, 4, 8, 16, 32, 64, 128, 256];
        let host = [256, 128, 64, 32, 16, 8, 4, 2, 1];
        let sub_mask = subnet_mask;

        if (no_of_subnet == 1) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[0]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[0] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 1 && no_of_subnet <= 2) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[1]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[1] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 2 && no_of_subnet <= 4) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[2]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[2] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 4 && no_of_subnet <= 8) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[3]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[3] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 8 && no_of_subnet <= 16) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[4]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[4] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 16 && no_of_subnet <= 32) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[5]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[5] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 32 && no_of_subnet <= 64) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[6]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[6] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 64 && no_of_subnet <= 128) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[7]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[7] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if (no_of_subnet > 128 && no_of_subnet <= 256) {
            for (let i = 0; i < no_of_subnet; i++) {
                //* Network ID
                sum_current_host = octet1 + "." + octet2 + "." + octet3 + "." + octet4 + "\n";
                netID = console.log(sum_current_host);
                new_range_host = octet1 + "." + octet2 + "." + octet3 + "."; //* this line is for Host ID Range
                range_start = parseInt(octet4) + 1;
                document.getElementById('netID').innerText += sum_current_host + "\n";
                octet4 = parseInt(octet4) + parseInt(host[8]);
                //* Subnet Mask
                document.getElementById('subMask').innerText += "/" + subnet_mask + "\n\n";
                //* No. of Usable Host
                document.getElementById('usableHost').innerText += host[8] - 2 + "\n\n";
                //* Broadcast ID
                octet4_broadID = octet4 - 1;
                new_current_host = octet1 + "." + octet2 + "." + octet3 + ".";
                document.getElementById('broadID').innerText += new_current_host + octet4_broadID + "\n\n";
                //* Host ID Range
                range_last = parseInt(octet4_broadID) - 1;
                document.getElementById('hostID').innerText += new_range_host + range_start + " - " + new_current_host + range_last + "\n\n";
            }
        }
        else if ((octet1 == "") && (octet2 == "") && (octet3 == "") && (octet4 == "")) {
            alert("Fill out the required field!")
        }
        else {
            alert("Invalid Input!!!");
        }
    }
}

</script>

</html>