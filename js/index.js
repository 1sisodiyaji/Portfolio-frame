function AddProjectModal() {
    const icon = document.getElementById('Project_icons').value;
    const title = document.getElementById('title').value;
    const proj_start = document.getElementById('proj_start').value;
    // Assuming you have a datepicker with id 'proj_start'
    $(function() {
        $('#proj_start').datepicker({
            onSelect: function(dateText, inst) {
                // The selected date is available in the 'dateText' variable
                console.log('Selected Date:', dateText);
            }
        });
    });

    const proj_end = document.getElementById('proj_end').value;
    const error_message = document.getElementById('error_message');
    console.log("project Start date ", proj_start);
     console.log("project end date ", proj_end);

    if (icon.trim() === "") {
        error_message.textContent = "Please Select Project icons";
    } else if (title.trim() === "") {
        error_message.textContent = "Please Enter Project title";
    } else {
        $.ajax({
            url: '../ajax/Addproject.php',
            method: 'POST',
            data: {
                title: title,
                icon: icon,
                proj_start: proj_start,
                proj_end: proj_end
            },
            dataType: 'json', // Expect JSON response
            success: function (response) {
                console.log("Entered");
                if (response.status === "success") {
                    console.log("Response: " + response.message);
                } else {
                    console.error("Error: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                console.log("Error occurred during AJAX");
                console.error("Error:", error);
            }
        });
    }
}



function DeleteModal() {
// Drop The row Of project_ID

}

function EditProjectModal() {
    const messageIcon2 = document.getElementById('messageIcon2');
    const titles = document.getElementById('titles');
    const proj_start = document.getElementById('proj_start');
    const proj_end = document.getElementById('proj_end');


    var selectedIcon = document.querySelector('.selected');
    if (!selectedIcon) {
        messageIcon2.textContent="Please Select an Icon";
    } else if (titles.value.trim() === ""){
        messageIcon2.textContent = "Please Enter Your Project Title";
    }
    else if (proj_start.values.trim()===""){
        messageIcon2.textContent = "Please Enter Your Project Starting Date";
    }
    else if (proj_end.values.trim()===""){
        messageIcon2.textContent = "Please Enter Your Project Ending Date";
    }
    else {

        $.ajax({
            url: '../ajax/EditProject.php',
            method: 'POST',
            data: {

                icon: selectedIcon,
                title: titles,
                duration1: proj_start,
                duration2:proj_end
            },

            success: function (response) {
                console.log(response);
                console.log("Successfully Send");
                if(response.type === "success"){
                    messageIcon2.textContent=response.message;
                }else{
                    messageIcon2.textContent=response.message;
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }
}


function radioCheck(button) {
    // Get all buttons with the same name attribute
    var buttons = document.getElementsByName(button.name);

    // Uncheck all buttons
    buttons.forEach(function (btn) {
        btn.classList.remove("selected");
    });

    // Check the clicked button
    button.classList.add("selected");

    // Remove the previous icon value paragraph if exists
    var previousIconValue = document.getElementById("iconValue");
    if (previousIconValue) {
        previousIconValue.remove();
    }

    // Create a new paragraph to display the selected icon value
    var iconValueParagraph = document.createElement("p");
    iconValueParagraph.textContent = "Selected Icon: " + button.value;
    iconValueParagraph.id = "iconValue";
    document.body.appendChild(iconValueParagraph);
    document.getElementById('Project_icons').value = button.value;
}


function UpdateSkill() {
    const skillField2 = document.getElementById('skillName2').value;
    const type = document.getElementById('Update_skill_type2').value;
    const range = document.getElementById('customRange2').value;
    const skillSection2 = document.getElementById('skillSection2');

    if (skillField2.trim() === "") {
        skillSection2.textContent = "Please Enter Your Skills";
    } else if(type === ""){
        skillSection2.textContent = "Please Enter Type Of Skill";
    }
    else if(range  === ""){
        skillSection2.textContent = "Please Enter The Range....";
    }
    else{
        $.ajax({
            url: '../ajax/EditSkill.php',
            method: 'POST',
            data: {
                skillName: skillField2,
                type: type,
                range:range
            },
            success: function () {

                console.log("Data entered successfully");
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }
}


function DeleteSkill() {
    const skillField2 = document.getElementById('skillName2');
    const type = document.getElementById('Update_skill_type');
    const range = document.getElementById('customRange1');

    $.ajax({
        url: '../ajax/DeleteSkill.php',
        method: 'POST', // 'method' should be lowercase
        data: {  // 'data' should be lowercase
            skillName: skillField2,
            type: type,
            range:range
        },
        success: function () {  // 'success' should be lowercase
            console.log("Data Deleted successfully");
        },
        error: function (xhr, status, error) {  // Add an error callback to handle failures
            console.error("Error:", error);
        }
    });
}

function editCertificate() {
    const messageIcon3 = document.getElementById('messageIcon3');

    const inputCertificate = document.getElementById('certi_name');
    const certiNames = document.getElementById('messageCertificate');

    const inputInstitution = document.getElementById('certi_inst')
    const instiNames = document.getElementById('messageInstitution');

    const messageDate2 = document.getElementById('MessageDate2');

    const InputFile = document.getElementById('certi_image');
    const fileMessage = document.getElementById('MessageFile');


    var selectedIcon = document.querySelector('.selected');
    if (!selectedIcon) {
        messageIcon3.style.display = "block";
    } else {
        messageIcon3.style.display = "none";
    }

    if (inputCertificate.value.trim() === "") {
        certiNames.style.display = "block";
    } else {
        certiNames.style.display = "none";
    }

    if (inputInstitution.value.trim() === "") {
        instiNames.style.display = "block";
    } else {
        instiNames.style.display = "none";
    }
    if (InputFile.value.trim() === "") {
        fileMessage.style.display = "block";
    } else {
        fileMessage.style.display = "none";
    }

}

function addCertificate() {
    const messageIcon4 = document.getElementById('messageIcon4');

    const inputCertificate2 = document.getElementById('certi_name2');
    const certiNames2 = document.getElementById('messageCertificate2');

    const inputInstitution2 = document.getElementById('certi_inst2')
    const instiNames2 = document.getElementById('messageInstitution2');

    const InputFile2 = document.getElementById('certi_image2');
    const fileMessage2 = document.getElementById('MessageFile2');


    var selectedIcon = document.querySelector('.selected');
    if (!selectedIcon) {
        messageIcon4.style.display = "block";
    } else {
        messageIcon4.style.display = "none";
    }

    if (inputCertificate2.value.trim() === "") {
        certiNames2.style.display = "block";
    } else {
        certiNames2.style.display = "none";
    }

    if (inputInstitution2.value.trim() === "") {
        instiNames2.style.display = "block";
    } else {
        instiNames2.style.display = "none";
    }
    if (InputFile2.value.trim() === "") {
        fileMessage2.style.display = "block";
    } else {
        fileMessage2.style.display = "none";
    }

}

function addEducation() {
    const messageIcon5 = document.getElementById('messageIcon5');

    const inputInstitute = document.getElementById('Edu_inst');
    const messageInstitution = document.getElementById('messageInstitution4');

    const inputDegree = document.getElementById('Edu_deg')
    const messageDegree = document.getElementById('messageDegree');

    const InputFieldOfStudy = document.getElementById('Edu_FOS');
    const MessageStudyField = document.getElementById('MessageStudyField');

    const InputCGPA = document.getElementById('Edu_CGPA');
    const MessagePercentage = document.getElementById('MessagePercentage');

    var selectedIcon = document.querySelector('.selected');
    if (!selectedIcon) {
        messageIcon5.style.display = "block";
    } else {
        messageIcon5.style.display = "none";
    }

    if (inputInstitute.value.trim() === "") {
        messageInstitution.style.display = "block";
    } else {
        messageInstitution.style.display = "none";
    }

    if (inputDegree.value.trim() === "") {
        messageDegree.style.display = "block";
    } else {
        messageDegree.style.display = "none";
    }

    if (InputFieldOfStudy.value.trim() === "") {
        MessageStudyField.style.display = "block";
    } else {
        MessageStudyField.style.display = "none";
    }

    if (InputCGPA.value.trim() === "") {
        MessagePercentage.style.display = "block";
    } else {
        MessagePercentage.style.display = "none";
    }

}

function editEducation() {
    const messageIcon6 = document.getElementById('messageIcon6');

    const inputInstitute = document.getElementById('Edu_inst2');
    const messageInstitution = document.getElementById('messageInstitution5');

    const inputDegree = document.getElementById('Edu_deg2')
    const messageDegree = document.getElementById('messageDegree2');

    const InputFieldOfStudy = document.getElementById('Edu_FOS2');
    const MessageStudyField = document.getElementById('MessageStudyField2');

    const InputCGPA = document.getElementById('Edu_CGPA2');
    const MessagePercentage = document.getElementById('MessagePercentage2');

    var selectedIcon = document.querySelector('.selected');
    if (!selectedIcon) {
        messageIcon6.style.display = "block";
    } else {
        messageIcon6.style.display = "none";
    }

    if (inputInstitute.value.trim() === "") {
        messageInstitution.style.display = "block";
    } else {
        messageInstitution.style.display = "none";
    }

    if (inputDegree.value.trim() === "") {
        messageDegree.style.display = "block";
    } else {
        messageDegree.style.display = "none";
    }

    if (InputFieldOfStudy.value.trim() === "") {
        MessageStudyField.style.display = "block";
    } else {
        MessageStudyField.style.display = "none";
    }

    if (InputCGPA.value.trim() === "") {
        MessagePercentage.style.display = "block";
    } else {
        MessagePercentage.style.display = "none";
    }

}


function AddLinks() {
    const alert1 = document.querySelector(".alert");
    
    const url1 = document.getElementById('link1').value;
    const url2 = document.getElementById('link2').value;
    const url3 = document.getElementById('link3').value;
    const url4 = document.getElementById('link4').value;

    if (url1) {
        try {
            const urlObject1 = new URL(url1);

            const hostnameParts1 = urlObject1.hostname.split('.');
            const subdomain1 = urlObject1.hostname.replace(/^www\./, '').replace(/^in\./, '').replace(/\.com$/, '');

             $.ajax({
                url: '../ajax/link.php',
                method: 'POST',
                data: {
                    url: url1,
                    hostname: subdomain1,
                },
        
                success: function (response) {
                    console.log(response);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                }
            });


        } catch (error) {
            console.error(error);
        }
    }
    if (url2) {
        try {
            const urlObject2 = new URL(url2);

            const hostnameParts2 = urlObject2.hostname.split('.');
            const subdomain2 = urlObject2.hostname.replace(/^www\./, '').replace(/^in\./, '').replace(/\.com$/, '');

            $.ajax({
                url: '../ajax/link.php',
                method: 'POST',
                data: {
                    url: url2,
                    hostname: subdomain2,
                },

                success: function (response) {
                    console.log(response);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                }
            });


        } catch (error) {
            console.error(error);
        }
    }
    if (url3) {
        try {
            const urlObject3 = new URL(url3);

            const hostnameParts3 = urlObject3.hostname.split('.');
            const subdomain3 = urlObject3.hostname.replace(/^www\./, '').replace(/^in\./, '').replace(/\.com$/, '');

            $.ajax({
                url: '../ajax/link.php',
                method: 'POST',
                data: {
                    url: url3,
                    hostname: subdomain3,
                },

                success: function (response) {
                    console.log(response);

                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                }
            });


        } catch (error) {
            console.error(error);
        }
    }
    if (url4) {
        try {
            const urlObject4 = new URL(url4);

            const hostnameParts4 = urlObject4.hostname.split('.');
            const subdomain4 = urlObject4.hostname.replace(/^www\./, '').replace(/^in\./, '').replace(/\.com$/, '');

            $.ajax({
                url: '../ajax/link.php',
                method: 'POST',
                data: {
                    url: url4,
                    hostname: subdomain4,
                },

                success: function (response) {
                    console.log(response);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                }
            });


        } catch (error) {
            console.error(error);
        }
    }
}


