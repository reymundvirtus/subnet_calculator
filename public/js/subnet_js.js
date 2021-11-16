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
        else {
            alert("Invalid Input!!!");
        }
    }
}