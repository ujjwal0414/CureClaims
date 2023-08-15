document.addEventListener('DOMContentLoaded', function () {
  const generatePdfButton = document.querySelector('.get_docs');
  
  generatePdfButton.addEventListener('click', function () {
     let hospital_name=document.querySelector('.hospital_name').value;
    let branch_name=document.querySelector('.Branch_name').value;
    let Address=document.querySelector('.address').value;
    let patient_id=document.querySelector('.ids').value;
    let ill_info=document.querySelector('.ill_info').value;
    let expense=document.querySelector('.expenses').value;
    const patient_name = document.querySelector('.input_patient').value;
    let date_admit=document.querySelector('.date_admit').value;
    let notes=document.querySelector('.note').value;
      if(hospital_name!='' && patient_id!='' && patient_name!='' && Address!=''){
         setTimeout(function(){
   
const d = new Date();
let day = d.getDate();
let month=d.getMonth();
let Year=d.getYear();
day=`${day}/${month}/${Year}`;
    const content = `  
        <h2>Generated PDF                    ${day}</h2><br><hr>
        <h4>Doctors Note</h4>
        ${notes}
        <hr>

        <h2>Patient Info</h2>
        <p>Patient Name : <td>${patient_name}</td></p><br><hr>
        <p>Patient ID : <td>${patient_id}</td></p><br><hr>
        <p>Patient Illnes and Diagosis : ${ill_info}</p><br><hr>
        <p>Date of Admisson : ${date_admit}</p>
        <br><br>
        <h2>Hospital Info</h2>
        <p>Hospital Name : ${hospital_name}</p><br>
        <p>Branch Name : ${branch_name}</p><br>
        <p>All Expenses are : ${expense}</p><br>
        <br>
        
        <p>Address : ${Address}</p><br><hr><br>
        <p>Signature of Patient:</p>`;

    const element = document.createElement('div');
    element.innerHTML = content;

    html2pdf()
      .from(element)
      .save(`${patient_name} ${day}.pdf`);
   },5000);
      }
      else{
  alert('Sorry Try Again You are missing some fields like addres patien name ,id or hospital name Refresh page and then fill it again');
      }
  });
});
