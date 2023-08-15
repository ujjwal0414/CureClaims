var hnamechecker=document.querySelector('.hname');
var reverify=document.querySelector('.reverifybtn');
var processor=document.querySelector('.procee');
var status=document.querySelector('.current_status');
var hnoychecker=document.querySelector('.hnotshow');

var branch_check=document.querySelector('.bname');
var branch_notcheck=document.querySelector('.bname_notshow');

var add_check=document.querySelector('.add');
var add_notcheck=document.querySelector('.add_notshow');

var verify_btn=document.querySelector('.verify');
var get_doc_btn=document.querySelector('.get');
var show_patient_page=document.querySelector('.patient_inputs');
var hospital_info_height=document.querySelector('.hospital_inputs');
var height=window.getComputedStyle(hospital_info_height).marginTop;
console.log(height,typeof(height));
height=+(height.substr(0,(height.length-2)));
console.log(height,typeof((height)));
var count=0;
var submit=document.querySelector('.submit');
verify_btn.addEventListener('click',function(){
var hospital_name=document.querySelector('.hospital_name').value;
var address=document.querySelector('.address').value;
var branch=document.querySelector('.Branch_name').value;
   if(hospital_name!==''){
   	hnoychecker.style.display='none';
   	hnamechecker.style.display='block';
   	count++;
    
   }
   else{
   hnamechecker.style.display='none';
   	hnoychecker.style.display='block';

   }
   if(address!==''){
   	add_notcheck.style.display='none';
   	add_check.style.display='block';
   	count++;
    
   }
   else{
   add_check.style.display='none';
   	add_notcheck.style.display='block';

   }
   if(branch!==''){
   	branch_notcheck.style.display='none';
   	branch_check.style.display='block';
   	count++;
    
   }
   else{
   branch_check.style.display='none';
   	branch_notcheck.style.display='block';

   }
   if(count>=3){
      hospital_info_height.style.opacity='0.2';
   	show_patient_page.style.transition='0.6s';
   	setTimeout(function(){
         show_patient_page.style.top=0+"px";
      },900); 
      

   }


})
submit.addEventListener('click',function(){
   // patient_details_here
var patient_name=document.querySelector('.input_patient').value;
var patient_id=document.querySelector('.ids').value;
var illness_info=document.querySelector('.ill_info').value;
   if(patient_name!='' && patient_id!='' && illness_info!=''){
      processor.style.display='block';
            document.querySelector('.current_status').innerHTML='Processing Data';
      function show(){
         processor.style.display='none';

       get_doc_btn.style.display='block';
    }
     setTimeout(show,5000);
   }
   else{

      processor.style.display='block';
      document.querySelector('.current_status').innerHTML='Sorry Unable to process data';
       get_doc_btn.style.display='none';
   }
})

reverify.addEventListener('click',function() {
   hospital_info_height.style.opacity='1';
   show_patient_page.style.top=-180+'%';

})