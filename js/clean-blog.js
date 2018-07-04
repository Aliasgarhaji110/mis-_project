// (function($) {
//   "use strict"; // Start of use strict

//   // Floating label headings for the contact form
//   $("body").on("input propertychange", ".floating-label-form-group", function(e) {
//     $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
//   }).on("focus", ".floating-label-form-group", function() {
//     $(this).addClass("floating-label-form-group-with-focus");
//   }).on("blur", ".floating-label-form-group", function() {
//     $(this).removeClass("floating-label-form-group-with-focus");
//   });

//   // Show the navbar when the page is scrolled up
//   var MQL = 992;

//   //primary navigation slide-in effect

// })(jQuery); // End of use strict
$(function(){
  $("#user_img").click(function(){
    // alert(1)
    window.location.href="details.php";
  })

  // $("#stu_sub").click(function(a){
  //   a.preventDefault();
  //   // alert(1)
  // })

  // $.validator.addMethod(
  //   "chkstuid",
  //   function(value,element){
  //     $.ajax({
  //       type:'post',
  //       url:'actions/register_action.php',
  //       data: "stu_id"+value,
  //       success:function(msg){
  //         if (msg=='incorrect id') {
  //           return false;
  //         }
  //         else{
  //           return true;
  //         }
  //       },
  //       error:function(err){
  //         alert(err);
  //       }

  //     });
  //     // return response;
  //   },
  //   "please enter correct id"  
  // );
  // $.validator.addMethod(
  //   "chkstuemail",
  //   function(value,element){
  //     $.ajax({
  //       type:'post',
  //       url:'actions/register_action.php',
  //       data: "stu_email"+value,
  //       success:function(msg){
  //         if (msg=='pls enter valid email') {
  //           return false;
  //         }
  //         else{
  //           return true;
  //         }
  //       },
  //       error:function(err){
  //         alert(err);
  //       }

  //     });
  //     // return response;
  //   },
  //   "please enter correct email"  
  // );

  // $("#stu_credentials").validate({
  //   rules:{
  //     stu_id:{
  //       required:true,
  //       chkstuid:true
  //     },
  //     stu_email:{
  //       required:true,
  //       // email:true,
  //       chkstuemail:true,
  //     }
  //   }
  // });

    // jQuery("input[name~='stu_email']").addClass("is-invalid");


  $("#submit_temp").click(function(){
    temp_date=$("stu_temp").serialize();
    // alert(temp_date);
    $.post("temp_action.php","temp_stu_date="+temp_date,function(msg){
      alert(msg)
    })

  })

  var flag=true;


  $("input[name~='stu_id']").focusout(function(){
    var pattern = /^[1-9][0-9]{6}$/;
    var fname = $("input[name~='stu_id']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_email']").focusout(function(){
    var pattern = /^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@somaiya.edu$/;
    var fname = $("input[name~='stu_email']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_password']").focusout(function(){
    var pattern = /^[a-zA-Z1-9][a-zA-Z0-9]{6,15}$/;
    var fname = $("input[name~='stu_password']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_cpassword']").focusout(function(){
    if (($("input[name~='stu_password']").val())!=($("input[name~='stu_cpassword']").val()))   {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_fname']").focusout(function(){
    var pattern = /^[a-zA-Z]{1,}$/;
    var fname = $("input[name~='stu_fname']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_mname']").focusout(function(){
    var pattern = /^[a-zA-Z]{1,}$/;
    var fname = $("input[name~='stu_mname']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_lname']").focusout(function(){
    var pattern = /^[a-zA-Z]{1,}$/;
    var fname = $("input[name~='stu_lname']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_division']").focusout(function(){
    var pattern = /^[A-J]{1,}$/;
    var fname = $("input[name~='stu_division']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("select[name~='stu_gender']").focusout(function(){
    var fname = $("select[name~='stu_gender']").val();
    if (fname == '0') {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("select[name~='stu_blood)']").focusout(function(){
    var fname = $("select[name~='stu_blood)']").val();
    if (fname == '0') {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("select[name~='stu_year']").focusout(function(){
    var fname = $("select[name~='stu_year']").val();
    if (fname == '0') {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_year_of_joining']").focusout(function(){
    var pattern = /^[12][90][0-9][0-9]$/;
    var fname = $("input[name~='stu_year_of_joining']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("select[name~='stu_branch']").focusout(function(){
    var fname = $("select[name~='stu_branch']").val();
    if (fname == '0') {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_add_pincode']").focusout(function(){
    var pattern = /^[1-9][0-9]{5}$/;
    var fname = $("input[name~='stu_add_pincode']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("select[name~='stu_add_country']").focusout(function(){
    var fname = $("select[name~='stu_add_country']").val();
    if (fname == '0') {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_father_name']").focusout(function(){
    var pattern = /^[a-zA-Z ]{1,}$/;
    var fname = $("input[name~='stu_father_name']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_father_number']").focusout(function(){
    var pattern = /^[1-9][0-9]{9}$/;
    var fname = $("input[name~='stu_father_number']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_father_email']").focusout(function(){
    var pattern = /^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/;
    var fname = $("input[name~='stu_father_email']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_mother_name']").focusout(function(){
    var pattern = /^[a-zA-Z ]{1,}$/;
    var fname = $("input[name~='stu_mother_name']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_mother_number']").focusout(function(){
    var pattern = /^[1-9][0-9]{9}$/;
    var fname = $("input[name~='stu_mother_number']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $("input[name~='stu_mother_email']").focusout(function(){
    var pattern = /^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/;
    var fname = $("input[name~='stu_mother_email']").val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');

    }
    // alert(1)
  });
  $(document).on("focusout",".check_name",function(a){
    var pattern = /^[a-zA-Z ]{1,}$/;
    var fname = $(this).val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');
    }
  })
  $(document).on("focusout",".check_email",function(a){
    var pattern = /^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/;
    var fname = $(this).val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');
    }
  })
  $(document).on("focusout",".check_number",function(a){
    var pattern = /^[1-9][0-9]{9}$/;
    var fname = $(this).val();
    if (!(pattern.test(fname) && fname !== '')) {
      flag=false;
      $(this).addClass('is-invalid');
    } else {
      flag=true;
      $(this).removeClass('is-invalid');
    }
  })


  $("#stu_credentials").submit(function(a){
    a.preventDefault();

    // alert(1)
    if(flag){
      rec=new FormData(this);
      $.ajax({
        type:"post",
        data:rec,
        url:"actions/register_action.php",
        contentType:false,
        cache:false,
        processData:false,
        success:function(abc){
          alert(abc);
          if(abc=='User Already Registered'){
            $("input[~='stu_id']").val("");
            $("input[~='stu_id']").addClass('is-invalid');
            $("#stu_feedback").html("User Already Exist");
          }
          else if(abc=='error in file upload'){
            $("input[~='stu_img']").addClass('is-invalid');
            $("#stu_feedback").html("Error in file Upload");
          }
          else if(abc =='data entered'){
            window.location.href='login.php';
          }
          else{
            alert(abc);
          }
        },
        error:function(err){
          console.log(err);
        }
      })
    }
  })

  $("#add_type_act").click(function(a){
    // alert(1);
    a.preventDefault();
    $.post("filters/add_activity_filter.php",function(response){
      // alert(response);
      $("#element_entry").html(response);
      // window.location.href="send_sms.php";
    })
  })
  $("#pd_button").click(function(a){    // alert(1);
    a.preventDefault();
    $.post("filters/personal_details_filter.php",function(response){
      // alert(response);
      $("#element_entry").html(response);
      // window.location.href="send_sms.php";
    })
  })
  $("#sa_button").click(function(a){
    // alert(1);
    a.preventDefault();
     // alert(response);
      $("#element_entry").html(" ");
      // window.location.href="send_sms.php";
  })
  
  $(document).on("submit","#add_type_act_form",function(a){
    // alert(1)
    a.preventDefault();
    if(flag){
      rec=$("#add_type_act_form").serialize();
    // alert(rec)
    $.ajax({
      type:"post",
      data:rec,
      url:"actions/add_type_activity_action.php",
      success:function(response){
        alert(response);
        window.location.reload();
      },
      error:function(err){
        console.log(err);
      }
    })
    }
  })
  $("#sa_act_edit").click(function(a){
    a.preventDefault();
    $.post("filters/sa_act_edit_filter.php",function(response){
      $("#element_entry").html(response);
    })
  })
  $(document).on("click",".act_list_item",function(a){
    a.preventDefault();
    // alert(1);
    var rec=$(this).attr('for');
    // alert(rec)
    switch(rec){
      case '2':$.post("filters/internship_form_filter.php",function(msg){
                  $("#element_entry").html(msg);
                });
              break;
    }

  })

  $(document).on("submit","#internship_form",function(a){
    // alert(1)
    a.preventDefault();
    if(flag){
      rec=new FormData(this);
      $.ajax({
        type:"post",
        data:rec,
        url:"actions/internship_action.php",
        contentType:false,
        cache:false,
        processData:false,
        success:function(abc){
          // alert(abc);
          
          if(abc =='data entered'){
            $.post("filters/internship_form_filter.php",function(msg){
              $("#element_entry").html(msg);
            });
          }
          else{
            alert(abc);
          }
        },
        error:function(err){
          console.log(err);
        }
      })
    }
  })


});