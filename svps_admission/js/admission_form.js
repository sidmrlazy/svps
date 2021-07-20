   // function myFunction() {
   //           if (edu__validateFormValue()) {
   //               document.getElementById('myform').submit();
   //           }
   //       }
         $(document).ready(function() {
             if (!($("#is_sibling").is(':checked'))) {
                 hideElementsOnClass("sibling");

             }
             $("#is_sibling").change(function() {
                 if ($("#is_sibling").is(':checked')) {
                     showElementsOnClass("sibling");
                     $('#sibling_class').prop('required',true);
                     $('#sibling_name').prop('required',true);
                 } else {
                     hideElementsOnClass("sibling");
                     $('#sibling_class').val('');
                     $('#sibling_name').val('');
                    
                 }
             });
             $('#check').change(function() {
                    var firstname = $('#firstname').val();
                    var middle_name = $('#middle_name').val();
                    var lastname = $('#lastname').val();
                    var father_first_name = $('#father_first_name').val();
                 if (this.checked)
                 {
                    $('#declaration').show();
                    $('#student_name').val(firstname+' '+middle_name+' '+lastname);
                    $('#guardian_name').val(father_first_name);
                 }
                 else
                 {
                    $('#declaration').hide();
                    $('#guardian_name').val(father_first_name);
                    $('#student_name').val(firstname+' '+middle_name+' '+lastname);
                 }
             });
         });

function hideElementsOnClass(cls) {
             var elements = document.getElementsByClassName(cls);
             for (var i in elements) {
                 if (elements[i].style) {
                     elements[i].style.display = "none";
                 }
             }
         }
         
         function showElementsOnClass(cls) {
             var elements = document.getElementsByClassName(cls);
             for (var i in elements) {
                 if (elements[i].style) {
                     elements[i].style.display = "block";
                 }
             }
         }
         
         function selectvaluecheck(value) {
             if (value == undefined) {
                 value = "-1";
             }
             return value;
         }
         
         function valuecheck(value) {
             if (value == undefined) {
                 value = "";
             }
             return value;
         }
         
         
         function hideElementsOnClass(cls) {
             var elements = document.getElementsByClassName(cls);
             for (var i in elements) {
                 if (elements[i].style) {
                     elements[i].style.display = "none";
                 }
             }
         }
         
         function showElementsOnClass(cls) {
             var elements = document.getElementsByClassName(cls);
             for (var i in elements) {
                 if (elements[i].style) {
                     elements[i].style.display = "block";
                 }
             }
         }
         
         function onadmissionselectdata() {
             document.getElementById("enquiryid").value = '';
             onvalueselect();
         }
         
         function showGuardianDetails(obj) {
             if (obj.value == 'Yes')
                 document.getElementById('GuardianDetails').style.display = "block";
             else
                 document.getElementById('GuardianDetails').style.display = "none";
         }




         $(document).ready(function() {
            $('.sibiling_block').hide();
             $('#sibiling_check').change(function() {
                 if ($('#sibiling_check').val() == 'Yes')
                 {  
                     $('#sibiling_age').prop('required',true);
                     $('#sibiling_name').prop('required',true);
                     $('#sibiling_class').prop('required',true);
                     $('#sibiling_institute').prop('required',true);
                     $('.sibiling_block').show();
                 }

                 else
                 {
                     $('#sibiling_age').prop('required',false);
                     $('#sibiling_name').prop('required',false);
                     $('#sibiling_class').prop('required',false);
                     $('#sibiling_institute').prop('required',false);
                     $('.sibiling_block').hide();
                 }
             });
         });

          $(document).ready(function() {
             $('#__ufdkey__modernite_m').change(function() {
                 if ($('#__ufdkey__modernite_m').val() == 'Yes')
                 {
                    $('#__umdkey__modernite_batch').prop('required',true);
                     $('#__umdkey__modernite_branch').prop('required',true);
                     $('#Modernite_m').show();
                 }
                 else
                 {
                     $('#__umdkey__modernite_batch').prop('required',false);
                     $('#__umdkey__modernite_branch').prop('required',false);
                     $('#Modernite_m').hide();
                 }
             });
         });

           $(document).ready(function() {
             $('#father_qualificationid').change(function() {
                 if ($('#father_qualificationid').val() == 38)
                 {
                     $('#other_f').show();
                     $('#__ufdkey__ffather_occu_other').prop('required',true);
                 }
                 else 
                 {
                     $('#other_f').hide();
                     $('#__ufdkey__ffather_occu_other').prop('required',false);

                 }
             });
         });

            $(document).ready(function() {
             $('#mother_qualificationid').change(function() {
                 if ($('#mother_qualificationid').val() == 38)
                     {
                        $('#other_m').show();
                        $('#__ufdkey__mmother_occu_other').prop('required',true);
                     }
                 else
                 {
                    $('#__ufdkey__mmother_occu_other').prop('required',false);
                     $('#other_m').hide();
                 }
             });
         });

         $(document).ready(function(){
            $('#correspondence_check').on('click',function(){
                if($(this).prop("checked") == true){
                    var address = $('#address').val();
                    var pin = $('#pin').val();
                    var nationality = $('#nationality option:selected').html();
                    var state = $('#state option:selected').html();
                    var city = $('#city option:selected').html();
                    $('#country_correspondence').val(nationality);
                    $('#address_correspondence').val(address);
                    $('#state_correspondence').val(state);
                    $('#city_correspondence').val(city);
                    $('#pin_correspondence').val(pin);
                    
                }
                else
                {
                    $('#country_correspondence').val('')
                    $('#address_correspondence').val('');
                    $('#state_correspondence').val('');
                    $('#city_correspondence').val('');
                    $('#pin_correspondence').val('');

                }
                
            });
         
            $('#nationality').on('change',function(){
                var country_id = $('#nationality').val();
                $.ajax({
                    url:"ajaxcode_getcity.php",
                    data:{country_data:country_id},
                    type:"POST",
                    success:function(html){
                        $('#state').html(html);
                    }
                });

            });

            $('#state').on('change',function(){
                var state_id = $('#state').val();
                $.ajax({
                    url:"ajaxcode_getcity.php",
                    data:{data:state_id},
                    type:"POST",
                    success:function(html){
                        $('#city').html(html);
                    }
                });
            });

            // $('#savebtn').(function(){
                // var mother_photo = $('#mother_photo').val();
                // var father_photo = $('#mother_photo').val();
                // var candidate_photo = $('#mother_photo').val();
                // if(mother_photo==father_photo)
                // {
                //     $('#savebtn').prop('disabled',true);
                //     $('#errormessage').show();
                //     // $('#errormessage').text('Choose Mother'+"'"+'s Correct Photo');
                //     $('#errormessage').text(mother_photo);
                // }
                // else if(mother_photo==candidate_photo)
                // {
                //     $('#savebtn').prop('disabled',true);
                //     $('#errormessage').show();
                //     $('#errormessage').text('Choose Mother'+"'"+'s Correct Photo');
                // }
                // else if(candidate_photo==father_photo)
                // {
                //     $('#savebtn').prop('disabled',true);
                //     $('#errormessage').show();
                //     $('#errormessage').text('Choose Mother'+"'"+'s Correct Photo');
                // }
                // else
                // {
                //     $('#savebtn').prop('disabled',false);
                //     $('#errormessage').text('');
                // }
            // });

         });

        